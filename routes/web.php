<?php

Route::group(['middleware' => ['switchLan']], function () {
    Route::get('/', 'PagesController@root')->name('root');
    Route::get('/bazi/{user}', 'PagesController@show')->name('bazi');

    // 用户身份验证相关的路由aaaa
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // 用户注册相关路由ffff
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

    // 密码重置相关路由
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

    // Email 认证相关路由
    Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
    Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

    Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);
});

Route::get('/changeLocale/{locale}', 'Front\IndexController@changeLocale')->name('setLocale');

Route::get('/bazi/{user}/pdfexport', 'PagesController@pdfexport')->name('pdfexport');

Route::get('/user/pdfex', 'UsersController@pdfex')->name('pdfex');