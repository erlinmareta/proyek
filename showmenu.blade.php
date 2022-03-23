

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
                    <td style="padding:20px">Harga</td>
                    <td style="padding:20px">Deskripsi</td>
                    <td style="padding:20px">Banyaknya</td>
                    <td style="padding:20px">Gambar</td>
                    <td style="padding:20px">Update</td>
                    <td style="padding:20px">Delete</td>
                </tr>

                @foreach($data as $menu)

                <tr align="center" style="background-color: rgb(158, 179, 238); ">
                    <td>{{$menu->nama}}</td>
                    <td>{{$menu->harga}}</td>
                    <td>{{$menu->keterangan}}</td>
                    <td>{{$menu->banyaknya}}</td>
                    <td>
                        <img height="150" width="150" src="/gambarmenu/{{$menu->gambar}}" alt="">
                    </td>

                    <td>
                        <a class="btn btn-primary" href="{{url('updateview',$menu->id)}}">Update</a>
                    </td>

                    <td>
                        <a class="btn btn-danger" onclick="return confirm('apakah anda yakin?')" href="{{url('deletemenu',$menu->id)}}">Delete</a>
                    </td>
                    
                    
                    
                </tr>

                @endforeach





            </table>



        </div>
      </div>

      @include('admin.script')


  </body>
</html>