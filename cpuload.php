<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('Connection: keep-alive');

function getCpuLoad() {
    $load = sys_getloadavg()[0];
    return round($load * 100,2).'%';
}

while (true){
    echo "data:".json_encode(['cpu_load' => getCpuLoad()])."\n\n";
    ob_flush();
    flush();
    sleep();
}

echo json_encode(getCpuLoad());
?>
