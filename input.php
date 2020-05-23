<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>PHP Realtime</title>
  </head>
  <body>
<div class="container">
      <center>
      <h1>Alhamdulillah, Atas izin Allah aplikasi PHP Realtime berhasil</h1>
        </center>
          <hr>
          <form id="dataForm">

            <div class="form-group">
            <label>Penerima</label>
 <input type="text" class="form-control col-sm-6" name="user" id="user" autocomplete="off">
  
            </div>

            <div class="form-group">
            <label>Pesan</label>

            <input type="text" class="form-control col-sm-6" name="pesan" id="pesan" autocomplete="off">
            </div>

           
            <div class="form-group">
              <button class="btn btn-success col-sm-3" type="submit">KIRIM</button>
            </div>
          </form>
<div class="alert alert-success" role="alert" style="display: none">
  berhasil dikirim...
</div>  
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"   ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="server.js"></script> -->



  </body>
</html>

<script type="text/javascript">
  
  $(function(){

      $("#dataForm").submit(function(e){
        e.preventDefault();
        var dataForm = $(this).serialize();

        $.ajax({
          url:'proses.php',
          type:'POST',
          data:dataForm,
          success:function(data){
            $(".alert").show();

            $("#pesan").val("").focus();

            setTimeout(function(){
              $(".alert").hide()
            },2000);
          }
        })


      })

  })

</script>