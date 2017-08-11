<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"></pre>

<html >

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <title>jQuery UI Autocomplete - Default functionality</title>

 <link rel="stylesheet" media="screen" href="js/jqueryui/css/ui-lightness/jquery-ui-1.8.13.custom.css">


</head>

<body>

<h2>Menghitung Onkos Kirim JNE</h2>

<form action="" method="post">

<table width="20%" border="1" cellspacing="0" cellpadding="0">

 <tr>

 <td width="19%">From</td>

 <td width="81%"><input type="text" name="from" id="from" /></td>

 </tr>

 <tr>

 <td>to</td>

 <td>?<input type="text" name="to" id="to" /></td>

 </tr>

 <tr>

 <td>Weight</td>

 <td>?<input type="text" name="weight" id="weight" />Kg</td>

 </tr>

 <tr>

 <td>Couriers</td>

 <td>?<select name="couriers"><option value="jne">JNE</option></select></td>

 </tr>

 <tr>

 <td>?</td>

 <td align="right">?<input type="submit" name="go" value="Go" /></td>

 </tr>

</table>



</form>



<?php

if(isset($_POST['go'])){

//include file class.php untuk memanaggil fungsi get_cost(); yang berfungsi untuk menghitung ongkos kirim.

 include('class.php');

 $from = $_POST['from'];

 $to = $_POST['to'];

 $weight = $_POST['weight'];

//pemanggilan fungsi get_cost();

get_cost($from, $to,$weight);



}

?>

</body>

</html>

<pre>