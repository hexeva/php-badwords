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




    

</body>
</html>