<?php
use Illuminate\Http\Request;
use App\Product;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/boutique','ProductController@index')->name('products.index');
Route::get('/','ProductController@index')->name('products.index');
Route::get('/boutique/{slug}','ProductController@show')->name('products.show');
Route::get('/search','ProductController@search')->name('products.search');
/*cart routes*/
Route::group(['middleware'=>['auth']],function(){
Route::delete('/panier/delete/{rowId}','CartController@destroy')->name('cart.destroy');
Route::get('/panier','CartController@index')->name('cart.index');
Route::post('/panier/ajouter','CartController@store')->name('cart.store');
Route::patch('/panier/{rowId}', 'CartController@update')->name('cart.update');
Route::post('/panier/coupon','CartController@storeCoupon')->name('cart.coupon.store');
Route::delete('/panier/coupon','CartController@destroyCoupon')->name('cart.coupon.destroy');


});
/*checkout routes*/
Route::group(['middleware'=>['auth']],function(){
Route::get('/checkout','CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/merci','CheckoutController@thankyou')->name('checkout.thankyou');
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
//search



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
