# GeoFoto — portafolio geoespacial

Sitio personal de **Luis Bravo Galdames**, geógrafo. Reúne proyectos, líneas de exploración cartográfica, experimentos y fotografía territorial bajo la identidad GeoFoto.

## Ver en línea

[https://geofotodata.github.io/geofoto.cl/](https://geofotodata.github.io/geofoto.cl/)

## Estructura

- `index.html`: versión estática publicada gratuitamente con GitHub Pages.
- `index.php`: compatibilidad opcional para un hosting PHP; sirve el mismo `index.html`.
- `assets/style.css`: sistema visual y diseño adaptable.
- `assets/app.js`: navegación, menú móvil y animaciones progresivas.

## Probar localmente

No requiere instalación ni compilación. Abre `index.html` directamente o inicia un servidor local:

```bash
python -m http.server 8080
```

Luego visita `http://localhost:8080`.

## Publicar

GitHub Pages publica la rama principal del repositorio `geofotodata/geofoto.cl`. PHP no se ejecuta en GitHub Pages, pero no es necesario para ver el sitio.

Para usar `geofoto.cl` como dominio propio se debe configurar el DNS del dominio y añadir un archivo `CNAME` cuando se conozca la configuración del proveedor.
