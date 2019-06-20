<?

if ($odeslat){


/*-----------------------------------------------------*/  
  $email_address = "martin.dekan@jope.cz";  
  $subject = "WEB dotaz/objednávka";
  $message = "WEB jope.cz

Jméno: $jmeno 

Email: $_od
Telefon: $tel
---------------------
[ Vìc: $_vec ]

Text: $text

---------------------";


  mail($email_address, $subject, $message, "From: Web stránky);
/*-----------------------------------------------------*/

}

$delay = 1;
echo '<meta http-equiv="refresh" content="'.$delay.';url='.$_URL.'">';

?>





