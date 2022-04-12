<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
    />

    <title>Cupcakes</title>
</head>
<body>
<div class="m-3">
    <h1>Cupcake Fundraiser</h1>

    <form action="process.php" method="post">
        <label for="nameInput">Your Name:</label>
        <input class="d-block mb-3 w-50" type="text" name="name" id="nameInput" placeholder="Please input your name.">

        <label class="d-block" for="flavorList">Cupcake Flavors:</label>
        <ul class="list-unstyled" id="flavorList">
            <li><input type="checkbox" name="flavor[]" value="The Grasshopper"> The Grasshopper</li>
            <li><input type="checkbox" name="flavor[]" value="Whiskey Maple Bacon"> Whiskey Maple Bacon</li>
            <li><input type="checkbox" name="flavor[]" value="Carrot Walnut"> Carrot Walnut</li>
            <li><input type="checkbox" name="flavor[]" value="Salted Caramel Cupcake"> Salted Caramel Cupcake</li>
            <li><input type="checkbox" name="flavor[]" value="Red Velvet"> Red Velvet</li>
            <li><input type="checkbox" name="flavor[]" value="Lemon Drop"> Lemon Drop</li>
            <li><input type="checkbox" name="flavor[]" value="Tiramisu"> Tiramisu</li>
        </ul>

        <button class="button btn btn-primary" type="submit" >Order</button>
    </form>
</div>

</body>
</html>
