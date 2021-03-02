<?php

include __DIR__ . '/php-partials/db.php';

header('Content-Type:application/json');
echo json_encode($arrayDischi);
