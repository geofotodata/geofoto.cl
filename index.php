<?php
declare(strict_types=1);

// Compatibilidad con hosting PHP: sirve la misma versión estática publicada en GitHub Pages.
header('Content-Type: text/html; charset=UTF-8');
readfile(__DIR__ . '/index.html');
