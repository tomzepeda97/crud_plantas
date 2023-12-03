<?php
    
?>

<?php
class Cliente
{
    // public $id;
    // public $nombre;
    // public $edad;
    // public $cedula;
    // public $email;
    // public $direccion;

    public $id;
    public $gtaxonomico;
    public $familia;
    public $familia2;
    public $genero1;
    public $genero2;
    public $genero3;
    public $corrob;
    public $especie1;
    public $especie2;
    public $autor1;
    public $autor2;
    public $determino;
    public $determino2;
    public $fechadet;
    public $fechadet2;
    public $pais;
    public $estado;
    public $municipio;
    public $localidad;
    public $latitud;
    public $longitud;
    public $altitud;
    public $vegetacion;
    public $colectores;
    public $colecta;
    public $ingreojbc;
    public $prensado;
    public $fechacol;
    public $fenologia;
    public $datosplan;
    public $ncomun;
    public $usos;
    public $usos2;
    public $ojbc;
    public $endemismo;
    public $riesgo;
    public $habito;
    public $formavid;
    public $tipo;
    public $duplicados;
    public $tingreso;
    public $tingreso2;
    public $tcoleccion;
    public $origen;
    public $fbaja;
    public $observaciones;
    public $herbario;

    function __construct($id, $gtaxonomico, $familia, $familia2, $genero1, $genero2, $genero3, $corrob, $especie1, $especie2, $autor1, $autor2, $determino, $determino2, $fechadet, $fechadet2, $pais, $estado, $municipio, $localidad, $latitud, $longitud, $altitud, $vegetacion, $colectores, $colecta, $ingreojbc, $prensado, $fechacol, $fenologia, $datosplan, $ncomun, $usos, $usos2, $ojbc, $endemismo, $riesgo, $habito, $formavid, $tipo, $duplicados, $tingreso, $tingreso2, $tcoleccion, $origen, $fbaja, $observaciones, $herbario)
    //function __construct($id, $nombre, $edad, $cedula, $email, $direccion)

    {
        // $this->id = $id;
        // $this->nombre = $nombre;
        // $this->edad = $edad;
        // $this->cedula = $cedula;
        // $this->email = $email;
        // $this->direccion = $direccion;
        $this->id = $id;
        $this->gtaxonomico = $gtaxonomico;
        $this->familia = $familia;
        $this->familia2 = $familia2;
        $this->genero1 = $genero1;
        $this->genero2 = $genero2;
        $this->genero3 = $genero3;
        $this->corrob = $corrob;
        $this->especie1 = $especie1;
        $this->especie2 = $especie2;
        $this->autor1 = $autor1;
        $this->autor2 = $autor2;
        $this->determino = $determino;
        $this->determino2 = $determino2;
        $this->fechadet = $fechadet;
        $this->fechadet2 = $fechadet2;
        $this->pais = $pais;
        $this->estado = $estado;
        $this->municipio = $municipio;
        $this->localidad = $localidad;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
        $this->altitud = $altitud;
        $this->vegetacion = $vegetacion;
        $this->colectores = $colectores;
        $this->colecta = $colecta;
        $this->ingreojbc = $ingreojbc;
        $this->prensado = $prensado;
        $this->fechacol = $fechacol;
        $this->fenologia = $fenologia;
        $this->datosplan = $datosplan;
        $this->ncomun = $ncomun;
        $this->usos = $usos;
        $this->usos2 = $usos2;
        $this->ojbc = $ojbc;
        $this->endemismo = $endemismo;
        $this->riesgo = $riesgo;
        $this->habito = $habito;
        $this->formavid = $formavid;
        $this->tipo = $tipo;
        $this->duplicados = $duplicados;
        $this->tingreso = $tingreso;
        $this->tingreso2 = $tingreso2;
        $this->tcoleccion = $tcoleccion;
        $this->origen = $origen;
        $this->fbaja = $fbaja;
        $this->observaciones = $observaciones;
        $this->herbario = $herbario;

        //$insertar = "INSERT INTO clientes(id, gtaxinomico,familia,familia2,genero1,genero2,genero3,corrob,especie1,especie2,autor1,autor2,determino,determino2,fechdet,fechdet2,
        // pais,estado,municipio,localidad,latitud,longitud,altitud,vegetacion,colectores,colecta,ingreojbc,prensado,fechacol,fenologia,
        // datosplan,ncomun,usos,usos2,ojbc,endemismo,riesgo,habito,formavid,tipo,duplicados,tingreso,tingreso2,tcoleccion,
        // origen,fbaja,observaciones,herbario)

        // VALUES('$this->id', '$this->gtaxinomico', '$this->familia', '$this->familia2','$this->genero1','$this->genero2','$this->genero3','$this->corrob','$this->especie1','$this->especie2','$this->autor1','$this->autor2','$this->determino','$this->determino2','$this->fechdet','$this->fechdet2',
        // '$this->pais','$this->estado','$this->municipio','$this->localidad','$this->latitud','$this->longitud','$this->altitud','$this->vegetacion','$this->colectores','$this->colecta','$this->ingreojbc','$this->prensado','$this->fechacol','$this->fenologia',
        // '$this->datosplan','$this->ncomun','$this->usos','$this->usos2','$this->ojbc','$this->endemismo','$this->riesgo','$this->habito','$this->formavid','$this->tipo','$this->duplicados','$this->tingreso','$this->tingreso2','$this->tcoleccion',
        // '$this->origen','$this->fbaja','$this->observaciones','$this->herbario')";

    }

