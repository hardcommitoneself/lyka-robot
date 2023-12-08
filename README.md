# Warehouse Robot Controller

This is a simple PHP application that allows you to send movement commands to a virtual robot positioned in a warehouse. The robot operates on a 10x10 grid and responds to the commands N, S, E, and W for moving through the grid.

## Running the Application

To run this application, you'll need:
- A web server with PHP installed (e.g., Apache, Nginx, or using PHP's built-in server)

### Steps:

1. If using PHP's built-in server, navigate to the directory containing your `index.php` file in the terminal and run:
Then visit `http://localhost` in your web browser.

2. If using another web server like Apache or Nginx, configure it to serve the directory where the `index.php` file is located.

3. Open your web browser and navigate to the page served by your server (`http://localhost` if using PHP's built-in server).

4. Enter your command sequence in the input box. Use single spaces to separate different commands.

5. Click the "Move Robot" button to submit the commands and see the result.

The application will display the final coordinates of the robot after executing the commands while preventing it from moving outside the defined 10x10 grid.