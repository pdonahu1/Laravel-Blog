09-05-2023 (EDIT THIS FILE IN VSCODE)
Project: Laravel Blog (FRT / BACKEND) /blog
(Laravel + MySQL)
C:\xampp\htdocs\projects\blog

--------------------------------------------------------------------------------------------------

Run to start server:

    $ php artisan serve   

--------------------------------------------------------------------------------------------------

STATUS: WORKING, BACKED UP, API'S TESTED OK WITH POSTMAN

DATE: 09/05/2023

DATABASE: blog 
DB USER: root
DB PASSWORD: 

--------------------------------------------------------------------------------------------------

CONNECTION STRING: (.env)

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=

----------------------------------------------------------------------------------------------------

/package.json: {                                            composer.json:  
}                                                               "require": {
                                                                    "php": "^8.0.2",
    {                                                               "guzzlehttp/guzzle": "^7.2",
    "private": true,                                                "itsgoingd/clockwork": "^5.1",
    "scripts": {                                                    "laravel/framework": "^9.19",
        "dev": "vite",                                              "laravel/sanctum": "^3.0",
        "build": "vite build"                                       "laravel/tinker": "^2.7",
    },                                                              "mailchimp/marketing": "^3.0",
    "devDependencies": {                                            "spatie/laravel-backup": "^8.1",
        "axios": "^1.1.2",                                          "spatie/yaml-front-matter": "^2.0",
        "laravel-vite-plugin": "^0.7.2",                            "wnx/laravel-backup-restore": "^1.0"
        "lodash": "^4.17.19",                                  },
        "postcss": "^8.1.14",                                    "require-dev": {      
        "vite": "^4.0.0"                                            "barryvdh/laravel-debugbar": "^3.8",
    }                                                               "fakerphp/faker": "^1.9.1",
  }                                                                 "laravel/pint": "^1.0",
}                                                                   "laravel/sail": "^1.0.1",
                                                                    "mockery/mockery": "^1.4.4",
                                                                    "nunomaduro/collision": "^6.1",
                                                                    "phpunit/phpunit": "^9.5.10",
                                                                    "spatie/laravel-ignition": "^1.0"
----------------------------------------------------------------------------------------------------

NOTEs(!)


PORTS:


TODO's:

Allow 'moderator' the ability to add categories.



----------------------------------------------------------------------------------------------------
REFERENCES / LINKS:

How to Build a MERN Stack Blog from Scratch (You Tube)
Node.js React js, Express and MongoDB: Blog Application Example:
https://codewitham.com/how-to-build-a-mern-stack-blog-from-scratch-a-comprehensive-guide/

Source (https://codewitham.com):
https://codewitham.com/wp-content/uploads/2023/04/api.zip
https://codewitham.com/wp-content/uploads/2023/04/client.zip


----------------------------------------------------------------------------------------------------