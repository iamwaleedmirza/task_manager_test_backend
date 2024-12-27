# task Management App


## Project Setup

```sh
composer install
```

### Setup database in .env

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager_task
DB_USERNAME=root
DB_PASSWORD=
```

### Run the migration 

```sh
php artisan migrate
```
