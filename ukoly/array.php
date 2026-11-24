<?php
//ukol A
$movies=["pirates of the carabean","dark knight","openheimer"."avenegrs"];
echo $movies[0];
echo $movies[3];
$movies[]="davids adventures";
echo "počet filmu v poli:" .count($movies);
//ukol B
echo"<ul>";
foreach($movies as $movie1){
    echo "<li>". htmlspecialchars($movie1)."</li>";
}
//ukol C
$grades=[1,2,1,3,2,1,4];
$sum=0;
