<?php

if (!isset($_GET['q'])){
    include('./modules/index.php');
}
elseif ($_GET['q']=='login'){
    include('./modules/login.php');
}
elseif ($_GET['q']=='admin'){
    include('./modules/admin.php');
}
elseif ($_GET['q']=='' && false){
    
}
else {
    http_response_code(404);
}
?>