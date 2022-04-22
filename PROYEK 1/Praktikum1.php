<?php
 include_once 'Header.php';
 include_once 'Sidebar.php';
 ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 1</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Praktikum 1</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Nilai</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <?php
$ns1 = ['id'=>1, 'nim'=>'01101','uts'=>88., 'uas' => 84, 'tugas' => 78];
$ns2 = ['id'=>2, 'nim'=>'01121','uts'=>78., 'uas' => 58, 'tugas' => 58];
$ns3 = ['id'=>3, 'nim'=>'01130','uts'=>60., 'uas' => 86, 'tugas' => 70];
$ns4 = ['id'=>4, 'nim'=>'01134','uts'=>90., 'uas' => 91, 'tugas' => 82];
$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

<h3 style ="text-align: center; "> Daftar Nilai Siswa</h3>

</-- buka table -->
<table border="1" width= "100%">
<thead>
    <tr>
        <th>
            No
        </th>
        <th>
            Nim
        </th>
        <th>
            UTS
        </th>
        <th>
            UAS
        </th>
        <th>
            Tugas
        </th>
        <th>
            Nilai Akhir
        </th>
    </tr>
</thead>
<tbody>
    <?php
    $nomor = 1;
    foreach ($ar_nilai as $nilai){
echo '<tr><td>'.$nomor.'</td>';
echo '<td>'.$nilai ['nim'].'</td>';
echo '<td>'.$nilai ['uts'].'</td>';
echo '<td>'.$nilai ['uas'].'</td>';
echo '<td>'.$nilai ['tugas'].'</td>';
$nilai_akhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas'])/3;
echo '<td>'.number_format($nilai_akhir,2,',','.'). '</td>';
echo '<tr/>';
$nomor++;
}
?>

</body>
</table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Thank's
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once 'Footer.php';
?>