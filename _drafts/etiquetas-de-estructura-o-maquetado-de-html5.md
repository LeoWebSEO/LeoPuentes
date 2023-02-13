---
layout: post
permalink: semantica-seo-html5/estructura-basica-de-pagina-web-html5.html
title: ETIQUETAS DE ESTRUCTURA O MAQUETADO DE HTML5
description: La semántica de HTML5 se refiere a la estructura y significado de los
  elementos que componen una página web. La mejor actualización que ha sufrido HTML.
keywords: estructura basica de una pagina web, estructura de html5, maquetado de html5,
  semantica de html5, seo html5
author: Leo Puentes
image: "/assets/images/etiquetas-estructura-maquetado-html5.webp"
slug: estructura-basica-html5
categories:
- semantica-seo-html5
- html5
- Programacion

---
HTML5 ha agregado una serie de etiquetas destinadas a facilitar la estructura (maquetado) del documento. Se han incorporado elementos nuevos, ofreciendo una mejor dotación a la semántica (a la forma de escribir y leer el código) de los documentos html5.

Toda esta estructura implementa un orden más claro para posicionar la información o el contenido. En html4, la estructura de una web estaba gobernada por los bloques **<div></div>**, donde toda la semántica se creaba a base de elementos o mejor dicho clases CSS. Todo ese proceso realizado por css, toda esa estructuración de la semántica era necesaria para poder tener elementos específicos dentro del **<body></body>**.

La semántica de HTML5 se refiere a la estructura y significado de los elementos que componen una página web. Es importante comprender y entender que HTML5 no solo se trata de agregar estilos y diseño a una página web, sino también de proporcionar información sobre su contenido y estructura.

Como lo dije anteriormente, en lugar de usar una etiqueta genérica como "div" para definir un encabezado, se puede usar la etiqueta "header" para indicar claramente que se trata de un encabezado. De esta manera, los navegadores, motores de búsqueda y otros sistemas pueden entender mejor la estructura de la página y presentarla de manera más accesible.

Además, HTML5 introduce nuevas etiquetas específicas para elementos comunes en una página web, como "nav" para un menú de navegación, "main" para el contenido principal de la página, "article" para una sección autónoma de contenido, entre otros. Estas etiquetas ayudan a los desarrolladores a describir con mayor claridad el contenido y estructura de una página web.

Así es como se da el paso a la mejor actualización que ha sufrido HTML. En esta quinta versión encontramos elementos como header, nav, section, article, footer, aside, main y muchas otras más.

## Etiquetas de estructura semántica html5 de primer nivel:

En realidad no se si eso exista :), pero la he decidido llamar así: semántica de html5 de primer nivel.

El nombre se lo he dado para poder separar entre la semántica que nos ayuda a estructurar una página web y la semántica que solo brinda funcionalidad visual; Por así decirlo.

Este tipo de etiquetas no pueden faltar por ningún motivo. ¿pero por que?, porque es la semántica que los buscadores van a leer para poder entender el sitio web, para luego poderlo indexar en sus búsquedas. Así que no lo olvides, no puedes dejar estas etiquetas fuera de tu proyecto html5.

En total son 7 etiquetas de estructura de primer nivel, todas van dentro de la etiqueta **<body></body>** porque son las que sirven para definir el esquema principal del documento.

1. **HEADER (Encabezado):** Creada para incluir información destinada a ayudar en la navegación. Se utiliza para el encabezado general del sitio y también tiene utilidad dentro de la etiqueta “section” para indicar su título. Suele incluir el logo del proyecto o una etiqueta de encabezado H1 hasta H6 para el título y la etiqueta nav en un nivel más superior para el menú de navegación.

   ![el encabezado de un sitio web](/assets/images/1.webp "donde se programa un header")
2. **NAV:** Esta etiqueta la utilizaremos para incluir el menú de navegación. Normalmente va dentro de un header, pero también puede incluirse como menú lateral en una etiqueta section o como menú de pie de página en el footer.

   ![donde programo la etiqueta nav](/assets/images/2.webp "como usar la etiqueta nav")
3. **MAIN:** Su funcionalidad es portar el contenido de la página, dentro de ella va el contenido del blog o sitio web. Mejor dicho, contiene etiquetas que están llenas de textos, videos e imágenes (etiquetas de segundo nivel), como también: section y article (etiquetas de primer nivel).

   ![que contiene la etiqueta main](/assets/images/3.webp "donde programo la etiqueta main")
4. **SECTION:** Esta etiqueta sirve para agrupar elementos relacionados entre sí de forma temática. Los section creados a nivel del body serán aquellos cuyo contenido den significado a la página, o sea, formen el contenido visto por el usuario.

   ![que contiene la etiqueta section](/assets/images/4.webp "donde programo la etiqueta section")
5. **ARTICLE:** Esta etiqueta es «la última etiqueta de primer nivel con significado estructural». Habitualmente se utiliza dentro de un section para separar las unidades de contenido. Al ser la última en jerarquía no puede contener ninguna de las etiquetas anteriormente listadas. Solo puede contener etiquetas de menor nivel, mas abajo te listo las más comunes.

   ![como programo la etiqueta article](/assets/images/6.webp "como programar la etiqueta article")
6. **ASIDE:** Su uso idóneo es para agrupar el contenido a visualizar en la página, pero que no forma parte del contenido principal de la página. Osea no aporta valor ni al buscador y al usuario. Normalmente son utilizadas en las barras laterales del sitio web.

   ![que contiene la etiqueta html5 aside](/assets/images/6-1.webp "como programar la etiqueta aside")
