<?php

// conectar con db

// function obtenerClientes(){
//     $sentencia = "SELECT * FROM clientes";
//     return select($sentencia);
// }

// $clientes = obtenerClientes();


// Prueba: Añadir elementos del 1 al 36 en la tabla
$arreglo = [];
$contador = 1;
$filas = 6;

for ($i = 0; $i < $filas; $i++) {
    $subarreglo = [];
    for ($j = 0; $j < 6; $j++) {
        $subarreglo[] = $contador;
        $contador++;
    }
    $arreglo[] = $subarreglo;
}

$estado = "reportes";
include('../header.php'); 

?>

    <!-- marco inferior -->

    <!-- Titulo Portal -->
    <div class="marco_letras">

        <!-- icono + titulo  -->
        <div class="label-productos">
                <!-- icono -->
                <div class="imagen-2">
                    <svg fill="#ffffff" viewBox="0 0 1000 1000" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 1000 1000" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata> <g> <g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"> <path d="M1685.8,4989.2c-253.7-58.9-499.3-265.9-621.1-519.6l-75.1-158.3l-6.1-4141c-4.1-2772.8,2-4173.4,16.2-4238.4c56.8-267.9,257.8-513.6,523.7-639.4l156.3-75.1l3258-6.1c2174-4.1,3290.4,2,3355.4,16.2c326.8,69,627.2,365.4,702.4,692.2c14.2,58.9,22.3,1049.5,22.3,2809.4c0,2616.5-2,2724.1-38.6,2801.2c-48.7,101.5-3373.6,3428.5-3458.9,3460.9C5449.2,5017.6,1797.5,5015.6,1685.8,4989.2z M4856.5,3087.2c0-1433.1,2-1451.4,115.7-1648.3c89.3-152.2,253.7-298.4,426.3-381.6l158.3-75.1l1427-6.1l1425-6.1v-2494.7c0-1891.9-6.1-2506.9-24.4-2547.5c-52.8-117.7,148.2-111.6-3385.8-111.6s-3333.1-6.1-3385.8,111.6c-38.6,81.2-34.5,8302.2,4.1,8371.2c58.9,105.6,12.2,101.5,1682.8,103.5h1556.9V3087.2z M6866.1,1585.1c-1351.9-4.1-1337.7-6.1-1380.3,109.6c-12.2,30.5-20.3,552.1-20.3,1293V4230l1319.4-1319.4l1319.4-1319.4L6866.1,1585.1z"></path> <path d="M2989-327.1v-304.5h2009.6h2009.6v304.5v304.5H4998.6H2989V-327.1z"></path> <path d="M2989-1646.5V-1951h2009.6h2009.6v304.5v304.5H4998.6H2989V-1646.5z"></path> <path d="M2989-2925.3v-304.5h954.1h954v304.5v304.5h-954H2989V-2925.3z"></path> </g> </g> </g></svg>
                </div>
                <!-- icono -->
                
                <!-- titulo -->
                <span class="productos-texto">Reportes</span>
                <!-- titulo -->

        </div>
        <!-- icono + titulo  -->
    <!-- Titulo Portal -->
    </div>
    
    <!-- linea recta 2 -->
    <hr class="custom-line2">
    <!-- linea recta 2 -->


    <div class="salto_linea_botones_reporte"></div>

    <div class="marco_botones">

        <button class ="boton_opcion" onclick="window.location.href='reportes_ventas_empleado/reportes_ventas_empleado.php';">
            <span class="boton_opcion_transition"></span>
            <span class="boton_opcion_gradient"></span>
            <span class="boton_opcion_label">Ventas por empleado</span>
        </button>

        <button class ="boton_opcion" onclick="window.location.href='reportes_ventas_fecha/reportes_ventas_fecha.php';">
            <span class="boton_opcion_transition"></span>
            <span class="boton_opcion_gradient"></span>
            <span class="boton_opcion_label">Ventas por fecha</span>
        </button>

        <button class ="boton_opcion" onclick="window.location.href='reportes_compras_fecha/reportes_compras_fecha.php';">
            <span class="boton_opcion_transition"></span>
            <span class="boton_opcion_gradient"></span>
            <span class="boton_opcion_label">Compras por fecha</span>
        </button>

    </div>

    <div class="salto_linea_botones_reporte"></div>

    <div class="marco_botones">

        <button class ="boton_opcion" onclick="window.location.href='reportes_productos/reportes_productos.php';">
            <span class="boton_opcion_transition"></span>
            <span class="boton_opcion_gradient"></span>
            <span class="boton_opcion_label">Productos</span>
        </button>

        <button class ="boton_opcion" onclick="window.location.href='reportes_empleados/reportes_empleados.php';">
            <span class="boton_opcion_transition"></span>
            <span class="boton_opcion_gradient"></span>
            <span class="boton_opcion_label">Empleados</span>
        </button>

        <button class ="boton_opcion" onclick="window.location.href='reportes_kardex/reportes_kardex.php';">
            <span class="boton_opcion_transition"></span>
            <span class="boton_opcion_gradient"></span>
            <span class="boton_opcion_label">Kardex</span>
        </button>

    </div>
    

</body>
</html>