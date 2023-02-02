<?php
$people = [
    ["name"=>"Suchit","age"=>25],
    ["name"=>"Sachin","age"=>91],
    ["name"=>"Vishal","age"=>14],
    ["name"=>"Charan","age"=>18],
    ["name"=>"Nayan","age"=>65],
    ["name"=>"Ashwin","age"=>10],
    ["name"=>"Papu","age"=>12],
    ["name"=>"Datta","age"=>35],
    ["name"=>"Tukaram","age"=>85],
    ["name"=>"Yuvraj","age"=>87],
    ["name"=>"Dhiraj","age"=>25],
    ["name"=>"Suraj","age"=>17],

];

$chilern = 0;
$adualt = 0;
$person = [];

// echo "We want to count the number of adualts (18years old) And chilern<pre>";

// print_r($people);
foreach($people as $key=>$value){
    // print_r($value['age']);
    $age = $value['age'];
    if($age>=18){
        // $count = count($value);
        // $count = array_count_values($value);
        // print_r($count);
        $adualt++;
       
        if($age>= 22 && $age<=30){
            $person[] = $value;
        }

    }else{
        $chilern++;
    }
    
}

echo "count the number of adualts  $adualt<br>";PHP_EOL;
echo "count the number of chilern $chilern<br>";PHP_EOL;
echo "Job apply age 22-30 <pre>";
print_r($person);
?>