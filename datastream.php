﻿
<?php


	date_default_timezone_set("UTC");
	$now =  date("H:i:s", time());
	//Get random numbers
	$randomValueRetail = floor(rand(5,30));
	$randomValueOnline = floor(rand(1,10));
	//Output


  
// Specify the start date. This date can be any English textual format  
$date_from = $_POST["mindate"];;   
$date_from = strtotime($date_from); // Convert date to a UNIX timestamp  
  
// Specify the end date. This date can be any English textual format  
$date_to = $_POST["maxdate"];  
$date_to = strtotime($date_to); // Convert date to a UNIX timestamp  
  
// Loop from the start date to end date and output all dates inbetween  

if($_POST["mindate"]!="")
{
	$valuearray=(dateRange( $_POST["mindate"],$_POST["maxdate"]) );
	$length=count($valuearray);

echo json_encode($valuearray);

//json_encode( dateRange( $_POST["mindate"], $_POST["maxdate"]) );
   

}else
{   
 
$valuearray=(dateRange('2014-01-01','2014-02-29') );
	$length=count($valuearray);

echo (rand(0,$length));

echo "&value=".$valuearray[(rand(0,$length))];
	
}
	




function dateRange( $first, $last, $step = '+1 day', $format = 'Y/m/d' ) {

	$dates = array();
	$current = strtotime( $first );
	$last = strtotime( $last );

	
 
	//return $values[];
	$search_array = array(
    '2014-01-01' => 100000,
    '2014-01-02' => 200000,
    '2014-01-03' => 500000,
    '2014-01-04' => 400000,
    '2014-01-05' => 500000,
	'2014-01-06' => 600000,
    '2014-01-07' => 300000,
    '2014-01-08' => 800000,
    '2014-01-09' => 200000,
    '2014-01-10' => 950000,
	
	 '2014-01-11' => 100000,
    '2014-01-12' => 200000,
    '2014-01-13' => 500000,
    '2014-01-14' => 700000,
    '2014-01-15' => 300000,
	
	'2014-01-16' => 200000,
    '2014-01-17' => 100000,
    '2014-01-18' => 600000,
    '2014-01-19' => 500000,
    '2014-01-20' => 400000,
	
	 '2014-01-21' => 100000,
    '2014-01-22' => 200000,
    '2014-01-23' => 800000,
    '2014-01-24' => 300000,
    '2014-01-25' => 400000,
	
	 '2014-01-26' => 300000,
    '2014-01-27' => 400000,
    '2014-01-28' => 500000,
    '2014-01-29' => 200000,
    '2014-01-30' => 600000,
	'2014-01-31' => 400000,
	
	//
	 '2014-02-01' => 200000,
    '2014-02-02' => 300000,
    '2014-02-03' => 500000,
    '2014-02-04' => 300000,
    '2014-02-06' => 200000,
	 '2014-02-06' => 100000,
    '2014-02-07' => 300000,
    '2014-02-08' => 700000,
    '2014-02-09' => 200000,
    '2014-02-10' => 100000,
	
	 '2014-02-11' => 100000,
    '2014-02-12' => 300000,
    '2014-02-13' => 500000,
    '2014-02-14' => 700000,
    '2014-02-15' => 800000,
	
	 '2014-02-16' => 100000,
    '2014-02-17' => 200000,
    '2014-02-18' => 900000,
    '2014-02-19' => 600000,
    '2014-02-20' => 700000,
	
	 '2014-02-21' => 800000,
    '2014-02-22' => 600000,
    '2014-02-23' => 900000,
    '2014-02-24' => 600000,
    '2014-02-25' => 300000,
	
	 '2014-02-26' => 100000,
    '2014-02-27' => 300000,
    '2014-02-28' => 500000,
    '2014-02-29' => 700000,
    '2014-02-30' => 600000,
	'2014-02-31' => 700000,
	
	'2014-03-01' => 900000,
    '2014-03-02' => 800000,
    '2014-03-03' => 200000,
    '2014-03-04' => 300000,
    '2014-03-06' => 200000,
	 '2014-03-06' =>100000,
    '2014-03-07' => 400000,
    '2014-03-08' => 500000,
    '2014-03-09' => 600000,
    '2014-03-10' => 700000,
	
	 '2014-03-11' =>800000,
    '2014-03-12' => 900000,
    '2014-03-13' => 700000,
    '2014-03-14' => 100000,
    '2014-03-15' => 200000,
	
	 '2014-03-16' =>600000,
    '2014-03-17' => 200000,
    '2014-03-18' => 500000,
    '2014-03-19' => 600000,
    '2014-03-20' => 700000,
	
	 '2014-03-21' => 100000,
    '2014-03-22' => 500000,
    '2014-03-23' => 700000,
    '2014-03-24' => 100000,
    '2014-03-25' => 100000,
	
	 '2014-03-26' => 800000,
    '2014-03-27' => 900000,
    '2014-03-28' => 600000,
    '2014-03-29' => 500000,
    '2014-03-30' => 400000,
	'2014-03-31' => 200000,
	
	//
	
	   '2014-04-01' => 700000,
    '2014-04-02' => 200000,
    '2014-04-03' => 500000,
    '2014-04-04' => 300000,
    '2014-04-06' => 200000,
	 '2014-04-06' => 100000,
    '2014-04-07' => 400000,
    '2014-04-08' => 500000,
    '2014-04-09' => 200000,
    '2014-04-10' => 100000,
	
	 '2014-04-11' => 100000,
    '2014-04-12' => 500000,
    '2014-04-13' => 800000,
    '2014-04-14' => 100000,
    '2014-04-15' => 200000,
	
	 '2014-04-16' => 300000,
    '2014-04-17' => 200000,
    '2014-04-18' => 100000,
    '2014-04-19' => 200000,
    '2014-04-20' => 100000,
	
	 '2014-04-21' => 500000,
    '2014-04-22' => 600000,
    '2014-04-23' => 700000,
    '2014-04-24' => 800000,
    '2014-04-25' => 900000,
	
	 '2014-04-26' => 600000,
    '2014-04-27' => 500000,
    '2014-04-28' => 300000,
    '2014-04-29' => 200000,
    '2014-04-30' => 100000,
	'2014-04-31' => 400000,
	
	//
	
	   '2014-05-01' => 100000,
    '2014-05-02' => 500000,
    '2014-05-03' => 700000,
    '2014-05-04' => 100000,
    '2014-05-05' => 200000,
	 '2014-05-05' => 100000,
    '2014-05-07' => 500000,
    '2014-05-08' => 600000,
    '2014-05-09' => 100000,
    '2014-05-10' => 700000,
	
	 '2014-05-11' => 100000,
    '2014-05-12' => 500000,
    '2014-05-13' => 700000,
    '2014-05-14' => 100000,
    '2014-05-15' => 100000,
	
	 '2014-05-16' => 100000,
    '2014-05-17' => 500000,
    '2014-05-18' => 700000,
    '2014-05-19' => 100000,
    '2014-05-20' => 100000,
	
	 '2014-05-21' => 100000,
    '2014-05-22' => 500000,
    '2014-05-23' => 700000,
    '2014-05-24' => 100000,
    '2014-05-25' => 100000,
	
	 '2014-05-26' => 100000,
    '2014-05-27' => 500000,
    '2014-05-28' => 700000,
    '2014-05-29' => 100000,
    '2014-05-30' => 100000,
	'2014-05-31' => 100000,
	
		
	//
	
	   '2014-06-01' => 100000,
    '2014-06-02' => 500000,
    '2014-06-03' => 700000,
    '2014-06-04' => 100000,
    '2014-06-06' => 100000,
	 '2014-06-06' => 100000,
    '2014-06-07' => 500000,
    '2014-06-08' => 700000,
    '2014-06-09' => 100000,
    '2014-06-10' => 100000,
	
	 '2014-06-11' => 100000,
    '2014-06-12' => 500000,
    '2014-06-13' => 700000,
    '2014-06-14' => 100000,
    '2014-06-15' => 100000,
	
	 '2014-06-16' => 100000,
    '2014-06-17' => 500000,
    '2014-06-18' => 700000,
    '2014-06-19' => 100000,
    '2014-06-20' => 100000,
	
	 '2014-06-21' => 100000,
    '2014-06-22' => 500000,
    '2014-06-23' => 700000,
    '2014-06-24' => 100000,
    '2014-06-25' => 100000,
	
	 '2014-06-26' => 100000,
    '2014-06-27' => 500000,
    '2014-06-28' => 700000,
    '2014-06-29' => 100000,
    '2014-06-30' => 100000,
	'2014-06-31' => 100000,


//

	
	   '2014-07-01' => 100000,
    '2014-07-02' => 500000,
    '2014-07-03' => 700000,
    '2014-07-04' => 100000,
    '2014-07-07' => 100000,
	 '2014-07-07' => 100000,
    '2014-07-07' => 500000,
    '2014-07-08' => 700000,
    '2014-07-09' => 100000,
    '2014-07-10' => 100000,
	
	 '2014-07-11' => 100000,
    '2014-07-12' => 500000,
    '2014-07-13' => 700000,
    '2014-07-14' => 100000,
    '2014-07-15' => 100000,
	
	 '2014-07-16' => 100000,
    '2014-07-17' => 500000,
    '2014-07-18' => 700000,
    '2014-07-19' => 100000,
    '2014-07-20' => 100000,
	
	 '2014-07-21' => 100000,
    '2014-07-22' => 500000,
    '2014-07-23' => 700000,
    '2014-07-24' => 100000,
    '2014-07-25' => 100000,
	
	 '2014-07-26' => 100000,
    '2014-07-27' => 500000,
    '2014-07-28' => 700000,
    '2014-07-29' => 100000,
    '2014-07-30' => 100000,
	'2014-07-31' => 100000,
//
//

	
	   '2014-08-01' => 100000,
    '2014-08-02' => 500000,
    '2014-08-03' => 700000,
    '2014-08-04' => 100000,
    '2014-08-05' => 100000,
	 '2014-08-06' => 100000,
    '2014-08-07' => 500000,
    '2014-08-08' => 700000,
    '2014-08-09' => 100000,
    '2014-08-10' => 100000,
	
	 '2014-08-11' => 100000,
    '2014-08-12' => 500000,
    '2014-08-13' => 700000,
    '2014-08-14' => 100000,
    '2014-08-15' => 100000,
	
	 '2014-08-16' => 100000,
    '2014-08-17' => 500000,
    '2014-08-18' => 700000,
    '2014-08-19' => 100000,
    '2014-08-20' => 100000,
	
	 '2014-08-21' => 100000,
    '2014-08-22' => 500000,
    '2014-08-23' => 700000,
    '2014-08-24' => 100000,
    '2014-08-25' => 100000,
	
	 '2014-08-26' => 100000,
    '2014-08-27' => 500000,
    '2014-08-28' => 700000,
    '2014-08-29' => 100000,
    '2014-08-30' => 100000,
	'2014-08-31' => 100000,

//

	
	   '2014-09-01' => 100000,
    '2014-09-02' => 500000,
    '2014-09-03' => 700000,
    '2014-09-04' => 100000,
    '2014-09-05' => 100000,
	 '2014-09-06' => 100000,
    '2014-09-07' => 500000,
    '2014-09-08' => 700000,
    '2014-09-09' => 100000,
    '2014-09-10' => 100000,
	
	 '2014-09-11' => 100000,
    '2014-09-12' => 500000,
    '2014-09-13' => 700000,
    '2014-09-14' => 100000,
    '2014-09-15' => 100000,
	
	 '2014-09-16' => 100000,
    '2014-09-17' => 500000,
    '2014-09-18' => 700000,
    '2014-09-19' => 100000,
    '2014-09-20' => 100000,
	
	 '2014-09-21' => 100000,
    '2014-09-22' => 500000,
    '2014-09-23' => 700000,
    '2014-09-24' => 100000,
    '2014-09-25' => 100000,
	
	 '2014-09-26' => 100000,
    '2014-09-27' => 500000,
    '2014-09-28' => 700000,
    '2014-09-29' => 100000,
    '2014-09-30' => 100000,
	'2014-09-31' => 100000,


//

	
	   '2014-10-01' => 100000,
    '2014-10-02' => 500000,
    '2014-10-03' => 700000,
    '2014-10-04' => 100000,
    '2014-10-05' => 100000,
	 '2014-10-06' => 100000,
    '2014-10-07' => 500000,
    '2014-10-08' => 700000,
    '2014-10-09' => 100000,
    '2014-10-10' => 100000,
	
	 '2014-10-11' => 100000,
    '2014-10-12' => 500000,
    '2014-10-13' => 700000,
    '2014-10-14' => 100000,
    '2014-10-15' => 100000,
	
	 '2014-10-16' => 100000,
    '2014-10-17' => 500000,
    '2014-10-18' => 700000,
    '2014-10-19' => 100000,
    '2014-10-20' => 100000,
	
	 '2014-10-21' => 100000,
    '2014-10-22' => 500000,
    '2014-10-23' => 700000,
    '2014-10-24' => 100000,
    '2014-10-25' => 100000,
	
	 '2014-10-26' => 100000,
    '2014-10-27' => 500000,
    '2014-10-28' => 700000,
    '2014-10-29' => 100000,
    '2014-10-30' => 100000,
	'2014-10-31' => 100000,

//

	
	   '2014-11-01' => 100000,
    '2014-11-02' => 500000,
    '2014-11-03' => 700000,
    '2014-11-04' => 100000,
    '2014-11-05' => 100000,
	 '2014-11-06' => 100000,
    '2014-11-07' => 500000,
    '2014-11-08' => 700000,
    '2014-11-09' => 100000,
    '2014-11-10' => 100000,
	
	 '2014-11-11' => 100000,
    '2014-11-12' => 500000,
    '2014-11-13' => 700000,
    '2014-11-14' => 100000,
    '2014-11-15' => 100000,
	
	 '2014-11-16' => 100000,
    '2014-11-17' => 500000,
    '2014-11-18' => 700000,
    '2014-11-19' => 100000,
    '2014-11-20' => 100000,
	
	 '2014-11-21' => 100000,
    '2014-11-22' => 500000,
    '2014-11-23' => 700000,
    '2014-11-24' => 100000,
    '2014-11-25' => 100000,
	
	 '2014-11-26' => 100000,
    '2014-11-27' => 500000,
    '2014-11-28' => 700000,
    '2014-11-29' => 100000,
    '2014-11-30' => 100000,
	'2014-11-31' => 100000,

//

	
	   '2014-12-01' => 100000,
    '2014-12-02' => 500000,
    '2014-12-03' => 700000,
    '2014-12-04' => 100000,
    '2014-12-12' => 100000,
	 '2014-12-12' => 100000,
    '2014-12-12' => 500000,
    '2014-12-12' => 700000,
    '2014-12-12' => 100000,
    '2014-12-12' => 100000,
	
	 '2014-12-12' => 100000,
    '2014-12-12' => 500000,
    '2014-12-13' => 700000,
    '2014-12-14' => 100000,
    '2014-12-15' => 100000,
	
	 '2014-12-16' => 100000,
    '2014-12-17' => 500000,
    '2014-12-18' => 700000,
    '2014-12-19' => 100000,
    '2014-12-20' => 100000,
	
	 '2014-12-21' => 100000,
    '2014-12-22' => 500000,
    '2014-12-23' => 700000,
    '2014-12-24' => 100000,
    '2014-12-25' => 100000,
	
	 '2014-12-26' => 100000,
    '2014-12-27' => 500000,
    '2014-12-28' => 700000,
    '2014-12-29' => 100000,
    '2014-12-30' => 100000,
	'2014-12-31' => 100000
	
	);
	while( $current <= $last ) {
		
		 $keysearch=date("Y-m-d",$current);
       
		$dates[] = date( $format, $current );
		
		
		
		  $keysearch=date("Y-m-d",$current);
		  //echo $keysearch;
      if (array_key_exists($keysearch,$search_array)) {
        $values[]= $search_array[$keysearch];
      }
	$current = strtotime( $step, $current );	
}

   
	return $values;	 
}

?>