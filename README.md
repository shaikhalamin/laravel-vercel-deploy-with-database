## How to deploy laravel project in vercel with serverless neon database


## Create laravel project with composer [Laravel 10 for this case. I didn't try with 11 yet]

```bash

composer create-project laravel/laravel:^10.0 laravel-vercel

```

## Now create account in Neon and get postgres database crendentials from there [mostly the db connection string]
## https://neon.tech/docs/guides/laravel


## now comment mysql connection from env and paste the following connection for pgsql in .env file for local setup and migration run 


```bash
DB_CONNECTION=pgsql
DATABASE_URL=postgresql://{username}:{password}@{db_host}/{db_name}?sslmode=require

```


## if everything goes well then follow the following structure to run project on vercel

```bash

Step 1 : First create an api directory in the root of the project

like api
    
Step 2 : Create an index file in that folder with the following content 

```

```bash

<?php

// Forward Vercel requests to normal index.php
require __DIR__ . '/../public/index.php';


```


## Step 3 : Now open your Route Service Provider and change api prefix to v1/api like the following:

```bash

$this->routes(function () {
        Route::middleware('api')
        ->prefix('v1/api')
        ->group(base_path('routes/api.php'));

        Route::middleware('web')
                ->group(base_path('routes/web.php'));
});

```

## Step 4:  Create .vercelignore file in the root path like the following with content

```bash
    
     /vendor

```
        

## Step 5: Create a vercel.json file in the root path like the following with content

```bash

{
    "version": 2,
    "framework": null,
    "functions": {
        "api/index.php": { "runtime": "vercel-php@0.7.1" }
    },
    "routes": [
        {
            "src": "/(.*)",
            "dest": "/api/index.php",
            "methods": ["GET", "POST", "PUT", "PATCH", "DELETE", "OPTIONS"]
        }
    ],
    "env": {
        "APP_ENV": "production",
        "APP_DEBUG": "false",
        "APP_URL": "http://localhost",

        "APP_CONFIG_CACHE": "/tmp/config.php",
        "APP_EVENTS_CACHE": "/tmp/events.php",
        "APP_PACKAGES_CACHE": "/tmp/packages.php",
        "APP_ROUTES_CACHE": "/tmp/routes.php",
        "APP_SERVICES_CACHE": "/tmp/services.php",
        "VIEW_COMPILED_PATH": "/tmp",

        "CACHE_DRIVER": "array",
        "LOG_CHANNEL": "stderr",
        "SESSION_DRIVER": "cookie"
    }
}

```

## Step 6: Now create your own api route like following

```bash
Route::apiResource('users', UserController::class);
```


## Step 7:  Now push your code to github and connect with vercel

## Step 8: Add few environment variables from vercel setting like the following:
```bash
     API_KEY= your laravel app key
     DB_CONNECTION=pgsql
     DATABASE_URL=postgres://{username}:endpoint={endpoint_id};{password}@{hostname}/{databasename}?sslmode=require
```

## Step 9: your are done. Your application is up and running [booom]


N:B: 

If you get build error then create a dist folder in your root path with .gitignore file and change the node.js version to 18 from vercel dashboard general settings to fix the issue




