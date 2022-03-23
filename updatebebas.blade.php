

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

       <h1 class="title"> Update data admin</h1>

            @if(session()->has('message'))

            <div class="alert alert-succsess">

            <button type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

        </div>
            @endif


       <form action="{{url('updateadmin', $data->id)}}" method="post" enctype="multipart/form-data">

        @csrf
    <div style="padding: 15px;">
        <label>Nama</label>  
        <input style="color:black;" type="text" name="name" value="{{$data->name}}" required="">     
    </div> 

    <div style="padding: 15px;">
        <label>Email</label>  
        <input style="color:black;" type="text" name="email" value="{{$data->email}}"  required="">     
    </div> 
 
    <div style="padding: 15px;" >
        <label>No.Telp</label>  
        <input style="color:black;" type="text" name="phone" value="{{$data->phone}}"  required="">     
    </div> 

    <div style="padding: 15px;">
            <label>Alamat</label>  
            <input style="color:black;" type="text" name="address" value="{{$data->address}}"  required="">     
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