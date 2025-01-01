<?php //list of strings in array 
$myarry = array ( 
    "teks 1","teks 2","teks 3", "teks 4",
    "teks 5","teks 6","teks 7"
);
//randomsize strings 
$randomsize1 = array_rand($myarry);
$randomsize2 = array_rand($myarry);
$randomsize3 = array_rand($myarry);


//prepare output array 
$myvals = array(

    'satu' => '1.' .$myarry [$randomsize1],
    'dua' => '2.' .$myarry [$randomsize2],
    'tiga' => '3.' .$myarry [$randomsize3],
);

//encode array with php json_encode and print output 
echo json_encode($myvals);