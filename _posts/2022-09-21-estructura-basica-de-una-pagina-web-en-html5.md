---
layout: post
categories: [Programacion, Html5, Semantica-SEO-Html5]
title: Estructura básica de una pagina web en HTML5
description: Explicare la estructura de un documento html5 generado por VSC. Es algo
  muy simple pero fundamental comprender desde el principio para el seo y el diseño
author: Leonardo Puentes
image: "/assets/images/estructura-documento-html5.webp"
slug: estructura-basica-html5
permalink: "/semantica-seo-html5/estructura-basica-html5.html"

---
**HTML5** es para algunos un lenguaje de programación como para otros es simplemente un documento de estructura o maquetado web. Para mí son los dos 😊.

A lo largo del contenido te enseñaré cómo podemos influir en los buscadores gracias a este lenguaje y cómo han aumentado las posibilidades **SEO**.

Iniciemos con la estructura base de un documento HTML5, código que puedes observar a continuación.

```markup
<!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="UTF-8">
      <title> Estructura básica Html5 </title>
    </head>
    <body>
      <!-- contenido visible -->
    </body>
  </html>
```

Esta estructura es arrojada por cualquier **_IDE (Entorno de Desarrollo Integrado)_** de programación al identificar el archivo con extensión “.html”. El IDE que manejo es Visual Studio Code, aunque todo es del gusto del programador; existen muchas opciones.

**1-) <code><!DOCTYPE html></code>:** Lo primero que nos encontramos es la declaración del tipo de documento. El DOCTYPE variará según el tipo de documento realizado, el doctype del HTML5 es maravillosamente sencillo.

**2-) <code>html</code>:** Tras declarar el tipo de documento, indicamos que inicia nuestro documento HTML. Esta etiqueta se cierra cuando finalizamos el documento. Lleva un atributo **lang**, esto sirve para indicar el idioma del documento (en nuestro caso español)

**3-) <code>head</code>:** En un documento HTML tenemos una cabecera dónde colocaremos los metadatos de la página para el SEO, el código JavaScript y el CSS que se utilizará. Es el encabezado más importante, es donde se utiliza la mayor cantidad de etiquetas de optimización web para el beneficio del SEO.

**4-) <code>meta charset</code>:** Etiqueta obligatorio en HTML5, atributo que informa el juego de caracteres del documento, debería ser siempre utf-8. Como todo metadato debe ir dentro del head y nos ayuda a que el navegador represente bien los caracteres como ñ, ´, ü, etc.

**5-) <code>title</code>:** Es un tipo de metadato especial que nos proporciona el título de la página. Por motivos de posicionamiento (SEO) se recomienda que el meta-title sea parecido pero no igual al H1 del documento y a la URL de la página.

**6-) <code>body</code>:** En su interior tendremos el contenido de la página y demás etiquetas de menor nivel. Es donde ocurre la magia visual, llamada también **_front-end_**. En él también se debe de realizar buenas prácticas de programación para beneficiar al SEO.

La programación debe de estar siempre centrada en dos personajes: El primero es **el usuario** y el segundo **el buscador**. Así que se debe de pensar siempre en optimizar el código de la mejor manera posible para agradarles.

No te preocupes si no logras comprender aún lo que trato de decirte, solo ten claro que programas para estos dos actores.

## **ESTRUCTURA SEMÁNTICA HTML5**

Resumiendo lo de los videos anteriores, echémosle un último vistazo a la estructura básica de un documento HTML. Deseo que lo observes desde un punto más claro y evidente.

Toda etiqueta principal tiene una apertura y un cierre, existen algunas excepciones las cuales las vamos a estudiar más adelante. En este caso nos referimos a las etiquetas superiores **HTML, HEAD y BODY.**

![estructura de html5](/assets/images/estructura-html.jpg "Partes de documento html")

La estructura de un documento se empieza con la etiqueta html, tiene apertura y cierre **<html></html>**. Todo lo que se escriba entre esta etiqueta, será la página web. Dentro de esta etiqueta se encuentran 2 partes especiales.

![datos tecnicos head html5](/assets/images/informacion-head-html.jpg "informacion del head en html5")

La primera, etiqueta head, tiene apertura y cierre **<head></head>**, es la cabecera de la página. Aquí va cierta información, alguna solo va a ser visible para el buscador, otras solo para el usuario y otra para ambas. En el head se pone: el título de la página, los metadatos, estilos css, código javascript (todo esto se estudiará en cuanto avancemos). En el head va la información técnica para el usuario y buscador.

![semantica basica de html5](/assets/images/descripcion-body-html.jpg "estructura base de semantica html5")

La segunda parte es la etiqueta body, tiene apertura y cierre **<body></body>**. Aquí va el contenido visual de la página, va todo aquello con lo que el usuario va a interactuar: Títulos, párrafos, imágenes, videos, formularios, enlaces, tablas, listas, bloques, secciones, etcétera.

Pero también va código solo visible para los buscadores como: seguir o no seguir enlaces, función lazyload, validaciones de uso en medios, etc.

En esta serie de artículos vas a aprender programación web orientada al SEO desde lo más básico hasta lo más avanzado, utilizando de forma correcta la web semántica que ofrece html5. Aprenderás a usar de forma óptima cada etiqueta para crear proyectos web con excelente posicionamiento SEO, sitios web optimizados para los buscadores y usuarios.

Aprenderás todo el etiquetado semántico de html5 para el posicionamiento web. Impulsa tus proyectos en Internet mejorando la velocidad, rendimiento y seguridad.

Te compartiré herramientas que te ayudarán a crear webs de calidad, sitios que seduzcan a los buscadores y sobre todo a tu usuario final.

Entonces vamos a aprender desde cómo optimizar y programar un sitio web básico hasta grandes proyectos digitales. No es marketing digital, es programación web optimizada para el marketing digital lo que vas a aprender.

¡Así que sígueme para aprender juntos!

No te olvides de compartir.