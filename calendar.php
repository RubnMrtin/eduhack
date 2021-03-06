<?php

	function mostrar_calendario($mes,$ano){
   //tomo el nombre del mes que hay que imprimir
   $nombre_mes = dame_nombre_mes($mes);
   
   //construyo la tabla general
   echo '<table class="tablacalendario" cellspacing="3" cellpadding="2" border="0">';
   echo '<tr><td colspan="7" class="tit">';
   //tabla para mostrar el mes el año y los controles para pasar al mes anterior y siguiente
   echo '<table width="100%" cellspacing="2" cellpadding="2" border="0"><tr><td class="messiguiente">';
   //calculo el mes y ano del mes anterior
   $mes_anterior = $mes - 1;
   $ano_anterior = $ano;
   if ($mes_anterior==0){
      $ano_anterior--;
      $mes_anterior=12;
   }
   echo '<a href="resume.php?nuevo_mes=' . $mes_anterior . '&nuevo_ano=' . $ano_anterior .'"><span>-</span></a></td>';
    echo '<td class="titmesano">' . $nombre_mes . " " . $ano . '</td>';
    echo '<td class="mesanterior">';
   //calculo el mes y ano del mes siguiente
   $mes_siguiente = $mes + 1;
   $ano_siguiente = $ano;
   if ($mes_siguiente==13){
      $ano_siguiente++;
      $mes_siguiente=1;
   }
   echo '<a href="resume.php?nuevo_mes=' . $mes_siguiente . '&nuevo_ano=' . $ano_siguiente . '"><span>+</span></a></td>';
   //finalizo la tabla de cabecera
   echo '</tr></table>';
   echo '</td></tr>';
   //fila con todos los días de la semana
   echo '   <tr>
            <td width="14%" class="diasemana"><span>L</span></td>
            <td width="14%" class="diasemana"><span>M</span></td>
            <td width="14%" class="diasemana"><span>X</span></td>
            <td width="14%" class="diasemana"><span>J</span></td>
            <td width="14%" class="diasemana"><span>V</span></td>
            <td width="14%" class="diasemana"><span>S</span></td>
            <td width="14%" class="diasemana"><span>D</span></td>
         </tr>';
   
   //Variable para llevar la cuenta del dia actual
   $dia_actual = 1;
   
   //calculo el numero del dia de la semana del primer dia
   $numero_dia = calcula_numero_dia_semana(1,$mes,$ano);
   //echo "Numero del dia de demana del primer: $numero_dia <br>";
   
   //calculo el último dia del mes
   $ultimo_dia = ultimoDia($mes,$ano);
   
   //escribo la primera fila de la semana
   echo "<tr>";
   for ($i=0;$i<7;$i++){
      if ($i < $numero_dia){
         //si el dia de la semana i es menor que el numero del primer dia de la semana no pongo nada en la celda
         echo '<td class="diainvalido"><span></span></td>';
      } else {
         echo '<td class="diavalido"><span>' . $dia_actual . '</span></td>';
         $dia_actual++;
      }
   }
   echo "</tr>";
   
   //recorro todos los demás días hasta el final del mes
   $numero_dia = 0;
   while ($dia_actual <= $ultimo_dia){
      //si estamos a principio de la semana escribo el <TR>
      if ($numero_dia == 0)
         echo "<tr>";
      echo '<td class="diavalido"><span>' . $dia_actual . '</span></td>';
      $dia_actual++;
      $numero_dia++;
      //si es el uñtimo de la semana, me pongo al principio de la semana y escribo el </tr>
      if ($numero_dia == 7){
         $numero_dia = 0;
         echo "</tr>";
      }
   }
   
   //compruebo que celdas me faltan por escribir vacias de la última semana del mes
   for ($i=$numero_dia;$i<7;$i++){
      echo '<td class="diainvalido"><span></span></td>';
   }
   
   echo "</tr>";
   echo "</table>";
}

function calcula_numero_dia_semana($dia,$mes,$ano){ 
   	$numerodiasemana = date('w', mktime(0,0,0,$mes,$dia,$ano)); 
   	if ($numerodiasemana == 0) 
      	$numerodiasemana = 6; 
   	else 
      	$numerodiasemana--; 
   	return $numerodiasemana; 
}

function ultimoDia($mes,$ano){ 
   	$ultimo_dia=28; 
   	while (checkdate($mes,$ultimo_dia + 1,$ano)){ 
      	$ultimo_dia++; 
   	} 
   	return $ultimo_dia; 
}

function dame_nombre_mes($mes){ 
   	switch ($mes){ 
      	case 1: 
         	$nombre_mes="Enero"; 
         	break; 
      	case 2: 
         	$nombre_mes="Febrero"; 
         	break; 
      	case 3: 
         	$nombre_mes="Marzo"; 
         	break; 
      	case 4: 
         	$nombre_mes="Abril"; 
         	break; 
      	case 5: 
         	$nombre_mes="Mayo"; 
         	break; 
      	case 6: 
         	$nombre_mes="Junio"; 
         	break; 
      	case 7: 
         	$nombre_mes="Julio"; 
         	break; 
      	case 8: 
         	$nombre_mes="Agosto"; 
         	break; 
      	case 9: 
         	$nombre_mes="Septiembre"; 
         	break; 
      	case 10: 
         	$nombre_mes="Octubre"; 
         	break; 
      	case 11: 
         	$nombre_mes="Noviembre"; 
         	break; 
      	case 12: 
         	$nombre_mes="Diciembre"; 
         	break; 
   	} 
   	return $nombre_mes; 
}
?>