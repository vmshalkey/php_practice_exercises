<?php

// Let's say that $x = [1,3,5,7].

// 1. What would be the output of the following codes?

// $x = array(1,3,5,7);
// foreach($x as $key => $value)
// {
//   echo $key . " - " . $value ."<br />";
// }

// 0 - 1
// 1 - 3
// 2 - 5
// 3 - 7

// 2. What would be the output of the following codes?

// $x = array(1,3,5,7);
// foreach($x as $value)
// {
//   echo $value ."<br />";
// }

//1
//3
//5
//7

// Let's now say that $x = [ "hi" => "Dojo", "awesome" => "game" ].

// 3. What would be the output of the following codes?

$x = array("hi" => "Dojo", "awesome" => "game");
foreach($x as $key => $value)
{
  echo $key . " - " . $value ."<br />";
}

//
//
//
//
//

// 4. What would be the output of the following codes?

// $x = array("hi" => "Dojo", "awesome" => "game");
// foreach($x as $key => $value)
// {
//   echo $value ."<br />";
// }

// 5. What would be the output of the following codes?

// $x = array("hi" => "Dojo", "awesome" => "game");
// foreach($x as $key => $value)
// {
//   echo $key ."<br />";
// }

// 6. Okay. Now let's make it a little bit harder.  What would be the output of the following codes?

// $x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
// foreach($x as $key => $value)
// {
//   echo "Key is {$key}<br />";
//   echo "var_dumping value";
//   var_dump($value);
// }

// 7. Now what about this?

// $x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
// foreach($x as $value)
// {
//   echo "var_dumping value";
//   var_dump($value);
// }

// 8. Okay. Now let's make it a even harder.  What would be the output of the following codes? 

// $x = array( array("hi"=>"Dojo", "game"=>"awesome"), array("dude"=>"fun", "play"=>"what?"), array("no"=>"way", "i am"=>"confused?") );
// foreach($x as $key => $value)
// {
//   echo "key is {$key}<br />";
//   foreach($value as $key2=>$value2)
//   {
//     echo $key2 ." - " . $value2."<br />";
//   }
// }

// 9. Now what about this?

// $x = array( array("hi"=>"Dojo", "game"=>"awesome"), array("dude"=>"fun", "play"=>"what?"), array("no"=>"way", "i am"=>"confused?") );
// foreach($x as $y)
// {
//   foreach($y as $key=>$value)
//   {
//     echo $key ." - " . $value."<br />";
//   }
// }


?>
