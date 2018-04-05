<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 * Larabel - 一个工匠级的php框架
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
| 自动注册装载机
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
| Composer提供了一个方便的，自动生成的类装入器应用。
| 我们只需要利用它！我们只需要引入它的脚本，我们不必担心任何操作。
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
| 开启
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
| 它将加载这个应用程序，以便我们可以运行它并发送回复到浏览器，让我们的用户高兴。
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
| 运行中的应用
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
| 一旦有了应用程序，我们就可以处理传入的请求。
| 通过内核，并将关联的响应发送回
| 客户端的浏览器，让他们享受创意
| 我们为他们准备了精彩的应用程序。
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
