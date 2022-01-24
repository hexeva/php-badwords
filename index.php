<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BADWORDS</title>
</head>
<body>

<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->


<?php 
//CREO VARIABILE 
    $paragraph= 'Lo spreco della vita si trova nell\'amore che non si è saputo dare, nel potere che non si è saputo utilizzare, nell\'egoistica prudenza che ci ha impedito di rischiare e che, evitandoci un dispiacere, ci ha fatto mancare la felicità.';
?>

<h3>CREO VARIABILE E STAMPO A SCHERMO</h3>

<h2> <?php echo $paragraph; ?> </h2>


<h3>STAMPO LA LUNGHEZZA DELLA VARIABILE</h3>

<?php 
    $paragraph_length = strlen($paragraph);
?>

<h2> LUNGHEZZA PARAGRAFO: <?php echo $paragraph_length; ?> </h2>

<!-- CREO VARIABILE DA PASSARE CON GET -->

<?php 
    $to_censored = $_GET['word'];
    // creo una stringa a cui passo la variabile da get

    $string = " L'esperienza è il tipo di insegnante più difficile. Prima ti fa l'esame, poi ti spiega la" . ' ' . $to_censored;
    $string_length = strlen($string);

?>

<!-- stampo a schermo stringa e lunghezza-->

<h2> <?php echo $string; ?> </h2>
<h3> <?php echo $string_length ?> </h3>

<!-- Rimpiazzo la variabile da censurare  utilizzando str replace  -->

<?php 
    $second_string = str_replace($to_censored,'***',$string);
    // var_dump($second_string);
    $final_length = strlen($second_string);
?>
<!-- stampo a schermo stringa rimpiazzata e sua lunghezza -->
<h2> <?php echo $second_string; ?> </h2>
<h3> <?php echo $final_length ?> </h3>

</body>
</html>