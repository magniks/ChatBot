<?php if(!isset($_COOKIE['Name'])) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>De Uitwisseling</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link rel="stylesheet" href="styles.css">

</head>
<body>

    <div class="mid-div">
        <h3 class="formlabel">Huidige Teamnaam: <?php echo $_COOKIE["Name"]; ?> </h3><br>
        <h5>Let op! Je kunt dit hierna niet meer wijzigen. </h5><br>
        <form type="POST" action="change.php">
            <button type="submit" class="btn btn-secondary mb-3">Terug</button>
        </form>
        <form type="POST" action="game.php">
            <button type="submit" class="btn btn-secondary mb-3">Bevestig</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>