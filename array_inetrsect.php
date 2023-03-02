
<?php

$arr2=[];
$arr1 = array(
            array('nshostname' => 'ns1.registry.gov.in', 'nsip' => '11.11.11.11'),
            array('nshostname' => 'ns2.registry.gov.in', 'nsip' => '11.11.11.11'),
            array('nshostname' => 'ns3.registry.gov.in', 'nsip' => '11.11.11.11'),
        );

$arr2 = array(
             array('nshostname' => 'ns1.registry.gov.in', 'nsip' => '11.11.11.11'),
             array('nshostname' => 'ns2.registry.gov.in', 'nsip' => '11.11.11.11'),
            
        );
		
    foreach($arr2 as $key=>$values){
		      
			if(in_array($values['nshostname'],array_column($arr1,'nshostname'))){
				
			   unset($arr2[$key]);
			
				  
			}
    }
	  
	  echo "<pre>";
	  print_r($arr2);
		  
		 
  
?>

