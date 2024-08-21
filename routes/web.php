<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;

Auth::routes();

Route::livewire('/', 'home')->name('home');
Route::livewire('/products', 'product-index')->name('products');
Route::livewire('/products/liga/{ligaId}', 'product-liga')->name('products.liga');
Route::livewire('/products/{id}', 'product-detail')->name('products.detail');
