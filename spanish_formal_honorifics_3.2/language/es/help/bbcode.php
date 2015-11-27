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

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'The second type of list, an ordered list, gives you control over what is output before each item. To create an ordered list you use <strong>[list=1][/list]</strong> to create a numbered list or alternatively <strong>[list=a][/list]</strong> for an alphabetical list. As with the unordered list, items are specified using <strong>[*]</strong>. For example:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Go to the shops<br /><strong>[*]</strong>Buy a new computer<br /><strong>[*]</strong>Swear at computer when it crashes<br /><strong>[/list]</strong><br /><br />will generate the following:<ol style="list-style-type: decimal;"><li>Go to the shops</li><li>Buy a new computer</li><li>Swear at computer when it crashes</li></ol>Whereas for an alphabetical list you would use:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />giving<ol style="list-style-type: lower-alpha"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Creando una lista ordenada',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode supports two types of lists, unordered and ordered. They are essentially the same as their HTML equivalents. An unordered list outputs each item in your list sequentially one after the other indenting each with a bullet character. To create an unordered list you use <strong>[list][/list]</strong> and define each item within the list using <strong>[*]</strong>. For example to list your favourite colours you could use:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Red<br /><strong>[*]</strong>Blue<br /><strong>[*]</strong>Yellow<br /><strong>[/list]</strong><br /><br />This would generate the following list:<ul><li>Red</li><li>Blue</li><li>Yellow</li></ul>',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Creando una lista desordenada',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'If you are an administrator on this board and have the proper permissions, you can add further BBCodes through the Custom BBCodes section.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> '¿Puedo agregar mis propias etiquetas?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'If you want to output a piece of code or in fact anything that requires a fixed width, e.g. Courier type font you should enclose the text in <strong>[code][/code]</strong> tags, e.g.<br /><br /><strong>[code]</strong>echo &quot;This is some code&quot;;<strong>[/code]</strong><br /><br />All formatting used within <strong>[code][/code]</strong> tags is retained when you later view it. PHP syntax highlighting can be enabled using <strong>[code=php][/code]</strong> and is recommended when posting PHP code samples as it improves readability.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Outputting code or fixed width data',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'There are two ways you can quote text, with a reference or without.<ul><li>When you utilise the Quote function to reply to a post on the board you should notice that the post text is added to the message window enclosed in a <strong>[quote=&quot;&quot;][/quote]</strong> block. This method allows you to quote with a reference to a person or whatever else you choose to put! For example to quote a piece of text Mr. Blobby wrote you would enter:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>The text Mr. Blobby wrote would go here<strong>[/quote]</strong><br /><br />The resulting output will automatically add &quot;Mr. Blobby wrote:&quot; before the actual text. Remember you <strong>must</strong> include the quotation marks &quot;&quot; around the name you are quoting, they are not optional.</li><li>The second method allows you to blindly quote something. To utilise this enclose the text in <strong>[quote][/quote]</strong> tags. When you view the message it will simply show the text within a quotation block.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Citando texto al responder',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode includes tags to allow you to quickly change the basic style of your text. This is achieved in the following ways: <ul><li>To make a piece of text bold enclose it in <strong>[b][/b]</strong>, e.g. <br /><br /><strong>[b]</strong>Hola<strong>[/b]</strong><br /><br />se convertirá en <strong>Hola</strong></li><li>For underlining use <strong>[u][/u]</strong>, por ejemplo:<br /><br /><strong>[u]</strong>Buenos días<strong>[/u]</strong><br /><br />se convierte en <span style="text-decoration: underline">Buenos días</span></li><li>To italicise text use <strong>[i][/i]</strong>, e.g.<br /><br />This is <strong>[i]</strong>Great!<strong>[/i]</strong><br /><br />would give This is <i>Great!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Cómo crear texto en negrita, cursiva y subrayado',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Para alterar el color o el tamaño de su texto, puede usar las siguientes etiquetas. Tenga en cuenta que la apariencia final dependerá del navegador: <ul><li>Para cambiar el color del texto se logra envolviéndolo en <strong>[color=][/color]</strong>. Puede especificar un nombre de color reconocido (siempre en Ingles, por ejemplo; red, blue, yellow, etc.) o el formato de código hexadecimal, por ejemplo; #FFFFFF, #000000. Por ejemplo, para crear un texto rojo puede usar:<br /><br /><strong>[color=red]</strong>¡Hola!<strong>[/color]</strong><br /><br />o<br /><br /><strong>[color=#FF0000]</strong>¡Hola!<strong>[/color]</strong><br /><br />En ambos casos el resultado será así <span style="color:red">¡Hola!</span></li><li>Cambiar el tamaño del texto se logra de una manera similar utilizando <strong>[size=][/size]</strong>. Esta etiqueta depende de la plantilla que el usuario haya seleccionado, pero el formato recomendado es un valor numérico que representa el tamaño de texto en porcentaje, comenzando en 20 (muy pequeña) hasta 200 (muy grande) por defecto. Por ejemplo:<br /><br /><strong>[size=30]</strong>PEQUEÑO<strong>[/size]</strong><br /><br />generará esto <span style="font-size:30%;">PEQUEÑO</span><br /><br />mientras:<br /><br /><strong>[size=200]</strong>¡ENORME!<strong>[/size]</strong><br /><br />será <span style="font-size:200%;">¡ENORME!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Cómo cambiar el color o tamaño de texto',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Si, por supuesto que puede, por ejemplo, para llamar la atención de alguien puede escribir:<br /><br /><strong>[size=200][color=red][b]</strong>¡MÍRAME!<strong>[/b][/color][/size]</strong><br /><br />esto sería así <span style="color:red;font-size:200%;"><strong>¡MÍRAME!</strong></span><br /><br />Sin embargo, ¡nosotros no recomendamos mucho texto como este! Recuerde que depende de usted, el autor del mensaje, para garantizar que las etiquetas están cerradas correctamente. Por ejemplo, lo siguiente es incorrecto:<br /><br /><strong>[b][u]</strong>Esto está mal<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> '¿Puedo combinar las etiquetas de formato?',
));
