eloquent viewable very usefull to add a fitur count view page / post

1. install the package

composer require cyrildewit/eloquent-viewable

2. publish the migration

php artisan vendor:publish --provider="CyrildeWit\EloquentViewable\EloquentViewableServiceProvider" --tag="migrations"

3. migrate the database

php artisan migrate

if database success to migrate , it will create new table call "views"

4. update the config in terminal

php artisan vendor:publish --provider="CyrildeWit\EloquentViewable\EloquentViewableServiceProvider" --tag="config"

5. register service provider manually in config/app.php

'providers' => [
//....
CyrildeWit\EloquentViewable\EloquentViewableServiceProvider::class,
]
