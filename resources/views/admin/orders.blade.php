<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")    
</head>
  <body>
  
    <div class="container-scroller">

          
           
       @include("admin.navbar")

       <div alss="container">
       
       
       <div style="padding:80px;">
       
          <table bgcolor="black">
              <tr>
                  <th style="padding: 20px;">Name</th>
                  <th style="padding: 20px;">Phone</th>
                  <th style="padding: 20px;">Address</th>
                  <th style="padding: 20px;">FoodName</th>
                  <th style="padding: 20px;">Price</th>
                  <th style="padding: 20px;">Quantity</th>
                  <th style="padding: 20px;">Total</th>

              </tr>
              @foreach($data as $data)
                <tr align="center" style="background-color:black;">
                    <td>{{$data->name}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->foodname}}</td>
                    <td>₹{{$data->price}}</td>
                    <td>{{$data->quantity}}</td>
                    <td> ₹{{$data->price * $data->quantity }}</td>

                </tr>
            @endforeach
          </table>
      </div>
      </div>
    </div>
       @include("admin.adminscript")  
             
      
   
  </body>
</html> 