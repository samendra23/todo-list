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

## Code Overview

### Routes

- Defined in the `web.php` file. This includes routes for task management and user authentication.
   ```php
   Route::resource('todo', 'App\Http\Controllers\TodosController');

### Controllers

- **TodosController**: Handles CRUD operations (create, read, update, delete) for tasks.
- **HomeController**: Manages the main dashboard and user redirection after login.

### Models

- **Todo**: Represents tasks in the database. Each task has fields like title, description, status, and user_id to associate tasks with users.

### Views

- **home.blade.php**: Displays the task list with options to add, edit, or delete tasks.
- **add_task.blade.php**: Form for creating a new task.
- **edit_task.blade.php**: Form for editing an existing task.

### Database

- The migration file for the todos table includes fields such as title, description, status, and user_id to associate tasks with users.

## Deployment

To deploy the Laravel ToDo App, configure your production environment to handle Laravel applications, including database configuration and environment settings. You can use services like Laravel Forge, Heroku, or your own server setup.

## Feedback

We value your feedback! If you have any suggestions, feature requests, or encounter any issues while using the Laravel ToDo App, please don't hesitate to reach out. You can contact us via LinkedIn or open an issue on our GitHub repository.

Thank you for using the Laravel ToDo App! We hope it helps you stay organized and manage your tasks efficiently.
