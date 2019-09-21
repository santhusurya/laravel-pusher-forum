# Single Page Vue/Vuetify Forum App built with Laravel/APIs & Pusher
Forum App built with Laravel, VueJS, Pusher, Vuetify, JWT to test drive all these technologies integrated together.

> This Project is still under development.
> Currently only API Endpoints have been configured in Laravel.



> This Forum App has below functionalities.
> 1. User
> 1. Category
> 1. Question
> 1. Reply
> 1. Like


# Important Note
To make this package fully functional please follow below instructions.

### IMPORTANT: All Commands should be run from root directory of the project.


## IMPORTANT: Step 1: Install Laravel **Vendor** dependencies by running below command under root directory.

```php
composer install --no-scripts
```


## Step 2: .env Creation & Configuration
1. Create .env file from .env.example file found at root path of the project.
1. Setup Database details as per your local setup.
1. Run below command to generate Laravel **APP_KEY**. 

```php
php artisan key:generate
```

4. Run below command to generate JWT secret key.

```php
php artisan jwt:secret
```


## Step 3: Migrating Database & Database Seeding

1. Run below command to create required database tables into the database configured in .env file.

```php
php artisan migrate
```

2. Run below command to fill database with fake data from Faker Module.

###

```php
php artisan db:seed
```

## Step 4: To list out all the project Routes (Web & API) in terminal. To get clear understanding of available routes & associated HTTP Verbs.

```php
php artisan route:list
```

