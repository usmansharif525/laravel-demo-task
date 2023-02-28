# Project Name

This is a Laravel project that uses [Sail](https://laravel.com/docs/10.x/sail) for containerisation.
And for API authentication I have used [Laravel Sanctum](https://laravel.com/docs/10.x/sanctum)

## Prerequisites

Before getting started, make sure you have the following installed on your machine:

- Docker
- Docker Compose

## Setup

1. Clone this repository to your local machine.

2. In the project directory, run the following command to start the Docker containers:
   
    *`./vendor/bin/sail up -d`*
3. Once the containers are up and running, you can access the project in your web browser at `http://localhost`.

4. To stop the containers, run the following command: 
     `./vendor/bin/sail down`


## Environment Variables

The following environment variables are used in this project:
- `NEW_API_KEY`: the api key from [NewsApi](https://newsapi.org/)
- `DB_HOST`: the hostname of the MySQL database container (default is `mysql`)
- `DB_PORT`: the port number of the MySQL database container (default is `3306`)
- `DB_DATABASE`: the name of the MySQL database used by the project (default is `laravel`)
- `DB_USERNAME`: the username used to connect to the MySQL database (default is `sail`)
- `DB_PASSWORD`: the password used to connect to the MySQL database (default is `password`)

These environment variables can be modified in the `.env` file in the project root directory.


