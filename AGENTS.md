# AGENTS.md — GeoFoto

## Alcance

Estas instrucciones se aplican a todo el repositorio `geofotodata/geofoto.cl`.

GeoFoto es el portafolio profesional y laboratorio geoespacial de Luis Bravo Galdames, geógrafo chileno. La web debe comunicar trabajo en la intersección entre territorio, turismo, SIG, análisis de datos, cartografía, tecnología y fotografía territorial.

GeoFoto es una marca profesional personal e independiente. No debe parecer una página institucional, gubernamental, comercial ni una plantilla genérica de desarrollador.

## Fuentes de verdad

Antes de describir proyectos o tecnologías, revisar sus repositorios y documentación:

- `geofotodata/catastro-recursos-turisticos`
- `geofotodata/ZOIT`
- `geofotodata/explora-san-jose-de-maipo`

No inventar métricas, resultados, funciones, validaciones institucionales, tecnologías, coordenadas, fechas, fotografías ni información de contacto.

Cuando una capacidad no esté verificada, usar expresiones como `prototipo`, `en desarrollo`, `próximamente` o `colección en preparación`.

## Identidad que se debe conservar

- Marca principal: **GeoFoto**.
- Nombre profesional: **Luis Bravo Galdames**.
- Posicionamiento: **Geógrafo · Territorio · Turismo · Datos**.
- Conceptos: **Territorio · Datos · Mapas · Fotografía**.
- Frase de marca: **Hago visible lo que el territorio quiere contar.**
- Estética oscura, minimalista, editorial y contemporánea.
- Curvas de nivel, coordenadas, grillas y pequeños recursos cartográficos.
- Paleta principal existente: tinta oscura, papel, verde lima, coral y azul.
- Tipografía limpia, numeración de proyectos y animaciones discretas.

Evolucionar el lenguaje visual existente; no sustituirlo por Bootstrap, una plantilla prediseñada o un diseño institucional.

## Arquitectura de contenido

La portada debe permitir comprender rápidamente:

1. quién es Luis Bravo;
2. que es geógrafo;
3. que trabaja con territorio, turismo, SIG y datos;
4. que desarrolla mapas y herramientas digitales;
5. que existen proyectos reales para explorar.

Priorizar estas áreas:

1. Inicio.
2. Proyectos.
3. Sobre mí y trayectoria breve.
4. Mapas.
5. GeoLab.
6. Fotografía territorial.
7. Contacto.

El CV puede mantenerse inicialmente como parte de `Sobre mí`. No convertir la portada en un currículum tradicional.

Preparar la arquitectura para futuros estudios de caso en:

```text
proyectos/catastro-recursos-turisticos/
proyectos/portal-zoit/
proyectos/explora-san-jose-de-maipo/
```

No crear páginas vacías solo para completar rutas.

## Proyectos destacados

El orden inicial recomendado es:

1. Catastro Nacional de Recursos Turísticos, como proyecto principal.
2. Portal ZOIT.
3. Explora San José de Maipo.

Cada proyecto debe explicar, cuando la información esté disponible:

- contexto o problema;
- solución;
- características reales;
- herramientas utilizadas;
- estado del proyecto;
- enlace público verificado;
- enlace al repositorio.

Si no existe una demostración pública verificada, enlazar únicamente el repositorio y no fabricar una URL.

## Mapas y datos geográficos

No presentar una ilustración conceptual como si fuera un resultado analítico.

Todo mapa analítico publicado debe indicar, cuando corresponda:

- fuente y fecha de los datos;
- sistema de referencia de coordenadas;
- unidades;
- método de clasificación;
- tratamiento de valores faltantes o `NoData`;
- limitaciones de interpretación.

No publicar datasets internos, documentos administrativos, ubicaciones sensibles ni datos personales de terceros.

## GeoLab

GeoLab debe distinguir claramente entre:

