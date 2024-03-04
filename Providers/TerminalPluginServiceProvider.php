<?php

namespace mbakgor\TerminalPlugin\Providers;

use Illuminate\Support\ServiceProvider;

use App\Plugins\Hooks\MenuEntryHook;
use App\Plugins\PluginManager;
use Illuminate\Support\Facades\Route;
use mbakgor\TerminalPlugin\Hooks\MenuHook;


class TerminalPluginServiceProvider extends ServiceProvider
{
    
    public function register(): void
    {
        
    }

    public function boot(PluginManager $manager)
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/terminal-plugin.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'terminal-plugin');
        $this->publishes([__DIR__.'/../resources/assets' => public_path('mbakgor/terminal-plugin'),], 'public');

        $name = 'terminal-plugin';
        $manager->publishHook($name,MenuEntryHook::class, MenuHook::class);
    }
}
