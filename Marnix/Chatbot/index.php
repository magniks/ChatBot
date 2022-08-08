<?php if(isset($_COOKIE['Name'])) {
    header('Location: game.php');
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
        <form action="cookie.php" method="post" class="form">
            <label for="exampleFormControlInput1" class="form-label formlabel">Teamnaam:</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1"><br>
            <button type="submit" class="btn btn-secondary mb-3">Bevestig</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>