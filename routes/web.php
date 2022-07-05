<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', function() {
    if(auth()->guest()) {
        return redirect('/login');
    }

    return view('pages.home');
});

Route::get('/login',[AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware'=>'auth'], function(){
    Route::get('/employees/create',[EmployeeController::class, 'create']);
    
    Route::post('/employees',[EmployeeController::class, 'store']);

    

    Route::get('/employees/employers',[EmployeeController::class, 'employeeList']);

   
  
    Route::get('/employees/recent',[EmployeeController::class, 'recentEmployee']);
   
    
    
    Route::get('/employees/list/{employ}',[EmployeeController::class, 'list']);

    
    

    
    Route::get('/employees/delete/{employ}',[EmployeeController::class, 'delete']);

    Route::get('/employees/edit/{employ}',[EmployeeController::class, 'edit'])->middleware('edit');
    Route::get('/employees/open/{employ}',[EmployeeController::class, 'open'])->middleware('delete');
    
    Route::get('/employees/{employ}',[EmployeeController::class, 'show']);
   
    Route::put('/employees/{employ}',[EmployeeController::class, 'update'])->middleware('edit');

    


    Route::get('/logout',[AuthController::class, 'logout']);
    

});