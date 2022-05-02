<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchief;
use App\Models\Order;
class AdminController extends Controller
{
    public function user()
    {       
            $data=user::all();
            return view("admin.users",compact("data"));
    }   

    public function deleteuser($id)
    {       
            $data=user::find($id);
            $data->delete();
            return redirect()->back();
            
    }
    
    public function foodmenu()
    {       
          $data = food::all();
            return view("admin.foodmenu",compact("data"));
    }  

    public function deletemenu($id)
    {
            $data= food::find($id);
            $data->delete();
            return redirect()->back();
    }

    public function update(Request $request,$id)
    {
            $data= food::find($id);
            $image=$request->image;

            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('foodimage',$imagename);
            $data -> image=$imagename;

            $data -> title=$request->title;
            $data -> price=$request->price;
            $data -> description=$request->description;
            $data -> save();
        
            return redirect()->back();
            

    }
    
    public function updateview($id)
    {
            $data= food::find($id);
            return view("admin.updateview",compact("data"));
            

    }
    public function viewreservation()
    {
            $data= reservation::all();
            return view("admin.adminreservation",compact("data"));
            

    }

    public function viewchief()
    {       
          $data = foodchief::all();
            return view("admin.adminchief",compact("data"));
    }  

    public function uploadfood(Request $request)
    { 
            $data = new food;
            $image=$request->image;

            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('foodimage',$imagename);
            $data -> image=$imagename;

            $data -> title=$request->title;
            $data -> price=$request->price;
            $data -> description=$request->description;
            $data -> save();
        
            return redirect()->back();

            
           
    }
    public function updatechief($id)
    {
        $data=foodchief::find($id);
        return view("admin.updatechief",compact("data"));
    }

    public function deletechief($id)
    {
        $data=foodchief::find($id);
        $data->delete();
        return redirect()->back();
    }

    
    public function updatefoodchief(Request $request,$id)
    {
        $data=foodchief::find($id);
        $image=$request->image;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('chiefimage',$imagename);
        $data -> image=$imagename;
        }
        $data -> name=$request->name;
        $data -> speciality=$request->speciality;
        
        $data -> save();
        return redirect()->back();
    }
  
    public function reservation(Request $request)
    { 
            $data = new reservation;
            

           

            $data -> name=$request->name;
            $data -> email=$request->email;
            $data -> phone=$request->phone;
            $data -> guest=$request->guest;
            $data -> date=$request->date;
            $data -> time=$request->time;
            $data -> message=$request->message;
            $data -> save();
        
            return redirect()->back();
         }

         public function uploadchief(Request $request)
         {
            $data=new foodchief;
            $image=$request->image;

            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('chiefimage',$imagename);
            $data -> image=$imagename;


            $data->name=$request ->name;
            $data->speciality=$request->speciality;
            $data -> save();
            return redirect()->back();
                




         }


         public function orders()
        {
                $data = order::all();
                return view('admin.orders',compact('data'));
        }

        public function search(Request $request)
        {
                $search=$request->search;
                
                $data = order::where('name','Like','%'.$search.'%')->get();
                return view('admin.orders',compact('data'));
        }

}
