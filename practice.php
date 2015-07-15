<?php
$leo=['name'=>"Leo", 'staff_id' => 1234];
$macharia=['name'=>"Macharia", 'staff_id' => 12345];
$Kevin=['name'=>"Kevin", 'staff_id' => 6789];

$staff=array($leo,$macharia);
//showAllStaff($staff);
$no_of_staff=count($staff);
//echo $no_of_staff;
$vacancies=5-$no_of_staff;

foreach ($staff as $key => $value) {
	echo $value['name']."<br>";
	# code...
}


for ($i=0; $i <$no_of_staff ; $i++) { 
	echo $staff[i][name].\\\"<br>";
	# code...
}

if ($no_of_staff>5){

	echo "no vacancy";

}else{
	echo "vacancies available" .$vacancies;
}

function showAllStaff($staff){
	//dosomething
	print_r($staff);
}
//process an incoming sms

/*$sms="Hi, this is Kevin play for me fundamendozz";
$arr=explode(' ',trim($sms));
$prefix=$arr[0];

$findme='KISS';
$pos=strpos($sms,$findme);

$prefix=substr(trim($sms),0,4);
print_r($prefix);

if ($pos){
	echo"send to shaffie";
}else{
	echo"send to kingangi";
}

if (strtolower($prefix)=='kiss'){
	echo"send to shaffie";
}else{
	echo"send to kingangi";
}

//$arr=explode(' ',trim($sms));
//print_r($arr[0]);


switch (strtolower($prefix)) {
    case 'inooro':
    echo"SMS for Inooro"
        //code to be executed if n=label1;
        break;
    case 'citizen':
    echo"SMS for Citizen"
        //code to be executed if n=label2;
        break;
    case 'ramogi':
    echo"Message for Ramogi"
        //code to be executed if n=label3;
        break;
    ...
    default:
        echo"confused";
}*/

?>