# Laravel first api
> My first laravel REST API :)

### 1. Requirements
> * database e.g. MySQL with phpmyadmin
> * PHP >= 7
> * Laravel >= 5.8

### 2. How to run?
> 1. clone this repo
> 2. edit .env
> 3. run your database
> 4. composer install
> 5. php artisan serve 
> 6. php artisan migrate
> 7. php artisan db:seed

### 3. Main address
> localhost:8000/api/players

### 4. ENDPOINTS
4.1. ```GET /players```
> Get all players

4.2. ```GET /players/{id}```
> Get single player

4.3. ```POST /players```
> Add player

4.4. ```PUT /players/{id}```
> Update player

4.4. ```DELETE /players/{id}```
> Delete player
