<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {
   public function index() {
      $images = \File::allFiles(public_path('images'));
    //   echo "<script>console.log('Debug Objects: " . $images . "' );</script>";
      return view('imagesList')->with(array('images'=>$images));
   }
}