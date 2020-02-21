@extends('layouts.master')

@section('content')

<div class="card mt-5 p-5">
	<div class="card-body">
		<div class="row">

			<div class="col-sm-6 d-flex justify-content-center align-self-center">
				<img style="height: 250px" src="{{ asset('images/jmx.png') }}" alt="">
			</div>

			<div class="col-sm-6">
				<h2>Create a new Account</h2>
				<h4>It's quick and easy</h4>
				
				<div class="d-flex pt-3 pr-sm-5">
					<form class="" action="">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" name="first_name" placeholder="First Name">
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" name="last_name" placeholder="Last Name">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Mobile number or email address">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="New Password">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label for="birthday">Birthday</label>
									<input type="date" class="form-control" name="birthday">
								</div>
							</div>
							
							<div class="col-sm-12">
								<label for="gender">Gender</label>
								<div class="form-group clearfix">
								<input type="radio" name="gender" id="male" value="male">
			                    <label for="male">Male</label>
			                    <input type="radio" name="gender" id="female" value="female">
			                    <label for="female">Female</label>
			                    <input type="radio" name="gender" id="other" value="other">
			                    <label for="other">Other</label>
		                		</div>
							</div>
						</div>
					</form>
				</div>
			</div>
				
			</div>

		</div>
	</div>
</div>

@stop