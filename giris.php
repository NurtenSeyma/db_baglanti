<?php
session_start();
require= "db.php";
?>

if($_POST){
	
    $kadi= $_POST["kadi"];
    $sifre= $_POST["sifre"];

    if(!$kadi || !$sifre){
       echo "Tüm alanları doldurup tekrar deneyin!";
    }else {

          $query = mysql_query("select * from uyeler
          where uye_kadi= '$kadi' && uye_sifre= '$sifre'"); 
      if(mysql_affected_rows()){

           $row=mysql_fetch_array($query);

           $array= array(
               "id" => $row["uye_id"],
               "kadi" => $row["uye_kadi"],
               "abc" => $row["uye_abc"]
           );

      //Tüm session bilgilerinin tutulacağı session dizisi
      $_SESSION["array"] [$id]=$array;
  }
    else{

         echo "Böyle bir kullanıcı adı bulunmuyor.";
      }
    }

}



<form action="" method="post">
	Kullanıcı Adı: <br /> <input type="text" name="kadi" /> <br />
	Şifre: <br /> <input type="password" name="sifre" /> </form> <br/>
	<button type="submit">Giriş Yap</button>
</form>
