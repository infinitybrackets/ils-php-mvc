<?php
/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
*/
require_once 'vendor/autoload.php';
require_once 'config/app.php';
require_once 'config/auth.php';

use InfinityBrackets\Core\Application;
/*
|--------------------------------------------------------------------------
| Initialize The Application
|--------------------------------------------------------------------------
*/

$app = new Application(array_merge($config, $auth));
/*
|--------------------------------------------------------------------------
| GUEST View Routes
|--------------------------------------------------------------------------
*/
$app->router->Get('/', [\IntegratedLibrarySystem\App\Controllers\LandingController::class, 'Index']);
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