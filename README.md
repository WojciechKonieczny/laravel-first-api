# Laravel first api
> My first laravel REST API :)
---
### 1. Requirements
> * database e.g. MySQL with phpmyadmin
> * PHP >= 7
> * Laravel >= 5.8
---
### 2. How to run?
> 1. clone this repo
> 2. edit .env
> 3. run your database
> 4. composer install
> 5. php artisan serve 
> 6. php artisan migrate
> 7. php artisan db:seed
---
### 3. Main address
> localhost:8000/api/players
---
### 4. Endpoints
4.1. Get all players: <br/>
```GET /players```

4.2. Get single player: <br/>
```GET /players/{id}``` 

4.3. Add player: <br/>
```POST /players```

4.4. Update player: <br/>
```PUT /players/{id}```

4.4. Delete player: <br/>
```DELETE /players/{id}```
