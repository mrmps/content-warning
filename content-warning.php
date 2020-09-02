<?PHP

/******************************************************************************
 * Init some variables with values from $_POST so we don't have to keep typing*
 * the full array list name whenever we want to use the values.               *
 * ****************************************************************************/

$headline	=	$_POST['inHeadline'];
$opening	=	$_POST['inOpening'];
$link     = $_POST['siteLink'];
$description = $_POST['userDescription'];

function addhttp($url) {
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    return $url;
}

$link = addhttp($link);

$description = str_replace(' ', '_', $description);
// $description = preg_replace("/[^a-zA-Z]+/", "", $input);




/******************************************************************************
 * Build a page generator string using the values passed from form.           *
 ******************************************************************************/


$strOut	= '<!DOCTYPE html>'
. '<html>'
. '<head>'
. '<meta charset="UTF-8">'
. '<title>SafeSite</title>'
. '<link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css">'
. '<link rel="stylesheet" href="main.css" type="text/css">'
. '</head>'
. '<body>'
. '<div>'
. '<img src="https://i.ibb.co/L1c6J6F/attention-303861-340.webp" class="warning_image">'
. '</div>'
. '<div class = "text_container">'
. '<h2 class = "warning_header">' . $headline . '</h2>'
. '<h3 class="warning_text">' . $opening . '</h3>'
. '</div>'
. '<div class="button_container">'
. '<a class="no_button all_button" href="javascript:history.back()">No</a> <a class="yes_button all_button" href="' . $link . '">Yes</a>'
. '</div>'
. '</div>'
. '</body>'
. '</html>';

/******************************************************************************
 * Create a text file to accept the output string					          *
 ******************************************************************************/

 $id = uniqid();
 $result = $description . '_contentwarning_' . $id . '.html';



$f = fopen($result, "w");
fwrite($f, $strOut);
fclose($f);


/******************************************************************************
 * Give some feedback and a test link                                         *
 ******************************************************************************/
echo('<!DOCTYPE html>

<html>
<head>
<style>
  body {
  font-family: sans-serif;
  font-size: 1em;
  color: #333;
  background-color: #ddd;
}

label {
  clear: both;
  display: block;
  font-size: 0.85em;
  font-weight: bold;
  padding: 0.8em 0 0.2em 0;
  user-select: none;
}

input, button {
  float: left;
  font-size: 1em;
  padding: 3px 6px;
  margin: 0;
  border: 1px solid #333;
  outline: 0;
  box-shadow: none;
}

::-moz-focus-inner {
  padding: 0;
  border: 0;
}

input {
  width: 15em;
  background-color: #fff;
  border-right: 0 none;
  border-radius: 3px 0 0 3px;
}

button {
  position: relative;
  background-color: #aaa;
  border-radius: 0 3px 3px 0;
  cursor: pointer;
}

.copied::after {
  position: absolute;
  top: 12%;
  right: 110%;
  display: block;
  content: "copied";
  font-size: 0.75em;
  padding: 2px 3px;
  color: #fff;
  background-color: #22a;
  border-radius: 3px;
  opacity: 0;
  will-animate: opacity, transform;
  animation: showcopied 1.5s ease;
}

@keyframes showcopied {
  0% {
    opacity: 0;
    transform: translateX(100%);
  }
  70% {
    opacity: 1;
    transform: translateX(0);
  }
  100% {
    opacity: 0;
  }
}
</style>
  </head>
<body>
<p><a href="'. $result . '">Click here</a> to test if the build worked. </p>
<input type="text" value="'. $result . '" id="myInput">
<button onclick="myFunction()">Copy filtered link</button>

<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>

</body>
</html>');


?>
