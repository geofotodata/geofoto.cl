<?php
declare(strict_types=1);

/*
 * Contenido editable del sitio.
 * Cambia estos valores y el resto de la página se actualizará automáticamente.
 */
$profile = [
    'name' => 'GeoFoto',
    'eyebrow' => 'Geografía · Datos · Fotografía',
    'headline' => 'Hago visible lo que el territorio quiere contar.',
    'intro' => 'Soy GeoFoto. Convierto territorio, datos y fotografías en herramientas claras para comprender lugares, comunicar hallazgos y tomar mejores decisiones.',
    'location' => 'Santiago, Chile',
    'availability' => 'Disponible para colaborar',
    'github_url' => 'https://github.com/geofotodata',
    'site_url' => 'https://geofoto.cl',
    // Déjalo vacío para ocultar el botón de correo.
    'email' => '',
];

$disciplines = [
    [
        'number' => '01',
        'title' => 'Territorio + datos',
        'text' => 'Ordeno información compleja y la transformo en lecturas simples, útiles y conectadas con su contexto territorial.',
        'tag' => 'Análisis geoespacial',
    ],
    [
        'number' => '02',
        'title' => 'Mapas para decidir',
        'text' => 'Diseño experiencias cartográficas que ayudan a explorar, monitorear y comunicar lo que ocurre en un lugar.',
        'tag' => 'Cartografía web',
    ],
    [
        'number' => '03',
        'title' => 'Imágenes con contexto',
        'text' => 'Uso la fotografía como una capa de información: una forma de observar, documentar y narrar el paisaje.',
        'tag' => 'Fotografía territorial',
    ],
];

$projects = [
    [
        'type' => 'Plataforma territorial',
        'title' => 'Monitor ZOIT',
        'description' => 'Una interfaz para seguir acciones, gobernanza, documentos y cartografía de territorios turísticos.',
        'accent' => 'lime',
        'meta' => ['PHP', 'Datos', 'Mapas'],
    ],
    [
        'type' => 'Exploración visual',
        'title' => 'Atlas cotidiano',
        'description' => 'Una mirada en desarrollo sobre las huellas, ritmos y pequeñas geografías que forman un lugar.',
        'accent' => 'coral',
        'meta' => ['Territorio', 'Imagen', 'Relato'],
    ],
];

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$year = date('Y');
?>
<!doctype html>
<html lang="es" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($profile['name']) ?> — Geografía, datos y fotografía</title>
    <meta name="description" content="<?= e($profile['intro']) ?>">
    <meta name="author" content="<?= e($profile['name']) ?>">
    <meta name="theme-color" content="#10120f">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_CL">
    <meta property="og:title" content="<?= e($profile['name']) ?> — Geografía, datos y fotografía">
    <meta property="og:description" content="<?= e($profile['headline']) ?>">
    <meta property="og:url" content="<?= e($profile['site_url']) ?>">
    <link rel="canonical" href="<?= e($profile['site_url']) ?>">
    <link rel="icon" href="assets/favicon.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css?v=1.0">
    <script>document.documentElement.classList.replace('no-js', 'js');</script>
