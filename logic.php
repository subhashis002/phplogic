<?php
    $billcycle = 5;
   // $migrationDay = date('d');
	$migrationDay = "23";
	//echo $migrationDay."\n";
    if($billcycle ==3){
		$scheduleID = '1020'; 
        if($migrationDay <= 8){
            $currentPamPeriod = "BillCycle".date("Y-m-08");
			$lastEvaluationDate = date("09mY",strtotime("-1 month"));
           
        }else{
			$currentPamPeriod = "BillCycle".date("Y-m-08",strtotime("+1 month"));
			$lastEvaluationDate = date("09mY");
        }
    }
	
	if($billcycle ==4){
		 $scheduleID = '1030';
        if($migrationDay <= 15){           
            $currentPamPeriod = "BillCycle".date("Y-m-15");			
            $lastEvaluationDate = date("16mY",strtotime("-1 month"));
        }else{
			$currentPamPeriod = "BillCycle".date("Y-m-15",strtotime("+1 month"));
			$lastEvaluationDate = date("16mY");
        }
    }
	
	if($billcycle ==5){
		$scheduleID = '1040';
        if($migrationDay <= 22){           
            $currentPamPeriod = "BillCycle".date("Y-m-22");
            $lastEvaluationDate = date("23mY",strtotime("-1 month"));
        }else{
			$currentPamPeriod = "BillCycle".date("Y-m-22",strtotime("+1 month"));
			$lastEvaluationDate = date("23mY");
        }
    }
	
	if($billcycle ==1){
		$scheduleID = '1010';
		$currentPamPeriod = "BillCycle".date("Y-m-d",strtotime("last day of this month"));		
		$lastEvaluationDate = date("dmY",strtotime("first day of this month"));	
	}
 
	
	echo "migrationDay ".$migrationDay."\n";
	echo "lastEvaluationDate ".$lastEvaluationDate."\n";
	echo "currentPamPeriod ".$currentPamPeriod."\n";
	echo "scheduleID ".$scheduleID."\n";
	echo "billcycle ".$billcycle."\n";
	
?>
