<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {
   public function index() {
    //   $path = public_path('images/resized');
    //   $images = \File::allFiles($path);
    //   return view('front.gallery.gallery')->with('images', $images);

      $images = \File::allFiles(public_path('images'));
    //   echo "<script>console.log('Debug Objects: " . $images . "' );</script>";
      return view('welcome')->with(array('images'=>$images));
   }
}