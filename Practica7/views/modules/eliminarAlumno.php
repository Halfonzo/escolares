<?php

	//echo getcwd();
	include "models/database.php";
    $db = new Database();//Se instancia la clase para manejar la base de datos
    $db->delete($_GET['id'],"matricula","alumnos");//Funcion que elimina un cliente en especifico
    $db->delete($_GET['id'],"id_alumno","clasealumno");//Funcion que elimina un cliente en especifico
    //Se recarga la pagina principal para reflejar los cambios
    echo '<script type="text/javascript">
                    window.location.replace("index.php?action=alumnos");
                  </script>';

?>