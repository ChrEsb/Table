<?php

namespace App\Http\Controllers\Restaurants;

use App\Restaurant;
use DOMDocument;

/**
 * Class RestaurantCrawler
 *
 * This class contains functions that crawl a restaurant booking page.
 *
 * @package App\Http\Controllers\Restaurants
 */
class RestaurantCrawler {

  private $restaurant;

  public function __construct(Restaurant $restaurant) {
    $this->restaurant = $restaurant;
  }

  public function crawlPage(string $url) : ?object {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); // Assuming you're requesting JSON
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($ch);

    return json_decode($response);
  }
}