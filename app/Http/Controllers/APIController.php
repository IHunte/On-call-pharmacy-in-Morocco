<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Pharmacy;
use Illuminate\Support\Facades\Response;

class APIController extends Pharmacy
{
    public function get(Request $request)
    {
        $name = request()->city;

        $list = array(
            'Casablanca',
            'Marrakech',
            'Agadir',
            'Meknes',
            'Taourirt',
            'Safi',
            'Fes',
            'Rabat',
            'Nador',
            'Berkane',
            'Tanger',
            'Sefrou',
            'Oujda',
            'Khouribga',
            'Beni Mellal',
            'Guelmim',
            'Mohammedia',
            'Taza',
            'El Jadida',
            'Sale',
            'Laayoune',
            'Tetouan',
            'Berrechid',
            'Ouarzazate',
            'Tan Tan',
            'Ben Guerir',
            'Ait Melloul',
            'Settat',
            'El Kelaa Des Sraghna',
            'Chefchaouen',
            'Temara',
            'Kenitra',
            'Errachidia',
            'Souk El Arba Du Gharb',
            'Al Hoceima',
            'Larache',
            'Tikiouine',
            'Fkih Ben Salah',
            'Tahla',
            'Bouknadel',
            'Sidi Slimane',
            'Selouane',
            'Azrou',
            'Al Arrui',
            'Ksar El Kebir',
            'Zghanghan',
            'Tiflet',
            'Sidi Kacem'
        );


        $search_city = in_array($name, $list);

        if ($search_city) {
            return Pharmacy::getOncallPharmacy($name);
        } else {
            return Response::json(
                [
                    ['error' => 'city invalid']
                ]
            );
        }
    }
}
