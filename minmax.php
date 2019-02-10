<html>
<head>
	<title>Min and Max</title>
</head>
<body>
<font face="Arial">
	<table style="width: 100%" align="center">
	<tr><td align="center">
		<?php

		if(isset($_POST['num1']) && !empty($_POST['num1']) && !empty($_POST['num2']) && !empty('num3')){
			$num1=$_POST['num1'];
			$num2=$_POST['num2'];
			$num3=$_POST['num3'];
			$operator=$_POST['operator'];
		
		if($operator == "fmin"){
			$fmin = ($num1<$num2) ? $num1:$num2;
			$fmin = ($num1<$num3) ? $num1:$num3;
			$fmin = ($num2<$num3) ? $num2:$num3;
			$fmin = ($num3<$num1) ? $num3:$num1;

			echo "The Minimum Number of<br> $num1, $num2 and $num3 is<br>".($fmin);
		}elseif($operator == "fmax"){
			$fmax = ($num1>$num2) ? $num1:$num2;
			$fmax = ($num1>$num3) ? $num2:$num3;
			$fmax = ($num2>$num3) ? $num3:$num2;
			$fmax = ($num3>$num1) ? $num3:$num1;
			
			echo "The Maximum Number of<br> $num1, $num2 and $num3 is<br>".($fmax);
		}	
		}
		?>
	</td></tr><tr></tr>
	<tr><td align="center">.........................................................</td></tr>
	<tr></tr>
	<tr><td align="center">
	<a href="minmax.html" target="_parent"><input type ="submit" name="back" value="Go Black to Min and Max Program"></a>
	</td></tr>
	<tr><td align="center"><hr width="70%" align="center" noshade>
	</tr></td>
</font>	
</body>
</html>