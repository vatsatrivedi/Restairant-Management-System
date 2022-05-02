<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
  @include("admin.admincss")    
</head>
  <body>
  
    <div class="container-scroller">

          
           
       @include("admin.navbar")  
       
       @include("admin.adminscript")  

       <div style="position: relative; top: 60px; right: -50px;">
       <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
           
       @csrf

       <div>
               <label>Title</label>
               <input style="color:black" type="text" name="title" value="{{$data->title}}" placeholder="Write a title" required>
           </div>
           <div>
               <label>Price</label>
               <input style="color:black" type="text" name="price" value="{{$data->price}}" placeholder="Write a price" required>
           </div>
           

           <div>
               <label>Decription</label>
               <input style="color:black" type="text" name="description" value="{{$data->description}}" placeholder="Write a description" required>
           </div>
           <div>
           <div>
               <label>Old Image</label>
               <img height="100" width="100" src="/foodimage/{{$data->image}}"/>
           </div>
           <div>
               <label>New Image</label>
               <input type="file" name="image"  required="">
           </div>
               <input type="submit" class="btn btn-success">
           </div>
       </form>
             
      
   
  </body>
</html> 