@extends('backLayouts.adminlayout')

    @section('title')
        All Partners | Admin Dashboard
    @endsection

    @section('content')

		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">Partners</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">All Partners</li>
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
										<a class="nav-link btn btn-primary" href="{{route('admin.vendors.index')}}">All Partners</a>
									</li>
									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.vendors.create')}}">Add Partner</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="card mt-4">
							<div class="card-header">
								All Partners
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example2" class="hover table-bordered border-top-0 border-bottom-0" >
										<thead>
											<tr>
												<th>#</th>
												<th>Profile</th>
												<th>Name</th>
												<th>Gender</th>
												<th>Date Of Birth</th>
												<th>Date Of Joining</th>
												<th>Qualification</th>
												<th>Department</th>
												<th>Priority</th>
												<th>Working Criteria</th>
												<th>Work Area</th>
												<th>Working Pin Code</th>
												<th>Working Days</th>
												<th>Log Time</th>
												<th>Out Time</th>
												<th>ID Proof</th>
												<th>A/C Number</th>
												<th>IFSC Code</th>
												<th>Address</th>
												<th>Phone Number</th>
												<th>Email Id</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>

										<tbody>
											<td>1</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td>
												<a href="#" class="btn btn-indigo btn-sm">
													<i class="fa fa-pencil mr-1"></i>
												</a>

												<a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">
													<i class="fa fa-trash-o mr-1"></i>
												</a>
											</td>
										</tbody>

										<tfoot>
											<tr>
												<th>#</th>
												<th>Profile</th>
												<th>Name</th>
												<th>Gender</th>
												<th>Date Of Birth</th>
												<th>Date Of Joining</th>
												<th>Qualification</th>
												<th>Department</th>
												<th>Priority</th>
												<th>Working Criteria</th>
												<th>Work Area</th>
												<th>Working Pin Code</th>
												<th>Working Days</th>
												<th>Log Time</th>
												<th>Out Time</th>
												<th>ID Proof</th>
												<th>A/C Number</th>
												<th>IFSC Code</th>
												<th>Address</th>
												<th>Phone Number</th>
												<th>Email Id</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endsection