<?php
// Define grid boundaries
define('GRID_SIZE', 10);

// Initialize starting position of the robot.
$position = ['x' => 0, 'y' => 0];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $commands = strtoupper($_POST['commands']);
    $position = ['x' => $_POST['x-pos'], 'y' => $_POST['y-pos']];
    foreach (str_split($commands) as $command) {
        switch ($command) {
            case 'N':
                if ($position['y'] < GRID_SIZE - 1) {
                    $position['y']++;
                }
                break;
            case 'S':
                if ($position['y'] > 0) {
                    $position['y']--;
                }
                break;
            case 'E':
                if ($position['x'] < GRID_SIZE - 1) {
                    $position['x']++;
                }
                break;
            case 'W':
                if ($position['x'] > 0) {
                    $position['x']--;
                }
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Warehouse Robot Controller</title>
    <style>
        .main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .section {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .axe-title {
            padding: 10px;
        }

        .ware-house {
            width: 200px;
            height: 200px;
            border: 2px solid #000;
            position: relative;
        }

        .robot {
            width: 10px;
            height: 10px;
            border-radius: 50px;
            background-color: red;
            position: absolute;
            transform: translate(-50%, 50%);
        }
    </style>
</head>
<body>
    <h1>Warehouse Robot Controller</h1>

    <form method="post">
        <input type="hidden" value="<?= intval($position['x']) ?>" name="x-pos">
        <input type="hidden" value="<?= intval($position['y']) ?>" name="y-pos">
        <label for="commands">Enter Commands:</label>
        <input type="text" id="commands" name="commands" placeholder="e.g., N E S W">
        <input type="submit" value="Move Robot">
    </form>

    <!-- Main section -->
    <h2>Robot Position</h2>

    <div class="main">
        <div class="axe-title">N</div>
        <div class="section">
            <div class="axe-title">W</div>
            <div class="ware-house">
                <div class="robot" style="bottom: <?= htmlspecialchars(intval($position['y']) * 20) ?>px; left: <?= htmlspecialchars(intval($position['x']) * 20) ?>px;"></div>
            </div>
            <div class="axe-title">E</div>
        </div>
        <div class="axe-title">S</div>
    </div>
    <p>X: <?= htmlspecialchars($position['x']) ?>, Y: <?= htmlspecialchars($position['y']) ?></p>
    <!-- End main section -->

</body>
</html>