7. **FOOTER (Pie de página):** Destinada a incluir la información sobre (autoría, propiedad, enlaces, términos y condiciones, redes sociales, etc…)

   ![que contiene la etiqueta footer](/assets/images/7.webp "como programar la etiqueta footer")

Esta es la estructura base, por así decirlo. Lo importante aquí es que deseo que visualices la estructura interna de un sitio web y sobre todo las jerarquías de las etiquetas, ya que es erróneo hacer uso de una etiqueta <aside></aside> dentro de una etiqueta <article></article>.

Una herramienta muy buena que uso para detectar cualquier conflicto de etiquetas es el validador de W3: [https://validator.w3.org/nu/](detectac etiquetas con mal jerarquia "el validador de errores web"). Esta herramienta es ideal tanto para verificar proyectos propios como de terceros y por supuesto te ayudará a mejorar la estructura semántica de la web, mejorando el posicionamiento en los buscadores.

La estructura final de forma gráfica con su respectiva semántica html5 seria así:

![maqueta completa de web en html5](/assets/images/8.webp "cual es la estructura completa de un sitio web")

Y en código seria lo siguiente:

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Estructura Semantica HTML5</title>
    </head>
    <body>
      <header>
        <h1>Titulo del Proyecto</h1>
        <nav><!-- menu de navegacion --></nav>
      </header>
    
      <main>
        <section>
          <header><!-- etiqueta de encabezado--></header>
          <article><!-- etiquetas como parrafo --></article>
        </section>
      </main>
    
      <aside>
        <header><!-- Titulo de la barra lateral --></header>
        <nav><!-- si se implementa un menu lateral --></nav>
      </aside>
      
      <footer><!-- Todo el contenido en pie de pagina --></footer>
    </body>
    </html>

## Etiquetas de estructura semántica html5 de Segundo Nivel:

Como te comente, no sé si existe la clasificación por niveles de las etiquetas de html5. Lo he creado así para que sea más comprensible y fácil de implementar.

Estas etiquetas de segundo nivel se caracterizan por darle estructura visual al usuario o a la personas que consumen la información del sitio. Me explico, las personas al mirar un sitio web desde su navegador no van a poder mirar ningún tipo de código, pero sí podrán mirar los estilos, títulos, párrafos, textos en negrilla y cursiva, fuentes con tamaños grandes y pequeños, imágenes; en fin solo podrá ver información.

Esta información se logra mostrar, gracias a las etiquetas de menor nivel o de segundo nivel. Como la semántica de html5 se va actualizando, no existe un número fijo de estas etiquetas. En este sitio web: [https://www.w3schools.com/html/](w3 school con toda la semantica html5 "todas las etiquetas de html5") puedes leer e investigar todas las existentes y las que se van añadiendo.

Te voy a listar las más comunes, no es necesario conocerlas todas a la perfección. Ya sabes, siempre podrás ir al sitio web nombrado anteriormente y consultarlos. Empecemos!

* Las etiquetas de encabezado son las que nos permite dar un formato de título al texto, tiene 6 niveles y cada nivel tiene una etiqueta de apertura y una de cierre, así: <h1></h1>, <h2></h2>, <h3></h3>, <h4></h4>, <h5></h5>, <h6></h6>. “h1” siempre va a ser el contenedor del título principal de cualquier página web, “h2” tiene la función de darle formato a los subtítulos, “h3” se implementa más como un subtema del subtítulo y así sucesivamente.


* El párrafo es otra de las etiquetas más usadas, se identifica por las siguientes etiquetas <p></p> y también tiene apertura y cierre. En ella va todo el contenido explicativo e informativo, normalmente siempre dando respuesta a una etiqueta de encabezado.
* La etiqueta negrilla es muy usada también, pero tiene algo en particular. Su particular uso se da porque tiene dos variantes, las cuales son: <b></b> y <strong></strong>, ambas muestran el mismo resultado, pero la segunda va más centrada a resaltar el texto importante para los buscadores.
* Las imágenes por supuesto es otra de las etiquetas más usadas, pero esta es una etiqueta vacía, osea es una etiqueta que tiene apertura pero no tiene cierre, así: <img src=”url/img” alt=””>. De estas etiquetas hay muchas y es de vital importancia programarla de forma correcta para no afectar la estructura web.
* Los enlaces son fundamentales para la navegación de un sitio web y para crearlos se debe de usar la etiqueta <a></a>.

En temas posteriores explicaré las etiquetas con mejor impacto SEO, donde explicaré cada una de ellas con su adecuado uso. Lo importante es que vayas aprendiendo etiquetas básicas e ir ascendiendo en el aprendizaje de más.

Dentro de ellas existe una jerarquía, me explico: no se puede agregar una etiqueta de encabezado dentro de un enlace, ejemplo:

    <a href=”#”><h2> Mal implementado </h2></a>

Aunque va a funcionar el link, está mal programado. La forma correcta es seria la siguiente:

    <h2><a href=”#”> Bien implementado </a></h2>

Esto lo explicaré más adelante, pero mientras puedes usar la herramienta de W3 para identificar este tipo de malas prácticas: [https://validator.w3.org/nu/.](corregir errores en codigo web "validaro de codigo html")

En resumen, la semántica de HTML5 es importante porque permite describir el contenido y estructura de una página web de manera clara y significativa, lo que mejora la accesibilidad, la eficiencia de los motores de búsqueda y la experiencia de usuario en general.

Nos vemos en la siguiente entrada, ¡Así que sígueme para aprender juntos!

No te olvides de compartir.