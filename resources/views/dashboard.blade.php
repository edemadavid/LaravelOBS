
<x-admin-layout>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">


      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6  col-12">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <p>Account Balance</p>
                <div class="d-flex row">
                    <ion-icon name="cash-outline" size="large" class="ml-5"></ion-icon>
                    <h3 class="ml-5" >150,000</h3>
                </div>
              </div>
              <a href="#" class="small-box-footer">History <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Deposit</h3>
              </div>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Transfer</h3>
              </div>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Recharge</h3>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Pay Bills</h3>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Investments</h3>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Quick Loans</h3>
              </div>
            </div>
          </div>
          <!-- ./col -->


          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Recent Transaction</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Transaction ID</th>
                    <th>Account</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Time</th>
                  </tr>
                  </thead>
                  <tbody>

                  <tr>
                    <td>000111222</td>
                    <td>00125689</td>
                    <td>Jon Josh</td>
                    <td>20000</td>
                    <td>Sent</td>
                    <td>21/08/2022 10:21am</td>
                  </tr>
                  <tr>
                    <td>000111222</td>
                    <td>00125689</td>
                    <td>Jon Josh</td>
                    <td>20000</td>
                    <td>Sent</td>
                    <td>21/08/2022 10:21am</td>
                  </tr>
                  <tr>
                    <td>000111222</td>
                    <td>00125689</td>
                    <td>Jon Josh</td>
                    <td>20000</td>
                    <td>Sent</td>
                    <td>21/08/2022 10:21am</td>
                  </tr>
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
        <!-- Main row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

</x-admin-layout>


