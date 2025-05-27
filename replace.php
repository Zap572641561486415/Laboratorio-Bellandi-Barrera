<?php

function replaceHtmlToPHP($directory) {
    $files = glob($directory . '/*.php');
    
    foreach ($files as $file) {
        $content = file_get_contents($file);
        $content = str_replace('.php"', '.php"', $content);
        $content = str_replace(".php'", ".php'", $content);
        file_put_contents($file, $content);
        echo "Procesado: " . basename($file) . "\n";
    }
}

$directory = __DIR__;
replaceHtmlToPHP($directory);
echo "¡Proceso completado!";
?> 
