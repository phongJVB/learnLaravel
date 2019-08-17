<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class MainController extends Controller{
	
	/**
	 * Description: Tạo funtion để trả về view Login 
	 * CreatBy: LHPhong (16/08/2019)
	 * @return view Login
	 */
    function index(){
    	return view('mainLogin');
    }

    /**
	 * Description: Tạo funtion để để validate việc nhập thông tin login
	 * CreatBy: LHPhong (16/08/2019)
	 * @return Nếu đúng thì sẽ chuyển sang trang successLogin
	 *         sai thì sẽ thông báo lỗi
	 */
    function checkLogin(Request $request){
    	// $this->validate($request,[
    	// 'email' => 'required|email',
    	// 'password' => 'required|alphaNum|min:3'
    	// ]);

    	$user_data = array(
    	'email'  => $request->get('email'),
      	'password' => $request->get('password')
    	);

    	if(Auth::attempt($user_data)){
    		return redirect('main/successlogin');
    	}else
     		{
     	 return back()->with('error', 'Wrong Login Details');
     		}
     
     	// if(($user_data['email']=='phong@gmail.com')&&($user_data['password']=='123456')){
    	// 	return redirect('main/successlogin');
    	// }else
     	// {
     	//  return back()->with('error', 'Wrong Login Details');
     	// }

    }

    /**
	 * Description: Tạo funtion để trả về giao diện successLogin
	 * CreatBy: LHPhong (16/08/2019)
	 * @return view successLogin
	 */
    function successLogin(){
    	return view('successLogin');
    }

    /**
	 * Description: Tạo funtion để thực hiện đăng xuất 
	 * CreatBy: LHPhong (16/08/2019)
	 * @return view mainLogin
	 */
    function logout(){
    	Auth::logout();
    	return redirect('main');
    }
}

?>