<?php

use App\Method\Invoice;
use Illuminate\Support\Facades\Route;
use Asciisd\Zoho\ZohoManager;
use com\zoho\crm\api\record\Leads;
use com\zoho\crm\api\record\Record;

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

Route::view('/', 'welcome');
Route::get('/get-test', function () {

    $leads = ZohoManager::useModule();
    // dd($leads);

    // $response = ZohoManager::make('Leads');
    // return $modules  = $response->getAllModules();

    // $record = new Record();
    $response = $leads->create([
        'First_Name' => 'Amr',
        'Last_Name' => 'Emad',
        'Email' => 'test@asciisd.com',
        'Phone' => '012345678910',
    ]);
    // dd($response);
});

Route::get('/zoho/oauth2callback', function () {
    return 1;
});


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
