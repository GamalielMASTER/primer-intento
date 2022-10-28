<table width="500">
        <?php
 
			$numero = 1;	
		
			$total = $data1*$data2;
			for($i = 1; $i < 7; $i++){
				echo "<tr>";
					
					for($j = 1; $j <= 6; $j++){
						if((($numero * $j) == $total) and ($numero == $data2)){
							  
						} else {
							echo "<td width='9%'>".$numero * $j."</td>";  		
						}
					}		
					$numero++;			
				echo "</tr>";
			}	
 
		?>       