<?php
get_header();

        $term = $_GET['s'];
         $expterm = explode(" ",$term);
         echo '<pre>';
         print_r($expterm);




?>





<?php
get_footer();
?>