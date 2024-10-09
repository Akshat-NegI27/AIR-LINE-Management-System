# Airways Booking Management System

This project is a web-based airline booking management system designed to streamline the process of booking and managing airline tickets. The system utilizes **MySQL** as the database backend to store flight, customer, and booking information.

## Features

- **User Authentication**: Login and registration functionality for users and admin.
- **Flight Management**: Admins can add, update, or delete flight information.
- **Booking Management**: Users can search for flights, book tickets, and manage bookings.
- **Flight Search**: Users can search for flights based on destination, date, and class.
- **Booking History**: Users can view their previous bookings.
- **Admin Panel**: Admin can manage flight schedules, bookings, and view user activities.

## Technologies Used

- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL

## Database Structure

- **Tables**:
  - Users: Stores user credentials and information.
  - Flights: Stores details of flights (flight number, destination, date, price, etc.).
  - Bookings: Stores user bookings and their status.
  - Payments: Stores payment details and confirmations.

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/your-username/airways-booking-management-system.git
    ```
2. Navigate to the project directory:
    ```bash
    cd airways-booking-management-system
    ```
3. Set up the MySQL database:
   - Create a new MySQL database.
   - Import the provided SQL script (`database.sql`) to set up the necessary tables.
   
4. Configure the database connection:
   - Update the `config.php` file (or relevant backend file) with your database credentials:
     ```php
     define('DB_SERVER', 'localhost');
     define('DB_USERNAME', 'your_username');
     define('DB_PASSWORD', 'your_password');
     define('DB_NAME', 'airline_management');
     ```

5. Launch the project:
   - Start your local server (e.g., XAMPP, WAMP).
   - Open the project in a browser by navigating to `localhost/airline-management-system`.

## Usage

- **Admin**:
  - Log in to the admin panel to manage flights and view bookings.
  - Add, edit, or delete flights in the system.
  
- **Users**:
  - Register or log in to book flights.
  - Search for flights and book tickets.
  - View booking history and cancel bookings if needed.

## Screenshots



## Future Enhancements

- Add support for different payment gateways.
- Implement seat selection during the booking process.
- Add multi-language support.
