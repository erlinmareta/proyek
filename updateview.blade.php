

<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/pubic">
   
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


       <form action="{{url('updatemenu', $data->id)}}" method="post" enctype="multipart/form-data">

        @csrf
    <div style="padding: 15px;">
        <label>Nama Menu</label>  
        <input style="color:black;" type="text" name="nama" value="{{$data->nama}}" required="">     
    </div> 

    <div style="padding: 15px;">
        <label>Harga</label>  
        <input style="color:black;" type="number" name="harga" value="{{$data->harga}}"  required="">     
    </div> 
 
    <div style="padding: 15px;" >
        <label>Keterangan</label>  
        <input style="color:black;" type="text" name="keterangan" value="{{$data->keterangan}}"  required="">     
    </div> 

    <div style="padding: 15px;">
            <label>Banyaknya</label>  
            <input style="color:black;" type="text" name="banyak" value="{{$data->banyaknya}}"  required="">     
    </div>

    <div style="padding: 15px;">
        <label>Gambar Lama</label>  
        <img heigh="150" width="150" src="/gambarmenu/{{$data->gambar}}">     
    </div>

    <div style="padding: 15px;">
        <label> Ubah Gambar </label>
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