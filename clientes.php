<?php
require_once 'clsPlantas.php';


if (isset($_POST['update_plantas'])) {
    $cliente = new Cliente(
        $_POST['update_id'],
        $_POST['update_gtaxonomico'],
        $_POST['update_familia'],
        $_POST['update_familia2'],
        $_POST['update_genero1'],
        $_POST['update_genero2'],
        $_POST['update_genero3'],
        $_POST['update_corrob'],
        $_POST['update_especie1'],
        $_POST['update_especie2'],
        $_POST['update_autor1'],
        $_POST['update_autor2'],
        $_POST['update_determino'],
        $_POST['update_determino2'],
        $_POST['update_fechadet'],
        $_POST['update_fechadet2'],
        $_POST['update_pais'],
        $_POST['update_estado'],
        $_POST['update_municipio'],
        $_POST['update_localidad'],
        $_POST['update_latitud'],
        $_POST['update_longitud'],
        $_POST['update_altitud'],
        $_POST['update_vegetacion'],
        $_POST['update_colectores'],
        $_POST['update_colecta'],
        $_POST['update_ingreojbc'],
        $_POST['update_prensado'],
        $_POST['update_fechacol'],
        $_POST['update_fenologia'],
        $_POST['update_datosplan'],
        $_POST['update_ncomun'],
        $_POST['update_usos'],
        $_POST['update_usos2'],
        $_POST['update_ojbc'],
        $_POST['update_endemismo'],
        $_POST['update_riesgo'],
        $_POST['update_habito'],
        $_POST['update_formavid'],
        $_POST['update_tipo'],
        $_POST['update_duplicados'],
        $_POST['update_tingreso'],
        $_POST['update_tingreso2'],
        $_POST['update_tcoleccion'],
        $_POST['update_origen'],
        $_POST['update_fbaja'],
        $_POST['update_observaciones'],
        $_POST['update_herbario']
    );
    $cliente->Modificar($con);
    unset($_POST["update_plantas"]);
} else if (isset($_POST['add_plantas'])) {
    $cliente = new Cliente(null, $_POST['add_gtaxonomico'], $_POST['add_familia'], $_POST['add_familia2'], $_POST['add_genero1'], $_POST['add_genero2'], $_POST['add_genero3'], $_POST['add_corrob'], $_POST['add_especie1'], $_POST['add_especie2'], $_POST['add_autor1'], $_POST['add_autor2'], $_POST['add_determino'], $_POST['add_determino2'], $_POST['add_fechadet'], $_POST['add_fechadet2'], $_POST['add_pais'], $_POST['add_estado'], $_POST['add_municipio'], $_POST['add_localidad'], $_POST['add_latitud'], $_POST['add_longitud'], $_POST['add_altitud'], $_POST['add_vegetacion'], $_POST['add_colectores'], $_POST['add_colecta'], $_POST['add_ingreojbc'], $_POST['add_prensado'], $_POST['add_fechacol'], $_POST['add_fenologia'], $_POST['add_datosplan'], $_POST['add_ncomun'], $_POST['add_usos'], $_POST['add_usos2'], $_POST['add_ojbc'], $_POST['add_endemismo'], $_POST['add_riesgo'], $_POST['add_habito'], $_POST['add_formavid'], $_POST['add_tipo'], $_POST['add_duplicados'], $_POST['add_tingreso'], $_POST['add_tingreso2'], $_POST['add_tcoleccion'], $_POST['add_origen'], $_POST['add_fbaja'], $_POST['add_observaciones'], $_POST['add_herbario']);
    // $cliente->Agregar($con);
    $cliente->Agregar($con);
    unset($_POST["add_plantas"]);
} else if (isset($_POST['delete_cliente'])) {
    $cliente = new Cliente($_POST['delete_id'], $_POST['delete_ncomun'], '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
    $cliente->Eliminar($con);
    unset($_POST["delete_cliente"]);
}

$query = "SELECT id, gtaxonomico, familia, familia2, genero1, genero2, genero3, corrob, especie1, especie2, autor1, autor2, determino, determino2, fechadet, fechadet2, pais, estado, municipio, localidad, latitud, longitud, altitud, vegetacion, colectores, colecta, ingreojbc, prensado, fechacol, fenologia, datosplan, ncomun, usos, usos2, ojbc, endemismo, riesgo, habito, formavid, tipo, duplicados, tingreso, tingreso2, tcoleccion, origen, fbaja, observaciones, herbario from registroplantas
ORDER BY gtaxonomico asc;";
$res = mysqli_query($con, $query);

require('views/clientes.view.php');
