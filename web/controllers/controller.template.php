<?php

class TemplateController{

    //Traemos la vista principal de la plantilla

    public function index(){
        include "views/template.php";  // Incluye la vista "template.php"
    }

    // Ruta principal o Dominio del ecommerce

    /* 
    Este método verifica si la conexión es segura (https) o no (http), y devuelve
    la URL completa del dominio principal del ecommerce, incluyendo el protocolo adecuado (http o https).
    Utiliza el valor de "SERVER_NAME" para obtener el nombre del servidor actual, 
    y con base en si la conexión es segura o no, construye la URL correspondiente.
    */

    static public function path(){
        if(!empty($_SERVER["HTTPS"]) && ("on" == $_SERVER["HTTPS"])){
            return "https://".$_SERVER["SERVER_NAME"]. "/";
        }else{
            return "http://".$_SERVER["SERVER_NAME"]. "/";
        }
    }
}