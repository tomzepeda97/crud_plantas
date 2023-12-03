<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-9">
                    <h1>Plantas</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!--apartado de buscador por medio de -->
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <!-- los campos que queremos mostrar en la tabla-->
                                    
                                    <th>Id</th>
                                    <!-- <th>N.COLECTA</th> -->
                                    <th>G.TAXONÓMICO</th>
                                    <th>FAMILIA</th>
                                    <th>MUNICIPIO</th>
                                    <th>T.VEGETACION</th>
                                    <!-- <th>USOS</th>  -->
                                    <!-- <th>C.RIESGO</th> -->
                                     <th>HÁBITO</th> 
                                     <th>F.VIDA</th> 
                                    <th>TIP.INGRESO</th>
                                    <th>TIP.COLECCIÓN</th> 
                                    <th>Acciones

                                        <a data-toggle="modal" data-target="#AddModal" href="javascript:void(0);" title="Agregar Nuevo Planta"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($res)) :
                                ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <!-- <td><!?php echo $row['colecta'] ?></td> -->
                                        <td><?php echo $row['gtaxonomico'] ?></td>
                                        <td><?php echo $row['familia'] ?></td>
                                        <td><?php echo $row['municipio'] ?></td>
                                        <td><?php echo $row['vegetacion'] ?></td>
                                        <!-- <td><!?php echo $row['usos'] ?></td> -->
                                        <!-- <td><!?php echo $row['riesgo'] ?></td> -->
                                        <td><?php echo $row['habito'] ?></td>
                                        <td><?php echo $row['formavid'] ?></td>
                                        <td><?php echo $row['tingreso'] ?></td>
                                        <td><?php echo $row['tcoleccion'] ?></td>
                                        <td>
                                            <!--apartado para botones de editar y eliminar-->
                                            <div class="row">

                                                <div class="col-sm-6">
                                                <a data-toggle="modal" data-target="#EditModal" href="javascript:void(0);" onclick="document.getElementById('update_id').value = <?= $row['id'] ?>;document.getElementById('update_gtaxonomico').value = '<?= $row['gtaxonomico'] ?>';document.getElementById('update_familia').value = '<?= $row['familia'] ?>';document.getElementById('update_familia2').value = '<?= $row['familia2'] ?>';document.getElementById('update_genero1').value = '<?= $row['genero1'] ?>';document.getElementById('update_genero2').value = '<?= $row['genero2'] ?>';document.getElementById('update_genero3').value = '<?= $row['genero3'] ?>';document.getElementById('update_corrob').value = '<?= $row['corrob'] ?>';document.getElementById('update_especie1').value = '<?= $row['especie1'] ?>';document.getElementById('update_especie2').value = '<?= $row['especie2'] ?>';document.getElementById('update_autor1').value = '<?= $row['autor1'] ?>';document.getElementById('update_autor2').value = '<?= $row['autor2'] ?>';document.getElementById('update_determino').value = '<?= $row['determino'] ?>';
                                                                                                                                    document.getElementById('update_determino2').value='<?= $row['determino2'] ?>';document.getElementById('update_fechadet').value ='<?= $row['fechadet'] ?>'; document.getElementById('update_fechadet2').value = '<?= $row['fechadet2'] ?>';document.getElementById('update_pais').value = '<?= $row['pais'] ?>';document.getElementById('update_estado').value = '<?= $row['estado'] ?>';document.getElementById('update_municipio').value = '<?= $row['municipio'] ?>';document.getElementById('update_localidad').value = '<?= $row['localidad'] ?>';document.getElementById('update_latitud').value = '<?= $row['latitud'] ?>';document.getElementById('update_longitud').value = '<?= $row['longitud'] ?>';document.getElementById('update_altitud').value = '<?= $row['altitud'] ?>';document.getElementById('update_vegetacion').value = '<?= $row['vegetacion'] ?>';document.getElementById('update_colectores').value = '<?= $row['colectores'] ?>';document.getElementById('update_colecta').value = '<?= $row['colecta'] ?>';
                                                                                                                                    document.getElementById('update_ingreojbc').value = '<?= $row['ingreojbc'] ?>';document.getElementById('update_prensado').value = '<?= $row['prensado'] ?>';document.getElementById('update_fechacol').value = '<?= $row['fechacol'] ?>';document.getElementById('update_fenologia').value = '<?= $row['fenologia'] ?>';document.getElementById('update_datosplan').value = '<?= $row['datosplan'] ?>';document.getElementById('update_ncomun').value = '<?= $row['ncomun'] ?>';document.getElementById('update_usos').value = '<?= $row['usos'] ?>';document.getElementById('update_usos2').value = '<?= $row['usos2'] ?>';document.getElementById('update_ojbc').value = '<?= $row['ojbc'] ?>';document.getElementById('update_endemismo').value = '<?= $row['endemismo'] ?>';document.getElementById('update_riesgo').value = '<?= $row['riesgo'] ?>';document.getElementById('update_habito').value = '<?= $row['habito'] ?>';document.getElementById('update_formavid').value = '<?= $row['formavid'] ?>';document.getElementById('update_tipo').value = '<?= $row['tipo'] ?>';
                                                                                                                                    document.getElementById('update_duplicados').value = '<?= $row['duplicados'] ?>';document.getElementById('update_tingreso').value = '<?= $row['tingreso'] ?>';document.getElementById('update_tcoleccion').value = '<?= $row['tcoleccion'] ?>';document.getElementById('update_origen').value = '<?= $row['origen'] ?>';document.getElementById('update_fbaja').value = '<?= $row['fbaja'] ?>';document.getElementById('update_observaciones').value = '<?= $row['observaciones'] ?>';document.getElementById('update_herbario').value = '<?= $row['herbario'] ?>';" title="Editar planta" style="margin-right: 5px;"> <i class="fas fa-edit"></i> </a>
                                                </div>
                                                     
                                                
                                                <div class="col-sm-6">
                                                    <a data-toggle="modal" data-target="#DeleteModal" href="javascript:void(0);" onclick="document.getElementById('delete_id').value = <?= $row['id'] ?>;document.getElementById('delete_ncomun').value = '<?= $row['ncomun'] ?>';" title="Eliminar planta" class="text-danger"> <i class="fas fa-trash"></i> </a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

