<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
	
</head>
<body>
	<div class="col-md-10 col-xs-offset-1">
    <div class="panel panel-primary">
        <div class="panel-heading">List Contact</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="text-align: center;">STT</th>
                    <th style="text-align: center;">Tên</th>
                    <th style="text-align: center;">Số điện thoại 1</th>
                    <th style="text-align: center;">Số điện thoại 2</th>
                    <th style="text-align: center;">Email</th>
                    <th style="text-align: center;">fb</th>
                    <th style="text-align: center;">Company</th>
                    <th style="text-align: center;">Quan Ly</th>
                </tr>
                <tr class="add"></tr>
                <?php foreach ($dlnhan as $key => $value): ?>
                <tr>
                    <td style="text-align: center;"><?= $key+1 ?></td>
                    <td style="text-align: center;"><?= $value['name'] ?></td>
                    <td style="text-align: center;" ><?= $value['phone1'] ?></td>
                    <td style="text-align: center;"><?= $value['phone2'] ?></td>
                    <td style="text-align: center;"><?= $value['email'] ?></td>
                    <td style="text-align: center;"><?= $value['fb'] ?></td>
                    <td style="text-align: center;"><?= $value['company'] ?></td>

                    <td style="text-align: center;">
                        <a href="contact/edit/<?php echo $value['id']; ?>">Edit</a>&nbsp;&nbsp;
                        <a onclick="return window.confirm('Are you sure?');" href="contact/delete/<?php echo $value['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
                                
<div class="col-md-10 col-xs-offset-1">
    <div style="margin-bottom: 5px;">
        <a href="" class="btn btn-default">Add </a>
    </div>
        <div class="container">
            <div class="row">
                <div class="row">   
                </div>
                <div class="col-md-8 push-md-2">
                    <div class="card card-block">
                        <form class="text-xs-center" action="<?= base_url() ?>contact/add" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="id" class="col-sm-2 form-control-label"></label>
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control" id="id" name="id" placeholder="Ho va ten" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ten" class="col-sm-2 form-control-label">Ho Ten</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Ho va ten" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone1" class="col-sm-2 form-control-label">phone1</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone1" name="phone1" placeholder="phone1" value="" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone2" class="col-sm-2 form-control-label">phone2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone1" name="phone2" placeholder="phone2" value="" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Email" class="col-sm-2 form-control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="email" value="" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fb" class="col-sm-2 form-control-label">facebook</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fb" name="fb" placeholder="facebook" value="" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company" class="col-sm-2 form-control-label">company</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="company" name="company" placeholder="company" value="" >
                                </div>
                            </div>
                
                            <div class="form-group row">
                                <div class="push-sm-1 col-sm-10">
                                    <button type="submit" class="btn btn-primary ">Them Moi</button><button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </div>
                    </form>
                </div>
                </div>
                
            </div>
        </div>
        
</body>
</html>