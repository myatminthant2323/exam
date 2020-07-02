<php
	$hamburger = 4.95;
	$milkshake = 1.95;
	$cola = 0.85;

	$sales_tax = 7.5/100;
	$pre_tax_tip = 16/100;

	$total = 2*$hamburger + $milkshake + $cola;

	$total = $total - ($total * $pre_tax_tip);
	
	$total = $total - ($total * sales_tax);

	

	echo $total;

?>