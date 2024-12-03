<!DOCTYPE html>
<!-- saved from url=(0054)http://localhost/Php-project/blog2/dashboard/index.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index_files/bootstrap.min.css">
    <script src="./index_files/bootstrap.bundle.js.download"></script>
    <link rel="stylesheet" href="./index_files/header.css">
  
    
   
</head>
<body>
    <div class="container-fluid">
        <div class="container-fluid bg-primary" style="height: 50px;"></div>

        <div class="row">
            <div class="col-md-2 bg-primary p-2" style="height: 1000px;" id="slide">

                <a href="http://localhost/Php-project/blog2/">
                    <div class="btn btn-light text-primary my-1" style="width:120px;">Home page</div>
                </a>

                <a href="http://localhost/Php-project/blog2/dashboard/index.php">
                    <div class="btn btn-light text-primary my-1" style="width:120px;">Dashboard</div>
                </a>

                <a href="http://localhost/Php-project/blog2/dashboard/new_post.php">
                    <div class="btn btn-light text-primary my-1" style="width:120px;">New Post</div>
                </a>

                <a href="http://localhost/Php-project/blog2/dashboard/all_post.php">
                    <div class="btn btn-light text-primary my-1" style="width:120px;">All Post</div>
                </a>
                <a href="http://localhost/Php-project/blog2/dashboard/settings.php">
                    <div class="btn btn-light text-primary my-1" style="width:120px;">Profile settings</div>
                </a>
                
                <div class="btn btn-light text-primary my-1" style="width:120px;" data-bs-toggle="modal" data-bs-target="#logoutModal" type="button">Logout</div>
            </div>

    
            <!-- LOGOUT MODAL -->

            <!-- THE MODAL -->
             <div class="modal" id="logoutModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- MODEL HEADER -->
                         <div class="modal-header">
                            <h4 class="modal-title">Blog Says:</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                         </div>

                         <!-- MODAL BODY -->
                          <div class="modal-body">
                            Do you want to logout?
                          </div>

                          <!-- MODAL FOOTER -->
                           <div class="modal-footer">
                            <button type="button" class="btn btn-danger">
                                <a href="http://localhost/Php-project/blog2/dashboard/logout.php" style="text-decoration: none; color:white">Logout</a>
                            </button>
                           </div>
                    </div>
                </div>
             </div>

             
             <style>
                @media (min-width:450px) {
                    #slide{
                    background-color: brown;
                    }
                }
             </style><div class="col-md-10">

<div class="row">
    <div class="col-md-4 p-3">
        <div class="card p-3">
            Total Post:<b>5</b>
        </div>

    </div>
</div>
</div>


</div>
        </div>
       
        
        

</body></html>