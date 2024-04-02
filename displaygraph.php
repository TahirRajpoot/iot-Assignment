/**
 * Retrieve the station number and day of the year from the last stored entry in an XML file.
 * Loads the specified XML file and retrieves the station number and day of the year
 * from the last recorded entry. If the XML file does not exist or contains no entries,
 * throws an exception indicating no data is available.
 * 
 * @throws Exception if the XML file does not exist or contains no entries.
 * @return array Associative array containing 'station_number' and 'day_of_year' of the last stored entry.
 */
/**
 * Retrieve averaged weather data (temperature and humidity) for a specific day of the year
 * and station number from a CSV file.
 * Opens and reads a CSV file containing weather data, filtering and averaging temperature
 * and humidity values for the specified station and day of the year. The function calculates
 * averages for each half-hour interval of the day (48 intervals in total) and returns an array
 * containing these averages.
 * 
 * @param int $dayOfYear The day of the year (1-366) for which weather data is requested.
 * @param int $stationNum The station number for which weather data is requested.
 * @return array Associative array with keys 'temperature' and 'humidity', each containing
 *              an array of 48 average values corresponding to half-hour intervals of the day.
 */
/**
 * Perform weather prediction based on the last stored station data.
 * Retrieves the last stored station number and day of the year from an XML file,
 * then fetches weather data for that specific day and station number from a CSV file.
 * It also determines the station name based on the station number retrieved.
 * Machine learning models for maximum and minimum temperature, as well as humidity,
 * are loaded and used to predict weather conditions for the specified features.
 * 
 * @throws Exception if there is an error retrieving data or predicting weather.
 */
 */write code in html to display graph using canva.js library 
 