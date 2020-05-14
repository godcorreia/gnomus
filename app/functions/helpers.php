<?php

function debug( $var ) {
  var_dump( '<pre>'.print_r( $var, true ).'</pre>' );
  die();
}


?>
