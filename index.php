<?php
//her kalder vi vores funktions
require_once 'funktions/funktions.php';
// hvis side hentes med get, kør vores template.
if(requestCheck('GET')) {
    require_once 'templates/frontend/layout.php';
}
