<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 9 CRUD Tutorial Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Laravel 9 CRUD Example Tutorial</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href=""> Image</a>
                </div>
            </div>
        </div>
        <?php
        dd(Storage::url($image->image));
        ?>
         <img width="100px" height="100px" src="{{ Storage::url($image->image) }}" class="img-fluid"/>
         
        
    </div>
</body>
</html>