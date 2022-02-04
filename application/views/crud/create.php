<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- my content -->
    <div id="content" class="p-3">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-8 mx-auto">
            <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Form tambah data</h1>
                        </div>
                        <form class="user" action="<?= base_url('user/create_action') ?>" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama" name="nama"
                                    placeholder="full name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email"
                                    placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password" name="password"
                                    placeholder="input password" value="">
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control form-control-user" id="date_create" name="date_create"
                                    placeholder="date create">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">save</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </div>
    

</div>
<!-- End of Content Wrapper -->


