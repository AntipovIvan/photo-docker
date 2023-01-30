<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Session;


class UserController extends Controller {
   public function index() {
      $images = \File::allFiles(public_path('images'));
      return view('imagesList')->with(array('images'=>$images));
   }

   public function removeImage(Request $request) {
          ## Read file path
          $filepath = $request->post('filepath');

          ## Check file exists
          if (File::exists($filepath)) {
    
             ## Delete file
             File::delete($filepath);
    
             Session::flash('message','Deleted Successfully.');
             Session::flash('alert-class', 'alert-success');
          } else {
             Session::flash('message','File not exists.');
             Session::flash('alert-class', 'alert-danger');
          }
          return redirect('/');
   }
}