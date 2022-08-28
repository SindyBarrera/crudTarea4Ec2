<title><?= $titulo ?></title>
<br>
<div class="container-fluid">

    <div class="">
        <div class="">
            <h3 class=""><?= $titulo ?> <a href="<?= site_url('AlumnosController/form') ?>"><button title="Nuevo" class="btn btn-primary"><i class="fa  fa-plus-square-o"><ion-icon name="person-add-outline"></ion-icon></i> Nuevo</button></a></h3>
        </div>
        <!-- /.box-header -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr style ="background-color: SteelBlue">
                    <th> <style>
                        th
                        {
                            text-align: center;
                        }
                        
                    </style>Id</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>DPI</th>
                    <th>Fecha Creación</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($resultados as $row): ?>
					<tr style ="background-color: DeepSkyBlue">
						<td><?= $row->alumno; ?>	</td>
						<td><?= $row->nombre.' '.$row->apellido; ?></td>
						<td><?= $row->direccion; ?>	</td>
						<td><?= $row->movil; ?></td>
						<td><?= $row->email;?></td>
                        <td><?= $row->dpi;?></td>
						<td><?= $row->fecha_creacion; ?></td>
						<td><?= $row->user; ?></td> 
						<td><?php if($row->inactivo == 0){ echo "Activo"; }else{ echo "Inactivo"; } ?></td>	


                        <td style="text-align: center;"> <a href="<?php echo base_url('index.php/alumnosController/eliminar/').$row->alumno; ?>"class="btn btn-danger"><ion-icon name="backspace"></ion-icon></ion-icon></a></td>
                        <td style="text-align: center;"> <a href="<?php echo base_url('index.php/alumnosController/formActualiza/').$id=$row->alumno;?>"class="btn btn-success"><ion-icon name="refresh"></ion-icon></a></td>

						<td class="text-center">
							
						</td>
					</tr>
				<?php endforeach ?>
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
    </div>

</div>
<!-- /.box -->