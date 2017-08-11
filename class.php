<?php

function get_city($query,$type)

{

//library yang harus anda download

require_once 'REST_Ongkir.php';



 $rest = new REST_Ongkir(array(

 'server' => 'http://api.ongkir.info/'

 ));



//ganti API-Key dibawah ini sesuai dengan API Key yang anda peroleh setalah mendaftar di ongkir.info

 $result = $rest->post('city/list', array(

 'query' => $query,

 'type' => $type,

 'courier' => 'jne',

 'API-Key' => 'ab08e16f777797b7d952e2bee9bafaf3' ), 'JSON');



 try

 {

 $status = $result['status'];



 // Handling the data

 if ($status->code == 0)

 {

 return $cities = $result['cities'];

 //print_r($cities);

 //foreach ($cities->item as $item)

 //{

 //echo 'Kota: ' . $item . '<br />';

 // }

 }

 else

 {

 echo 'Tidak ditemukan kota yang diawali "band"';

 }



 }

 catch (Exception $e)

 {

 echo 'Processing error.';

 }

}



function get_cost($from, $to,$weight)

{

//library yang harus anda download

 require_once 'REST_Ongkir.php';



 $rest = new REST_Ongkir(array(

 'server' => 'http://api.ongkir.info/'

 ));



//ganti API-Key dibawah ini sesuai dengan API Key yang anda peroleh setalah mendaftar di ongkir.info

 $result = $rest->post('cost/find', array(

 'from' => $from,

 'to' => $to,

 'weight' => $weight.'000',

 'courier' => 'jne',

'API-Key' =>'ab08e16f777797b7d952e2bee9bafaf3'

 ));



 try

 {

 $status = $result['status'];



 // Handling the data

 if ($status->code == 0)

 {

 $prices = $result['price'];

 $city = $result['city'];



 echo 'Ongkos kirim dari ' . $city->origin . ' ke ' . $city->destination . '<br /><br />';



 foreach ($prices->item as $item)

 {

 echo 'Layanan: ' . $item->service . ', dengan harga : Rp. ' . $item->value . ',- <br />';

 }

 }

 else

 {

 echo 'Tidak ditemukan jalur pengiriman dari surabaya ke jakarta';

 }



 }

 catch (Exception $e)

 {

 echo 'Processing error.';

 }

}



//$kota = get_city('ban','origin');

//echo json_encode($kota);



?>