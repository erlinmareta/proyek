

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
                    <td style="padding:20px">Nama Pelanggan</td>
                    <td style="padding:20px">No.Handphone</td>
                    <td style="padding:20px">Nama Menu</td>
                    <td style="padding:20px">Harga</td>
                    <td style="padding:20px">Jumlah</td>  
                    <td style="padding:20px">Jumlah Harga </td> 
                    <td style="padding:20px">Total</td>                   
                    <td style="padding:20px">Status</td>
                    <td style="padding:20px">Action</td>
                    
                </tr>

                @foreach($order as $orders) 

                <tr align="center" style="background-color:rgb(158, 179, 238);">
                    <td style="padding:20px">{{$orders->name}}</td>
                    <td style="padding:20px">{{$orders->phone}}</td>
                    <td style="padding:20px">{{$orders->nama_menu}}</td>
                    <td style="padding:20px">{{$orders->harga}}</td>
                    <td style="padding:20px">{{$orders->banyaknya}}</td>
                    <td style="padding:20px">{{$orders->jumlah_harga}}</td>
                    <td style="padding:20px">{{$orders->jumlah_harga}}</td>
                    <td style="padding:20px">{{$orders->status}}</td>
                    <td style="padding:20px">
                        <a class="btn btn-success" href="{{url('updatestatus', $orders->id)}}">Delivered</a>
                    </td>
                </tr>

                @endforeach

            </table>



        </div>
      </div>

      @include('admin.script')


  </body>
</html>