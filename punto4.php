<?php 

	$a=$_GET['formulario1'];
	$b=$_GET['formulario2'];
	$c=$_GET['formulario3'];
	$d=$_GET['formulario4'];
	$e=$_GET['formulario5'];
	$o=$_GET['formulario6'];
	$primos=[2,3,5,7,11,13,17];
	$suma1=($a*$d)+($b*$c);
	$demoninadorsuma=$b*$d;
	$suma=$suma1/$demoninadorsuma;
	$resta=($a*$d)-($b*$c);
	$demoninadorresta=$b*$d;
	$resta=$resta/$demoninadorresta;
	$multiplicacion=$a*$c;
	$denominadormultiplicacion=$b*$d;
	$multiplicacion=$multiplicacion/$denominadormultiplicacion;
	$division=$a*$d;
	$denominadordivision=$b*$c;
	$division=$division/$denominadordivision;
	$potencia=pow($a, $e);
	$denominadorpotencia= pow($b, $e);
	$potencia=$potencia/$denominadorpotencia;
	$raiz=sqrt($a);
	$denominadorraiz=sqrt($b);
	$raiz=$raiz/$denominadorraiz;
	switch ($o) {
		case 1:
			echo "en fraccion <br>";			
			echo "$suma1 / $demoninadorsuma<br>";

	echo "<br>";
	$i=0;


	while ($primos[$i]<$suma1 && $primos[$i]<$demoninadorsuma){
		

		if ($suma1%$primos[$i] ==0 && $demoninadorsuma%$primos[$i] ==0) {
			$suma1=$suma1/$primos[$i];
			$demoninadorsuma=$demoninadorsuma/$primos[$i];
		}
		else{
			$i=$i+1;
		}
		echo "simplificado<br>";
		echo "$suma1 / $demoninadorsuma <br>";
		
	}
	echo "suma= $suma <br>";
	


			break;
			case 2:
			echo "resta= $resta ";
	echo "<br>";
			break;
			case 3:
				echo "multiplicacion= $multiplicacion ";
				echo "<br>";
				break;
			case 4:
			echo "division= $division ";
	echo "<br>";
			break;
			case 5:
			echo "potencia= $potencia ";
	echo "<br>";
			break;
			case 6:
				echo "raiz= $raiz ";
	echo "<br>";
			break;
			

		
		default:
				echo "error ";
	echo "<br>";
			break;
	}

	
	

	
	




 ?>