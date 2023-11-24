<form action="<?= base_url('home/tambah_aksi')?>" method="POST">
    <div class="form-group">
        <label class="col-sm-2">Title</label>
        <div class="col-sm-4">
            <input class="form-control" type="text" placeholder="Default input" name="title" >
            <?= form_error('title','<div class="text-small text-danger">','</div');?>
        </div>
    </div>
                       
    <div class="form-group">
        <label class="col-sm-2">Description</label>
        <div class="col-sm-4">
            <input class="form-control" type="text" placeholder="Default input" name="description" >
            <?= form_error('description','<div class="text-small text-danger">','</div');?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2">Status</label>
        <div class="col-sm-4">
            <?= form_error('status','<div class="text-small text-danger">','</div');?>
            <div class="col-sm-10"> 
                <div class="form-check">
                    <input type="radio" name="status" class="form-check-input" value="To Do"  checked>
                    <label class="form-check-label" for="exampleRadios1" >
                        To Do
                    </label>
                </div>
                <div class="form-check">
                    <input type="radio" name="status" class="form-check-input" value="In Progress" checked>
                    <label class="form-check-label" for="exampleRadios1" >
                        In Progress
                    </label>
                </div>
                <div class="form-check">
                    <input type="radio" name="status" class="form-check-input" value="Done" checked>
                    <label class="form-check-label" for="exampleRadios1">
                         Done
                    </label>
                </div>
                                
                            
            </div> 
        </div>
        <!-- <input type="text" name="status" class="form_control"> -->
       
    </div>
    <div class="col-sm-4">
   <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"> Simpan </i></button>
   <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"> Reset </i></button>
    </div>
</form>