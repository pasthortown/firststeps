<?php
   header('Content-type:application/json;charset=utf-8');
   header('Access-Control-Allow-Origin: *');
   header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
   include_once('./AdministradorBaseDatos.php');
   $adminBDD = new AdministradorBaseDatos();
   $parametros = array();
   $sql = 'SELECT CONCAT(Autor.nombres,\' \', Autor.apellidos) as Autor, count(Autor.nombres) as Cuantos FROM Recurso INNER JOIN Autor ON Recurso.idAutor = Autor.id GROUP BY Autor;';
   $respuesta = $adminBDD->ejecutarConsulta($sql, $parametros);
   echo json_encode($respuesta);
