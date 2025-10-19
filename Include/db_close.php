<?php



if (isset($result) && $result !== null) {
    mysqli_free_result($result); }

mysqli_close($conn);  
