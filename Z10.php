
<?php
// Ispišite sve vrijednosti $_SERVER niza
// jedno pokraj drugoga?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Post metoda je sigurnija</title>
</head>


<body>

<?php
if(isset($_POST["ime"])){
    echo "<p>Bokić " . $_POST["ime"] . "</p>";
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputIme">Name:</label>
    <input type="text" name="ime" id="inputIme">
    <input type="submit" value="Submit">
</form>


</body>