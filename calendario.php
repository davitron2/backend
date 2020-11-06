
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/calendario.css">
    <title>Calendario PHP</title>
    
</head>
<body>

<?php

$año = date("Y");
$mes = date("m");
$diaHoy = date("j");
$nomMes = 'Marzo';

$diaSemana=date("w",mktime(0,0,0,$mes,1,$año))+1;

$ultimoDia=date("d",(mktime(0,0,0,$mes+1,1,$año)-1));
?>

<div class="container"><h1><?php echo $nomMes." ".$año?></h1></div>
<div class="container">
        <table id="calendario" class="table table-striped ">
        
            <thead>
                <th>Dom</th>
                <th>Lun</th>
                <th>Mar</th>
                <th>Mie</th>
                <th>Jue</th>
                <th>Vie</th>
                <th>Sab</th>
                
            </thead>
            
            <tbody >
            <tr>
		<?php
		$ult_celda=$diaSemana+$ultimoDia;
		
		for($i=1;$i<=42;$i++)
		{
			if($i==$diaSemana)
			{
				$dia=1;
			}
			if($i<$diaSemana || $i>=$ult_celda)
			{
				echo "<td>&nbsp;</td>";
			}else{
				
				if($dia==$diaHoy)
					echo "<td class='hoy'>$dia</td>";
				else
					echo "<td>$dia</td>";
				$dia++;
			}
			
			if($i%7==0)
			{
				echo "</tr><tr>\n";
			}
		}
	?>
	</tr>
            </tbody>
            
        </table>
    </div>

    
</body>
</html>
 
