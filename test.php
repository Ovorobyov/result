<?
$result = revertPunctuationMarks("Hello! World?");
echo $result;

function revertPunctuationMarks($string)
{
  preg_match_all("/[^\w\s]/",$string,$matches);
  $arr = array();
  foreach ($matches[0] as $key => $match) {
    $arr[stripos($string,$match)] = array_reverse($matches[0])[$key];
  }
  foreach ($arr as $key => $value) {
    $string = substr_replace($string,$value,$key,1);
  }
  return $string;
}
