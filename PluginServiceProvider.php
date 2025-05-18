<?php

namespace plugins\helloworld;

use Illuminate\Support\ServiceProvider;
use App\PluginHook;

class PluginServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register plugin route
        include __DIR__ . '/routes/web.php';

        // Register a dashboard button

        PluginHook::registerPlugin('Test Plugin', 'HelloWorld', '1.0.2', ' Testing Plugin Developent.', 'https://github.com/jevguio/plugin-test.git');
        PluginHook::addTopMenu('Test Plugin', 'test.plugin');
    }
}
