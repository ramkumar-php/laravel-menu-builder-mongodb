<?php

Route::group(['middleware' => config('menu.middleware')], function (): void {
    $path = rtrim(config('menu.route_path'));

    // Routes for menus
    Route::post($path.'/menus/create', ['as' => 'menus.create', 'uses' => '\Efectn\Menu\Controllers\MenuController@createMenu']);
    Route::post($path.'/menus/update', ['as' => 'menus.update', 'uses' => '\Efectn\Menu\Controllers\MenuController@updateMenu']);
    Route::post($path.'/menus/delete', ['as' => 'menus.delete', 'uses' => '\Efectn\Menu\Controllers\MenuController@deleteMenu']);

    // Routes for menu items
    Route::post($path.'/menu-items/create', ['as' => 'menus.items.create', 'uses' => '\Efectn\Menu\Controllers\MenuController@addMenuItem']);
    Route::post($path.'/menu-items/update', ['as' => 'menus.items.update', 'uses' => '\Efectn\Menu\Controllers\MenuController@updateMenuItem']);
    Route::post($path.'/menu-items/delete', ['as' => 'menus.items.delete', 'uses' => '\Efectn\Menu\Controllers\MenuController@deleteMenuItem']);
});
