<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
  
class ImageUploadController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('imageUpload');
    }
      
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
        ]);
      
        $imageName = time().'.'.$request->image->extension();  
       
        $request->image->move(public_path('images'), $imageName);
    
        return back()
            ->with('success','You have successfully uploaded image.')
            ->with('image', $imageName); 
    }
}