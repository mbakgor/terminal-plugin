<?php

namespace mbakgor\TerminalPlugin\Hooks;

use App\Plugins\Hooks\MenuEntryHook;

class MenuHook extends MenuEntryHook
{
    public $view = 'terminal-plugin::menu.main';
}