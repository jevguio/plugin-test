<?php

namespace Plugins\HelloWorld;

use Illuminate\Support\ServiceProvider;
use App\PluginHook;

class PluginServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register plugin route
        include __DIR__ . '/routes/web.php';

        // Register a dashboard button
        PluginHook::addDashboardButton(
            '<a href="/hello-plugin" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Go to Hello Plugin
            </a>'
        );
    }
}
