<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-archive"></i> Clientes </header>
	
	<div class="row wrapper">
		<div class="col-sm-2 m-b-sm">
			<a href="admin.php?m=clientesAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus icon"></i>  Agregar Cliente </a>
		</div>
		<div class="col-sm-7"></div>
		<div class="col-sm-3">
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="Buscar"> <span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button"> <i class="fa fa-search"></i> </button> </span>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th>Nombre</th>
					<th width="120">RFC</th>
					<th>Direccion</th>
					<th>Ciudad</th>
					<th width="120">Telefono</th>
					<th width="160"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					
					<td>columna 2 </td>
					<td>columna 3</td>
					<td>columna 4 </td>
					<td>columna 5 </td>
					<td>columna 6 </td>
					<td>
						<a href="admin.php?m=clientesConsultar" class="btn btn-sm btn-info"> <i class="fa fa-plus"> </i></a> &nbsp;
						<a href="admin.php?m=clientesEditar" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;
						<a href="admin.php?m=clientes" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
				<tr>
					<td>columna 2 </td>
					<td>columna 3</td>
					<td>columna 4 </td>
					<td>columna 5 </td>
					<td>columna 6 </td>
					<td>
						<a href="admin.php?m=clientesConsultar" class="btn btn-sm btn-info"><i class="fa fa-plus"></i></a> &nbsp;
						<a href="admin.php?m=clientesEditar" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;
						<a href="admin.php?m=clientes" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>

			</tbody>
		</table>
	</div>

</section>