<?php
include "includes/admin_header.php";
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
        include "includes/admin_navigation.php";
        ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Author</small>
                        </h1>
                        <div class="col-xs-6">

                        <form action="" method="POST">

                                <div class="form-group">
                                    <label for="cat_title"> Add Category</label>


                                    <input type="text" class="form-control" name="cat_title">

                                    <input type="submit" class="btn btn-primary" name="submit" value="Add Category">

                                </div>
                            </form>


                            <?php 
//Add categories query
                            insert_categories();
                            ?>



<?php
if(isset($_GET['edit'])){
    $cat_id = $_GET['edit'];
    include 'includes/update_categories.php';
}
?>




                            




                        </div>
                        <div class="col-xs-6">


                            <table class=" table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                        <th colspan="2"> Operations</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    //FIND ALL CATEGORIES QUERY

                                    findAllCategories();
                                     ?>

                                    <?php

                                    //Delete categories query
                                    
                                    deleteCategories()

                                    ?>


                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


        <?php
        include "includes/admin_footer.php";
        ?>