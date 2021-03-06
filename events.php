<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Events </title>
    <link rel="stylesheet" href="/costaRicaIsrael/css/main.css">
    <link rel="stylesheet" href="/costaRicaIsrael/css/events.css">

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="/costaRicaIsrael/js/events/events.js"></script>

    <?php require 'utils/db_connection.php' ?>
    <?php require 'utils/email.php' ?>
</head>

<body>
    <?php require 'templates/navbar.php'?>

    <div id="container_center">
        <div class="container">

            <div class="topics_medium"> Events</div>
            <?php require 'utils/events_functions.php' ?>

        </div>
    </div>

    <?php require 'templates/footer.php' ?>

</body>
</html>
