<?php

namespace plugins\helloworld;

use Illuminate\Support\ServiceProvider;
use App\PluginHook;

class PluginServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        
        $jsonPath = __DIR__ . '/../plugin.json';
        // Register plugin route
        include __DIR__ . '/routes/web.php';

        // Register a dashboard button

        PluginHook::registerPlugin(
            $data['name'] ?? 'Unknown',
            basename(dirname(__DIR__)), // or $data['slug'] if you have it
            $data['version'] ?? '0.0.0',
            $data['description'] ?? '',
            $data['gitUrl'] ?? ''
        );
        PluginHook::addTopMenu('Test Plugin', 'test.plugin');
        
        $this->loadViewsFrom(__DIR__.'/../resources/view', 'helloworld');

        // Register routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
    
}
