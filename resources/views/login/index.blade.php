
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tiêu đề</title>
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/css/font-awesome.min.css">
	<style>
		#adk,#adn{
		text-decoration: none;
		color: #E1E1E1;
		font-size: 20px;
		font-weight: bold;
		}
		a.active{
			text-decoration: none;
			color: black !important;
			
			border-bottom: 3px solid red;
			padding-bottom: 7px;
			padding-top: 10px;
		}
		
		
	</style>
</head>
<body>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button>

<!-- Modal -->
 

 
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width: 400px;">
    <div class="modal-content">
   
      <div class="container">
		<div class="row">
	
			<div class="col-12">
				<!-- tiêu dề thanh điều hướng dạng tab -->
				<div class="tile"style="border-bottom: 4px solid #eee; height: 50px;">
				<ul class="nav ">
					<li class="nav-item">
						<a  href="#thong-so" data-toggle="tab" id="adk" class="nav-link active" >Đăng ký</a>
					</li>
					<li class="nav-item">
						<a href="#sp-lquan" id="adn" class="nav-link" data-toggle="tab" style="margin-left:  100px;">Đăng nhập</a>
					</li>
					
				</ul>
				</div>
				<!-- nội dung của thẻ tab -->
				<div class="tab-content">
					<div id="thong-so" class="tab-pane fade show active ">
						<div class="modal-body text-center fade show active tab-pane" id="dangki" style="border-bottom-width: 0px solid black !important ">
						<p>Đăng kí nhanh với tài khoản</p>
						<button class="btn btn-outline-primary " style="font-size: 16px; width: 120px;"><i class="fa fa-facebook-square" style="font-size: 20px;"></i>  Facebook</button>
						<button class="btn btn-outline-danger " style="font-size: 16px;width: 120px; margin-left: 10px;"><i class="fa fa-google" style="font-size: 20px;"></i>  Google</button>
						<p style="font-size: 14px; margin-top: 20px;">Hoặc đăng kí với:</p>
					<div class="input-group mt-2">
						<div class="input-group-prepend " >
						<span class="input-group-text" style="border-width: 0px;font-size: 20px; color: #C1C2C2" ><i class="fa fa-user"></i></span>
						</div>
						<input type="text" class="form-control " id="ht" placeholder="Họ và tên" style="background-color: #E9ECEF;border-width: 0px; font-size: 20px; height: 40px; ">
					</div>
					<div class="input-group mt-2">
						<div class="input-group-prepend " >
						<span class="input-group-text" style="border-width: 0px;font-size: 20px; color: #C1C2C2" ><i class="fa fa-envelope-o"></i></span>
						</div>
						<input type="text" class="form-control " id="ht" placeholder="Email" style="background-color: #E9ECEF;border-width: 0px; font-size: 20px; height: 40px; ">
					</div>
					<div class="input-group mt-2">
						<div class="input-group-prepend " >
						<span class="input-group-text" style="border-width: 0px;font-size: 20px; color: #C1C2C2" ><i class="fa  fa-unlock-alt"></i></span>
						</div>
						<input type="text" class="form-control " id="ht" placeholder="Mật khẩu" style="background-color: #E9ECEF;border-width: 0px; font-size: 20px; height: 40px; ">
					</div>
					<p  style="font-size: 12px; margin-top: 20px;">Bằng cách nhấp vào Đăng ký, bạn đồng ý với Điều khoản , Quy chế hoạt động và Chính sách bảo mật của chúng tôi.</p>
					<button type="button" class="btn btn-danger btn-block " data-dismiss="modal" style="height: 50px; font-weight: bold;">ĐĂNG KÝ</button>
				</div>
					</div>
					
					<div id="sp-lquan"class="tab-pane fade" >
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<div class=" tab-pane modal-body text-center " id="dangnhap">
						<p>Đăng nhập nhanh với tài khoản</p>
						<button class="btn btn-outline-primary " style="font-size: 16px; width: 120px;"><i class="fa fa-facebook-square" style="font-size: 20px;"></i>  Facebook</button>
						<button class="btn btn-outline-danger " style="font-size: 16px;width: 120px; margin-left: 10px;"><i class="fa fa-google" style="font-size: 20px;"></i>  Google</button>
						<p style="font-size: 14px; margin-top: 20px;">Hoặc đăng nhập với:</p>
					<div class="input-group mt-2">
						<div class="input-group-prepend " >
						<span class="input-group-text" style="border-width: 0px;font-size: 20px; color: #C1C2C2" ><i class="fa fa-envelope-o"></i></span>
						</div>
						<input type="text" class="form-control " id="ht" name="user" style="background-color: #E9ECEF;border-width: 0px; font-size: 20px; height: 40px; ">
					</div>
					<div class="input-group mt-2">
					<f
						<div class="input-group-prepend " >
						<span class="input-group-text" method="POST" style="border-width: 0px;font-size: 20px; color: #C1C2C2" ><i class="fa  fa-unlock-alt"></i></span>
						</div>
						<input type="text" class="form-control " method="POST" id="ht" name="pass" style="background-color: #E9ECEF;border-width: 0px; font-size: 20px; height: 40px; ">
					</div>
					
					<button type="button" class="btn btn-danger btn-block " name="btndangnhap" method="POST" style="height: 50px; font-weight: bold; margin-top: 10px;">ĐĂNG NHẬP</button>
					<a href="" style="text-decoration: none; margin-top: 10px;">Quên mật khẩu?</a>
							 @if (count($errors) > 0)
							 <div class="error">
							 	@foreach ($errors->all() as $error)
							 	<p>{!! $error !!}</p>
							 	@endforeach
							 </div>
							 @endif
				</div>
					</div>

					
				</div><!-- ./tab-content -->
			</div><!-- ./col-12 -->
	
		</div>
	</div>
    </div>
  </div>
</div>
	<script src="{{URL::to('/')}}/public/js2/jquery-3.3.1.min.js"></script>
	<script src="{{URL::to('/')}}/public/js2/popper.min.js"></script>
	<script src="{{URL::to('/')}}/public/js2/bootstrap.min.js"></script>
	<!-- <script>
		$(".nav-link").click(function(e){
			e.preventDefault();// hủy hành động mặc định của thẻ
			// $(this).children('nav-link').addClass("active");
			
			$(this).addClass('active1');//nó được thêm class active
			$(this).siblings().removeClass('active1');// anh e của nó phải bỏ class active .children('.nav-link')
	</script> -->
</body>
</html>