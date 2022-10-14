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

<h6>After success to config your DB and environment then how to use it ?</h6>

1. update your model first

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Post extends Model implements Viewable
{
use InteractsWithViews;

    // ...

}

2. update your post controller, or controller that you want to calculate

// PostController.php
public function show(Post $post)
{
    views($post)->record();

    return view('post.show', compact('post'));

}

3. display it into blade or single post

{{-- how to display total count view --}}
<p>views {{ views($post)->count(); }}</p>

    {{-- if you want calculate by unique user --}}
    <p>views {{ views($post)->unique()->count(); }}</p>

    {{-- if you want to caching, use this code below --}}
    <p>views {{ views($post)->remember()->count(); }}</p>