</head>
<body>
    <a class="skip-link" href="#contenido">Saltar al contenido</a>

    <header class="site-header" data-header>
        <a class="brand" href="#inicio" aria-label="GeoFoto, volver al inicio">
            <svg viewBox="0 0 42 42" aria-hidden="true">
                <circle cx="21" cy="21" r="18"></circle>
                <path d="M8 23c5-8 10-11 18-10 4 .5 7 2 9 4M9 29c6-6 12-8 19-6 3 .8 5 2 7 4M12 34c5-4 10-4 15-2"></path>
                <circle class="brand-dot" cx="28" cy="13" r="3"></circle>
            </svg>
            <span><?= e($profile['name']) ?></span>
        </a>

        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-nav" data-menu-button>
            <span class="sr-only">Abrir menú</span>
            <span></span><span></span>
        </button>

        <nav id="site-nav" class="site-nav" aria-label="Navegación principal" data-menu>
            <a href="#soy">Quién soy</a>
            <a href="#hago">Qué hago</a>
            <a href="#proyectos">Proyectos</a>
            <a class="nav-cta" href="#contacto">Hablemos <span aria-hidden="true">↗</span></a>
        </nav>
    </header>

    <main id="contenido">
        <section class="hero" id="inicio" aria-labelledby="hero-title">
            <div class="hero-grid" aria-hidden="true"></div>
            <div class="hero-copy reveal">
                <p class="kicker"><span></span><?= e($profile['eyebrow']) ?></p>
                <h1 id="hero-title"><?= e($profile['headline']) ?></h1>
                <p class="hero-intro"><?= e($profile['intro']) ?></p>
                <div class="hero-actions">
                    <a class="button button-primary" href="#proyectos">Explorar mi trabajo <span aria-hidden="true">↓</span></a>
                    <a class="text-link" href="<?= e($profile['github_url']) ?>" target="_blank" rel="noopener noreferrer">GitHub <span aria-hidden="true">↗</span></a>
                </div>
            </div>

            <div class="hero-art reveal" aria-label="Ilustración abstracta de curvas de nivel y una cámara">
                <div class="coordinate coordinate-top">33°27′ S</div>
                <svg class="topography" viewBox="0 0 620 620" role="img" aria-hidden="true">
                    <path d="M52 207C93 82 250 23 385 62c158 46 230 211 164 340-71 140-252 199-385 112C31 427 6 346 52 207Z"></path>
                    <path d="M91 217C126 116 250 67 363 94c131 32 194 169 142 276-57 117-203 172-316 103C76 405 53 331 91 217Z"></path>
                    <path d="M131 226c28-76 122-115 209-97 103 22 157 127 119 213-42 94-154 141-245 91-91-51-114-119-83-207Z"></path>
                    <path d="M173 238c22-52 84-78 146-68 76 13 118 86 93 150-29 71-107 109-173 76-67-34-91-95-66-158Z"></path>
                    <path d="M217 249c16-31 52-48 90-43 47 6 75 48 63 90-15 47-63 74-105 56-43-19-65-62-48-103Z"></path>
                </svg>
                <div class="lens">
                    <span class="lens-ring"></span>
                    <span class="lens-core"></span>
                    <span class="lens-glint"></span>
                </div>
                <div class="art-label">Mirar · medir · contar</div>
                <div class="coordinate coordinate-bottom">70°40′ O</div>
            </div>

            <div class="hero-foot">
                <div class="availability"><span></span><?= e($profile['availability']) ?></div>
                <p><?= e($profile['location']) ?></p>
                <p class="scroll-note">Desliza para recorrer <span aria-hidden="true">↓</span></p>
            </div>
        </section>

        <section class="manifesto section-pad" id="soy" aria-labelledby="manifesto-title">
            <div class="section-index reveal">01 / QUIÉN SOY</div>
            <div class="manifesto-copy reveal">
                <h2 id="manifesto-title">Entre una coordenada<br>y una historia.</h2>
                <div class="manifesto-text">
                    <p>No veo los mapas como un producto final. Los veo como preguntas abiertas: ¿qué está pasando?, ¿a quién afecta?, ¿qué no estamos mirando?</p>
                    <p><strong>GeoFoto es mi espacio personal</strong> para unir análisis, tecnología e imagen. Aquí documento proyectos y experimentos que nacen de observar el territorio con curiosidad.</p>
                </div>
            </div>
            <div class="manifesto-stamp reveal" aria-hidden="true">
                <svg viewBox="0 0 160 160">
                    <defs><path id="stamp-path" d="M80,80 m-58,0 a58,58 0 1,1 116,0 a58,58 0 1,1 -116,0"></path></defs>
                    <text><textPath href="#stamp-path">GEOFOTO · DESDE CHILE · TERRITORIO VIVO · </textPath></text>
                    <path class="stamp-mark" d="M54 91 80 48l26 43-26-14-26 14Z"></path>
                </svg>
            </div>
        </section>

        <section class="disciplines section-pad" id="hago" aria-labelledby="disciplines-title">
            <div class="section-heading reveal">
                <div class="section-index">02 / QUÉ HAGO</div>
                <h2 id="disciplines-title">Tres formas de<br><em>leer un lugar.</em></h2>
            </div>

            <div class="discipline-list">
                <?php foreach ($disciplines as $item): ?>
                    <article class="discipline reveal">
                        <p class="discipline-number"><?= e($item['number']) ?></p>
                        <div>
                            <h3><?= e($item['title']) ?></h3>
                            <p><?= e($item['text']) ?></p>
                        </div>
                        <span class="discipline-tag"><?= e($item['tag']) ?></span>
                        <span class="discipline-arrow" aria-hidden="true">↗</span>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="projects section-pad" id="proyectos" aria-labelledby="projects-title">
            <div class="section-heading reveal">
                <div class="section-index">03 / PROYECTOS</div>
                <h2 id="projects-title">Trabajo<br><em>en curso.</em></h2>
                <p>Herramientas y exploraciones donde los datos adquieren forma y el territorio encuentra una voz.</p>
            </div>

            <div class="project-grid">
                <?php foreach ($projects as $index => $project): ?>
                    <article class="project-card project-card-<?= e($project['accent']) ?> reveal">
                        <div class="project-visual" aria-hidden="true">
                            <?php if ($index === 0): ?>
                                <div class="mini-map">
                                    <span class="road road-a"></span>
                                    <span class="road road-b"></span>
                                    <span class="road road-c"></span>
                                    <span class="map-area area-a"></span>
                                    <span class="map-area area-b"></span>
                                    <i class="map-pin pin-a"></i><i class="map-pin pin-b"></i><i class="map-pin pin-c"></i>
                                </div>
                            <?php else: ?>
                                <div class="photo-abstract">
                                    <span class="sun"></span>
                                    <span class="ridge ridge-back"></span>
                                    <span class="ridge ridge-front"></span>
                                    <span class="frame-corner"></span>
                                </div>
                            <?php endif; ?>
                            <span class="project-count">0<?= $index + 1 ?></span>
                        </div>
                        <div class="project-content">
                            <p class="project-type"><?= e($project['type']) ?></p>
                            <h3><?= e($project['title']) ?></h3>
                            <p><?= e($project['description']) ?></p>
                            <ul aria-label="Tecnologías y temas">
                                <?php foreach ($project['meta'] as $meta): ?>
                                    <li><?= e($meta) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="quote-section" aria-label="Filosofía de trabajo">
            <div class="quote-track" aria-hidden="true">
                <span>OBSERVAR · CONECTAR · HACER VISIBLE · </span>
                <span>OBSERVAR · CONECTAR · HACER VISIBLE · </span>
            </div>
            <blockquote class="reveal">“Un buen mapa no termina una conversación.<br><em>La comienza.</em>”</blockquote>
        </section>

        <section class="contact section-pad" id="contacto" aria-labelledby="contact-title">
            <div class="contact-orbit" aria-hidden="true"></div>
            <p class="section-index reveal">04 / CONTACTO</p>
            <div class="contact-content reveal">
                <p class="contact-kicker">¿Hay un territorio, dato o idea dando vueltas?</p>
                <h2 id="contact-title">Hagamos algo<br><em>con eso.</em></h2>
                <div class="contact-links">
                    <a class="button button-light" href="<?= e($profile['github_url']) ?>" target="_blank" rel="noopener noreferrer">Visitar mi GitHub <span aria-hidden="true">↗</span></a>
                    <?php if ($profile['email'] !== ''): ?>
                        <a class="text-link text-link-light" href="mailto:<?= e($profile['email']) ?>"><?= e($profile['email']) ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <a class="brand footer-brand" href="#inicio" aria-label="Volver al inicio">
            <svg viewBox="0 0 42 42" aria-hidden="true">
                <circle cx="21" cy="21" r="18"></circle>
                <path d="M8 23c5-8 10-11 18-10 4 .5 7 2 9 4M9 29c6-6 12-8 19-6 3 .8 5 2 7 4"></path>
            </svg>
            <span><?= e($profile['name']) ?></span>
        </a>
        <p>© <?= e($year) ?> · Hecho desde <?= e($profile['location']) ?></p>
        <a href="#inicio">Volver arriba ↑</a>
    </footer>

    <script src="assets/app.js?v=1.0" defer></script>
</body>
</html>
