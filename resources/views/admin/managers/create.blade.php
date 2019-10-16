@extends('backLayouts.adminlayout')

    @section('title')
        Add Manager | MoSeva Admin
    @endsection

    @section('content')

		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">Managers</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Add Manager</li>
					</ol>
				</div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

				<div class="row ">
					<div class="col-lg-12">
						<div class="panel panel-primary">
							<div class=" ">
								<ul class="nav nav-pills">
									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.managers.index')}}">All Managers</a>
									</li>
									<li class="nav-item m-2">
										<a class="nav-link btn btn-primary" href="{{route('admin.managers.create')}}">Add Manager</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="card mt-4">
							<div class="card-header">
								Create New Manager
							</div>
							<div class="card-body">
								<div class="container">
									<div class="p-5 border">
										<h4 class="mb-4 font-weight-bold">Personal Information</h4>
										<form class="form-horizontal">
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label" for="name">Manager Name</label>
													</div>
													<div class="col-md-9">
														<input type="text" name="name" class="form-control" id="managerNmae"  placeholder="Enter Name">
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label" for="gender">Gender</label>
													</div>
													<div class="col-md-9">
														<select class="form-control">
															<option selected>Select Gender</option>
															<option value="male">Male</option>
															<option value="female">Female</option>
															<option value="others">Others</option>
														</select>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Date Of Birth</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'" placeholder="Enter DOB">
														<span class="form-control-feedback right" aria-hidden="true"></span>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Profile Image</label>
													</div>
													<div class="col-md-9">
														<input type="file" class="custom-file-input" name="example-file-input-custom">
														<label class="custom-file-label">Choose file</label>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label" for="name">Qualification</label>
													</div>
													<div class="col-md-9">
														<input type="text" name="name" class="form-control" id="managerNmae"  placeholder="Enter Qualification">
													</div>
												</div>
											</div>

											<h4 class="mb-4 font-weight-bold">Official Information</h4>
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Department</label>
													</div>
													<div class="col-md-9">
														<select class="form-control select2" data-placeholder="Choose Browser" multiple>
															<option value="1">
																Department 1
															</option>
															<option value="2 selected">
																Department 2
															</option>
														</select>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Branch</label>
													</div>
													<div class="col-md-9">
														<select class="form-control select2" data-placeholder="Choose Browser" multiple>
															<option value="Firefox">
																Branch 1
															</option>
															<option value="Chrome selected">
																Branch 2
															</option>
														</select>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Id Proof</label>
													</div>
													<div class="col-md-9">
														<input type="file" class="custom-file-input" name="example-file-input-custom">
														<label class="custom-file-label">Choose file</label>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Working Days</label>
													</div>
													<div class="col-md-9">
														<div class="input-group">
															<div class="input-group-prepend">
																<div class="input-group-text">
																	<i class="fa fa-calendar tx-16 lh-0 op-6"></i>
																</div>
															</div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
														</div>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Working Time-In</label>
													</div>
													<div class="col-md-9">
														<div class="input-group">
															<div class="input-group-prepend">
																<div class="input-group-text">
																	<i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
																</div>
															</div><!-- input-group-prepend -->
															<input class="form-control" id="tpBasic" placeholder="Set time" type="text">
														</div>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Working Time-Out</label>
													</div>
													<div class="col-md-9">
														<div class="input-group">
															<div class="input-group-prepend">
																<div class="input-group-text">
																	<i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
																</div>
															</div><!-- input-group-prepend -->
															<input class="form-control" id="time-out" placeholder="Set time" type="text">
														</div>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Account Number</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" data-inputmask="'mask' : '9999-9999-9999-9999'" placeholder="Enter Account Number">
														<span class=" form-control-feedback right" aria-hidden="true"></span>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label" for="name">IFSC Code</label>
													</div>
													<div class="col-md-9">
														<input type="text" name="name" class="form-control" id="managerNmae"  placeholder="Enter IFSC Code">
													</div>
												</div>
											</div>

											<h4 class="mb-4 font-weight-bold">Contact Information</h4>
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Email Address</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control"  placeholder="info@Claylist.in">
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Phone Number</label>
													</div>
													<div class="col-md-9">
														<input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'" placeholder="Enter Phone Number">
														<span class=" form-control-feedback right" aria-hidden="true"></span>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Address</label>
													</div>
													<div class="col-md-9">
														<textarea class="form-control" name="example-textarea-input" rows="4" placeholder="Address.."></textarea>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Password</label>
													</div>
													<div class="col-md-9">
														<input disabled type="password" class="form-control" id="inputEmail5" placeholder="Enter Password">
													</div>
												</div>
											</div>

											<div class="row mt-5">
												<div class="col-lg-4"></div>
												<div class="col-lg-4">
													<button type="submit" class="btn btn-primary waves-effect waves-light btn-block">Add Manager</button>
												</div>
												<div class="col-lg-4"></div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endsection
