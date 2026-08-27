# GeoFoto — sitio personal PHP

Portada personal para `geofoto.cl`, construida con PHP, CSS y JavaScript sin dependencias de compilación.

## Editar el contenido

Los datos principales, disciplinas y proyectos están al comienzo de `index.php`. Para habilitar un correo de contacto, completa el campo `email`; si queda vacío, el enlace no se muestra.

## Probar localmente

Con PHP 8 o superior:

```bash
cd geofoto-personal
php -S localhost:8080
```

Luego abre `http://localhost:8080`.

## Publicar en geofoto.cl

Sube el contenido de esta carpeta —no la carpeta contenedora— al directorio público del dominio, normalmente `public_html`, `www` o `htdocs`.

Estructura esperada:

```text
public_html/
├── index.php
├── .htaccess
└── assets/
    ├── app.js
    ├── favicon.svg
    └── style.css
```

Requiere PHP 8+ y funciona en Apache. En Nginx, `.htaccess` se ignora sin afectar la página.

> GitHub puede guardar y versionar este proyecto, pero **GitHub Pages no ejecuta PHP**. Para usar `index.php`, publica estos archivos en el hosting PHP conectado a `geofoto.cl`.
