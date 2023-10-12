    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\MemberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[venueController::class,'home'])->name('venue.home');
Route::get('/venue/create',[venueController::class,'create'])->name('venue.create');
Route::post('/venue',[venueController::class,'store'])->name('venue.store');
Route::post('/venue/{venue}/edit',[venueController::class,'edit'])->name('venue.edit');

Route::post('/register',[MemberController::class,'register'])->name('member.register');
Route::get('/login',[MemberController::class,'login'])->name('member.login');

