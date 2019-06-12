# Laravel first api
> My first laravel REST API :)

### Requirements
> * database e.g. MySQL with phpmyadmin
> * PHP >= 7
> * Laravel >= 5.8

### How to run?
> 1. clone this repo
> 2. edit .env
> 3. run your database
> 4. composer install
> 5. php artisan serve 
> 6. php artisan migrate
> 7. php artisan db:seed

### Main address
> localhost:8000/api/players

### ENDPOINTS
GET /players
> Get all players

GET /players/{id}
> Get single player

POST /players
> Add player

PUT /players/{id}
> Update player

DELETE /players/{id}
> Delete player
