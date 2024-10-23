</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php

$empleados = [
    ["nombre" => "Juan", "sueldo" => 2000],
    ["nombre" => "Marta", "sueldo" => 2500],
    ["nombre" => "Carlos", "sueldo" => 1800],
    ["nombre" => "Ana", "sueldo" => 3000],
    ["nombre" => "Luis", "sueldo" => 2200]
];

usort($empleados, function ($a, $b) {
    return $a['sueldo'] <=> $b['sueldo'];
});

echo "Empleados ordenados por sueldo:\n";
foreach ($empleados as $empleado) {
    echo "El sueldo de " . $empleado['nombre'] . " es " . $empleado['sueldo'] . "<br>";
}

array_push($empleados, ["nombre" => "Sofia", "sueldo" => 2700]);
array_push($empleados, ["nombre" => "Roberto", "sueldo" => 2100]);

usort($empleados, function ($a, $b) {
    return $a['sueldo'] <=> $b['sueldo'];
});

echo "<br>Empleados después de agregar dos nuevos y ordenados por sueldo:<br>";

foreach ($empleados as $empleado) {
    echo "El sueldo de " . $empleado['nombre'] . " es " . $empleado['sueldo'] . "<br>";
}

?>
</body>
</html>