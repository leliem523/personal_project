<?php

use App\Http\Controllers\Site\AuthController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\BlogDetailController;
use App\Http\Controllers\Site\CheckoutController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ProductDetailController;
use App\Http\Controllers\Site\ShopController;
use App\Http\Controllers\Site\ShoppingCartController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('user.login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('user.postLogin');

Route::get('/register', [AuthController::class, 'register'])->name('user.register');
Route::post('/register', [AuthController::class, 'postRegister'])->name('user.postRegister');

Route::group(['middleware' => ['auth:web']], function ()
{


    // Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');
});

    // Home page
    Route::get('/', [HomeController::class, 'index'])->name('user.home');

    // Shop page
    Route::get('/shop', [ShopController::class, 'index'])->name('user.shop');

    // Product detail page
    Route::get('/product-detail', [ProductDetailController::class, 'index'])->name('user.productDetail');

    // Shopping cart page
    Route::get('/shopping-cart', [ShoppingCartController::class, 'index'])->name('user.shoppingCart');

    // Checkout page
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('user.checkout');

    // Blog detail page
    Route::get('/blog-detail', [BlogDetailController::class, 'index'])->name('user.blogDetail');

    // Blog page
    Route::get('/blog', [BlogController::class, 'index'])->name('user.blog');

    // Contact page
    Route::get('/contact', [ContactController::class, 'index'])->name('user.contact');



Route::get('/auth/google/redirect', [AuthController::class, 'loginWithGoogleRedirect'])->name('user.loginWithGoogle');

Route::get('/auth/google/callback',[AuthController::class, 'loginWithGoogleCallback']);

Route::get('/auth/facebook/redirect', [AuthController::class, 'loginWithFacebookRedirect'])->name('user.loginWithFacebook');

Route::get('/auth/facebook/callback',[AuthController::class, 'loginWithFacebookCallback']);
