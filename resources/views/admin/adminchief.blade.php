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

       <div style="position: relative; top: 60px; right: -50px;">
       <form action="{{url('/uploadchief')}}" method="post" enctype="multipart/form-data">
           
       @csrf

       <div>
               <label>Name</label>
               <input style="color:black" type="text" name="name" placeholder="Write a title" required>
           </div>
           <div>
               <label>Speciality</label>
               <input style="color:black" type="text" name="speciality" placeholder="Write a price" required>
           </div>
           <div>
               <label>Image</label>
               <input type="file" name="image"  required>
           </div>
           <div>
           
               <input type="submit" class="btn btn-success">
           </div>
       </form>

        <table bgcolor="black">
            <tr>
                <th style="padding:30px;">Chief Name</th>
                <th style="padding:30px;">Speciality</th>
                <th style="padding:30px;">Image</th>
                <th style="padding:30px;">Action</th>
                <th style="padding:30px;">Action2</th>

            </tr>
            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->speciality}}</td>
                <td><img height="100" width="100" src="/chiefimage/{{$data->image}}"></td>
                <td><a href="{{url('/updatechief',$data->id)}}">Update</a></td>
                <td><a href="{{url('/deletechief',$data->id)}}">Delete</a></td>

            </tr>
            @endforeach
        </table>

</div>
       
       @include("admin.adminscript")  
             
      
   
  </body>
</html> 