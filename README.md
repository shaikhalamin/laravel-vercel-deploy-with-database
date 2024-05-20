## How to deploy laravel project in vercel with serverless neon database


## Create laravel project with composer [Laravel 10 for this case. I didn't try with 11 yet]

```bash

composer create-project laravel/laravel:^10.0 laravel-vercel

```

## Now create account in Neon and get postgres database crendentials from there [mostly the db connection string]


## now comment mysql connection from env and paste the following connection for pgsql in .env file for local setup and migration run 


```bash
DB_CONNECTION=pgsql
DATABASE_URL=postgres://{username}:endpoint={endpoint_id};{password}@{hostname}/{databasename}?sslmode=require

```


## if everything goes well then follow the following structure to run project on vercel

```bash

Step 1 : First create an api directory in the root of the project

like api
    
Step 2 : Create an index file in that folder with the following content 


<?php

// Forward Vercel requests to normal index.php
require __DIR__ . '/../public/index.php';




Step 3 : 

Now open your Route Service Provider and change api prefix to v1/api like the following:


$this->routes(function () {
        Route::middleware('api')
        ->prefix('v1/api')
        ->group(base_path('routes/api.php'));

        Route::middleware('web')
                ->group(base_path('routes/web.php'));
});




Step 4: Now create your own api route like following

Route::apiResource('users', UserController::class);


Step 5:  Now push your code to github and connect with vercel

Step 6: Add few environment variables from vercel setting like the following:

     API_KEY= your laravel app key
     DB_CONNECTION=pgsql
     DATABASE_URL=postgres://{username}:endpoint={endpoint_id};{password}@{hostname}/{databasename}?sslmode=require


Step 7: your are done. Your application is up and running [booom]

```



