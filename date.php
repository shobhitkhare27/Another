<?php
	
function numberOfdays($date1, $date2, $separator){
	
	$date1Array = explode($separator, $date1);
	$date2Array = explode($separator, $date2);
	echo "<pre>";
	print_r($date1Array);
	print_r($date2Array);
	
	//get daays from date
	if($date2Array[1] > $date1Array[1]) {
		$daysfromDate = $date2Array[1] - $date1Array[1];
	} else {
		if($date2Array[0] == 2 && isLeapYear9$date2Array[2])){
			$daysfromDate = ($date2Array[1]+29) - $date1Array[1];
			$monthAdded = true;
		}else if($date2Array[0] == 2 && !isLeapYear9$date2Array[2])){
			$daysfromDate = ($date2Array[1]+28) - $date1Array[1];
			$monthAdded = true;
		} else if(MonthDays($date2Array[0] == 'thirtyDays')){
			$daysfromDate = ($date2Array[1]+30) - $date1Array[1];
			$monthAdded = true;
		} else {
			$daysfromDate = ($date2Array[1]+31) - $date1Array[1];
			$monthAdded = true;
		}
	}
	
	if($monthAded == true) {
		$date2Array[0] = $date2Array[0] -1;
	}
	
	
	
}

function isLeapYear($year){
	if($year % 4 == 0 || $year % 400 == 0 || $year % 100 == 0){
		return true;
	} else {
		return false;
	}
}

function MonthDays($month) {
	$thiry_days_months = array (4,6,9,11);
	$thiry_one_days_months = array (1,3,5,7,8,10,12);
	
	if($month != 2) {
		if(in_array($month, $thiry_days_months)){
			return 'thirtyDays';
		} else if(in_array($month, $thiry_one_days_months)){
			return 'thirtyOneDays';
		}
	}
}

$totalDays = numberOfdays('06/06/2018', '06/26/2019', '/');

echo $totalDays;
	
	
?>
