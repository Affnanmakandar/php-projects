<?php
echo "welcome to tutorial on functions <br>";
function processMarks($marksarr){
    $sum=0;
    foreach ($marksarr as  $value) {
        $sum += $value;

    }
    return $sum ;
    // $sum ki variable ko return kar do;
}
function avgMarks($marksarr){
    $sum=0;
    $i=1;

    foreach ($marksarr as  $value) {
        $sum += $value;
        $i++;

    }
    // divide kar dunga sixe of array se $i ko taaki mereko average marks mil jaaye;
    return $sum /$i;
    // $sum ki variable ko return kar do aur i se divide kar do;
}

    $affnan =[98,99,100,65,78];
    // koi bhi naam se define karo par function name same rehna chaiye;
$summarksaffnan = processmarks ($affnan);

echo "Total marks scored by affnan out of 600 is $summarksaffnan";
$akshad = [34,45,98,23,34];
// akshad copy ho jayega marks array mei
 $summarks = avgMarks($akshad);
echo "Total marks scored by akshad out of 600 is $summarks";


?>