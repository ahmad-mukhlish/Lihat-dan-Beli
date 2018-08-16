<html>
<head>
<?php


require_once('GoodReads.php') ;
require_once('cache.class.php') ;


//create string $buku
$buku = "" ;

//creating cache
$c = new Cache();

//creating GoodReads instance
// $api = new GoodReads('WEYsegSJlZQd9HkQlfSTbQ','./cache');


// $data = $api->getBookByTitle("Cinta","");
// print("<pre>".print_r($data,true)."</pre>");
// $buku = $data["book"]["title"] ;
//
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $url = 'https://api.bukalapak.com/v2/products.json?keywords='.urlencode($buku).'&page=1&per_page=5';
// curl_setopt($ch, CURLOPT_URL, $url);
// $result = curl_exec($ch);
// curl_close($ch);
//
// $obj = json_decode($result);
// print("<pre>".print_r($obj,true)."</pre>");
?>


</head>
<body>


    <!-- <form id="form1" runat="server"> -->
    <br> <br>

  <center> <h2>Buku Review dan Beli di BukaLapak</h2> </p>


    <form method="post" name="frm" action="produk-simpan.php">
      <table border="1">
        <tr>
          <td width=100px align="center">Pengarang</td>
          <td><input type="text" name="IdProduk" size="71" maxlength="71" value="Anwar Fuadi"/></td>
        </tr>
          <tr>
            <td width=100px align="center">Judul</td>
            <td><input type="text" name="Nama" size="71" maxlength="70"  value="Negri Lima Menara"/></td>
          </tr>
          <tr>
            <td colspan="2">
            <input type="submit" value="Cari" style="width:100%"/>
            </td>
          </tr>
      </table>
    </form>
  </center>
</body>
</html>
