<?php

$arreglitos = ['2, 3, 14, 7, 13', '1, 2, 14, 13, 152'];

function findPoint($strArr)
{
    /**
     * Usando la función explode para separar
     * los elementos de cada array del principal
     */
    $array1 = explode(', ', $strArr[0]);
    $array2 = explode(', ', $strArr[1]);

    /**
     * Utilizando la funcion array_intersect para devolver
     * los valores repetidos del array1 vs array2
     */
    $strArr = array_intersect($array1, $array2);
    if (!$strArr) {
      //Si no hay coincidencias, devuelve falso
      return FALSE;
    }

    sort($strArr); //Ordenar la nueva lista

    /**
     * Usando la función implode para agrupar y 
     * separarlo por un delimitador "," generando asi
     * un nuevo array
     */
    $strArr = implode(',', $strArr);
    return $strArr;
}

// LLamando a la funcióon pasando la variable
echo findPoint($arreglitos);
