<!DOCTYPE html>

<html> <head> <title>Electricity Bill</title> </head> <body>

<center> <h2>Electricity Bill</h2>

<form method="POST" action="">
    Enter your name:<br>
    <input type="text" name="name"><br><br>

    How many units are used?<br>
    <input type="number" name="units"><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $units = $_POST['units'];

    $rate1 = 0.50;
    $rate2 = 1;
    $rate3 = 1.5;

    if (empty($name))
    {
        echo "<script>alert('Please enter your name');</script>";
    }
    elseif ($units == "")
    {
        echo "<script>alert('Please enter units');</script>";
    }
    else
    {
        if ($units <= 100)
        {
            $bill = $units * $rate1;
        }
        elseif ($units <= 300)
        {
            $bill = $units * $rate2;
        }
        else
        {
            $bill = $units * $rate3;
        }

        echo "<script>alert('Form submitted successfully!');</script>";

        echo "<h3>Electricity Bill Details</h3>";
        echo "Name: $name <br><br>";
        echo "Units Used: $units <br><br>";
        echo "Electricity Bill: Rs. $bill";
    }
}
?>


</center>

</body> </html>
