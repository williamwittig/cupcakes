<?php
// Get form data
$cupcakes = $_POST["flavor"];
$name = $_POST["name"];

$valid = true;

// Validate name and array
$valid = $name && $cupcakes;


// Count the number of cupcakes
$count = 0;
foreach ($cupcakes as $cupcake) {
    $count++;
}

// Calculate the price
$price = $count*3.5;

// Display results
if ($valid) {
    echo "<h3 class='mb-3'>Thank you, $name, for your order!</h3>";
    echo "<h3>Order Summary:</h3>";
    echo "<ul class='p-1'>";

    for ($i = 0; $i < count($cupcakes); $i++) {
        echo "<li>$cupcakes[$i]</li>";
    }
    echo "</ul>";

    echo "<h3>Order Total: $". number_format($price, 2, '.', '')."</h3>";

} else {
    echo "Missing Required Form inputs";
}