<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Line Monitoring Dashboard</h1>    
  </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Selamat Bekerja</h6>
                  <!-- <h6 class="m-0 font-weight-bold text-primary">Selamat <?=$greeting?></h6> -->
                </div>
                <div class="card-body">
                    <p>Aplikasi Line Monitoring adalah aplikasi internal produksi yang digunakan untuk mengumpulkan data output di masing-masing lini produksi secara realtime.
                        <br><?=img('assets/img/dashboard.jpg')?> 
                    </p>
                    <p id="date"></p>
                </div>
            </div>
        </div>    	
    </div>
       
</div>

<script>
    $(document).ready(function(){
        setInterval(function(){
            $.ajax({
                url:'<?=base_url('home/time')?>',
                success: function(data){
                    $("#date").html(data);
                }
            });
        },1000);
    })
</script>
