
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodluyoruz_ornek</title>
</head>
<body>
    <form action="index.php" method="get">
    Bir sayi giriniz: <input type="number"  name='sayi'> 
    </form>



</body>
</html>

<?php
if(isset($_GET["sayi"]))
{
    $sayi=$_GET["sayi"];
    control($sayi);
}
function control($sayi)
{
    if($sayi%3==0)
    {
        echo " Girdiginiz sayi 3'e bolunebilir";
    }
    else
    {
        while(true)
        {
            if($sayi%3==0) break;
            else $sayi++;
        }
        echo "Girdiniz sayi 3e bolunemiyor,ilk bolunebildigi sayi:".$sayi;
    }
    
}

?>