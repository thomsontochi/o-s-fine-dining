<?php

foreach( $NavItems as $items){
    echo "<li><a href=\"$items[slug]\">$items[title]</a></li>";
}

?>