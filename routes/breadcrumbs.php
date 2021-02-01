<?php
use App\Orchid\Screens\EmailSenderScreen;
use Tabuna\Breadcrumbs\Trail;

Route::screen('email', EmailSenderScreen::class)
    ->name('platform.email')
    ->breadcrumbs(function (Trail $trail){
        return $trail
            ->parent('platform.index')
            ->push('Email sender');
    });
