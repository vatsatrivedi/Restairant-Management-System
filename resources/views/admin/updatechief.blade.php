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


       <form action="{{url('/updatefoodchief',$data->id)}}" method="post" enctype="multipart/form-data">
           @csrf
        <div>
        <label> Chef Name
        </label>
        <input style="color:black;" type="text" name="name" value="{{$data->name}}">
         </div>

         <div>
        <label> Speciality
        </label>
        <input style="color:black;" type="text" name="speciality" value="{{$data->speciality}}">
         </div>

         
         <div>
        <label> Old image
        </label>
        <img height="100" width="100" src="/chiefimage/{{$data->image}}">
         </div>

         <div>
        <label>New image
        </label>
        <input type="file" name="image">
         </div>

         <div>
        
        <input type="submit" class="btn btn-success">
         </div>
       </form>

</div>
       
       @include("admin.adminscript")  
             
      
   
  </body>
</html> 