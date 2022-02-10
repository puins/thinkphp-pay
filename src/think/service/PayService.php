<?php
declare (strict_types = 1);

namespace think\service;

use think\Route;
use think\Service;

class CaptchaService extends Service
{
    public function boot()
    {
        $this->registerRoutes(function (Route $route) {
            // $route->get('captcha/[:config]', "\\think\\captcha\\CaptchaController@index");
        });
    }
}