<!-- final del modal -->
<div class="modal fade" id="AddModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" id="defaultModalLabel">Agregar Nueva planta</h4>
            </div>
            <div class="modal-body">
                <form action="panel.php?modulo=clientes" id="ingresar" method="POST">
                    <!-- Primera opción -->
                    <div class="form-group">
                        <label for="add_gtaxonomico">Grupo Taxonómico</label>
                        <select name="add_gtaxonomico" id="add_gtaxonomico" class="form-control">
                            <option value="text">Ingrese el Grupo Taxonómico...</option>
                            <option value="Algas">Algas</option>
                            <option value="Angiospermas">Angiospermas</option>
                            <option value="Bryophyta">Bryophyta</option>
                            <option value="Gimnospermas">Gimnospermas</option>
                            <option value="Hongos">Hongos</option>
                            <option value="Pteridophyta">Pteridophyta</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="add_familia">Familia</label>
                        <select class="form-control" name="add_familia" id="add_familia">
                                <option value="text">--Ingrese Familia--</option>
                                <option value="Aspleniaceae">Aspleniaceae</option>
                                <option value="Athyriaceae">Athyriaceae</option>
                                <option value="Blechnaceae">Blechnaceae</option>
                                <option value="Cibotiaceae">Cibotiaceae</option>
                                <option value="Culcitaceae">Culcitaceae</option>
                                <option value="Zygophyllaceae">Zygophyllaceae</option>
                                <option value="personalizada">Otro</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="add_familia2">Familia 2</label>
                        <select class="form-control" name="add_familia2" id="add_familia2">
                                <option value="text">--Ingrese Familia--</option>
                                <option value="Aspleniaceae">Aspleniaceae</option>
                                <option value="Athyriaceae">Athyriaceae</option>
                                <option value="Zosteraceae">Zosteraceae</option>
                                <option value="Zygophyllaceae">Zygophyllaceae</option>
                                <option value="personalizada">Otro</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="add_genero1">Genero</label>
                        <select class="form-control" name="add_genero1" id="add_genero1">
                                <option value="*text">--Ingrese Género (1)--</option>
                                <option value="*Abarema">*Abarema</option>
                                <option value="*Abelia">*Abelia</option>
                                <option value="*Zyzyxia">*Zyzyxia</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="add_genero2">Genero 2</label>
                        <select class="form-control" name="add_genero2" id="add_genero2">
                                <option value="*text">Ingrese Género 2</option>
                                <option value="*Abarema">*Abarema</option>
                                <option value="*Abelia">*Abelia</option>
                                
                                <option value="*Zyzyxia">*Zyzyxia</option>
                            </select>
                    
                    </div>

                    <div class="form-group">
                        <label for="add_genero3">Genero 3</label>
                        <select class="form-control" name="add_genero3" id="add_genero3">
                                <option value="*text">--Ingrese Género 3</option>
                                <option value="*Abarema">*Abarema</option>
                                <option value="*Abelia">*Abelia</option>
                                
                                <option value="*Zyzyxia">*Zyzyxia</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="add_corrob">Corroborar</label>
                        <select class="form-control" name="add_corrob" id="add_corrob" class="form-control">
                            <option value="cf.">--Ninguno--</option>
                            <option value="cf.">cf.</option>
                            <option value="aff.">aff.</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="add_especie1">Especie 1</label>
                        <input type="text" name="add_especie1" id="add_especie1" placeholder="Ingrese la Especie 1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_especie2">Especie 2</label>
                        <input type="text" name="add_especie2" id="add_especie2" placeholder="Ingrese la Especie 2" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_autor1">Autor 1</label>
                        <input type="text" name="add_autor1" id="add_autor1" placeholder="Ingrese el Autor 1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_autor2">Autor 2</label>
                        <input type="text" name="add_autor2" id="add_autor2" placeholder="Ingrese el Autor 2" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_determino">Determino</label>
                        <select name="add_determino" id="add_determino" class="form-control">
                            <option value="-- Ninguno --">-- Ninguno --</option>
                            <option value="N. Martínez-Correa">N. Martínez-Correa</option>
                            <option value="N. Martínez M.">N. Martínez M.</option>
                            <option value="R. Sandoval Perea">R. Sandoval Perea</option>
                            <option value="L. H. Vicente Rivera">L. H. Vicente Rivera</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="add_determino2">Determino 2</label>
                        <select name="add_determino2" id="add_determino2" class="form-control">
                            <option value="-- Ninguno --">-- Ninguno --</option>
                            <option value="N. Martínez-Correa">N. Martínez-Correa</option>
                            <option value="N. Martínez M.">N. Martínez M.</option>
                            <option value="R. Sandoval Perea">R. Sandoval Perea</option>
                            <option value="L. H. Vicente Rivera">L. H. Vicente Rivera</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="add_fechadet">Fecha Determinación</label>
                        <input type="date" name="add_fechadet" id="add_fechadet" class="form-control">
                    </div>                  
                    <div class="form-group">
                        <label for="add_fechadet2">Fecha Determinación 2</label>
                        <input type="date" name="add_fechadet2" id="add_fechadet2" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_pais">Pais</label>
                        <select name="add_pais" id="add_pais" class="form-control" required="required">
                                <option value="México">México</option>
                                <option value="otro">otro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="add_estado">Estado</label>
                        <select name="add_estado" id="add_estado" class="form-control">
                        <option value="Eleccion">Ingrese un Estado...</option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="Ciudad de México">Ciudad de México</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Durango">Durango</option>
                        <option value="Estado de México">Estado de México</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Michoacán">Michoacán</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo León">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Querétaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosí">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatán">Yucatán</option>
                        <option value="Zacateca">Zacateca</option>
                    </select>
                </div>
                    
                    <div class="form-group">
                        <label for="add_municipio">Municipio</label>
                        <select name="add_municipio" id="add_municipio" class="form-control">
                        <option value="Eleccion2">Ingrese Un Municipio</option>
                        <option value="Acambay">Acambay</option>
                        <option value="Acolman">Acolman</option>
                        <option value="Aculco">Aculco</option>
                        <option value="Almoloya de Alquisiras">Almoloya de Alquisiras</option>
                        <option value="Almoloya de Juárez">Almoloya de Juárez</option>
                        <option value="Almoloya del Río">Almoloya del Río</option>
                        <option value="Amanalco">Amanalco</option>
                        <option value="Amatepec">Amatepec</option>
                        <option value="Amecameca">Amecameca</option>
                        <option value="Apaxco">Apaxco</option>
                        <option value="Atenco">Atenco</option>
                        <option value="Atizapán">Atizapán</option>
                        <option value="Atizapán de Zaragoza">Atizapán de Zaragoza</option>
                        <option value="Atlacomulco">Atlacomulco</option>
                        <option value="Atlautla">Atlautla</option>
                        <option value="Axapusco">Axapusco</option>
                        <option value="Ayapango">Ayapango</option>
                        <option value="Calimaya">Calimaya</option>
                        <option value="Capulhuac">Capulhuac</option>
                        <option value="Coacalco de Berriozábal">Coacalco de Berriozábal</option>
                        <option value="Coatepec Harinas">Coatepec Harinas</option>
                        <option value="Cocotitlán">Cocotitlán</option>
                        <option value="Coyotepec">Coyotepec</option>
                        <option value="Cuautitlán">Cuautitlán</option>
                        <option value="Chalco">Chalco</option>
                        <option value="Chapa de Mota">Chapa de Mota</option>
                        <option value="Chapultepec">Chapultepec</option>
                        <option value="Chiautla">Chiautla</option>
                        <option value="Chicoloapan">Chicoloapan</option>
                        <option value="Chiconcuac">Chiconcuac</option>
                        <option value="Chimalhuacán">Chimalhuacán</option>
                        <option value="Donato Guerra">Donato Guerra</option>
                        <option value="Ecatepec de Morelos">Ecatepec de Morelos</option>
                        <option value="Ecatzingo">Ecatzingo</option>
                        <option value="Huehuetoca">Huehuetoca</option>
                        <option value="Hueypoxtla">Hueypoxtla</option>
                        <option value="Huixquilucan">Huixquilucan</option>
                        <option value="Isidro Fabela">Isidro Fabela</option>
                        <option value="Ixtapaluca">Ixtapaluca</option>
                        <option value="Ixtapan de la Sal">Ixtapan de la Sal</option>
                        <option value="Ixtapan del Oro">Ixtapan del Oro</option>
                        <option value="Ixtlahuaca">Ixtlahuaca</option>
                        <option value="Xalatlaco">Xalatlaco</option>
                        <option value="Jaltenco">Jaltenco</option>
                        <option value="Jilotepec">Jilotepec</option>
                        <option value="Jilotzingo">Jilotzingo</option>
                        <option value="Jiquipilco">Jiquipilco</option>
                        <option value="Jocotitlán">Jocotitlán</option>
                        <option value="Joquicingo">Joquicingo</option>
                        <option value="Juchitepec">Juchitepec</option>
                        <option value="Lerma">Lerma</option>
                        <option value="Malinalco">Malinalco</option>
                        <option value="Melchor Ocampo">Melchor Ocampo</option>
                        <option value="Metepec">Metepec</option>
                        <option value="Mexicaltzingo">Mexicaltzingo</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Naucalpan de Juárez">Naucalpan de Juárez</option>
                        <option value="Nezahualcóyotl">Nezahualcóyotl</option>
                        <option value="Nextlalpan">Nextlalpan</option>
                        <option value="Nicolás Romero">Nicolás Romero</option>
                        <option value="Nopaltepec">Nopaltepec</option>
                        <option value="Ocoyoacac">Ocoyoacac</option>
                        <option value="Ocuilan">Ocuilan</option>
                        <option value="El Oro">El Oro</option>
                        <option value="Otumba">Otumba</option>
                        <option value="Otzoloapan">Otzoloapan</option>
                        <option value="Otzolotepec">Otzolotepec</option>
                        <option value="Ozumba">Ozumba</option>
                        <option value="Papalotla">Papalotla</option>
                        <option value="La Paz">La Paz</option>
                        <option value="Polotitlán">Polotitlán</option>
                        <option value="Rayón">Rayón</option>
                        <option value="San Antonio la Isla">San Antonio la Isla</option>
                        <option value="San Felipe del Progreso">San Felipe del Progreso</option>
                        <option value="San Martín de las Pirámides">San Martín de las Pirámides</option>
                        <option value="San Mateo Atenco">San Mateo Atenco</option>
                        <option value="San Simón de Guerrero">San Simón de Guerrero</option>
                        <option value="Santo Tomás">Santo Tomás</option>
                        <option value="Soyaniquilpan de Juárez">Soyaniquilpan de Juárez</option>
                        <option value="Sultepec">Sultepec</option>
                        <option value="Tecámac">Tecámac</option>
                        <option value="Tejupilco">Tejupilco</option>
                        <option value="Temamatla">Temamatla</option>
                        <option value="Temascalapa">Temascalapa</option>
                        <option value="Temascalcingo">Temascalcingo</option>
                        <option value="Temascaltepec">Temascaltepec</option>
                        <option value="Temoaya">Temoaya</option>
                        <option value="Tenancingo">Tenancingo</option>
                        <option value="Tenango del Aire">Tenango del Aire</option>
                        <option value="Tenango del Valle">Tenango del Valle</option>
                        <option value="Teoloyucan">Teoloyucan</option>
                        <option value="Teotihuacán">Teotihuacán</option>
                        <option value="Tepetlaoxtoc">Tepetlaoxtoc</option>
                        <option value="Tepetlixpa">Tepetlixpa</option>
                        <option value="Tepotzotlán">Tepotzotlán</option>
                        <option value="Tequixquiac">Tequixquiac</option>
                        <option value="Texcaltitlán">Texcaltitlán</option>
                        <option value="Texcalyacac">Texcalyacac</option>
                        <option value="Texcoco">Texcoco</option>
                        <option value="Tezoyuca">Tezoyuca</option>
                        <option value="Tianguistenco">Tianguistenco</option>
                        <option value="Timilpan">Timilpan</option>
                        <option value="Tlalmanalco">Tlalmanalco</option>
                        <option value="Tlalnepantla de Baz">Tlalnepantla de Baz</option>
                        <option value="Tlatlaya">Tlatlaya</option>
                        <option value="Toluca">Toluca</option>
                        <option value="Tonatico">Tonatico</option>
                        <option value="Tultepec">Tultepec</option>
                        <option value="Tultitlán">Tultitlán</option>
                        <option value="Valle de Bravo">Valle de Bravo</option>
                        <option value="Villa de Allende">Villa de Allende</option>
                        <option value="Villa del Carbón">Villa del Carbón</option>
                        <option value="Villa Guerrero">Villa Guerrero</option>
                        <option value="Villa Victoria">Villa Victoria</option>
                        <option value="Xonacatlán">Xonacatlán</option>
                        <option value="Zacazonapan">Zacazonapan</option>
                        <option value="Zacualpan">Zacualpan</option>
                        <option value="Zinacantepec">Zinacantepec</option>
                        <option value="Zumpahuacán">Zumpahuacán</option>
                        <option value="Zumpango">Zumpango</option>
                        <option value="Cuautitlán Izcalli">Cuautitlán Izcalli</option>
                        <option value="Valle de Chalco Solidaridad">Valle de Chalco Solidaridad</option>
                        <option value="Luvianos">Luvianos</option>
                        <option value="San José del Rincón">San José del Rincón</option>
                        <option value="Tonanitla">Tonanitla</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="add_localidad">Localidad</label>
                        <input type="text" name="add_localidad" id="add_localidad" placeholder="Ingrese la Localidad" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_latitud">Latitud</label>
                        <input type="text" name="add_latitud" id="add_latitud" placeholder="Ingrese Latitud" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_longitud">Longitud</label>
                        <input type="text" name="add_longitud" id="add_longitud" placeholder="Ingrese Longitud" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_altitud">Altitud</label>
                        <input type="text" name="add_altitud" id="add_altitud" placeholder= "Ingrese Altitud" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_vegetacion">Tipo de Vegetación</label>
                        <input type="text" name="add_vegetacion" id="add_vegetacion" placeholder="Ingrese el Tipo de Vegetación" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_colectores">Colectores</label>
                        <input type="text" name="add_colectores" id="add_colectores" placeholder="Ingrese Colectores" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_colecta">Número de Colecta</label>
                        <input type="int" name="add_colecta" id="add_colecta" placeholder="Ingrese el Número Colecta" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_ingreojbc">Fecha de Ingreso a OJBC</label>
                        <input type="date" name="add_ingreojbc" id="add_ingreojbc" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_prensado">Fecha de Prensado</label>
                        <input type="date" name="add_prensado" id="add_prensado" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_fechacol">Fecha Colecta</label>
                        <input type="date" name="add_fechacol" id="add_fechacol" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_fenologia">Fenología</label>
                        <select name="add_fenologia" id="add_fenologia" class="form-control">
                            <option value="Estéril">Estéril</option>
                            <option value="Fértil">Fértil</option>
                            <option value="Floración">Floración</option>
                            <option value="Fructificación">Fructificación</option>
                            <option value="Flor y fruto">Flor y fruto</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="add_datosplan">Datos de la Planta</label>
                        <input type="text" name="add_datosplan" id="add_datosplan" placeholder="Ingrese los Datos de la Planta" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_ncomun">Nombre Común</label>
                        <input type="text" name="add_ncomun" id="add_ncomun" placeholder="Ingrese el Nombre Común" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_usos">Usos de la Planta</label>
                        <select name="add_usos" id="add_usos" class="form-control">
                            <option value="Artesanía">Artesanía</option>
                            <option value="Ceremonial">Ceremonial</option>
                            <option value="Comestible">Comestible</option>
                            <option value="Construcción">Construcción</option>
                            <option value="Herramientas">Herramientas</option>
                            <option value="Medicinal">Medicinal</option>
                            <option value="Ornamental">Ornamental</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="add_usos2">Usos de la Planta 2</label>
                        <select name="add_usos2" id="add_usos2" class="form-control" >
                            <option value="Artesanía">Artesanía</option>
                            <option value="Ceremonial">Ceremonial</option>
                            <option value="Comestible">Comestible</option>
                            <option value="Construcción">Construcción</option>
                            <option value="Herramientas">Herramientas</option>
                            <option value="Medicinal">Medicinal</option>
                            <option value="Ornamental">Ornamental</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="add_ojbc">Ubicación OJBC</label>
                        <select name="add_ojbc" id="add_ojbc" class="form-control">
                            <option value="text">Seleccione la Ubicación...</option>
                            <option value="Caracol de Suculentas">Caracol de Suculentas</option>
                            <option value="Esfera Arboretum 1">Esfera Arboretum 1</option>
                            <option value="Esfera Arboretum 2">Esfera Arboretum 2</option>
                            <option value="Esfera Ceiba Pentandra">Esfera Ceiba Pentandra</option>
                            <option value="Esfera Humedal Artificial">Esfera Humedal Artificial</option>
                            <option value="Esfera Ornamental">Esfera Ornamental</option>
                            <option value="Esfera Plantas Medicinales">Esfera Plantas Medicinales</option>
                            <option value="Esfera Xerófitos">Esfera Xerófitos</option>
                            <option value="Invernadero 1">Invernadero 1</option>
                            <option value="Invernadero 2">Invernadero 2</option>
                            <option value="Invernadero 3">Invernadero 3</option>
                            <option value="Jardín para Polinizadores">Jardín para Polinizadores</option>
                            <option value="Ninguno">--Ninguno--</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="add_endemismo">Endeismo</label>
                        <input type="text" name="add_endemismo" id="add_endemismo" placeholder="Ingrese Endemismo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_riesgo">Categoría Riesgo</label>
                        <select name="add_riesgo" id="add_riesgo" class="form-control">
                            <option value="Amenazada (A)">Amenazada (A)</option>
                            <option value="En Peligro de Extinción (P)">En Peligro de Extinción (P)</option>
                            <option value="Probablemente Extinta en el Medio Silvestre (E)">Probablemente Extinta en el Medio Silvestre (E)</option>
                            <option value="Sujeta a Protección Especial (Pr)">Sujeta a Protección Especial (Pr)</option>
                            <option value="Ninguno">--Ninguno--</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="add_habito">Hábito</label>
                        <select name="add_habito" id="add_habito" class="form-control">
                            <option value="Seleccione el Hábito">Seleccione el Hábito</option>
                            <option value="Acuática">Acuática</option>
                            <option value="Carnívora/Insectívora">Carnívora/Insectívora</option>
                            <option value="Enredadera">Enredadera</option>
                            <option value="Epífita">Epífita</option>
                            <option value="Parásita">Parásita</option>
                            <option value="Rastrera">Rastrera</option>
                            <option value="Rupícola">Rupícola</option>
                            <option value="Terrestre">Terrestre</option>
                            <option value="Trepadora">Trepadora</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="add_formavid">Forma Vida</label>
                        <select name="add_formavid" id="add_formavid" class="form-control">
                            <option value="text">Seleccione la Forma Vida...</option>
                            <option value="Árbol">Árbol</option>
                            <option value="Arborescente">Arborescente</option>
                            <option value="Arbusto">Arbusto</option>
                            <option value="Bejuco/Liana">Bejuco/Liana</option>
                            <option value="Hierba">Hierba</option>
                            <option value="Ninguno">--Ninguno--</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="add_tipo">Tipo</label>
                        <select name="add_tipo" id="add_tipo" class="form-control">
                            <option value="text">Seleccione el Tipo...</option>
                            <option value="Epitipo">Epitipo</option>
                            <option value="Holotipo">Holotipo</option>
                            <option value="Isotipo">Isotipo</option>
                            <option value="Lectotipo">Lectotipo</option>
                            <option value="Neotipo">Neotipo</option>
                            <option value="Paratipo">Paratipo</option>
                            <option value="Sintipo">Sintipo</option>
                            <option value="Topotipo">Topotipo</option>
                            <option value="Ninguno">--Ninguno--</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="add_duplicados">Duplicados</label>
                        <input type="text" name="add_duplicados" id="add_duplicados" placeholder="Duplicados" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_tingreso">Tipo de Ingreso</label>
                        <select name="add_tingreso" id="add_tingreso" class="form-control">
                            <option value="text">Seleccione el Tipo de Ingreso...</option>
                            <option value="Colecta">Colecta</option>
                            <option value="Donación">Donación</option>
                            <option value="Intercambio">Intercambio</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="add_tingreso2">Tipo de Ingreso 2</label>
                        <select name="add_tingreso2" id="add_tingreso2" class="form-control">
                            <option value="text">Seleccione el Tipo de Ingreso...</option>
                            <option value="Colecta">Colecta</option>
                            <option value="Donación">Donación</option>
                            <option value="Intercambio">Intercambio</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="add_tcoleccion">Tipo de Coleccción</label>
                        <select name="add_tcoleccion" id="add_tcoleccion" class="form-control">
                            <option value="text">Seleccione el Tipo de Colección...</option>
                            <option value="Antoteca">Antoteca</option>
                            <option value="Carpológica">Carpológica</option>
                            <option value="Ejemplares Herborizados">Ejemplares Herborizados</option>
                            <option value="Etnobotánica">Etnobotánica</option>
                            <option value="Ficológica">Ficológica</option>
                            <option value="Micológica">Micológica</option>
                            <option value="Palinoteca">Palinoteca</option>
                            <option value="Otro">--Otro--</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="add_origen">Origen</label>
                        <select name="add_origen" id="add_orige" class="form-control">
                            <option value="text">Seleccione el Tipo de Origen...</option>
                            <option value="Nativa">Nativa</option>
                            <option value="Exótica">Exótica</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="add_fbaja">Fecha de Baja</label>
                        <input type="date" name="add_fbaja" id="add_fbaja" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_observaciones">observaciones</label>
                        <input type="text" name="add_observaciones" id="add_observaciones" placeholder="Ingrese Observaciones" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="add_herbario">Folio Herbario</label>
                        <input type="int" name="add_herbario" id="add_herbario" placeholder="Ingrese Registro Herbario" class="form-control">
                    </div>
                    <input type="hidden" name="add_plantas" Value="Registrar" > 
                    <button type ="submit" class="btn btn-primary">Registrar</button>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--aqui termina el codigo de la tabla-->



