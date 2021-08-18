<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;

class OnCallPharmacy extends Controller
{
    public function Pharmacy(Request $request)
    {
        $client = new Client();

        $city = $request->city;

        $crawler = $client->request('GET', "http://annuaire-gratuit.ma/pharmacie-garde-{$city}/garde-nuit.html");

        $name = $crawler->filter('#principal > div.container-fluid > div.container-fluid > div > div.col-md-9 > div > div:nth-child(7) > article > h3')->each(function ($node) {
            return $node->text();
        });

        $address = $crawler->filter('#principal > div.container-fluid > div.container-fluid > div > div.col-md-9 > div > div:nth-child(7) > article > div > p')->each(function ($node) {
            return $node->text();
        });

        $phone = $crawler->filter('#principal > div.container-fluid > div.container-fluid > div > div.col-md-9 > div > div:nth-child(7) > article > p > span > a')->each(function ($node) {
            return $node->text();
        });

        $district = $crawler->filter('#principal > div.container-fluid > div.container-fluid > div > div.col-md-9 > div > div:nth-child(7) > article > p > span:nth-child(5)')->each(function ($node) {
            return $node->text();
        });

        $link_map = $crawler->filter('#principal > div.container-fluid > div.container-fluid > div > div.col-md-9 > div > div:nth-child(7) > article > div.map_property > a')->each(function ($node) {
            return $node->attr('href');
        });

        $Tableau = array();

        $counter = count($name) - 1;

        for ($x = 0; $x <= $counter; $x++) {
            $Tableau[] = [
                'id' => $x + 1,
                'name' => $name[$x],
                'address' => $address[$x],
                'phone' => $phone[$x],
                'district' => $district[$x],
                'link_map' => $link_map[$x]
            ];
        }

        $collection = collect($Tableau);

        return $collection->toJson();
    }
}
