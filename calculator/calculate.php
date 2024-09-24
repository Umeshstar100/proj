<?php
//check if the form is submitted
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //GET THE INPUT VALUES
    $price=$_POST['price'];
    $discount=$_POST['discount'];
    $tax_rate=$_POST['tax'];

    //calculate the discount price
    $discounted_price=$price-$discount;

    //Calculate the final price after applying tax
    $final_price=$discounted_price+($discounted_price*($tax_rate/100));

    echo "<h2>Calculation Result:</h2>";
    echo "Original Price: $".number_format($price,2)."<br>";
    echo "Discounted Price: $".number_format($discounted_price,2)."<br>";
    echo "Final Price after Tax: $".number_format($final_price,2);
}
else{
    echo "Invalid Reqest!";

}

?>
