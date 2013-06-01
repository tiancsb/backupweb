
<?php  
	/*
		La función toma los parámetros dados en la url, elimina la parte
		de la URL que no interesa (aSacar) y descompone la url resultante
		en dos: la página y los parámetros sobre dicha página.
		
		Ej.: psalud/clinicas/clinica_1/minisitio
		la página solicitada ($parts['page']) sería clinicas.php y los parámetros
		($parts['params'], contiene un arreglo) serían 'clínica_1' y 'minisitio'.

	*/
	function rewrite($aSacar){
	  #remove the directory path we don't want 
	  $request  = str_replace($aSacar, "", $_SERVER['REQUEST_URI']); 		
	 
	  #split the path by '/'   
	  $params = explode("/", $request);  
	  $parts['page'] = $params[0];
	  unset($params[0]);
	  $params = array_values($params); //reacomoda los indices
	  $parts['params'] = $params;
	  return $parts;
	}
?> 