- `Publicado` o `Aplicado`: existe código o evidencia verificable.
- `Prototipo`: existe una implementación parcial demostrable.
- `Próximamente`: es una propuesta aún no desarrollada.

No afirmar que un experimento existe solo porque aparece como ejemplo en una instrucción.

## Fotografía territorial

No usar fotografías genéricas de stock.

Cuando haya material real, cada registro puede incluir fotografía, lugar, coordenadas, fecha, mapa y lectura territorial. Mientras no exista información comprobada, conservar una estructura explícitamente marcada como pendiente.

## Restricciones técnicas

- GitHub Pages es el entorno principal de publicación.
- La versión publicada debe funcionar como sitio estático.
- Preferir HTML semántico, CSS y JavaScript nativo.
- No añadir React, Vue, Next.js, compiladores o dependencias pesadas sin una justificación técnica concreta.
- No depender de PHP, bases de datos o funciones de servidor para la experiencia principal.
- Mantener rutas relativas compatibles con el subdirectorio `/geofoto.cl/`.
- Evitar dependencias innecesarias y priorizar carga rápida.

## Accesibilidad y rendimiento

- Mantener enlace para saltar al contenido.
- Usar una jerarquía correcta de encabezados.
- Proporcionar nombres accesibles a controles e imágenes informativas.
- Evitar texto esencial dentro de imágenes.
- Garantizar navegación por teclado y estados de foco visibles.
- Respetar `prefers-reduced-motion`.
- Comprobar contraste y tamaño de texto.
- Evitar desplazamiento horizontal en móvil.
- Cargar JavaScript de forma progresiva; el contenido debe seguir disponible si falla.

## SEO y metadatos

Mantener y revisar:

- título y descripción únicos;
- idioma `es`;
- URL canónica correcta;
- Open Graph básico;
- `theme-color`;
- favicon;
- nombre de autor verificado.

No añadir `og:image` hasta disponer de una imagen propia y publicada con una URL estable.

## Privacidad y seguridad

El repositorio es público. Nunca incorporar:

- claves, tokens o API keys;
- documentos internos o reservados;
- datos personales sensibles;
- datos personales de terceros;
- antecedentes administrativos internos;
- fotografías sin derechos claros;
- correo o LinkedIn no proporcionados explícitamente.

Describir proyectos profesionales mediante problemas, métodos y soluciones sin revelar información confidencial.

## Método de trabajo

Para cambios importantes, trabajar en dos etapas:

### Etapa 1 — análisis

1. Leer `AGENTS.md`, `README.md`, `index.html`, `assets/style.css` y `assets/app.js`.
2. Inspeccionar los repositorios relacionados relevantes.
3. Identificar qué componentes existentes se deben conservar.
4. Proponer arquitectura, cambios y estructura de archivos.
5. Señalar riesgos técnicos y contenido no verificable.
6. No iniciar una reescritura masiva durante esta etapa.

### Etapa 2 — implementación

1. Aplicar cambios progresivos y fáciles de revisar.
2. Preservar componentes valiosos existentes.
3. Preferir la solución más simple que cumpla el objetivo.
4. No mezclar cambios no relacionados.
5. Mantener el contenido profesional respaldado por fuentes.

## Verificación obligatoria

Antes de entregar o publicar:

1. Probar la portada en escritorio y móvil.
2. Revisar navegación, menú móvil y teclado.
3. Verificar todos los enlaces internos y externos.
4. Confirmar que no existan errores JavaScript.
5. Comprobar que no haya desplazamiento horizontal.
6. Revisar semántica HTML, foco, contraste y movimiento reducido.
7. Confirmar rutas bajo GitHub Pages.
8. Revisar título, descripción, canonical y Open Graph.
9. Inspeccionar el diff y evitar archivos ajenos al cambio.
10. Resumir archivos modificados, decisiones y pendientes.

No publicar cambios ni modificar la rama principal sin autorización explícita del usuario.
