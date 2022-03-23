

<!DOCTYPE html>
<html lang="en">
  <head>
   
    @include('admin.css')

    <style type="text/css">
    .title
    {
        color:white; 
        padding-top: 25px; 
        font-size: 25px; 
    }

    label{
       display: inline-block;
       width: 200px; 
    }

    </style>

  </head>
  <body>

      @include('admin.sidebar')
      
      @include('admin.navbar')


      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">

       <h1 class="title"> Tambahkan Menu Makanan dan Minuman</h1>

            @if(session()->has('message'))

            <div class="alert alert-succsess">

            <button type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

        </div>
            @endif


       <form action="{{'uploadmenu'}}" method="post" enctype="multipart/form-data">

        @csrf
    <div style="padding: 15px;">
        <label>Nama Menu</label>  
        <input style="color:black;" type="text" name="nama" placeholder="Masukkan Nama Menu" required="">     
    </div> 

    <div style="padding: 15px;">
        <label>Harga</label>  
        <input style="color:black;" type="number" name="harga" placeholder="Masukkan harga" required="">     
    </div> 
 
    <div style="padding: 15px;" >
        <label>Keterangan</label>  
        <input style="color:black;" type="text" name="keterangan" placeholder="Masukkan keterangan " required="">     
    </div> 

    <div style="padding: 15px;">
            <label>Banyaknya</label>  
            <input style="color:black;" type="text" name="banyak" placeholder="Masukkan stok" required="">     
    </div>

    <div style="padding: 15px;">
        <input type="file" name="file">
    </div>

    <div style="padding: 15px;">
        <input class="btn btn-success" type="submit" >

    </div>
</form>

      </div>
    </div>

      @include('admin.script')


  </body>
</html>