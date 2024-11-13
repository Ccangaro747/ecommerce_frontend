<?php

/*
    Configuración para depuración de errores
*/

# Habilita la visualización de errores en la pantalla.
# 1 activa la visualización; 0 la desactiva.
ini_set("display_errors", 1);

# Activa el registro de errores en un archivo de log.
# Esto permite que los errores se guarden para su revisión posterior.
ini_set("log_errors", 1);

# Especifica la ubicación del archivo donde se guardarán los errores registrados.
# En este caso, el archivo se llama 'php_error_log' y está ubicado en el directorio especificado.
ini_set("error_log", "C:/xamp/htdocs/ecommerce/web/php_error_log");

require_once "controllers/controller.template.php"; // Incluye el controlador

$index = new TemplateController();   // Crea una instancia del controlador
$index->index();  // Llama al método index() del controlador