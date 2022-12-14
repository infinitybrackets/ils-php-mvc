<?php
/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
*/
require_once 'vendor/autoload.php';
require_once 'bootstrap/app.php';

use InfinityBrackets\Core\Application;
/*
|--------------------------------------------------------------------------
| Initialize The Application
|--------------------------------------------------------------------------
*/

$app = new Application($config);
/*
|--------------------------------------------------------------------------
| GUEST View Routes
|--------------------------------------------------------------------------
*/
$app->router->Get('/', function() {
    echo "Hello World";
});
/*
|--------------------------------------------------------------------------
| GUEST View Routes
|--------------------------------------------------------------------------
*/
// ...

/*
|--------------------------------------------------------------------------
| AJAX Routes
|--------------------------------------------------------------------------
*/
// ...

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
*/
$app->Run();