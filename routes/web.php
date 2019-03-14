<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('c', function () {
    echo "chaocuong";
});
route::get('thongtin','Controller@showinfo');
route::get('phavancuong', function(){
	return"lap tring lavarvel 5.x";
});
route::get('khoahoc/{monhoc?}/{thoigian?}',function($monhoc='toan',$thoigian=null){
	return"khoa hoc ap trinh wed: $monhoc luc $thoigian";
});
route::get('thongtincanhan/{hoten}/{sdt}',function($hoten,$sdt){
	return"day la thong tin ca nhan cua toi: $hoten va $sdt";
})->where(['hoten'=>'[a-zA-Z]+','sdt'=>'[0-9]{1,10}']);
route::get('call-view',function(){
	$cuong="phan van cuong";
	$view="day la trang view";
	return view('thongtin',compact('cuong','view'));
});
route::get('tessstcontroler','Controller@testcontroller');
route::get('hochiminh',['as'=>'hcm',function(){
	return"phan van cuong";
}]);
route::get('goiview',function(){
	return view('layout.sup.view');
});
route::get('goiblade',function(){
	return view('thongtin2');
});
route::get('schema/create',function(){
	Schema::create('monhoc',function($table){
		$table->increments('id');
		$table->string('tenmonhoc');
		$table->integer('gia');
		$table->text('ghichu')->nullable();
		$table->timestamps();
	});
});
route::get('schema/rename',function(){
	Schema::rename('vancuong', 'cuong');
});
route::get('schema/drop',function(){
	Schema::drop('phanvancuong');
});
route::get('schema/drop-exit',function(){
	Schema::dropIfExists('vancuong');
});
route::get('schema/suacot',function(){
	Schema::table('vancuong',function($table){
		$table->string('tenmonhoc',50)->change();
	});
});
route::get('schema/dropcot',function(){
	Schema::table('vancuong',function($table){
		$table->dropColumn(['tenmonhoc','gia']);
	});
});
route::get('schema/create/toan',function(){
	Schema::create('toan1',function($table){
		$table->increments('id');
		$table->string('tenmonhoc');
		$table->integer('gia');
		$table->integer('cate_id')->unsigned();
		$table->foreign('cate_id')->references('id')->on('vanhoc');
		$table->text('ghichu')->nullable();
		$table->timestamps();
	});
});
route::get('schema/create/vanhoc',function(){
	Schema::create('vanhoc',function($table){
		$table->increments('id');
		$table->string('hocngu');
		$table->timestamps();
	});
});
route::get('model/all',function(){
	$data= App\hahaha::all()->tojSon();
	echo "<pre>";
	print($data);
	echo "</pre>";
});
route::get('model/select_id',function(){
	$data= App\hahaha::find(5);
	echo "<pre>";
	print($data);
	echo "</pre>";
});
route::get('model/where',function(){
	$data=App\hahaha::where('sodienthoai',5000)->firstOrFail()->get();
	echo "<pre>";
	print($data);
	echo "</pre>";
});
route::get('model/take',function(){
	$data=App\hahaha::where('sodienthoai',5000)->firstOrFail()->take(2)->get();
	echo "<pre>";
	print($data);
	echo "</pre>";
});
route::get('model/tinh',function(){
	$data= App\hahaha::all()->count();
	echo "<pre>";
	print($data);
	echo "</pre>";
});
route::get('model/giatri',function(){
	$data=App\hahaha::whereRaw('sodienthoai= ?',[5000])->select('id')->get();
	echo "<pre>";
	print($data);
	echo "</pre>";
});
route::get('model/addthem',function(){
	$data= new App\hahaha;
	$data->sodienthoai= 1000;
	$data->save();
	echo "ok qua cuong dep trai oi....!!!!!";
});
route::get('model/update',function(){
	$data= App\hahaha::find(1);
	$data->sodienthoai=3333333;
	$data->save();
});
route::get('model/xoadulieu',function(){
	$data= App\hahaha::destroy(5);
});
route::get('model/hienthi',function(){
	$data= App\hahaha::find(3)->hehehe()->get();
	echo "<pre>";
	print($data);
	echo "</pre>";
});
route::get('form/dangky',function(){
	return view('layout.form.dangky');
});
route::post('form/dangkythanhvien',['as'=>'postdangky','uses'=>'cuongcontroller@them']);
route::get('reponse/chuyenhuong',function(){
	return redirect('/');
});
route::get('reponse/dowload',function(){
	$url='public/dowload/nangunghi.rar';
	return Response::download($url);
});
route::get('reponse/macro',function(){
	return Response()->cuong('phan van cuong dep trai');
});
route::get('reponse/contract',function(){
	return Response()->contract('http://localhost:8080/www/lar/reponse/macro');
});
route::get('au/login',['as'=>'getlogin','uses'=>'thanhviencontroller@getlogin']);
route::post('au/login',['as'=>'postlogin','uses'=>'thanhviencontroller@postlogin']);
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['verify' => true]);

Route::get('/home','HomeController@index')->name('home')->middleware('verified');