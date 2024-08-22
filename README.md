# Articles REST API Application

A REST API Articles solution built with Laravel, featuring listing, creating, adding, editting and deleting articles, and also register, login and logout a user using "Sanctum" for API Tokens.


## Features

- Get All Articles
- get an Article
- Create An Article
- Update An Article
- Delete An Article
- Login A User
- Register A User
- Get The Logged In User
- Logout The User


## Prerequisites

- PHP 7.4 or higher
- Composer
- MySQL database


## Installation
Follow these steps to install and set up the project locally.

```bash
# Clone the repository
git clone https://github.com/iman-ali-ali/Articles-REST-API-.git

# Navigate to the project directory
cd articles
     
# Install dependencies
composer install

# Copy the example env file and configure environment variables
cp .env.example .env

# Generate application key
php artisan key:generate

# Make sure to update the database configuration in your .env file:
    * DB_DATABASE=your_database_name
    * DB_USERNAME=your_database_username
    * DB_PASSWORD=your_database_password

# Run migrations and seeders
php artisan migrate
php artisan db:seed

  
## Initial Data

The seeder creates:
1. Ten random articles
2. One user: 
    - Name: John Doe
    - Email: john@example.com
    - Password: password


# Run the project
php artisan serve

## API Routes

For detailed information about the API routes, refer to the [API Routes Documentation](routes.md).


