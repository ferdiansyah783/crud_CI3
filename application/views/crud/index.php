

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- my content -->
            <div id="content">

                <nav class="navbar navbar-light bg-white topbar shadow mb-4 static-top">
                    <div class="container-fluid">
                      <a class="navbar-brand">SMK N 1 BANGSRI</a>
                      <form action="<?= base_url('crud') ?>" method="GET" class="d-flex">
                        <input class="form-control me-2 bg-light" type="text" name="nama" placeholder="masukan username">
                        <button class="btn btn-light text-white bg-primary" type="submit">Search</button>
                      </form>
                    </div>
                </nav>

                <!-- begin page content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                </div>

                <!-- crud content -->
                <?php if (!empty($data)): ?>
                    <table class="table p-3">
                        <thead>
                          <tr>
                            <th scope="col">no</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">date_create</th>
                            <th>actoin</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($data AS $key => $value): ?>
                          <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $value['nama'] ?></td>
                            <td><?= $value['email'] ?></td>
                            <td><?= $value['date_create'] ?></td>
                            <td>
                                <a href="<?= base_url('user/edit/'.$value['id']) ?>">edit</a>
                                <a href="<?= base_url('user/delete/'.$value['id']) ?>">delete</a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>

            </div>
                
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
