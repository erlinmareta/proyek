

<!DOCTYPE html>
<html lang="en">
  <head>
   
    @include('admin.css')

  </head>
  <body>

      @include('admin.sidebar')
      
      @include('admin.navbar')

      <div style="padding-buttom:30px" class="container-fluid page-body-wrapper">
        <div class="container" align="center">

            @if(session()->has('message'))

            <div class="alert alert-succsess">

            <button type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

        </div>
            @endif


            <table>
                <tr style="background-color: cornflowerblue">
                    <td style="padding:20px">Nama</td>
                    <td style="padding:20px">Email</td>
                    <td style="padding:20px">No.Telp</td>
                    <td style="padding:20px">Alamat</td>
                    <td style="padding:20px">Update</td>
                    <td style="padding:20px">Delete</td>
                </tr>

                @foreach($data as $user)

                <tr align="center" style="background-color: black; ">
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->address}}</td>
                    
                    <td>
                        <a class="btn btn-primary" href="{{url('updateadmin',$user->id)}}">Update</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{url('deletebebas',$user->id)}}">Delete</a>
                    </td>
                    
                    
                    
                </tr>

                @endforeach





            </table>



        </div>
      </div>

      @include('admin.script')


  </body>
</html>