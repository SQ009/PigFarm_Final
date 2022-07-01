<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>



<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Agregar Jefe de granja</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Agregar Jefe de granja</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">




        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-title">

                    </div>
                    <div id="add-brand-messages"></div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="row" method="POST" id="submiUserForm" action="php_action/createUser.php" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="currnt_date" class="form-control">

                                
                                <div class="form-group col-md-6">
                                    <label class="ontrol-label">Usuario</label>
                                    <input type="text" class="form-control" id="userName" placeholder="" name="userName" autocomplete="off" required="" pattern="^[a-zA-z0-9]+$" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">Contraseña</label>
                                    <input type="text" class="form-control" id="password" placeholder="" name="password" autocomplete="off" required="" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="" name="email" autocomplete="off" required="" pattern="^[Aa-Zz]+$" />
                                </div>
                                <div class="col-md-1 mx-auto">
                                    <button type="submit" name="create" id="createUserBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <?php include('./constant/layout/footer.php'); ?>

