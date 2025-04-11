<?php
header('Content-Type: application/json');

function getCpuLoad() {
    $load = sys_getloadavg();
    return [
    	'load1' => $load[0],
    	'load5' => $load[1],
	'load15' => $load[2],
	'cores' => shell_exec("nproc")
    ];
}

echo json_encode(getCpuLoad());
?>
