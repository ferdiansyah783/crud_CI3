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
                            <h1 class="h4 text-gray-900 mb-4">Form edit data</h1>
                        </div>
                        <form class="user" action="<?= base_url('user/edit_action/'. $data['id']) ?>" method="POST">
                            <div class="form-group">
                                <label for="nama" class="form-label ml-2">nama</label>
                                <input type="text" class="form-control form-control-user" value="<?= $data['nama'] ?>" name="nama" id="nama"
                                    placeholder="masukan nama">
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label ml-2">email</label>
                                <input type="text" class="form-control form-control-user" value="<?= $data['email'] ?>" name="email" id="email"
                                    placeholder="email">
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label ml-2">password</label>
                                <input type="password" class="form-control form-control-user" value="<?= $data['password'] ?>" name="password" id="password"
                                placeholder="input password">
                            </div>
                            <div class="form-group">
                                <label for="date" class="form-label ml-2">date-create</label>
                                <input type="date" class="form-control form-control-user" value="<?= $data['date_create'] ?>" name="date_create" id="date_create"
                                    placeholder="date-create">
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