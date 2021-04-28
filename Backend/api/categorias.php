<?php
header("Content-Type: application/json");
include_once("../class/class-categoria.php");

switch($_SERVER['REQUEST_METHOD']){
    case 'POST':
        $_POST = json_decode(file_get_contents('php://input'),true);
    break;
    case "GET":
        if(isset($_GET["idCategoria"])){
            echo json_encode(Categoria::obtenerCategoria($_GET["idCategoria"]));
        }else{
            echo json_encode(Categoria::obtenerCategorias());
        }
       
    break;
    case "PUT":

        $_PUT = json_decode(file_get_contents('php://input'),true);

    break;
    case "DELETE":
        
    break;
}
?>