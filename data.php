<?php



//includekan file class.php

include('class.php');

$return_arr = array();



//tangkap variable type untuk mengetahui apakan kota asal (origin) atau kota tujuan (destination)



$type = $_GET['type'];



//panggil fungsi get_city() untuk mendapatkankan nama-nama kota.

 $cities = get_city(trim($_GET['term']),$type) ;



 $i=0;

 foreach ($cities->item as $value) {

 $row_array['id_kota'] = $i;

 $row_array['nama_kota'] = strval($value);



 array_push($return_arr,$row_array);

 $i++;

 }



/*convert ke dalam bentuk JSON. kira2 formatnya seperti ini

[{"id_kota":0,"nama_kota":"BANDAACEH"},{"id_kota":1,"nama_kota":"BANDARLAMPUNG"},{"id_kota":2,"nama_kota"</code><code>:"BANDUNG"},{"id_kota":3,"nama_kota":"BANGUI, CENTRAL AFRICAN REP."},{"id_kota":4,"nama_kota":"BANJARMASIN"</code><code>},{"id_kota":5,"nama_kota":"BANJUL, GAMBIA"}]

*/

echo json_encode($return_arr);

?>
