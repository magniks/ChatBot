<?php if(!isset($_COOKIE['Name'])) {
    header('Location: index.php');
}
?>
<?php setcookie("Name", $_POST["name"], time() + (86400 * 30 * 7), "/"); ?>
<?php header('Location: bevestigen.php');?>
<!DOCTYPE html>
<html>
<head>
<title>De Uitwisseling</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link rel="stylesheet" href="styles.css">

</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>