<!-- Modal para Modificar -->
<!-- Main content -->
<div class="modal fade" id="EditModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" id="defaultModalLabel">Editar Planta</h4>
            </div>
            <div class="modal-body">
                <form action="panel.php?modulo=clientes" method="POST">  <!--coneccion con el modulo-->
                    <input type="hidden" name="update_id" id="update_id" value="">

                    <div class="form-group">
                        <label for="update_gtaxonomico">Grupo Taxonómico</label>
                        <select name="update_gtaxonomico" id="update_gtaxonomico" class="form-control">
                            <option value="text">Ingrese el Grupo Taxonómico...</option>
                            <option value="Algas">Algas</option>
                            <option value="Angiospermas">Angiospermas</option>
                            <option value="Bryophyta">Bryophyta</option>
                            <option value="Gimnospermas">Gimnospermas</option>
                            <option value="Hongos">Hongos</option>
                            <option value="Pteridophyta">Pteridophyta</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="update_familia">Familia</label>
                        <select name="update_familia" id="update_familia" class="form-control">
                                <option value="text">--Ingrese Familia--</option>
                                <option value="Aspleniaceae">Aspleniaceae</option>
                                <option value="Athyriaceae">Athyriaceae</option>
                                <option value="Blechnaceae">Blechnaceae</option>
                                <option value="Zygophyllaceae">Zygophyllaceae</option>
                                <option value="personalizada">Otro</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="update_familia2">Familia 2</label>
                        <select name="update_familia2" id="update_familia2" class="form-control">
                                <option value="text">--Ingrese Familia--</option>
                                <option value="Aspleniaceae">Aspleniaceae</option>
                                <option value="Athyriaceae">Athyriaceae</option>
                                <option value="Zygophyllaceae">Zygophyllaceae</option>
                                <option value="personalizada">Otro</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="update_genero1">Genero</label>
                        <select name="update_genero1" id="update_genero1" class="form-control">
                                <option value="*text">--Ingrese Género (1)--</option>
                                <option value="*Abarema">*Abarema</option>
                                <option value="*Abelia">*Abelia</option>
                                
                                <option value="*Zyzyxia">*Zyzyxia</option>
                            </select>                    
                    </div>
                    <div class="form-group">
                        <label for="update_genero2">Genero 2</label>
                        <select name="update_genero2" id="update_genero2" class="form-control">
                                <option value="*text">--Ingrese Género (2)--</option>
                                <option value="*Abarema">*Abarema</option>
                                <option value="*Abelia">*Abelia</option>
                                
                                <option value="*Zyzyxia">*Zyzyxia</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="update_genero3">Genero 3</label>
                        <select class="form-control" name="update_genero3" id="update_genero3">
                                <option value="*text">--Ingrese Género (3)--</option>
                                <option value="*Abarema">*Abarema</option>
                                <option value="*Abelia">*Abelia</option>
                                <option value="*Zyzyxia">*Zyzyxia</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="update_corrob">Corroboro</label>
                        <select  name="update_corrob" id="update_corrob" class="form-control">
                            <option value="cf.">--Ninguno--</option>
                            <option value="cf.">cf.</option>
                            <option value="aff.">aff.</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="update_especie1">Especie 1</label>
                        <input type="text" name="update_especie1" id="update_especie1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="update_especie2">Especie 2</label>
                        <input type="text" name="update_especie2" id="update_especie2" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="update_autor1">Autor 1</label>
                        <input type="text" name="update_autor1" id="update_autor1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="update_autor2">Autor 2</label>
                        <input type="text" name="update_autor2" id="update_autor2" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="update_determino">Determino</label>
                        <select name="update_determino" id="update_determino" class="form-control">
                            <option value="-- Ninguno --">-- Ninguno --</option>
                            <option value="N. Martínez-Correa">N. Martínez-Correa</option>
                            <option value="N. Martínez M.">N. Martínez M.</option>
                            <option value="R. Sandoval Perea">R. Sandoval Perea</option>
                            <option value="L. H. Vicente Rivera">L. H. Vicente Rivera</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="update_determino2">Determino 2</label>
                        <select name="update_determino2" id="update_determino2" class="form-control">
                            <option value="-- Ninguno --">-- Ninguno --</option>
                            <option value="N. Martínez-Correa">N. Martínez-Correa</option>
                            <option value="N. Martínez M.">N. Martínez M.</option>
                            <option value="R. Sandoval Perea">R. Sandoval Perea</option>
                            <option value="L. H. Vicente Rivera">L. H. Vicente Rivera</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="update_fechadet">Fecha de Determinación</label>
                        <input type="date" name="update_fechadet" id="update_fechadet" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="update_fechadet2">Fecha Determinación 2</label>
                        <input type="date" name="update_fechadet2" id="update_fechadet2" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="update_pais">Pais</label>
                        <select name="update_pais" id="update_pais" class="form-control">
                                <option value="México">México</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="update_estado">Estados</label>
                        <select name="update_estado" id="update_estado" class="form-control">
                        <option value="Eleccion">Ingrese un Estado...</option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="Ciudad de México">Ciudad de México</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Durango">Durango</option>
                        <option value="Estado de México">Estado de México</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Michoacán">Michoacán</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo León">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Querétaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosí">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatán">Yucatán</option>
                        <option value="Zacateca">Zacateca</option>
                    </select>
                </div>
                    <div class="form-group">
                        <label for="update_estado">Municipio</label>
                        <select name="update_municipio" id="update_municipio" class="form-control">
                        <option value="Eleccion2">Ingrese Un Municipio</option>
                        <option value="Abalá">Abalá</option>
                        <option value="Abasolo">Abasolo</option>
                        <option value="Abasolo">Abasolo</option>
                        <option value="Abasolo">Abasolo</option>
                        <option value="Abasolo">Abasolo</option>
                        <option value="Abejones">Abejones</option>
                        <option value="Acacoyagua">Acacoyagua</option>
                        <option value="Acajete">Acajete</option>
                        <option value="Acajete">Acajete</option>
                        <option value="Acala">Acala</option>
                        <option value="Acámbaro">Acámbaro</option>
                        <option value="Acambay">Acambay</option>
                        <option value="Acanceh">Acanceh</option>
                        <option value="Acapetahua">Acapetahua</option>
                        <option value="Acaponeta">Acaponeta</option>
                        <option value="Acapulco de Juárez">Acapulco de Juárez</option>
                        <option value="Acateno">Acateno</option>
                        <option value="Acatepec">Acatepec</option>
                        <option value="Acatic">Acatic</option>
                        <option value="Acatlán">Acatlán</option>
                        <option value="Acatlán">Acatlán</option>
                        <option value="Acatlán">Acatlán</option>
                        <option value="Acatlán de Juárez">Acatlán de Juárez</option>
                        <option value="Acatlán de Pérez Figueroa">Acatlán de Pérez Figueroa</option>
                        <option value="Acatzingo">Acatzingo</option>
                        <option value="Acaxochitlán">Acaxochitlán</option>
                        <option value="Acayucan">Acayucan</option>
                        <option value="Acolman">Acolman</option>
                        <option value="Aconchi">Aconchi</option>
                        <option value="Acteopan">Acteopan</option>
                        <option value="Actopan">Actopan</option>
                        <option value="Actopan">Actopan</option>
                        <option value="Acuamanala de Miguel Hidalgo">Acuamanala de Miguel Hidalgo</option>
                        <option value="Acuitzio">Acuitzio</option>
                        <option value="Acula">Acula</option>
                        <option value="Aculco">Aculco</option>
                        <option value="Acultzingo">Acultzingo</option>
                        <option value="Acuña">Acuña</option>
                        <option value="Agua Blanca de Iturbide">Agua Blanca de Iturbide</option>
                        <option value="Agua Dulce">Agua Dulce</option>
                        <option value="Agua Prieta">Agua Prieta</option>
                        <option value="Agualeguas">Agualeguas</option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Aguililla">Aguililla</option>
                        <option value="Ahome">Ahome</option>
                        <option value="Ahuacatlán">Ahuacatlán</option>
                        <option value="Ahuacatlán">Ahuacatlán</option>
                        <option value="Ahuacuotzingo">Ahuacuotzingo</option>
                        <option value="Ahualulco">Ahualulco</option>
                        <option value="Ahualulco de Mercado">Ahualulco de Mercado</option>
                        <option value="Ahuatlán">Ahuatlán</option>
                        <option value="Ahuazotepec">Ahuazotepec</option>
                        <option value="Ahuehuetitla">Ahuehuetitla</option>
                        <option value="Ahumada">Ahumada</option>
                        <option value="Ajacuba">Ajacuba</option>
                        <option value="Ajalpan">Ajalpan</option>
                        <option value="Ajuchitlán del Progreso">Ajuchitlán del Progreso</option>
                        <option value="Akil">Akil</option>
                        <option value="Alamos">Alamos</option>
                        <option value="Alaquines">Alaquines</option>
                        <option value="Albino Zertuche">Albino Zertuche</option>
                        <option value="Alcozauca de Guerrero">Alcozauca de Guerrero</option>
                        <option value="Aldama">Aldama</option>
                        <option value="Aldama">Aldama</option>
                        <option value="Aldama">Aldama</option>
                        <option value="Aldamas, Los">Aldamas, Los</option>
                        <option value="Alfajayucan">Alfajayucan</option>
                        <option value="Aljojuca">Aljojuca</option>
                        <option value="Allende">Allende</option>
                        <option value="Allende">Allende</option>
                        <option value="Allende">Allende</option>
                        <option value="Allende">Allende</option>
                        <option value="Almoloya">Almoloya</option>
                        <option value="Almoloya de Alquisiras">Almoloya de Alquisiras</option>
                        <option value="Almoloya de Juárez">Almoloya de Juárez</option>
                        <option value="Almoloya del Río">Almoloya del Río</option>
                        <option value="Alpatláhuac">Alpatláhuac</option>
                        <option value="Alpoyeca">Alpoyeca</option>
                        <option value="Altamira">Altamira</option>
                        <option value="Altamirano">Altamirano</option>
                        <option value="Altar">Altar</option>
                        <option value="Altepexi">Altepexi</option>
                        <option value="Alto Lucero de Gutiérrez Barrios">Alto Lucero de Gutiérrez Barrios</option>
                        <option value="Altotonga">Altotonga</option>
                        <option value="Altzayanca">Altzayanca</option>
                        <option value="Alvarado">Alvarado</option>
                        <option value="Alvaro Obregón">Alvaro Obregón</option>
                        <option value="Alvaro Obregón">Alvaro Obregón</option>
                        <option value="Amacueca">Amacueca</option>
                        <option value="Amacuzac">Amacuzac</option>
                        <option value="Amanalco">Amanalco</option>
                        <option value="Amatán">Amatán</option>
                        <option value="Amatenango de la Frontera">Amatenango de la Frontera</option>
                        <option value="Amatenango del Valle">Amatenango del Valle</option>
                        <option value="Amatepec">Amatepec</option>
                        <option value="Amatitán">Amatitán</option>
                        <option value="Amatitlán">Amatitlán</option>
                        <option value="Amatlán de Cañas">Amatlán de Cañas</option>
                        <option value="Amatlán de los Reyes">Amatlán de los Reyes</option>
                        <option value="Amaxac de Guerrero">Amaxac de Guerrero</option>
                        <option value="Amealco de Bonfil">Amealco de Bonfil</option>
                        <option value="Ameca">Ameca</option>
                        <option value="Amecameca">Amecameca</option>
                        <option value="Amixtlán">Amixtlán</option>
                        <option value="Amozoc">Amozoc</option>
                        <option value="Anáhuac">Anáhuac</option>
                        <option value="Angamacutiro">Angamacutiro</option>
                        <option value="Angangueo">Angangueo</option>
                        <option value="Angel Albino Corzo">Angel Albino Corzo</option>
                        <option value="Angel R. Cabada">Angel R. Cabada</option>
                        <option value="Angostura">Angostura</option>
                        <option value="Animas Trujano">Animas Trujano</option>
                        <option value="Antigua, La">Antigua, La</option>
                        <option value="Antiguo Morelos">Antiguo Morelos</option>
                        <option value="Apan">Apan</option>
                        <option value="Apaseo el Alto">Apaseo el Alto</option>
                        <option value="Apaseo el Grande">Apaseo el Grande</option>
                        <option value="Apatzingán">Apatzingán</option>
                        <option value="Apaxco">Apaxco</option>
                        <option value="Apaxtla">Apaxtla</option>
                        <option value="Apazapan">Apazapan</option>
                        <option value="Apetatitlán de Antonio Carvajal">Apetatitlán de Antonio Carvajal</option>
                        <option value="Apizaco">Apizaco</option>
                        <option value="Apodaca">Apodaca</option>
                        <option value="Aporo">Aporo</option>
                        <option value="Apozol">Apozol</option>
                        <option value="Apulco">Apulco</option>
                        <option value="Aquila">Aquila</option>
                        <option value="Aquila">Aquila</option>
                        <option value="Aquiles Serdán">Aquiles Serdán</option>
                        <option value="Aquismón">Aquismón</option>
                        <option value="Aquixtla">Aquixtla</option>
                        <option value="Aramberri">Aramberri</option>
                        <option value="Arandas">Arandas</option>
                        <option value="Arcelia">Arcelia</option>
                        <option value="Arenal, El">Arenal, El</option>
                        <option value="Arenal, El">Arenal, El</option>
                        <option value="Ario">Ario</option>
                        <option value="Arivechi">Arivechi</option>
                        <option value="Arizpe">Arizpe</option>
                        <option value="Armadillo de los Infante">Armadillo de los Infante</option>
                        <option value="Armería">Armería</option>
                        <option value="Arriaga">Arriaga</option>
                        <option value="Arroyo Seco">Arroyo Seco</option>
                        <option value="Arteaga">Arteaga</option>
                        <option value="Arteaga">Arteaga</option>
                        <option value="Ascensión">Ascensión</option>
                        <option value="Asientos">Asientos</option>
                        <option value="Astacinga">Astacinga</option>
                        <option value="Asunción Cacalotepec">Asunción Cacalotepec</option>
                        <option value="Asunción Cuyotepeji">Asunción Cuyotepeji</option>
                        <option value="Asunción Ixtaltepec">Asunción Ixtaltepec</option>
                        <option value="Asunción Nochixtlán">Asunción Nochixtlán</option>
                        <option value="Asunción Ocotlán">Asunción Ocotlán</option>
                        <option value="Asunción Tlacolulita">Asunción Tlacolulita</option>
                        <option value="Atarjea">Atarjea</option>
                        <option value="Atemajac de Brizuela">Atemajac de Brizuela</option>
                        <option value="Atempan">Atempan</option>
                        <option value="Atenango del Río">Atenango del Río</option>
                        <option value="Atenco">Atenco</option>
                        <option value="Atengo">Atengo</option>
                        <option value="Atenguillo">Atenguillo</option>
                        <option value="Atexcal">Atexcal</option>
                        <option value="Atil">Atil</option>
                        <option value="Atitalaquia">Atitalaquia</option>
                        <option value="Atizapán">Atizapán</option>
                        <option value="Atizapán de Zaragoza">Atizapán de Zaragoza</option>
                        <option value="Atlacomulco">Atlacomulco</option>
                        <option value="Atlahuilco">Atlahuilco</option>
                        <option value="Atlamajalcingo del Monte">Atlamajalcingo del Monte</option>
                        <option value="Atlangatepec">Atlangatepec</option>
                        <option value="Atlapexco">Atlapexco</option>
                        <option value="Atlatlahucan">Atlatlahucan</option>
                        <option value="Atlautla">Atlautla</option>
                        <option value="Atlequizayan">Atlequizayan</option>
                        <option value="Atlixco">Atlixco</option>
                        <option value="Atlixtac">Atlixtac</option>
                        <option value="Atolinga">Atolinga</option>
                        <option value="Atotonilco de Tula">Atotonilco de Tula</option>
                        <option value="Atotonilco el Alto">Atotonilco el Alto</option>
                        <option value="Atotonilco el Grande">Atotonilco el Grande</option>
                        <option value="Atoyac">Atoyac</option>
                        <option value="Atoyac">Atoyac</option>
                        <option value="Atoyac de Alvarez">Atoyac de Alvarez</option>
                        <option value="Atoyatempan">Atoyatempan</option>
                        <option value="Atzacan">Atzacan</option>
                        <option value="Atzala">Atzala</option>
                        <option value="Atzalan">Atzalan</option>
                        <option value="Atzitzihuacán">Atzitzihuacán</option>
                        <option value="Atzitzintla">Atzitzintla</option>
                        <option value="Autlán de Navarro">Autlán de Navarro</option>
                        <option value="Axapusco">Axapusco</option>
                        <option value="Axochiapan">Axochiapan</option>
                        <option value="Axtla de Terrazas">Axtla de Terrazas</option>
                        <option value="Axutla">Axutla</option>
                        <option value="Ayahualulco">Ayahualulco</option>
                        <option value="Ayala">Ayala</option>
                        <option value="Ayapango">Ayapango</option>
                        <option value="Ayoquezco de Aldama">Ayoquezco de Aldama</option>
                        <option value="Ayotlán">Ayotlán</option>
                        <option value="Ayotoxco de Guerrero">Ayotoxco de Guerrero</option>
                        <option value="Ayotzintepec">Ayotzintepec</option>
                        <option value="Ayutla">Ayutla</option>
                        <option value="Ayutla de los Libres">Ayutla de los Libres</option>
                        <option value="Azcapotzalco">Azcapotzalco</option>
                        <option value="Azoyú">Azoyú</option>
                        <option value="Baca">Baca</option>
                        <option value="Bacadéhuachi">Bacadéhuachi</option>
                        <option value="Bacanora">Bacanora</option>
                        <option value="Bacerac">Bacerac</option>
                        <option value="Bachíniva">Bachíniva</option>
                        <option value="Bacoachi">Bacoachi</option>
                        <option value="Bácum">Bácum</option>
                        <option value="Badiraguato">Badiraguato</option>
                        <option value="Bahía de Banderas">Bahía de Banderas</option>
                        <option value="Balancán">Balancán</option>
                        <option value="Balleza">Balleza</option>
                        <option value="Banámichi">Banámichi</option>
                        <option value="Banderilla">Banderilla</option>
                        <option value="Barca, La">Barca, La</option>
                        <option value="Barrio de la Soledad, El">Barrio de la Soledad, El</option>
                        <option value="Batopilas">Batopilas</option>
                        <option value="Baviácora">Baviácora</option>
                        <option value="Bavispe">Bavispe</option>
                        <option value="Bejucal de Ocampo">Bejucal de Ocampo</option>
                        <option value="Bella Vista">Bella Vista</option>
                        <option value="Benemérito de las Américas">Benemérito de las Américas</option>
                        <option value="Benito Juárez">Benito Juárez</option>
                        <option value="Benito Juárez">Benito Juárez</option>
                        <option value="Benito Juárez">Benito Juárez</option>
                        <option value="Benito Juárez">Benito Juárez</option>
                        <option value="Benito Juárez">Benito Juárez</option>
                        <option value="Benito Juárez">Benito Juárez</option>
                        <option value="Benito Juárez">Benito Juárez</option>
                        <option value="Benjamín Hill">Benjamín Hill</option>
                        <option value="Berriozábal">Berriozábal</option>
                        <option value="Boca del Río">Boca del Río</option>
                        <option value="Bochil">Bochil</option>
                        <option value="Bocoyna">Bocoyna</option>
                        <option value="Bokobá">Bokobá</option>
                        <option value="Bolaños">Bolaños</option>
                        <option value="Bosque, El">Bosque, El</option>
                        <option value="Briseñas">Briseñas</option>
                        <option value="Buctzotz">Buctzotz</option>
                        <option value="Buenaventura">Buenaventura</option>
                        <option value="Buenavista">Buenavista</option>
                        <option value="Buenavista de Cuéllar">Buenavista de Cuéllar</option>
                        <option value="Burgos">Burgos</option>
                        <option value="Bustamante">Bustamante</option>
                        <option value="Bustamante">Bustamante</option>
                        <option value="Cabo Corrientes">Cabo Corrientes</option>
                        <option value="Caborca">Caborca</option>
                        <option value="Cabos, Los">Cabos, Los</option>
                        <option value="Cacahoatán">Cacahoatán</option>
                        <option value="Cacalchén">Cacalchén</option>
                        <option value="Cadereyta de Montes">Cadereyta de Montes</option>
                        <option value="Cadereyta Jiménez">Cadereyta Jiménez</option>
                        <option value="Cajeme">Cajeme</option>
                        <option value="Calakmul">Calakmul</option>
                        <option value="Calcahualco">Calcahualco</option>
                        <option value="Calera">Calera</option>
                        <option value="Calihualá">Calihualá</option>
                        <option value="Calimaya">Calimaya</option>
                        <option value="Calkiní">Calkiní</option>
                        <option value="Calnali">Calnali</option>
                        <option value="Calotmul">Calotmul</option>
                        <option value="Calpan">Calpan</option>
                        <option value="Calpulalpan">Calpulalpan</option>
                        <option value="Caltepec">Caltepec</option>
                        <option value="Calvillo">Calvillo</option>
                        <option value="Camargo">Camargo</option>
                        <option value="Camargo">Camargo</option>
                        <option value="Camarón de Tejeda">Camarón de Tejeda</option>
                        <option value="Camerino Z. Mendoza">Camerino Z. Mendoza</option>
                        <option value="Camocuautla">Camocuautla</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Cananea">Cananea</option>
                        <option value="Canatlán">Canatlán</option>
                        <option value="Candela">Candela</option>
                        <option value="Candelaria">Candelaria</option>
                        <option value="Candelaria Loxicha">Candelaria Loxicha</option>
                        <option value="Canelas">Canelas</option>
                        <option value="Cansahcab">Cansahcab</option>
                        <option value="Cantamayec">Cantamayec</option>
                        <option value="Cañada Morelos">Cañada Morelos</option>
                        <option value="Cañadas de Obregón">Cañadas de Obregón</option>
                        <option value="Cañitas de Felipe Pescador">Cañitas de Felipe Pescador</option>
                        <option value="Capulálpam de Méndez">Capulálpam de Méndez</option>
                        <option value="Capulhuac">Capulhuac</option>
                        <option value="Carácuaro">Carácuaro</option>
                        <option value="Carbó">Carbó</option>
                        <option value="Cárdenas">Cárdenas</option>
                        <option value="Cárdenas">Cárdenas</option>
                        <option value="Cardonal">Cardonal</option>
                        <option value="Carichí">Carichí</option>
                        <option value="Carlos A. Carrillo">Carlos A. Carrillo</option>
                        <option value="Carmen">Carmen</option>
                        <option value="Carmen">Carmen</option>
                        <option value="Carmen Tequexquitla, El">Carmen Tequexquitla, El</option>
                        <option value="Carrillo Puerto">Carrillo Puerto</option>
                        <option value="Casas">Casas</option>
                        <option value="Casas Grandes">Casas Grandes</option>
                        <option value="Casimiro Castillo">Casimiro Castillo</option>
                        <option value="Castaños">Castaños</option>
                        <option value="Castillo de Teayo">Castillo de Teayo</option>
                        <option value="Catazajá">Catazajá</option>
                        <option value="Catemaco">Catemaco</option>
                        <option value="Catorce">Catorce</option>
                        <option value="Caxhuacan">Caxhuacan</option>
                        <option value="Cazones">Cazones</option>
                        <option value="Cedral">Cedral</option>
                        <option value="Celaya">Celaya</option>
                        <option value="Celestún">Celestún</option>
                        <option value="Cenotillo">Cenotillo</option>
                        <option value="Centla">Centla</option>
                        <option value="Centro">Centro</option>
                        <option value="Cerralvo">Cerralvo</option>
                        <option value="Cerritos">Cerritos</option>
                        <option value="Cerro Azul">Cerro Azul</option>
                        <option value="Cerro de San Pedro">Cerro de San Pedro</option>
                        <option value="Chacaltianguis">Chacaltianguis</option>
                        <option value="Chacsinkín">Chacsinkín</option>
                        <option value="Chahuites">Chahuites</option>
                        <option value="Chalcatongo de Hidalgo">Chalcatongo de Hidalgo</option>
                        <option value="Chalchicomula de Sesma">Chalchicomula de Sesma</option>
                        <option value="Chalchihuitán">Chalchihuitán</option>
                        <option value="Chalchihuites">Chalchihuites</option>
                        <option value="Chalco">Chalco</option>
                        <option value="Chalma">Chalma</option>
                        <option value="Champotón">Champotón</option>
                        <option value="Chamula">Chamula</option>
                        <option value="Chanal">Chanal</option>
                        <option value="Chankom">Chankom</option>
                        <option value="Chapa de Mota">Chapa de Mota</option>
                        <option value="Chapab">Chapab</option>
                        <option value="Chapala">Chapala</option>
                        <option value="Chapantongo">Chapantongo</option>
                        <option value="Chapulco">Chapulco</option>
                        <option value="Chapulhuacán">Chapulhuacán</option>
                        <option value="Chapultenango">Chapultenango</option>
                        <option value="Chapultepec">Chapultepec</option>
                        <option value="Charapan">Charapan</option>
                        <option value="Charcas">Charcas</option>
                        <option value="Charo">Charo</option>
                        <option value="Chavinda">Chavinda</option>
                        <option value="Chemax">Chemax</option>
                        <option value="Chenalhó">Chenalhó</option>
                        <option value="Cherán">Cherán</option>
                        <option value="Chiapa de Corzo">Chiapa de Corzo</option>
                        <option value="Chiapilla">Chiapilla</option>
                        <option value="Chiautempan">Chiautempan</option>
                        <option value="Chiautla">Chiautla</option>
                        <option value="Chiautla">Chiautla</option>
                        <option value="Chiautzingo">Chiautzingo</option>
                        <option value="Chichimilá">Chichimilá</option>
                        <option value="Chichiquila">Chichiquila</option>
                        <option value="Chicoasén">Chicoasén</option>
                        <option value="Chicoloapan">Chicoloapan</option>
                        <option value="Chicomuselo">Chicomuselo</option>
                        <option value="Chiconamel">Chiconamel</option>
                        <option value="Chiconcuac">Chiconcuac</option>
                        <option value="Chiconcuautla">Chiconcuautla</option>
                        <option value="Chiconquiaco">Chiconquiaco</option>
                        <option value="Chicontepec">Chicontepec</option>
                        <option value="Chicxulub Pueblo">Chicxulub Pueblo</option>
                        <option value="Chietla">Chietla</option>
                        <option value="Chigmecatitlán">Chigmecatitlán</option>
                        <option value="Chignahuapan">Chignahuapan</option>
                        <option value="Chignautla">Chignautla</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="Chikindzonot">Chikindzonot</option>
                        <option value="Chila">Chila</option>
                        <option value="Chila de la Sal">Chila de la Sal</option>
                        <option value="Chilapa de Alvarez">Chilapa de Alvarez</option>
                        <option value="Chilchota">Chilchota</option>
                        <option value="Chilchotla">Chilchotla</option>
                        <option value="Chilcuautla">Chilcuautla</option>
                        <option value="Chilón">Chilón</option>
                        <option value="Chilpancingo de los Bravo">Chilpancingo de los Bravo</option>
                        <option value="Chimalhuacán">Chimalhuacán</option>
                        <option value="Chimaltitán">Chimaltitán</option>
                        <option value="China">China</option>
                        <option value="Chinameca">Chinameca</option>
                        <option value="Chinampa de Gorostiza">Chinampa de Gorostiza</option>
                        <option value="Chinantla">Chinantla</option>
                        <option value="Chinicuila">Chinicuila</option>
                        <option value="Chínipas">Chínipas</option>
                        <option value="Chiquihuitlán de Benito Juárez">Chiquihuitlán de Benito Juárez</option>
                        <option value="Chiquilistlán">Chiquilistlán</option>
                        <option value="Choapas, Las">Choapas, Las</option>
                        <option value="Chocamán">Chocamán</option>
                        <option value="Chocholá">Chocholá</option>
                        <option value="Choix">Choix</option>
                        <option value="Chontla">Chontla</option>
                        <option value="Chucándiro">Chucándiro</option>
                        <option value="Chumatlán">Chumatlán</option>
                        <option value="Chumayel">Chumayel</option>
                        <option value="Churintzio">Churintzio</option>
                        <option value="Churumuco">Churumuco</option>
                        <option value="Ciénega de Flores">Ciénega de Flores</option>
                        <option value="Ciénega de Zimatlán">Ciénega de Zimatlán</option>
                        <option value="Cihuatlán">Cihuatlán</option>
                        <option value="Cintalapa">Cintalapa</option>
                        <option value="Citlaltépetl">Citlaltépetl</option>
                        <option value="Ciudad del Maíz">Ciudad del Maíz</option>
                        <option value="Ciudad Fernández">Ciudad Fernández</option>
                        <option value="Ciudad Ixtepec">Ciudad Ixtepec</option>
                        <option value="Ciudad Madero">Ciudad Madero</option>
                        <option value="Ciudad Valles">Ciudad Valles</option>
                        <option value="Coacalco de Berriozábal">Coacalco de Berriozábal</option>
                        <option value="Coacoatzintla">Coacoatzintla</option>
                        <option value="Coahuayana">Coahuayana</option>
                        <option value="Coahuayutla de José María Izazaga">Coahuayutla de José María Izazaga</option>
                        <option value="Coahuitlán">Coahuitlán</option>
                        <option value="Coalcomán de Vázquez Pallares">Coalcomán de Vázquez Pallares</option>
                        <option value="Coapilla">Coapilla</option>
                        <option value="Coatecas Altas">Coatecas Altas</option>
                        <option value="Coatepec">Coatepec</option>
                        <option value="Coatepec">Coatepec</option>
                        <option value="Coatepec Harinas">Coatepec Harinas</option>
                        <option value="Coatlán del Río">Coatlán del Río</option>
                        <option value="Coatzacoalcos">Coatzacoalcos</option>
                        <option value="Coatzingo">Coatzingo</option>
                        <option value="Coatzintla">Coatzintla</option>
                        <option value="Cocotitlán">Cocotitlán</option>
                        <option value="Cocula">Cocula</option>
                        <option value="Cocula">Cocula</option>
                        <option value="Coeneo">Coeneo</option>
                        <option value="Coetzala">Coetzala</option>
                        <option value="Cohetzala">Cohetzala</option>
                        <option value="Cohuecán">Cohuecán</option>
                        <option value="Coicoyán de las Flores">Coicoyán de las Flores</option>
                        <option value="Cojumatlán de Régules">Cojumatlán de Régules</option>
                        <option value="Colima">Colima</option>
                        <option value="Colipa">Colipa</option>
                        <option value="Colón">Colón</option>
                        <option value="Colorada, La">Colorada, La</option>
                        <option value="Colotlán">Colotlán</option>
                        <option value="Comala">Comala</option>
                        <option value="Comalcalco">Comalcalco</option>
                        <option value="Comapa">Comapa</option>
                        <option value="Comitán de Domínguez">Comitán de Domínguez</option>
                        <option value="Comondú">Comondú</option>
                        <option value="Comonfort">Comonfort</option>
                        <option value="Compañía, La">Compañía, La</option>
                        <option value="Compostela">Compostela</option>
                        <option value="Concepción Buenavista">Concepción Buenavista</option>
                        <option value="Concepción de Buenos Aires">Concepción de Buenos Aires</option>
                        <option value="Concepción del Oro">Concepción del Oro</option>
                        <option value="Concepción Pápalo">Concepción Pápalo</option>
                        <option value="Concordia">Concordia</option>
                        <option value="Concordia, La">Concordia, La</option>
                        <option value="Coneto de Comonfort">Coneto de Comonfort</option>
                        <option value="Conkal">Conkal</option>
                        <option value="Constancia del Rosario">Constancia del Rosario</option>
                        <option value="Contepec">Contepec</option>
                        <option value="Contla de Juan Cuamatzi">Contla de Juan Cuamatzi</option>
                        <option value="Copainalá">Copainalá</option>
                        <option value="Copala">Copala</option>
                        <option value="Copalillo">Copalillo</option>
                        <option value="Copanatoyac">Copanatoyac</option>
                        <option value="Copándaro">Copándaro</option>
                        <option value="Coquimatlán">Coquimatlán</option>
                        <option value="Córdoba">Córdoba</option>
                        <option value="Coronado">Coronado</option>
                        <option value="Coronango">Coronango</option>
                        <option value="Coroneo">Coroneo</option>
                        <option value="Corregidora">Corregidora</option>
                        <option value="Cortazar">Cortazar</option>
                        <option value="Cosalá">Cosalá</option>
                        <option value="Cosamaloapan de Carpio">Cosamaloapan de Carpio</option>
                        <option value="Cosautlán de Carvajal">Cosautlán de Carvajal</option>
                        <option value="Coscomatepec">Coscomatepec</option>
                        <option value="Cosío">Cosío</option>
                        <option value="Cosolapa">Cosolapa</option>
                        <option value="Cosoleacaque">Cosoleacaque</option>
                        <option value="Cosoltepec">Cosoltepec</option>
                        <option value="Cotaxtla">Cotaxtla</option>
                        <option value="Cotija">Cotija</option>
                        <option value="Coxcatlán">Coxcatlán</option>
                        <option value="Coxcatlán">Coxcatlán</option>
                        <option value="Coxquihui">Coxquihui</option>
                        <option value="Coyame del Sotol">Coyame del Sotol</option>
                        <option value="Coyoacán">Coyoacán</option>
                        <option value="Coyomeapan">Coyomeapan</option>
                        <option value="Coyotepec">Coyotepec</option>
                        <option value="Coyotepec">Coyotepec</option>
                        <option value="Coyuca de Benítez">Coyuca de Benítez</option>
                        <option value="Coyuca de Catalán">Coyuca de Catalán</option>
                        <option value="Coyutla">Coyutla</option>
                        <option value="Cozumel">Cozumel</option>
                        <option value="Cruillas">Cruillas</option>
                        <option value="Cruz, La">Cruz, La</option>
                        <option value="Cuajimalpa de Morelos">Cuajimalpa de Morelos</option>
                        <option value="Cuajinicuilapa">Cuajinicuilapa</option>
                        <option value="Cualác">Cualác</option>
                        <option value="Cuapiaxtla">Cuapiaxtla</option>
                        <option value="Cuapiaxtla de Madero">Cuapiaxtla de Madero</option>
                        <option value="Cuatrociénegas">Cuatrociénegas</option>
                        <option value="Cuauhtémoc">Cuauhtémoc</option>
                        <option value="Cuauhtémoc">Cuauhtémoc</option>
                        <option value="Cuauhtémoc">Cuauhtémoc</option>
                        <option value="Cuauhtémoc">Cuauhtémoc</option>
                        <option value="Cuautempan">Cuautempan</option>
                        <option value="Cuautepec">Cuautepec</option>
                        <option value="Cuautepec de Hinojosa">Cuautepec de Hinojosa</option>
                        <option value="Cuautinchán">Cuautinchán</option>
                        <option value="Cuautitlán">Cuautitlán</option>
                        <option value="Cuautitlán de García Barragán">Cuautitlán de García Barragán</option>
                        <option value="Cuautitlán Izcalli">Cuautitlán Izcalli</option>
                        <option value="Cuautla">Cuautla</option>
                        <option value="Cuautla">Cuautla</option>
                        <option value="Cuautlancingo">Cuautlancingo</option>
                        <option value="Cuaxomulco">Cuaxomulco</option>
                        <option value="Cuayuca de Andrade">Cuayuca de Andrade</option>
                        <option value="Cucurpe">Cucurpe</option>
                        <option value="Cuencamé">Cuencamé</option>
                        <option value="Cuerámaro">Cuerámaro</option>
                        <option value="Cuernavaca">Cuernavaca</option>
                        <option value="Cuetzala del Progreso">Cuetzala del Progreso</option>
                        <option value="Cuetzalan del Progreso">Cuetzalan del Progreso</option>
                        <option value="Cuichapa">Cuichapa</option>
                        <option value="Cuilápam de Guerrero">Cuilápam de Guerrero</option>
                        <option value="Cuitláhuac">Cuitláhuac</option>
                        <option value="Cuitzeo">Cuitzeo</option>
                        <option value="Culiacán">Culiacán</option>
                        <option value="Cumpas">Cumpas</option>
                        <option value="Cuncunul">Cuncunul</option>
                        <option value="Cunduacán">Cunduacán</option>
                        <option value="Cuquío">Cuquío</option>
                        <option value="Cusihuiriachi">Cusihuiriachi</option>
                        <option value="Cutzamala de Pinzón">Cutzamala de Pinzón</option>
                        <option value="Cuyamecalco Villa de Zaragoza">Cuyamecalco Villa de Zaragoza</option>
                        <option value="Cuyoaco">Cuyoaco</option>
                        <option value="Cuzamá">Cuzamá</option>
                        <option value="Degollado">Degollado</option>
                        <option value="Del Nayar">Del Nayar</option>
                        <option value="Delicias">Delicias</option>
                        <option value="Divisaderos">Divisaderos</option>
                        <option value="Doctor Arroyo">Doctor Arroyo</option>
                        <option value="Doctor Coss">Doctor Coss</option>
                        <option value="Doctor González">Doctor González</option>
                        <option value="Doctor Mora">Doctor Mora</option>
                        <option value="Dolores Hidalgo">Dolores Hidalgo</option>
                        <option value="Domingo Arenas">Domingo Arenas</option>
                        <option value="Donato Guerra">Donato Guerra</option>
                        <option value="Dr. Belisario Domínguez">Dr. Belisario Domínguez</option>
                        <option value="Durango">Durango</option>
                        <option value="Dzán">Dzán</option>
                        <option value="Dzemul">Dzemul</option>
                        <option value="Dzidzantún">Dzidzantún</option>
                        <option value="Dzilam de Bravo">Dzilam de Bravo</option>
                        <option value="Dzilam González">Dzilam González</option>
                        <option value="Dzitás">Dzitás</option>
                        <option value="Dzoncauich">Dzoncauich</option>
                        <option value="Ebano">Ebano</option>
                        <option value="Ecatepec de Morelos">Ecatepec de Morelos</option>
                        <option value="Ecatzingo">Ecatzingo</option>
                        <option value="Ecuandureo">Ecuandureo</option>
                        <option value="Eduardo Neri">Eduardo Neri</option>
                        <option value="Ejutla">Ejutla</option>
                        <option value="Elota">Elota</option>
                        <option value="Eloxochitlán">Eloxochitlán</option>
                        <option value="Eloxochitlán">Eloxochitlán</option>
                        <option value="Eloxochitlán de Flores Magón">Eloxochitlán de Flores Magón</option>
                        <option value="Emiliano Zapata">Emiliano Zapata</option>
                        <option value="Emiliano Zapata">Emiliano Zapata</option>
                        <option value="Emiliano Zapata">Emiliano Zapata</option>
                        <option value="Emiliano Zapata">Emiliano Zapata</option>
                        <option value="Emiliano Zapata">Emiliano Zapata</option>
                        <option value="Empalme">Empalme</option>
                        <option value="Encarnación de Díaz">Encarnación de Díaz</option>
                        <option value="Ensenada">Ensenada</option>
                        <option value="Epatlán">Epatlán</option>
                        <option value="Epazoyucan">Epazoyucan</option>
                        <option value="Epitacio Huerta">Epitacio Huerta</option>
                        <option value="Erongarícuaro">Erongarícuaro</option>
                        <option value="Escárcega">Escárcega</option>
                        <option value="Escobedo">Escobedo</option>
                        <option value="Escuinapa">Escuinapa</option>
                        <option value="Escuintla">Escuintla</option>
                        <option value="Españita">Españita</option>
                        <option value="Esperanza">Esperanza</option>
                        <option value="Espinal">Espinal</option>
                        <option value="Espinal, El">Espinal, El</option>
                        <option value="Espita">Espita</option>
                        <option value="Etchojoa">Etchojoa</option>
                        <option value="Etzatlán">Etzatlán</option>
                        <option value="Ezequiel Montes">Ezequiel Montes</option>
                        <option value="Felipe Carrillo Puerto">Felipe Carrillo Puerto</option>
                        <option value="Filomeno Mata">Filomeno Mata</option>
                        <option value="Florencio Villarreal">Florencio Villarreal</option>
                        <option value="Fortín">Fortín</option>
                        <option value="Francisco I. Madero">Francisco I. Madero</option>
                        <option value="Francisco I. Madero">Francisco I. Madero</option>
                        <option value="Francisco León">Francisco León</option>
                        <option value="Francisco Z. Mena">Francisco Z. Mena</option>
                        <option value="Fresnillo">Fresnillo</option>
                        <option value="Fresnillo de Trujano">Fresnillo de Trujano</option>
                        <option value="Frontera">Frontera</option>
                        <option value="Frontera Comalapa">Frontera Comalapa</option>
                        <option value="Frontera Hidalgo">Frontera Hidalgo</option>
                        <option value="Fronteras">Fronteras</option>
                        <option value="Fuerte, El">Fuerte, El</option>
                        <option value="Gabriel Zamora">Gabriel Zamora</option>
                        <option value="Galeana">Galeana</option>
                        <option value="Galeana">Galeana</option>
                        <option value="García">García</option>
                        <option value="Genaro Codina">Genaro Codina</option>
                        <option value="General Bravo">General Bravo</option>
                        <option value="General Canuto A. Neri">General Canuto A. Neri</option>
                        <option value="General Cepeda">General Cepeda</option>
                        <option value="General Enrique Estrada">General Enrique Estrada</option>
                        <option value="General Escobedo">General Escobedo</option>
                        <option value="General Felipe Angeles">General Felipe Angeles</option>
                        <option value="General Francisco R. Murguía">General Francisco R. Murguía</option>
                        <option value="General Heliodoro Castillo">General Heliodoro Castillo</option>
                        <option value="General Pánfilo Natera">General Pánfilo Natera</option>
                        <option value="General Plutarco Elías Calles">General Plutarco Elías Calles</option>
                        <option value="General Simón Bolívar">General Simón Bolívar</option>
                        <option value="General Terán">General Terán</option>
                        <option value="General Treviño">General Treviño</option>
                        <option value="General Zaragoza">General Zaragoza</option>
                        <option value="General Zuazua">General Zuazua</option>
                        <option value="Gómez Farías">Gómez Farías</option>
                        <option value="Gómez Farías">Gómez Farías</option>
                        <option value="Gómez Farías">Gómez Farías</option>
                        <option value="Gómez Palacio">Gómez Palacio</option>
                        <option value="González">González</option>
                        <option value="Gran Morelos">Gran Morelos</option>
                        <option value="Granados">Granados</option>
                        <option value="Grandeza, La">Grandeza, La</option>
                        <option value="Grullo, El">Grullo, El</option>
                        <option value="Guachinango">Guachinango</option>
                        <option value="Guachochi">Guachochi</option>
                        <option value="Guadalajara">Guadalajara</option>
                        <option value="Guadalcázar">Guadalcázar</option>
                        <option value="Guadalupe">Guadalupe</option>
                        <option value="Guadalupe">Guadalupe</option>
                        <option value="Guadalupe">Guadalupe</option>
                        <option value="Guadalupe">Guadalupe</option>
                        <option value="Guadalupe de Ramírez">Guadalupe de Ramírez</option>
                        <option value="Guadalupe Etla">Guadalupe Etla</option>
                        <option value="Guadalupe Victoria">Guadalupe Victoria</option>
                        <option value="Guadalupe Victoria">Guadalupe Victoria</option>
                        <option value="Guadalupe y Calvo">Guadalupe y Calvo</option>
                        <option value="Guanaceví">Guanaceví</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guasave">Guasave</option>
                        <option value="Guaymas">Guaymas</option>
                        <option value="Guazapares">Guazapares</option>
                        <option value="Guelatao de Juárez">Guelatao de Juárez</option>
                        <option value="Güémez">Güémez</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Guevea de Humboldt">Guevea de Humboldt</option>
                        <option value="Gustavo A. Madero">Gustavo A. Madero</option>
                        <option value="Gustavo Díaz Ordaz">Gustavo Díaz Ordaz</option>
                        <option value="Gutiérrez Zamora">Gutiérrez Zamora</option>
                        <option value="Halachó">Halachó</option>
                        <option value="Hecelchakán">Hecelchakán</option>
                        <option value="Hermenegildo Galeana">Hermenegildo Galeana</option>
                        <option value="Hermosillo">Hermosillo</option>
                        <option value="Heroica Ciudad de Ejutla de Crespo">Heroica Ciudad de Ejutla de Crespo</option>
                        <option value="Heroica Ciudad de Huajuapan de León">Heroica Ciudad de Huajuapan de León</option>
                        <option value="Heroica Ciudad de Tlaxiaco">Heroica Ciudad de Tlaxiaco</option>
                        <option value="Herreras, Los">Herreras, Los</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Hidalgo del Parral">Hidalgo del Parral</option>
                        <option value="Hidalgotitlán">Hidalgotitlán</option>
                        <option value="Higo, El">Higo, El</option>
                        <option value="Higueras">Higueras</option>
                        <option value="Hocabá">Hocabá</option>
                        <option value="Hoctún">Hoctún</option>
                        <option value="Homún">Homún</option>
                        <option value="Honey">Honey</option>
                        <option value="Hopelchén">Hopelchén</option>
                        <option value="Hostotipaquillo">Hostotipaquillo</option>
                        <option value="Huacana, La">Huacana, La</option>
                        <option value="Huachinera">Huachinera</option>
                        <option value="Huajicori">Huajicori</option>
                        <option value="Hualahuises">Hualahuises</option>
                        <option value="Huamantla">Huamantla</option>
                        <option value="Huamuxtitlán">Huamuxtitlán</option>
                        <option value="Huandacareo">Huandacareo</option>
                        <option value="Huanímaro">Huanímaro</option>
                        <option value="Huaniqueo">Huaniqueo</option>
                        <option value="Huanusco">Huanusco</option>
                        <option value="Huaquechula">Huaquechula</option>
                        <option value="Huásabas">Huásabas</option>
                        <option value="Huasca de Ocampo">Huasca de Ocampo</option>
                        <option value="Huatabampo">Huatabampo</option>
                        <option value="Huatlatlauca">Huatlatlauca</option>
                        <option value="Huatusco">Huatusco</option>
                        <option value="Huauchinango">Huauchinango</option>
                        <option value="Huautepec">Huautepec</option>
                        <option value="Huautla">Huautla</option>
                        <option value="Huautla de Jiménez">Huautla de Jiménez</option>
                        <option value="Huayacocotla">Huayacocotla</option>
                        <option value="Huazalingo">Huazalingo</option>
                        <option value="Huehuetán">Huehuetán</option>
                        <option value="Huehuetla">Huehuetla</option>
                        <option value="Huehuetla">Huehuetla</option>
                        <option value="Huehuetlán">Huehuetlán</option>
                        <option value="Huehuetlán el Chico">Huehuetlán el Chico</option>
                        <option value="Huehuetlán el Grande">Huehuetlán el Grande</option>
                        <option value="Huehuetoca">Huehuetoca</option>
                        <option value="Huejotitán">Huejotitán</option>
                        <option value="Huejotzingo">Huejotzingo</option>
                        <option value="Huejúcar">Huejúcar</option>
                        <option value="Huejuquilla el Alto">Huejuquilla el Alto</option>
                        <option value="Huejutla de Reyes">Huejutla de Reyes</option>
                        <option value="Huépac">Huépac</option>
                        <option value="Huerta, La">Huerta, La</option>
                        <option value="Huetamo">Huetamo</option>
                        <option value="Hueyapan">Hueyapan</option>
                        <option value="Hueyapan de Ocampo">Hueyapan de Ocampo</option>
                        <option value="Hueyotlipan">Hueyotlipan</option>
                        <option value="Hueypoxtla">Hueypoxtla</option>
                        <option value="Hueytamalco">Hueytamalco</option>
                        <option value="Hueytlalpan">Hueytlalpan</option>
                        <option value="Huhí">Huhí</option>
                        <option value="Huichapan">Huichapan</option>
                        <option value="Huiloapan">Huiloapan</option>
                        <option value="Huimanguillo">Huimanguillo</option>
                        <option value="Huimilpan">Huimilpan</option>
                        <option value="Huiramba">Huiramba</option>
                        <option value="Huitiupán">Huitiupán</option>
                        <option value="Huitzilac">Huitzilac</option>
                        <option value="Huitzilan de Serdán">Huitzilan de Serdán</option>
                        <option value="Huitziltepec">Huitziltepec</option>
                        <option value="Huitzuco de los Figueroa">Huitzuco de los Figueroa</option>
                        <option value="Huixquilucan">Huixquilucan</option>
                        <option value="Huixtán">Huixtán</option>
                        <option value="Huixtla">Huixtla</option>
                        <option value="Hunucmá">Hunucmá</option>
                        <option value="Ignacio de la Llave">Ignacio de la Llave</option>
                        <option value="Ignacio Zaragoza">Ignacio Zaragoza</option>
                        <option value="Iguala de la Independencia">Iguala de la Independencia</option>
                        <option value="Igualapa">Igualapa</option>
                        <option value="Ilamatlán">Ilamatlán</option>
                        <option value="Imuris">Imuris</option>
                        <option value="Indaparapeo">Indaparapeo</option>
                        <option value="Indé">Indé</option>
                        <option value="Independencia, La">Independencia, La</option>
                        <option value="Irapuato">Irapuato</option>
                        <option value="Irimbo">Irimbo</option>
                        <option value="Isidro Fabela">Isidro Fabela</option>
                        <option value="Isla">Isla</option>
                        <option value="Isla Mujeres">Isla Mujeres</option>
                        <option value="Iturbide">Iturbide</option>
                        <option value="Ixcamilpa de Guerrero">Ixcamilpa de Guerrero</option>
                        <option value="Ixcaquixtla">Ixcaquixtla</option>
                        <option value="Ixcateopan de Cuauhtémoc">Ixcateopan de Cuauhtémoc</option>
                        <option value="Ixcatepec">Ixcatepec</option>
                        <option value="Ixhuacán de los Reyes">Ixhuacán de los Reyes</option>
                        <option value="Ixhuatán">Ixhuatán</option>
                        <option value="Ixhuatlán de Madero">Ixhuatlán de Madero</option>
                        <option value="Ixhuatlán del Café">Ixhuatlán del Café</option>
                        <option value="Ixhuatlán del Sureste">Ixhuatlán del Sureste</option>
                        <option value="Ixhuatlancillo">Ixhuatlancillo</option>
                        <option value="Ixil">Ixil</option>
                        <option value="Ixmatlahuacan">Ixmatlahuacan</option>
                        <option value="Ixmiquilpan">Ixmiquilpan</option>
                        <option value="Ixpantepec Nieves">Ixpantepec Nieves</option>
                        <option value="Ixtacamaxtitlán">Ixtacamaxtitlán</option>
                        <option value="Ixtacomitán">Ixtacomitán</option>
                        <option value="Ixtacuixtla de Mariano Matamoros">Ixtacuixtla de Mariano Matamoros</option>
                        <option value="Ixtaczoquitlán">Ixtaczoquitlán</option>
                        <option value="Ixtapa">Ixtapa</option>
                        <option value="Ixtapaluca">Ixtapaluca</option>
                        <option value="Ixtapan de la Sal">Ixtapan de la Sal</option>
                        <option value="Ixtapan del Oro">Ixtapan del Oro</option>
                        <option value="Ixtapangajoya">Ixtapangajoya</option>
                        <option value="Ixtenco">Ixtenco</option>
                        <option value="Ixtepec">Ixtepec</option>
                        <option value="Ixtlahuaca">Ixtlahuaca</option>
                        <option value="Ixtlahuacán">Ixtlahuacán</option>
                        <option value="Ixtlahuacán de los Membrillos">Ixtlahuacán de los Membrillos</option>
                        <option value="Ixtlahuacán del Río">Ixtlahuacán del Río</option>
                        <option value="Ixtlán">Ixtlán</option>
                        <option value="Ixtlán de Juárez">Ixtlán de Juárez</option>
                        <option value="Ixtlán del Río">Ixtlán del Río</option>
                        <option value="Izamal">Izamal</option>
                        <option value="Iztacalco">Iztacalco</option>
                        <option value="Iztapalapa">Iztapalapa</option>
                        <option value="Izúcar de Matamoros">Izúcar de Matamoros</option>
                        <option value="Jacala de Ledezma">Jacala de Ledezma</option>
                        <option value="Jacona">Jacona</option>
                        <option value="Jala">Jala</option>
                        <option value="Jalacingo">Jalacingo</option>
                        <option value="Jalapa">Jalapa</option>
                        <option value="Jalcomulco">Jalcomulco</option>
                        <option value="Jalostotitlán">Jalostotitlán</option>
                        <option value="Jalpa">Jalpa</option>
                        <option value="Jalpa de Méndez">Jalpa de Méndez</option>
                        <option value="Jalpan">Jalpan</option>
                        <option value="Jalpan de Serra">Jalpan de Serra</option>
                        <option value="Jaltenco">Jaltenco</option>
                        <option value="Jáltipan">Jáltipan</option>
                        <option value="Jaltocán">Jaltocán</option>
                        <option value="Jamapa">Jamapa</option>
                        <option value="Jamay">Jamay</option>
                        <option value="Janos">Janos</option>
                        <option value="Jantetelco">Jantetelco</option>
                        <option value="Jaral del Progreso">Jaral del Progreso</option>
                        <option value="Jaumave">Jaumave</option>
                        <option value="Jerécuaro">Jerécuaro</option>
                        <option value="Jerez">Jerez</option>
                        <option value="Jesús Carranza">Jesús Carranza</option>
                        <option value="Jesús María">Jesús María</option>
                        <option value="Jesús María">Jesús María</option>
                        <option value="Jilotepec">Jilotepec</option>
                        <option value="Jilotepec">Jilotepec</option>
                        <option value="Jilotlán de los Dolores">Jilotlán de los Dolores</option>
                        <option value="Jilotzingo">Jilotzingo</option>
                        <option value="Jiménez">Jiménez</option>
                        <option value="Jiménez">Jiménez</option>
                        <option value="Jiménez">Jiménez</option>
                        <option value="Jiménez">Jiménez</option>
                        <option value="Jiménez del Teul">Jiménez del Teul</option>
                        <option value="Jiquilpan">Jiquilpan</option>
                        <option value="Jiquipilas">Jiquipilas</option>
                        <option value="Jiquipilco">Jiquipilco</option>
                        <option value="Jitotol">Jitotol</option>
                        <option value="Jiutepec">Jiutepec</option>
                        <option value="Jocotepec">Jocotepec</option>
                        <option value="Jocotitlán">Jocotitlán</option>
                        <option value="Jojutla">Jojutla</option>
                        <option value="Jolalpan">Jolalpan</option>
                        <option value="Jonacatepec">Jonacatepec</option>
                        <option value="Jonotla">Jonotla</option>
                        <option value="Jonuta">Jonuta</option>
                        <option value="Jopala">Jopala</option>
                        <option value="Joquicingo">Joquicingo</option>
                        <option value="José Azueta">José Azueta</option>
                        <option value="José Azueta">José Azueta</option>
                        <option value="José María Morelos">José María Morelos</option>
                        <option value="José Sixto Verduzco">José Sixto Verduzco</option>
                        <option value="Juan Aldama">Juan Aldama</option>
                        <option value="Juan C. Bonilla">Juan C. Bonilla</option>
                        <option value="Juan Galindo">Juan Galindo</option>
                        <option value="Juan N. Méndez">Juan N. Méndez</option>
                        <option value="Juan R. Escudero">Juan R. Escudero</option>
                        <option value="Juan Rodríguez Clara">Juan Rodríguez Clara</option>
                        <option value="Juanacatlán">Juanacatlán</option>
                        <option value="Juárez">Juárez</option>
                        <option value="Juárez">Juárez</option>
                        <option value="Juárez">Juárez</option>
                        <option value="Juárez">Juárez</option>
                        <option value="Juárez">Juárez</option>
                        <option value="Juárez Hidalgo">Juárez Hidalgo</option>
                        <option value="Juchipila">Juchipila</option>
                        <option value="Juchique de Ferrer">Juchique de Ferrer</option>
                        <option value="Juchitán de Zaragoza">Juchitán de Zaragoza</option>
                        <option value="Juchitepec">Juchitepec</option>
                        <option value="Juchitlán">Juchitlán</option>
                        <option value="Julimes">Julimes</option>
                        <option value="Jungapeo">Jungapeo</option>
                        <option value="Kanasín">Kanasín</option>
                        <option value="Kantunil">Kantunil</option>
                        <option value="Kaua">Kaua</option>
                        <option value="Kinchil">Kinchil</option>
                        <option value="Kopomá">Kopomá</option>
                        <option value="Lafragua">Lafragua</option>
                        <option value="Lagos de Moreno">Lagos de Moreno</option>
                        <option value="Lagunillas">Lagunillas</option>
                        <option value="Lagunillas">Lagunillas</option>
                        <option value="Lamadrid">Lamadrid</option>
                        <option value="Lampazos de Naranjo">Lampazos de Naranjo</option>
                        <option value="Landa de Matamoros">Landa de Matamoros</option>
                        <option value="Landero y Coss">Landero y Coss</option>
                        <option value="Larráinzar">Larráinzar</option>
                        <option value="Lázaro Cárdenas">Lázaro Cárdenas</option>
                        <option value="Lázaro Cárdenas">Lázaro Cárdenas</option>
                        <option value="Lázaro Cárdenas">Lázaro Cárdenas</option>
                        <option value="León">León</option>
                        <option value="Leonardo Bravo">Leonardo Bravo</option>
                        <option value="Lerdo">Lerdo</option>
                        <option value="Lerdo de Tejada">Lerdo de Tejada</option>
                        <option value="Lerma">Lerma</option>
                        <option value="Libertad, La">Libertad, La</option>
                        <option value="Libres">Libres</option>
                        <option value="Limón, El">Limón, El</option>
                        <option value="Linares">Linares</option>
                        <option value="Llano, El">Llano, El</option>
                        <option value="Llera">Llera</option>
                        <option value="Lolotla">Lolotla</option>
                        <option value="Loma Bonita">Loma Bonita</option>
                        <option value="López">López</option>
                        <option value="Loreto">Loreto</option>
                        <option value="Loreto">Loreto</option>
                        <option value="Luis Moya">Luis Moya</option>
                        <option value="Macuspana">Macuspana</option>
                        <option value="Madera">Madera</option>
                        <option value="Madero">Madero</option>
                        <option value="Magdalena">Magdalena</option>
                        <option value="Magdalena">Magdalena</option>
                        <option value="Magdalena">Magdalena</option>
                        <option value="Magdalena Apasco">Magdalena Apasco</option>
                        <option value="Magdalena Contreras, La">Magdalena Contreras, La</option>
                        <option value="Magdalena Jaltepec">Magdalena Jaltepec</option>
                        <option value="Magdalena Mixtepec">Magdalena Mixtepec</option>
                        <option value="Magdalena Ocotlán">Magdalena Ocotlán</option>
                        <option value="Magdalena Peñasco">Magdalena Peñasco</option>
                        <option value="Magdalena Teitipac">Magdalena Teitipac</option>
                        <option value="Magdalena Tequisistlán">Magdalena Tequisistlán</option>
                        <option value="Magdalena Tlacotepec">Magdalena Tlacotepec</option>
                        <option value="Magdalena Tlaltelulco, La">Magdalena Tlaltelulco, La</option>
                        <option value="Magdalena Tlatlauquitepec, La">Magdalena Tlatlauquitepec, La</option>
                        <option value="Magdalena Yodocono de Porfirio Díaz">Magdalena Yodocono de Porfirio Díaz</option>
                        <option value="Magdalena Zahuatlán">Magdalena Zahuatlán</option>
                        <option value="Maguarichi">Maguarichi</option>
                        <option value="Mainero">Mainero</option>
                        <option value="Malinalco">Malinalco</option>
                        <option value="Malinaltepec">Malinaltepec</option>
                        <option value="Maltrata">Maltrata</option>
                        <option value="Mama">Mama</option>
                        <option value="Maní">Maní</option>
                        <option value="Manlio Fabio Altamirano">Manlio Fabio Altamirano</option>
                        <option value="Mante, El">Mante, El</option>
                        <option value="Manuel Benavides">Manuel Benavides</option>
                        <option value="Manuel Doblado">Manuel Doblado</option>
                        <option value="Manzanilla de la Paz, La">Manzanilla de la Paz, La</option>
                        <option value="Manzanillo">Manzanillo</option>
                        <option value="Mapastepec">Mapastepec</option>
                        <option value="Mapimí">Mapimí</option>
                        <option value="Maravatío">Maravatío</option>
                        <option value="Maravilla Tenejapa">Maravilla Tenejapa</option>
                        <option value="Marcos Castellanos">Marcos Castellanos</option>
                        <option value="Margaritas, Las">Margaritas, Las</option>
                        <option value="Mariano Escobedo">Mariano Escobedo</option>
                        <option value="Marín">Marín</option>
                        <option value="Mariscala de Juárez">Mariscala de Juárez</option>
                        <option value="Marqués de Comillas">Marqués de Comillas</option>
                        <option value="Marqués, El">Marqués, El</option>
                        <option value="Martínez de la Torre">Martínez de la Torre</option>
                        <option value="Mártir de Cuilapan">Mártir de Cuilapan</option>
                        <option value="Mártires de Tacubaya">Mártires de Tacubaya</option>
                        <option value="Mascota">Mascota</option>
                        <option value="Matachí">Matachí</option>
                        <option value="Matamoros">Matamoros</option>
                        <option value="Matamoros">Matamoros</option>
                        <option value="Matamoros">Matamoros</option>
                        <option value="Matehuala">Matehuala</option>
                        <option value="Matías Romero">Matías Romero</option>
                        <option value="Matlapa">Matlapa</option>
                        <option value="Maxcanú">Maxcanú</option>
                        <option value="Mayapán">Mayapán</option>
                        <option value="Mazamitla">Mazamitla</option>
                        <option value="Mazapa de Madero">Mazapa de Madero</option>
                        <option value="Mazapil">Mazapil</option>
                        <option value="Mazapiltepec de Juárez">Mazapiltepec de Juárez</option>
                        <option value="Mazatán">Mazatán</option>
                        <option value="Mazatán">Mazatán</option>
                        <option value="Mazatecochco de José María Morelos">Mazatecochco de José María Morelos</option>
                        <option value="Mazatepec">Mazatepec</option>
                        <option value="Mazatlán">Mazatlán</option>
                        <option value="Mazatlán Villa de Flores">Mazatlán Villa de Flores</option>
                        <option value="Mecatlán">Mecatlán</option>
                        <option value="Mecayapan">Mecayapan</option>
                        <option value="Medellín">Medellín</option>
                        <option value="Melchor Ocampo">Melchor Ocampo</option>
                        <option value="Melchor Ocampo">Melchor Ocampo</option>
                        <option value="Melchor Ocampo">Melchor Ocampo</option>
                        <option value="Méndez">Méndez</option>
                        <option value="Meoqui">Meoqui</option>
                        <option value="Mérida">Mérida</option>
                        <option value="Mesones Hidalgo">Mesones Hidalgo</option>
                        <option value="Metapa">Metapa</option>
                        <option value="Metepec">Metepec</option>
                        <option value="Metepec">Metepec</option>
                        <option value="Metlatónoc">Metlatónoc</option>
                        <option value="Metztitlán">Metztitlán</option>
                        <option value="Mexicali">Mexicali</option>
                        <option value="Mexicaltzingo">Mexicaltzingo</option>
                        <option value="Mexquitic de Carmona">Mexquitic de Carmona</option>
                        <option value="Mexticacán">Mexticacán</option>
                        <option value="Mezquital">Mezquital</option>
                        <option value="Mezquital del Oro">Mezquital del Oro</option>
                        <option value="Mezquitic">Mezquitic</option>
                        <option value="Miacatlán">Miacatlán</option>
                        <option value="Miahuatlán">Miahuatlán</option>
                        <option value="Miahuatlán de Porfirio Díaz">Miahuatlán de Porfirio Díaz</option>
                        <option value="Mier">Mier</option>
                        <option value="Mier y Noriega">Mier y Noriega</option>
                        <option value="Miguel Alemán">Miguel Alemán</option>
                        <option value="Miguel Auza">Miguel Auza</option>
               
               
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="update_localidad">Localidad</label>
                        <input type="text" name="update_localidad" id="update_localidad" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="update_latitud">Latitud</label>
                        <input type="text" name="update_latitud" id="update_latitud" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="update_longitud">Longitud</label>
                        <input type="text" name="update_longitud" id="update_longitud" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="update_altitud">Altitud</label>
                        <input type="text" name="update_altitud" id="update_altitud" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="update_vegetacion">Tipo de Vegetación</label>
                        <input type="text" name="update_vegetacion" id="update_vegetacion" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="update_colectores">Colectores</label>
                        <input type="text" name="update_colectores" id="update_colectores" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="update_colecta">Número de Colecta</label>
                        <input type="int" name="update_colecta" id="update_colecta" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="update_ingreojbc">Fecha de Ingreso a OJBC</label>
                        <input type="date" name="update_ingreojbc" id="update_ingreojbc" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="update_prensado">Fecha de Prensado</label>
                        <input type="date" name="update_prensado" id="update_prensado" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="update_fechacol">Fecha Colecta</label>
                        <input type="date" name="update_fechacol" id="update_fechacol" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="update_fenologia">Fenología</label>
                        <select name="update_fenologia" id="update_fenologia" class="form-control">
                            <option value="Estéril">Estéril</option>
                            <option value="Fértil">Fértil</option>
                            <option value="Floración">Floración</option>
                            <option value="Fructificación">Fructificación</option>
                            <option value="Flor y fruto">Flor y fruto</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="update_datosplan">Datos de la Planta</label>
                        <input type="text" name="update_datosplan" id="update_datosplan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="update_ncomun">Nombre Común</label>
                        <input type="text" name="update_ncomun" id="update_ncomun" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="update_usos">Usos de la Planta</label>
                        <select name="update_usos" id="update_usos" class="form-control">
                            <option value="Artesanía">Artesanía</option>
                            <option value="Ceremonial">Ceremonial</option>
                            <option value="Comestible">Comestible</option>
                            <option value="Construcción">Construcción</option>
                            <option value="Herramientas">Herramientas</option>
                            <option value="Medicinal">Medicinal</option>
                            <option value="Ornamental">Ornamental</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="update_usos2">Usos de la Planta 2</label>
                        <select name="update_usos2" id="update_usos2" class="form-control" >
                            <option value="Artesanía">Artesanía</option>
                            <option value="Ceremonial">Ceremonial</option>
                            <option value="Comestible">Comestible</option>
                            <option value="Construcción">Construcción</option>
                            <option value="Herramientas">Herramientas</option>
                            <option value="Medicinal">Medicinal</option>
                            <option value="Ornamental">Ornamental</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="update_ojbc">Ubicación OJBC</label>
                        <select name="update_ojbc" id="update_ojbc" class="form-control">
                            <option value="text">Seleccione la Ubicación...</option>
                            <option value="Caracol de Suculentas">Caracol de Suculentas</option>
                            <option value="Esfera Arboretum 1">Esfera Arboretum 1</option>
                            <option value="Esfera Arboretum 2">Esfera Arboretum 2</option>
                            <option value="Esfera Ceiba Pentandra">Esfera Ceiba Pentandra</option>
                            <option value="Esfera Humedal Artificial">Esfera Humedal Artificial</option>
                            <option value="Esfera Ornamental">Esfera Ornamental</option>
                            <option value="Esfera Plantas Medicinales">Esfera Plantas Medicinales</option>
                            <option value="Esfera Xerófitos">Esfera Xerófitos</option>
                            <option value="Invernadero 1">Invernadero 1</option>
                            <option value="Invernadero 2">Invernadero 2</option>
                            <option value="Invernadero 3">Invernadero 3</option>
                            <option value="Jardín para Polinizadores">Jardín para Polinizadores</option>
                            <option value="Ninguno">--Ninguno--</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="update_endemismo">Endeismo</label>
                        <input type="text" name="update_endemismo" id="update_endemismo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="update_riesgo">Categoría Riesgo</label>
                        <select name="update_riesgo" id="update_riesgo" class="form-control">
                            <option value="Amenazada (A)">Amenazada (A)</option>
                            <option value="En Peligro de Extinción (P)">En Peligro de Extinción (P)</option>
                            <option value="Probablemente Extinta en el Medio Silvestre (E)">Probablemente Extinta en el Medio Silvestre (E)</option>
                            <option value="Sujeta a Protección Especial (Pr)">Sujeta a Protección Especial (Pr)</option>
                            <option value="Ninguno">--Ninguno--</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="update_habito">Hábito</label>
                        <select name="update_habito" id="update_habito" class="form-control">
                            <option value="Seleccione el Hábito">Seleccione el Hábito</option>
                            <option value="Acuática">Acuática</option>
                            <option value="Carnívora/Insectívora">Carnívora/Insectívora</option>
                            <option value="Enredadera">Enredadera</option>
                            <option value="Epífita">Epífita</option>
                            <option value="Parásita">Parásita</option>
                            <option value="Rastrera">Rastrera</option>
                            <option value="Rupícola">Rupícola</option>
                            <option value="Terrestre">Terrestre</option>
                            <option value="Trepadora">Trepadora</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="update_formavid">Forma de Vida</label>
                        <select name="update_formavid" id="update_formavid" class="form-control">
                            <option value="text">Seleccione la Forma Vida...</option>
                            <option value="Árbol">Árbol</option>
                            <option value="Arborescente">Arborescente</option>
                            <option value="Arbusto">Arbusto</option>
                            <option value="Bejuco/Liana">Bejuco/Liana</option>
                            <option value="Hierba">Hierba</option>
                            <option value="Ninguno">--Ninguno--</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="update_tipo">Tipo</label>
                        <select name="update_tipo" id="update_tipo" class="form-control">
                            <option value="text">Seleccione el Tipo...</option>
                            <option value="Epitipo">Epitipo</option>
                            <option value="Holotipo">Holotipo</option>
                            <option value="Isotipo">Isotipo</option>
                            <option value="Lectotipo">Lectotipo</option>
                            <option value="Neotipo">Neotipo</option>
                            <option value="Paratipo">Paratipo</option>
                            <option value="Sintipo">Sintipo</option>
                            <option value="Topotipo">Topotipo</option>
                            <option value="Ninguno">--Ninguno--</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="update_duplicados">Duplicados</label>
                        <input type="text" name="update_duplicados" id="update_duplicados"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="update_tingreso">Tipo de Ingreso</label>
                        <select name="update_tingreso" id="update_tingreso" class="form-control">
                            <option value="text">Seleccione el Tipo de Ingreso...</option>
                            <option value="Colecta">Colecta</option>
                            <option value="Donación">Donación</option>
                            <option value="Intercambio">Intercambio</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="update_tingreso2">Tipo de Ingreso 2</label>
                        <select name="update_tingreso2" id="update_tingreso2" class="form-control">
                            <option value="text">Seleccione el Tipo de Ingreso...</option>
                            <option value="Colecta">Colecta</option>
                            <option value="Donación">Donación</option>
                            <option value="Intercambio">Intercambio</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="update_tcoleccion">Tipo de Coleccción</label>
                        <select name="update_tcoleccion" id="update_tcoleccion" class="form-control">
                            <option value="text">Seleccione el Tipo de Colección...</option>
                            <option value="Antoteca">Antoteca</option>
                            <option value="Carpológica">Carpológica</option>
                            <option value="Ejemplares Herborizados">Ejemplares Herborizados</option>
                            <option value="Etnobotánica">Etnobotánica</option>
                            <option value="Ficológica">Ficológica</option>
                            <option value="Micológica">Micológica</option>
                            <option value="Palinoteca">Palinoteca</option>
                            <option value="Otro">--Otro--</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="update_origen">Origen</label>
                        <select name="update_origen" id="update_origen" class="form-control">
                            <option value="text">Seleccione el Tipo de Origen...</option>
                            <option value="Nativa">Nativa</option>
                            <option value="Exótica">Exótica</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="update_fbaja">Fecha de Baja</label>
                        <input type="date" name="update_fbaja" id="update_fbaja" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="update_observaciones">observaciones</label>
                        <input type="text" name="update_observaciones" id="update_observaciones" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="update_herbario">Folio Herbario</label>
                        <input type="int" name="update_herbario" id="update_herbario" class="form-control">
                    </div>
                    <input type="submit" name="update_plantas" id="update_plantas" Value="Actualizar" class="btn btn-primary">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Eliminar -->
<div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title" id="defaultModalLabel">Eliminar planta</h4>
            </div>
            <div class="modal-body">
                <form action="panel.php?modulo=clientes" method="POST">
                    <input type="hidden" name="delete_id" id="delete_id" value="">
                    <div class="form-group">
                        <label>¿Seguro que deseas eliminar está planta?</label>
                        <input type="text" name="delete_ncomun" id="delete_ncomun" class="form-control" readonly>
                    </div>

                    <input type="submit" name="delete_cliente" Value="Eliminar" class="btn btn-danger">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>