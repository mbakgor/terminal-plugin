<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth'], 'guard' => 'auth'], function () {
    Route::get('/plugins/terminal-plugin', [\mbakgor\TerminalPlugin\Http\Controllers\TerminalPluginController::class, 'index'])->name('terminal-plugin.index');
    Route::post('/plugins/terminal-plugin/show-terminal', [\mbakgor\TerminalPlugin\Http\Controllers\TerminalPluginController::class, 'showTerminal'])->name('terminal-plugin.showTerminal');
    Route::post('/plugins/terminal-plugin/connect', [\mbakgor\TerminalPlugin\Http\Controllers\SSHController::class, 'connect'])->name('ssh.connect');


});