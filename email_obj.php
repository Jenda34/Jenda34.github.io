<?

if ($odeslat){


/*-----------------------------------------------------*/  
  $email_address = "martin.dekan@jope.cz";  
  $subject = "WEB dotaz/objedn�vka";
  $message = "WEB jope.cz

Jm�no: $jmeno 

Email: $_od
Telefon: $tel
---------------------
[ V�c: $_vec ]

Text: $text

---------------------";


  mail($email_address, $subject, $message, "From: Web str�nky);
/*-----------------------------------------------------*/

}

$delay = 1;
echo '<meta http-equiv="refresh" content="'.$delay.';url='.$_URL.'">';

?>





