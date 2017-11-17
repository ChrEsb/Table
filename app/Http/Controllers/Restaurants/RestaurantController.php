<?php

namespace App\Http\Controllers\Restaurants;

use App\Http\Controllers\Controller;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function show($id) {
      $restaurant = new Restaurant();
      $crawler = new RestaurantCrawler($restaurant);
      $dateString = date('Y-m-d');
      $url = 'http://deligreco.b.dinnerbooking.com/dk/da-DK/times/index/1118/' . $dateString . '/1/' . 2 .'.json';
      $openTiems = $crawler->crawlPage($url);
      unset($openTiems->errorMessage);
      var_dump($openTiems);
      die;
      return view('restaurants.show', []);
    }
}
