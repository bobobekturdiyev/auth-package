<?php

Route::group(['prefix' => "programmer", 'namespace' => 'Programmeruz\AuthPackage\Http\Controllers'], function(){
    Route::get('hello', function(){
       echo "Hello, Programmer UZ";
    });

});

