# IOT Integrated Healthcare Application With Security Challenges Solution Tadawy [WEBSITE - API]

## Graduation Project 

In today's rapidly evolving world, embracing digital transformation has become crucial, Promising improvements across various aspects of our lives. In particular, the healthcare industry is at the forefront of this transformation, seeking to revolutionize the delivery of health services, and thus prioritize patient comfort and time efficiency. Healthcare providers are increasingly turning to digital technologies as a way to simplify care delivery. Not all medical consultations require a physical visit to the doctor virtual consultations have emerged as an alternative that allows patients to access medical expertise from the comfort of their homes while also maintaining valuable time for both patients and medical professionals.

![Logo](https://github.com/sowidan1/Tadawy-Health-Application/blob/master/public/images/logo.png)

## Installation

#### First, install [Composer](https://getcomposer.org/) and server like [Laragon](https://laragon.org/index.html) or [XAMPP](https://www.apachefriends.org/)

- Clone the [Tadawy](https://github.com/sowidan1/Tadawy-Health-Application): First, clone the Laravel project repository from Git. You can do this using the git clone command followed by the repository URL.
```bash
git clone https://github.com/sowidan1/Tadawy-Health-Application
```

- Install Composer Dependencies: Laravel projects use Composer for dependency management. Navigate into the project directory and run:
```bash
composer install
```

- Copy Environment File: Laravel requires an environment file (.env) for configuration. If there isn't one already, you'll need to copy the .env.example file to create your own .env file:
```bash
cp .env.example .env
```

#### Edit db setting like this:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tadawy // create database in phpmyadmin and put name here
DB_USERNAME=root
DB_PASSWORD=
```

- Generate Application Key: Laravel uses an application key for encryption and other security features. Generate a key for your application using the following command:
```bash
php artisan key:generate
```

- Database Migration and Seeding: If the project includes database migrations and seeders, you can run them to set up the database schema and initial data. Use the following commands:
```bash
php artisan migrate
php artisan db:seed
```
This assumes that the database connection is correctly configured in your .env file.

- Serve the Application: You can use Laravel's built-in server to serve your application locally during development. Run:
```bash
php artisan serve
```
