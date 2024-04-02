# Variable initialization
# Display current mode and value function
# Joystick event handler
# Handles joystick events to control the behavior of a device. Depending on the direction
# and mode (input_mode or prediction_mode), it adjusts settings such as day and month
# for input_mode or prediction type for prediction_mode. If in input_mode and 'middle' 
# direction is pressed, it saves the input and triggers a prediction request. It uses 
# global variables: day, month, mode, input_mode, and prediction_mode to track and 
# modify settings.
# Function to send a prediction request to the server
# Constructs a JSON payload containing station_number and day_of_year based on the
# current day and month. Sends a POST request to a specified server endpoint using
# the requests library. Parses the response for predicted weather data including
# maximum and minimum temperatures and humidity levels. Compares these predictions
# with current sensor readings obtained from the Sense HAT. Displays the predictions
# and compares results on the Sense HAT LED matrix. Shows location information 
# based on site_number and handles errors by displaying appropriate error messages
# on the Sense HAT LED matrix.
# run the enent handler function 
# now moving towards file name predict.php
#  