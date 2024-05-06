<?php
$discs_json = file_get_contents ('dischi.json');
$discs = json_decode($discs_json, true);
// stampiamo tutti i dischi
// $response = $discs;

// // richiesta di un disco specifico
// if ($_GET('discIndex')) {
//     $discIndex = intval($_GET['discIndex']);
//     $response = $discs[$discIndex];
// }

header('Content-Type: application/json');

echo json_encode($discs);
?>