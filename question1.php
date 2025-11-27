<!-- 
# Running instructions

I am assuming you are going to run the php file
Just drop the php file into any php environment like laragon or local
and it will run as a webpage.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laragon</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <h1 class="title" title="Question 1">Question 1</h1>
            <div class="info">
                <p>1. Write a program/script that prints the numbers from 1 to 100. But for multiples of three print
                    "MARS" instead of the number and for the multiples of five print "Works". For numbers which are
                    multiples of both three and five print "MARSWorks". Use JavaScript or PHP to respond to this
                    question (NOTE: we will execute the code, so please make sure it actually works!)</p>
            </div>
            <div class="opt">
                <hr>
                <h1>Answer</h1>
                <?php
                $count = 0;
                for ($i = 1; $i <= 100; $i++) {

                    if ($i % 3 === 0 && $i % 5 === 0) {
                        echo "MARSWorks";
                    } elseif ($i % 3 === 0) {
                        echo "MARS";
                    } elseif ($i % 5 === 0) {
                        echo "Works";
                    } else {
                        echo $i;
                    }
                    $count++;

                    // remove the last comma separator
                    echo $count == 100 ? "" : ", ";

                    // Add a new line after 5 results
                    if ($count % 5 === 0)
                        echo "<br>";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>