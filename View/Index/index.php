<?php session_start(); ?>
<?php include_once '../Comunes/header.php'; ?>
<?php include_once '../Comunes/nav.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Avance por alumnos</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Alumnos 1°D</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Bordered Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">Item</th>
                    <th>Nombre Alumno</th>
                    <th>Nombre Apoderado</th>
                    <th>Acumulado</th>
                    <th style="width: 40px">%</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>Alonso Carrasco</td>
                    <td>Nicolás Carrasco</td>
                    <th>$120.000</th>
                    <td><span class="badge bg-danger">100%</span></td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Gohan Alexis</td>
                    <td>Lionel Messi</td>
                    <th>$120.000</th>
                    <td><span class="badge bg-danger">100%</span></td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Pepito José</td>
                    <td>Juanito Pepito</td>
                    <th>$120.000</th>
                    <td><span class="badge bg-danger">100%</span></td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>Juanito Perez</td>
                    <td>Juana Perez</td>
                    <th>$120.000</th>
                    <td><span class="badge bg-danger">100%</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <?php include_once '../Comunes/footer.php'; ?>