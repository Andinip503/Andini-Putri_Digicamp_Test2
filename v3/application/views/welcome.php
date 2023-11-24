<link href="<?=base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>


<div class="container-fluid ">
    <h1 class="mt-4">Tables Task</h1>
    <?= $this->session->flashdata('pesan');?>  
                        <div class="card mb-3">
                            <div class="card-header">
                                <!-- <i class="fas fa-table me-1"></i>
                                DataTable -->
                                <a href="<?=base_url('home/tambah')?>" class="btn btn-primary btn-sm"><i class="fas fa-plus">Add Task</i></a>
                            </div>
                            <div class="card-body">
                                <table id="table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            <!-- <th>Salary</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1;
                                        foreach($tugas as $t):?>
                                        <tr class="text-center">
                                            <td><?=$no++ ?></td>
                                            <td><?=$t->Title ?></td>
                                            <td><?=$t->Description ?></td>
                                            <td><?=$t->Status ?></td>
                                            <td>
                                                <button data-toggle="modal" data-target="#edit<?=$t->No ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                                <a href="<?= base_url('home/delete/' .$t->No) ?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                            </td>
                                            
                                        </tr>
                                        <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
</div>


<!-- Modal -->
<?php $no = 1;
 foreach($tugas as $t){?>
<div class="modal fade" id="edit<?= $t->No ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                        <form action="<?= base_url('home/edit/' .$t->No)?>" method="POST">
                        <div class="form-group mb-3 row">
                            <label class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10"> 
                            <input type="text" name="title" class="form_control" value="<?= $t->Title?>">
                                 <?= form_error('title','<div class="text-small text-danger">','</div');?>
                            </div>
                        </div>
                            
                        <!-- </div> -->
                        <div class="form-group mb-3 row">
                            <label class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10"> 
                                <input type="text" name="description" class="form_control" value="<?= $t->Description?>">
                                <?= form_error('description','<div class="text-small text-danger">','</div');?>
                            </div> 
                        </div>
                        <div class="form-group mb-3 row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10"> 
                            <div class="form-check">
                                <input type="radio" name="status" class="form-check-input" value="To Do" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    To Do
                                </label>
                                <?= form_error('status','<div class="text-small text-danger">','</div');?>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="status" class="form-check-input" value="In Progress" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    In Progress
                                </label>
                                <?= form_error('status','<div class="text-small text-danger">','</div');?>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="status" class="form-check-input" value="Done" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                Done
                                </label>
                                <?= form_error('status','<div class="text-small text-danger">','</div');?>
                            </div>
                               
                            
                            </div> 
                        </div>
                        <div class="modal-footer">
                            <button data-role="update" data-id="<?= $t->No?>" type="submit" class="btn btn-primary btn-sm update"><i class="fas fa-save"> Update </i></button>
                            <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-trash"> Close </i></button>
                        </div>
                    </form>
            </div>
        </div>
  </div>
</div>
<?php }?>

<script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.css"></script>
<script src="<?php echo base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#table').DataTable();

    })
    
   window.setInterval(function() {
	    $("#valid").fadeTo(300, 0).slideUp(300, function(){ 	
	      	$(this).remove(); 
	    });
  	}, 3000); 

   
    // $(document).on('click','#userlist a',function(){
	//  		var username = $('#username').val($(this).text());
	//  		$('#userlist').fadeOut();
	//  		var user = $('#username').val();
	//  		// console.log(user);
	//  		$.ajax({
	//  				type: "post",
	// 				url:'<?= base_url('display/autocomplate/2')?>',
	//  				data : {user: user},
	//  				success: function(response){
	//  					console.log(response);
	//  					var json = response,
	//  					obj = JSON.parse(json);
	//  					 $("#fullname").val(obj.nama);
	// 					  // $("#fullname").html(response.nama);
	// 				},
	//  			})
	//  	})

    
	   
    


    
</script>