    public function Agregar($con)
    {
        $insertar = "INSERT INTO registroplantas( id, gtaxonomico, familia, familia2, genero1, genero2, genero3, corrob, especie1, especie2, autor1, autor2, determino, determino2, fechadet, fechadet2, pais, estado, municipio, localidad, latitud, longitud, altitud, vegetacion, colectores, colecta, ingreojbc, prensado, fechacol, fenologia, datosplan, ncomun, usos, usos2, ojbc, endemismo, riesgo, habito, formavid, tipo, duplicados, tingreso, tingreso2, tcoleccion, origen, fbaja, observaciones, herbario)
        VALUES('$this->id', '$this->gtaxonomico', '$this->familia', '$this->familia2', '$this->genero1', '$this->genero2', '$this->genero3', '$this->corrob', '$this->especie1', '$this->especie2', '$this->autor1', '$this->autor2', '$this->determino', '$this->determino2', '$this->fechadet', '$this->fechadet2', '$this->pais', '$this->estado', '$this->municipio', '$this->localidad', '$this->latitud', '$this->longitud', '$this->altitud', '$this->vegetacion', '$this->colectores', '$this->colecta', '$this->ingreojbc', '$this->prensado', '$this->fechacol', '$this->fenologia', '$this->datosplan', '$this->ncomun', '$this->usos', '$this->usos2', '$this->ojbc', '$this->endemismo', '$this->riesgo', '$this->habito', '$this->formavid', '$this->tipo', '$this->duplicados', '$this->tingreso', '$this->tingreso2', '$this->tcoleccion', '$this->origen', '$this->fbaja', '$this->observaciones', '$this->herbario')";
        //VALUES('$this->id', '$this->nombre', '$this->edad', '$this->cedula', '$this->email', '$this->direccion')";
        $exe = mysqli_query($con, $insertar);
        if ($exe !== false) {
            // MensajeExitoso("Planta Registrada al Sistema");
        } else {
            // MensajeError("La Planta No Pudo Ser Registrado al Sistema");
        }
    }


    public function Modificar($con)
    {
        $modificar = "UPDATE registroplantas SET 
        gtaxonomico = '$this->gtaxonomico', familia = '$this->familia', familia2 = '$this->familia2', 
        genero1 = '$this->genero1', genero2 = '$this->genero2', genero3 = '$this->genero3', 
        corrob = '$this->corrob', especie1 = '$this->especie1', especie2 = '$this->especie2', 
        autor1 = '$this->autor1', autor2 = '$this->autor2', determino ='$this->determino', 
        determino2 = '$this->determino2', fechadet = '$this->fechadet', fechadet2 = '$this->fechadet2', 
        pais = '$this->pais', estado = '$this->estado', municipio = '$this->municipio', localidad = '$this->localidad', 
        latitud = '$this->latitud', longitud = '$this->longitud', altitud = '$this->altitud', 
        vegetacion = '$this->vegetacion', colectores = '$this->colectores', colecta = '$this->colecta', 
        ingreojbc = '$this->ingreojbc', prensado = '$this->prensado', fechacol = '$this->fechacol', 
        fenologia = '$this->fenologia', datosplan = '$this->datosplan', ncomun = '$this->ncomun', 
        usos = '$this->usos', usos2 = '$this->usos2', ojbc = '$this->ojbc', endemismo = '$this->endemismo', 
        riesgo = '$this->riesgo', habito = '$this->habito', formavid = '$this->formavid', tipo = '$this->tipo', 
        duplicados = '$this->duplicados', tingreso = '$this->tingreso', tingreso2 = '$this->tingreso2', 
        tcoleccion = '$this->tcoleccion', origen = '$this->origen', fbaja = '$this->fbaja', 
        observaciones = '$this->observaciones', herbario = '$this->herbario'
        WHERE id = '$this->id'";
        $exe = mysqli_query($con, $modificar);
        if ($exe !== false) {
            // MensajeExitoso("Planta Modificado");
        } else {
            // MensajeError("La Planta No Pudo Ser Modificado");
        }
    }

    public function Eliminar($con)
    {
        $eliminar = "DELETE FROM registroplantas WHERE id = '$this->id'";
        $exe = mysqli_query($con, $eliminar);
        if ($exe !== false) {
            // MensajeExitoso("Planta Eliminado del Sistema");
        } else {
            // MensajeError("La Planta No Pudo Ser Eliminado");
        }
    }
}
