# Laravel first api
---
### 1. Requirements
* database e.g. MySQL with phpmyadmin
* PHP >= 7
* Laravel >= 5.8
---
### 2. How to run?
1. clone this repo <br/>
2. edit .env <br/>
3. run your database <br/>
4. ```composer install``` <br/>
5. ```php artisan serve ``` <br/>
6. ```php artisan migrate``` <br/>
7. ```php artisan db:seed``` <br/>
---
### 3. Main Address
1. ``` localhost:8000/api/ ```
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
