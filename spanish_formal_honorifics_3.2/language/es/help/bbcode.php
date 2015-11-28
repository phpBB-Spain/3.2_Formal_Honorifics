<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Mostrando imágenes en los mensajes',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Introducción',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Creando enlaces',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Generando listas',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Otros asuntos',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Citas de texto y código',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Formato de texto',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Los ficheros adjuntos, ahora se pueden colocar en cualquier parte de un mensaje usando el nuevo BBCode <strong>[attachment=][/attachment]</strong>, si la funcionalidad de adjuntos está habilitada por la Administración, y si tiene los permisos apropiados para crear los archivos adjuntos. Dentro de la pantalla de la publicación en un cuadro desplegable (respectivamente un botón) para la colocación de accesorios en línea.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Añadiendo archivos adjuntos en un mensaje',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'phpBB BBCode incluye una etiqueta para poder incorporar imágenes en los mensajes. Dos cosas importantes para cuando utilice esta etiqueta son: a muchos usuarios les molesta ver un exceso de imágenes dentro de un mensaje y, segundo, éstas deben estar disponibles en Internet (no pueden existir solo en su PC, ¡a menos que se trate de un servidor web!). Para publicar una imagen debe encerrar su dirección URL entre las etiquetas <strong>[img][/img]</strong>. Por ejemplo:<br /><br /><strong>[img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Como se señaló en la sección URL anterior se puede envolver una imagen en una etiqueta <strong>[url][/url]</strong> si lo desea, por ejemplo;<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />generaría:<br /><br /><a href="http://www.phpbb.com/"><img src="http://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Añadiendo una imagen en un mensaje',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode es una implementación especial del HTML, y la forma en la que se usa BBCode está determinada por La Administración. Además se puede deshabilitar la opción de BBCode en un mensaje, desactivando la casilla correspondiente en el formulario de mensajes. BBCode asimismo es similar en estilo al HTML, pero las etiquetas se encuentran encerradas entre corchetes [ y ] en lugar de &lt; y &gt; y ofrece un gran control sobre qué y cómo se visualiza algo. Dependiendo del estilo que utilice en su foro, verá que es mucho más fácil añadir BBCodes a sus mensajes desde el área superior de la interfaz del formulario de publicación. Seguramente encontrará la siguiente guía muy útil.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> '¿Qué es el código BBCode?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'BBCode de phpBB soporta muchas maneras de crear enlaces a otro sitio.<ul><li>La primera de ella es utilizando las etiquetas <strong>[url=][/url]</strong>, cualquier cosa que escriba después del signo = será interpretado por el BBCode como una dirección URL. Por ejemplo para crear un enlace a phpBB.com puede escribir:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>¡Visite phpBB!<strong>[/url]</strong><br /><br />Se generará el siguiente enlace, <a href="https://www.phpbb.com/">Visite phpBB!</a> El enlace se abrirá en una nueva ventana o no, dependiendo de la configuración del navegador.</li><li>Si prefiere que el enlace aparezca como una simple dirección URL debe usar:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />Se generará de esta forma lo siguiente, <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>phpBB incluye una característica llamada <em>Links Mágicos</em>, con lo que se convertirá el enlace en una dirección URL automáticamente sin necesidad de utilizar ninguna etiqueta. Por ejemplo, escribiendo www.phpbb.com en su mensaje aparecerá <a href="https://www.phpbb.com/">www.phpbb.com</a> cuando lo publique.</li><li>Lo mismo ocurre con las direcciones de e-mail, puede utilizar las etiquetas:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />lo cual se visualizará <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> o puede simplemente escribir no.one@domain.adr dentro de su mensaje, convirtiéndose en un enlace.</li></ul> Puede incluir direcciones URL dentro de los demás BBCodes, como en <strong>[img][/img]</strong> (ver próxima explicación), <strong>[b][/b]</strong>, etc. Recuerde que debe asegurarse de que todas las etiquetas estén cerradas y ordenadas correctamente, por ejemplo:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /><span style="text-decoration: underline">no</span> es correcto ya que puede llevar a que su mensaje sea eliminado, así que tenga cuidado.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Enlazando a otro sitio',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'El segundo tipo de lista, la ordenada, le permite controlar qué va detrás de cada ítem (elemento). Para crear una lista ordenada debe usar <strong>[list=1][/list]</strong> para crear una lista numérica o en su caso <strong>[list=a][/list]</strong> una lista alfabética. Como en las listas desordenadas, los ítems deben ser identificados usando <strong>[*]</strong>. Por ejemplo: <br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Ir de compras<br /><strong>[*]</strong>Comprar un PC nuevo<br /><strong>[*]</strong>Llevar el PC a arreglar cuando se rompe<br /><strong>[/list]</strong><br /><br />generará lo siguiente: <ol style="list-style-type: decimal;"><li>Ir de compras</li><li>Comprar un PC nuevo</li><li>Insultar al PC cuando se rompe</li></ol> Y para una lista alfabética usaría: <br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Primera respuesta posible<br /><strong>[*]</strong>Segunda respuesta posible<br /><strong>[*]</strong>Tercera respuesta posible<br /><strong>[/list]</strong><br /><br /> creando: <ol style="list-style-type: lower-alpha"><li>Primera respuesta posible</li><li>Segunda respuesta posible</li><li>Tercera respuesta posible</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Creando una lista ordenada',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode soporta dos tipos de listas, ordenas y desordenadas. Son esencialmente iguales a las listas HTML. Una lista desordenada muestra cada ítem uno despúes del otro identificado con una viñeta. Para crear una lista desordenada debe utilizar <strong>[list][/list]</strong> definiendo cada item usando <strong>[*]</strong>. Por ejemplo, para crear una lista de sus colores favoritos, debe escribir:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Rojo<br /><strong>[*]</strong>Azul<br /><strong>[*]</strong>Amarillo<br /><strong>[/list]</strong><br /><br />Se generará la siguiente lista:<ul><li>Rojo</li><li>Azul</li><li>Amarillo</li></ul>',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Creando una lista desordenada',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Si pertenece a La Administración de este foro y posee los permisos apropiados, puede agregar nuevos BBCodes desde el Panel del Administrador.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> '¿Puedo agregar mis propias etiquetas?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Si desea incluir alguna clase de código dentro de sus textos debe encasillarlo entre las etiquetas <strong>[code][/code]</strong>, ej.<br /><br /><strong>[code]</strong>"Esto es un código"<strong>[/code]</strong><br /><br />Todos los formatos incluidos entre las etiquetas <strong>[code][/code]</strong> son conservados al visualizar el mensaje. Se puede resaltar sintaxis PHP usando <strong>[code=php][/code]</strong> y es recomendable cuando se publican ejemplos de códigos en PHP, para mejorar su lectura.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Escribiendo código o texto de otro tamaño',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Hay dos formas de citar un texto, haciendo o no haciendo referencia.<ul><li>Cuando utiliza la función Citar para responder un tema, fíjese en que el texto es agregado a la ventana de respuesta, encerrado entre las etiquetas <strong>[quote=""][/quote]</strong>. ¡Este método le permite citar textos haciendo referencia al autor! Por ejemplo para citar un trozo de texto que ha redactado Mr. Blobby debe escribir:<br /><br /><strong>[quote="Mr. Blobby"]</strong>El texto que redactó Mr. Blobby va aquí<strong>[/quote]</strong><br /><br />El texto resultante añadirá automáticamente, "Mr. Blobby escribió:" antes del texto actual. Recuerde que <strong>es imprescindible</strong> incluir las comillas "" para encerrar el nombre del usuario citado. No es opcional.</li><li>El segundo método le permite citar un texto ocultando su autor. Para hacerlo debe encerrar el texto entre las etiquetas <strong>[quote][/quote]</strong>. En el mensaje verá que solamente se muestra el mensaje sin hacer referencia al autor.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Citando texto al responder',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode incluye etiquetas que le permitirán  cambiar el estilo de los textos rápidamente. Esto se puede lograr del siguiente modo: <ul><li>Para crear un texto en negrita debe encerrarlo entre <strong>[b][/b]</strong>, ej. <br /><br /><strong>[b]</strong>Hola<strong>[/b]</strong><br /><br />se convierte en <strong>Hola</strong></li><li>Para subrayar hay que usar <strong>[u][/u]</strong>, por ejemplo:<br /><br /><strong>[u]</strong>Buenos Días<strong>[/u]</strong><br /><br />se convierte en <span style="text-decoration: underline">Buenos Días</span></li><li>Para escribir en cursiva utilice <strong>[i][/i]</strong>, ej.<br /><br />Esto es <strong>[i]</strong>¡Genial!<strong>[/i]</strong><br /><br />se convierte en Esto es <i>¡Genial!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Cómo crear texto en negrita, cursiva y subrayado',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Para alterar el color o el tamaño de su texto, puede usar las siguientes etiquetas. Tenga en cuenta que la apariencia final dependerá del navegador: <ul><li>Para cambiar el color del texto se logra envolviéndolo en <strong>[color=][/color]</strong>. Puede especificar un nombre de color reconocido (siempre en Ingles, por ejemplo; red, blue, yellow, etc.) o el formato de código hexadecimal, por ejemplo; #FFFFFF, #000000. Por ejemplo, para crear un texto rojo puede usar:<br /><br /><strong>[color=red]</strong>¡Hola!<strong>[/color]</strong><br /><br />o<br /><br /><strong>[color=#FF0000]</strong>¡Hola!<strong>[/color]</strong><br /><br />En ambos casos el resultado será así <span style="color:red">¡Hola!</span></li><li>Cambiar el tamaño del texto se logra de una manera similar utilizando <strong>[size=][/size]</strong>. Esta etiqueta depende de la plantilla que el usuario haya seleccionado, pero el formato recomendado es un valor numérico que representa el tamaño de texto en porcentaje, comenzando en 20 (muy pequeña) hasta 200 (muy grande) por defecto. Por ejemplo:<br /><br /><strong>[size=30]</strong>PEQUEÑO<strong>[/size]</strong><br /><br />generará esto <span style="font-size:30%;">PEQUEÑO</span><br /><br />mientras:<br /><br /><strong>[size=200]</strong>¡ENORME!<strong>[/size]</strong><br /><br />será <span style="font-size:200%;">¡ENORME!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Cómo cambiar el color o tamaño de texto',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Si, por supuesto que puede, por ejemplo, para llamar la atención de alguien puede escribir:<br /><br /><strong>[size=200][color=red][b]</strong>¡MÍRAME!<strong>[/b][/color][/size]</strong><br /><br />esto sería así <span style="color:red;font-size:200%;"><strong>¡MÍRAME!</strong></span><br /><br />Sin embargo, ¡nosotros no recomendamos mucho texto como este! Recuerde que depende de usted, el autor del mensaje, para garantizar que las etiquetas están cerradas correctamente. Por ejemplo, lo siguiente es incorrecto:<br /><br /><strong>[b][u]</strong>Esto está mal<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> '¿Puedo combinar las etiquetas de formato?',
));
