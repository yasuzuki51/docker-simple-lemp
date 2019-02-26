# docker_simple_lemp

This is a very simple LEMP and Laravel environment on docker.

## Usage
Clone all source codes from this repository.  
`git clone git@github.com:yasuzuki51/docker-simple-lemp.git`

Rename .env-example to .env and write your environment variable such as database name.  
Run docker-compose.  
`docker-compose up -d`

Move to the workspace container and run some commands to make laravel work.  
`cd /var/www/laravel`
`mv .env.example .env`

Modify Database section in .env file in order to connect mysql container.  
Then, generate the application key.  

`php artisan key:generate`
`composer install`
`php artisan migrate:fresh --seed`

Now, You can access to the following URL.  
http://localhost
