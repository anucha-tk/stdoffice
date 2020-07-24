<?php

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function ($router) {

    Route::post('signin', 'SignInController');
    Route::post('signout', 'SignOutController');

    Route::get('me', 'MeController');

});