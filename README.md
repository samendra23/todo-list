# Laravel ToDo App with Authentication

This is a simple ToDo application built using Laravel Blade templating engine, Laravel UI for authentication, and Bootstrap for styling. Users can add, edit, and delete tasks. The application also supports user authentication, allowing each user to manage their own tasks.

## Features

- **User Authentication**: Implemented with Laravel UI (Bootstrap-based).
- **Task Management**: Users can create, update, and delete tasks.
- **Task Status**: Tasks can be marked as completed or uncompleted.
- **Responsive Design**: Built with Bootstrap for responsive design.

## Requirements

- PHP >= 7.4
- Composer
- Node.js & NPM
- MySQL or SQLite (for database) [can be done using XAMPP or what you prefer]

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/todo-laravel.git
2. Install PHP dependencies using Composer:
   ```bash
   composer install
3. Install JavaScript dependencies using NPM:
   ```bash
   npm install
4. Compile frontend assets (CSS and JavaScript):
   ```bash
   npm run dev
5. Set up the .env file by copying .env.example:
   ```bash
   cp .env.example .env
6. Configure your database settings in the .env file:
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password

7. Run the migrations to create the necessary database tables:
   ```bash
   php artisan migrate
8. Generate the application key:
   ```bash
   php artisan key:generate
9. Start the server:
    ```bash
    php artisan serve
10. Access the application in your web browser at:
    ```bash
    http://localhost:8000
10. xyz
    ```bash
    http://localhost:8000
11. xyz
