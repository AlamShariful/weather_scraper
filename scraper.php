<?php
$city=$_GET['city'];
$city=str_replace(" ", "", $city);
$homepage = file_get_contents('http://www.weather-forecast.com/locations/'.$city.'/forecasts/latest');
// preg_match('/3 Day Weather Forecast Summary:<\/b><span class="phrase">(.*?)</s', $homepage, $match);
//echo $matches[0];

//preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="phrase">(.*?)</s', $homepage,$matches);
preg_match('/<span class="phrase">(.*?)</s', $homepage,$matches);

 //print_r($matches);
echo $matches[0];
echo $matches[1];