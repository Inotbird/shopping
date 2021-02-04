<?php
/*
 * @Author: your name
 * @Date: 2021-01-31 00:51:21
 * @LastEditTime: 2021-02-04 04:00:57
 * @LastEditors: sueRimn
 * @Description: In User Settings Edit
 * @FilePath: \shopping\routes\web.php
 */

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Admin\LoginController;

Route::get('admin/login', [LoginController::class, 'login']);
Route::post('admin/doLogin', [LoginController::class, 'doLogin']);
Route::get('admin/index', [LoginController::class, 'index']);
Route::get('admin/logout', [LoginController::class, 'logOut']);

use App\Http\Controllers\Product\ProductController;
//商品分类管理路由
Route::get('product/proSort',[ProductController::class, 'proSort']);
//商品管理路由
Route::get('product/proManage',[ProductController::class, 'proManage']);

