<?php 

    include 'discs_db.php';

    $filteredDb = [];

    if (!empty($_GET["genre"])) {
        foreach($discs as $disc) {
            if ($disc["genre"]  == $_GET["genre"]) {
                $filteredDb[] = $disc;
            }
        }
    } else {
        $filteredDb = $discs;
    }

    header('Content-Type: application/json');

    echo json_encode($filteredDb);
?>