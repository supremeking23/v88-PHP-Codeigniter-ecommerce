<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new product  | Semi Restful Route Demo</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2>Add a new product</h2>

                <?= $this->session->flashdata("errors") ?>
                
                <form action="<?= base_url()?>create" method="POST">
                    <div class="form-group">
                        <label for="product">Product Name</label>
                        <input type="text" class="form-control" id="product" name="product" value=""  placeholder="Enter produce name">
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price</label>
                        <input type="text" class="form-control" id="price" name="price" value=""  placeholder="Enter produce price">
                    </div>
                    <div class="form-group">
                        <label for="product-description">Description</label>
                        <textarea class="form-control" id="product-description" name="product-description"  rows="3"></textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>

                
            </div>
            <div class="col-md-12 mt-5">
                <a href="<?= base_url()?>" class="">Go back</a>
            </div>
        </div>
    </div> 
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>