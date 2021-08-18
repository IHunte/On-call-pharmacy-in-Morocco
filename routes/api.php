<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnCallPharmacy;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/pharmacy/{city}', [OnCallPharmacy::class, 'Pharmacy']);


/*
Casablanca
Marrakech
Agadir
Meknes
Taourirt
Safi
Fes
Rabat
Nador
Berkane
Tanger
Sefrou
Oujda
Khouribga
Beni Mellal
Guelmim
Mohammedia
Taza
El Jadida
Sale
Laayoune
Tetouan
Berrechid
Ouarzazate
Tan Tan
Ben Guerir
Ait Melloul
Settat
El Kelaa Des Sraghna
Chefchaouen
Temara
Kenitra
Errachidia
Souk El Arba Du Gharb
Al Hoceima
Larache
Tikiouine
Fkih Ben Salah
Tahla
Bouknadel
Sidi Slimane
Selouane
Azrou
Al Arrui
Ksar El Kebir
Zghanghan
Tiflet
Sidi Kacem
*/
