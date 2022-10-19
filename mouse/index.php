<? $foot=0; 
   $on = "N<sub>o</sub>";
   $oa = "A<sub>o</sub>";
   $op = "P<sub>o</sub>";
   $th = 1;

   $footMap = [];
   $ixmap=[];
function counter($what) {
  global $ixmap;
  if(!array_key_exists($what, $ixmap)) {
    $ixmap[$what] = 0;
  }
  $ixmap[$what]++;
  return $ixmap[$what];
}

function table() {
  $number = counter('table');
  return "<b id='tbl-$number'>Table $number.</b> ";
}
function img() {
  $number = counter('img');
  return "<b id='img-$number'>Figure $number.</b> ";
}
function vid() {
  $number = counter('vid');
  return "<b id='vid-$number'>Video $number.</b> ";
}
function alt($text) {
  echo 'alt="'.$text.'" title="'.$text.'"';
}
function foot($name, $text = '') {
  global $foot, $footMap;
  if(array_key_exists($name, $footMap)) {
    $text = $footMap[$name];
  } else {
    $foot ++;
    if(strlen($text) == 0){ 
      $text = $foot;
    }
    $footMap[$name] = $foot;
  }
  echo "<sup><a href=#$name>$text</a></sup>";
}
?>
<!doctype html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="preconnect" href="//fonts.googleapis.com">
<link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
<link href="//fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,700&family=Roboto+Slab&family=Cutive+Mono&display=swap" rel="stylesheet"> 
<link href="/silicon.css?1" rel="stylesheet">
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@emorobot" />
<meta name="twitter:description" content="Silicon Folklore" />
<meta name="twitter:image" content="//siliconfolklore.com/nuclear-twit.jpg" />
<meta name="twitter:creator" content="@emorobot" />
<meta name="twitter:url" content="//siliconfolklore.com/nuclear-myth.html" />
<meta name="twitter:title" content="Did Apple Invent the Mouse?" />
<meta name="og:title" content="Silicon Folklore" />
<meta name="og:description" content="Did Apple Invent the Mouse?" />
<meta name="twitter:description" content="Did Apple Invent the Mouse?" />
<meta name="og:image" content="//siliconfolklore.com/nuclear-fb.jpg" />
<title>Did Apple Invent the Mouse? | Silicon Folkore</title>
</head>
<body>
<main>
<section>
<h1 class="noprint" id="silicon-folklore"><a href="/">Silicon Folklore</a></h1>
<h2>This is very drafty --- it's kept here for full disclosure</h2>
<pre>
No. Some people correct it back to Xerox and then others correct it back to Douglas Engelbart, which is usually credited as the origin.

Overview of narrative histories

Early Mice and their wonkiness:

  Copy and Pasting on a Xerox Alto

  VisiOn

  Draftsman mouse

Modern features of a mouse:

  Double click

  Drag and drop

  WIMP interface

  Scroll wheel

What is a mouse?

Multiple definitions.

Most Mariam-Webster: The pointing device that drags across a surface which Douglas Engelbart first called a mouse in this document

More um, Max Weber? An at least 2-dimensional spacial interaction that generates control signals, such as a pointer moving on a computer screen

Or: Anything that moves an indicator on a screen in a way that doesn't feel discrete (roller ball and not arrow keys)

Sage light pen - LDS-1 1968, sketchpad 1963.

But also, theramin as a control interface? 

Analog mice based on resistance or magnetometers is totally possible. I feel like there's likely forgotten 1920s and 30s projects that look very mouse-like today.
</pre>
<h5><b>You made it to the end. Epic.</b></h5><h5><a href="//github.com/kristopolous/sf">Edit history is on GitHub</a>.<br/>I guess you could also <a href="//twitter.com/emoRobot">follow me on twitter</a>, ok sure.</h5>

</section>
<section>
<div id="print-links" class="onlyprint">
<h2>Links</h2>
</div>
</section>
<script src="/script.js"></script>
</main>
</html>
