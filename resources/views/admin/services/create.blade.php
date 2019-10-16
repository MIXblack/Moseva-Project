@extends('backLayouts.adminlayout')

    @section('title')
        Add Service | MoSeva Admin
    @endsection

    @section('content')

		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">MoSeva Services</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Add Service</li>
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
										<a class="nav-link btn btn-light" href="{{route('admin.services.index')}}">All Services</a>
									</li>
									<li class="nav-item m-2">
										<a class="nav-link btn btn-primary" href="{{route('admin.services.create')}}">Add Service</a>
									</li>
								</ul>
							</div>
						</div>
 
						<div class="card mt-4">
							<div class="card-header">
								<div class="card-title">Add New Service</div>
							</div>

							<form method="post" action="{{url('/')}}/admin/services/store">
								{{csrf_field()}}
									
									@include('flash')

									<div class="card-body">
										<div class="container">
											<div class="p-5 border">
												<form class="form-horizontal">
													<div class="form-group ">
														<div class="row">
															<div class="col-md-3">
																<label class="form-label" for="name">Name</label>
															</div>
															<div class="col-md-9">
																<input type="text" name="name" class="form-control" id="serviceNmae"  placeholder="MIXblack Web Solution...">
															</div>
														</div>
													</div>

													<div class="form-group ">
														<div class="row">
															<div class="col-md-3">
																<label class="form-label" for="slug">Slug</label>
															</div>
															<div class="col-md-9">
																<input type="text" name="slug" class="form-control" id="serviceSlug"  placeholder="mixblack-web-solution">
															</div>
														</div>
													</div>

													<div class="form-group ">
														<div class="row">
															<div class="col-md-3">
																<label class="form-label">Department</label>
															</div>
															<div class="col-md-9">
																<select class="form-control select2" data-placeholder="Choose Browser" multiple>
																	<option value="Electrical">
																		Electrical
																	</option>
																	<option value="Web Solution selected">
																		Web Solution
																	</option>
																</select>
															</div>
														</div>
													</div>

													<div class="form-group ">
														<div class="row">
															<div class="col-md-3">
																<label class="form-label">Category</label>
															</div>
															<div class="col-md-9">
																<select class="form-control select2" data-placeholder="Choose Browser" multiple>
																	<option value="Web Design">
																		Web Design
																	</option>
																	<option value="Web Development selected">
																		Web Development
																	</option>
																</select>
															</div>
														</div>
													</div>

													<div class="form-group ">
														<div class="row">
															<div class="col-md-3">
																<label class="form-label">Sub Category</label>
															</div>
															<div class="col-md-9">
																<select class="form-control select2" data-placeholder="Choose Browser" multiple>
																	<option value="1">
																		One Page Website
																	</option>
																	<option value="2 selected">
																		E-commerce Website
																	</option>
																</select>
															</div>
														</div>
													</div>

													<div class="form-group ">
														<div class="row">
															<div class="col-md-3">
																<label class="form-label">Service Type</label>
															</div>
															<div class="col-md-9">
																<select class="form-control">
																	<option selected>Select</option>
																	<option value="account">Single</option>
																	<option value="manager">Group</option>
																</select>
															</div>
														</div>
													</div>

													<div class="form-group ">
														<div class="row">
															<div class="col-md-3">
																<label class="form-label" for="name">Price</label>
															</div>
															<div class="col-md-9">
																<input type="text" name="price" class="form-control" id="service-price"  placeholder="4,500">
															</div>
														</div>
													</div>

													<div class="form-group ">
														<div class="row">
															<div class="col-md-3">
																<label class="form-label" for="offer price">Offer Price</label>
															</div>
															<div class="col-md-9">
																<input type="text" name="offer-price" class="form-control" id="service-offer-price"  placeholder="2,500">
															</div>
														</div>
													</div>

													<div class="form-group ">
														<div class="row">
															<div class="col-md-3">
																<label class="form-label" for="tax">Tax</label>
															</div>
															<div class="col-md-9">
																<input type="text" name="tax" class="form-control" id="service-tax"  placeholder="100">
															</div>
														</div>
													</div>

													<div class="form-group ">
														<div class="row">
															<div class="col-md-3">
																<label class="form-label">Product Synonyms</label>
															</div>
															<div class="col-md-9">
																<select class="form-control select2" data-placeholder="Choose Browser" multiple>
																	<option value="1">
																		Service 2
																	</option>
																	<option value="2 selected">
																		Service 3
																	</option>
																</select>
															</div>
														</div>
													</div>

													<div class="form-group ">
														<div class="row">
															<div class="col-md-3">
																<label class="form-label">Available</label>
															</div>
															<div class="col-md-9">
																<select class="form-control select2" data-placeholder="Choose Browser" multiple>
																	<option value="1">
																		Branch 1
																	</option>
																	<option value="2 selected">
																		Branch 2
																	</option>
																</select>
															</div>
														</div>
													</div>

													<div class="form-group ">
														<div class="row">
															<div class="col-md-3">
																<label class="form-label">Time</label>
															</div>
															<div class="col-md-9">
																<select class="form-control">
																	<option selected>Select</option>
																	<option value="1">below 1 Hours</option>
																	<option value="2">1 Hours</option>
																	<option value="3">2 Hours</option>
																	<option value="4">3 Hours</option>
																	<option value="5">More than 3 Hours</option>
																</select>
															</div>
														</div>
													</div>

													<div class="form-group">
														<div class="row">
															<div class="col-md-3">
																<label class="form-label">Upload Image</label>
															</div>
															<div class="col-md-9">
																<input type="file" class="custom-file-input" name="upload-image">
																<label class="custom-file-label">Choose file</label>
															</div>
														</div>
													</div>

													<div class="form-group ">
														<div class="row">
															<div class="col-md-3">
																<label class="form-label">Upload Video</label>
															</div>
															<div class="col-md-9">
																<input type="file" class="custom-file-input" name="upload-video">
																<label class="custom-file-label">Choose file</label>
															</div>
														</div>
													</div>

													<div class="form-group ">
														<div class="row">
															<div class="col-md-3">
																<label class="form-label" for="name">Video Link</label>
															</div>
															<div class="col-md-9">
																<input type="url" name="name" class="form-control" id="video-link"  placeholder="http://www.example.com/">
															</div>
														</div>
													</div>

													<div class="form-group ">
														<div class="row">
															<div class="col-md-3">
																<label class="form-label">Description</label>
															</div>
															<div class="col-md-9">
																<textarea class="content2" name="description"></textarea>
															</div>
														</div>
													</div>

													<div class="row mt-5">
														<div class="col-lg-4"></div>

														<div class="col-lg-4">
															<button type="submit" class="btn btn-primary waves-effect waves-light btn-block">ADD Service</button>
														</div>

														<div class="col-lg-4"></div>
													</div>
												</form>
											</div>
										</div>
									</div> <!-- ./card-body -->
							 </form>

						</div> <!-- ./card -->

					</div> <!-- ./col-lg-12 -->
				</div> <!-- ./row -->

			</div> <!-- ./side-app -->
		</div> <!-- ./app-content -->
	@endsection
