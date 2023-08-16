<?php
/**
* Plugin Name:  CZcustomeWP-Plugin
* Plugin URI: https://wordpress.org/plugins/
* Description: Add Custom Css & Js File To Your Wordpress Website.
* Version: 1.0
* Author URI: https://wordpress.org/
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


function enqueue_styles() {
  
  wp_enqueue_style( 'sd_my_styles', plugins_url( '/CZcustomeWP-Plugin/style.css'),99); 

}
add_action( 'wp_head', 'enqueue_styles' );


function add_data(){
    
$arrayVariable = array(
    BTC  => plugin_dir_url( __FILE__ ).'/images/BTC.png',
    ETH => plugin_dir_url( __FILE__ ).'/images/ETH.png',
    DASH => plugin_dir_url( __FILE__ ).'/images/DASH.png',
    LTC => plugin_dir_url( __FILE__ ).'/images/LTC.png',
    USDT => plugin_dir_url( __FILE__ ).'/images/USDT.png',
); 
    
$url = "https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest";

$headers = [
  'Accepts: application/json',
  'X-CMC_PRO_API_KEY: c7bed075-de81-437b-960c-3ec8b926bf2f'
];

$request = "{$url}"; // create the request URL

$curl = curl_init(); // Get cURL resource
// Set cURL options
curl_setopt_array($curl, array(
  CURLOPT_URL => $request,            // set the request URL
  CURLOPT_HTTPHEADER => $headers,     // set the headers 
  CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
));

$response = curl_exec($curl); // Send the request, save the response
$json = json_decode($response,true);
curl_close($curl); // Close request

$new_json = array_merge($json, $arrayVariable);

$data=[];
foreach($new_json['data'] as $key=>$value) {
	if($value['symbol']=='BTC' || $value['symbol']=='ETH' || $value['symbol']=='DASH' || $value['symbol']=='LTC' || $value['symbol']=='USDT'){
			$data[]=$value;	
	}
}
?>
<table>
	<tr>
		<th>Coin Details</th>
		<th>Last Price</th>
		<th>24h Change</th>
		<th>Market Cap</th>
		<th>Markets</th>
	</tr>
<?php
	foreach($data as $key=>$value) {
    	echo "<tr>";
    	echo "<td><img src='".plugin_dir_url( __FILE__ )."images/".$value['symbol'].".png'/>".$value['symbol']." ".$value['name']."</td> <td>$".number_format($value['quote']['USD']['price'],2)."</td> <td>".sprintf("%01.2f",$value['quote']['USD']['percent_change_24h'])."%</td> <td>$".number_format($value['quote']['USD']['market_cap'])."M</td> <td>".$value['quote']['USD']['percent_change_7d']."</td>";
    	echo "</tr>";
		
	}
	echo "</table>";
}
add_shortcode('add_data','add_data');
 ?>