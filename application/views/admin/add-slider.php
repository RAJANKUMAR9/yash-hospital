<!DOCTYPE html>
<html lang="en">


<head>
   <?php $this->load->view('admin/common/head');?> 
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
  
  <?php $this->load->view('admin/common/sidebar');?> 

		<div class="main">

 			 <?php $this->load->view('admin/common/topbar');?> 
			
			<main class="content">
				<div class="container d-flex flex-column">
				<div class="row h-100">
					<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
						<div class="d-table-cell align-middle">

							<div class="text-center mt-4">
								<h1 class="h2">Add Slider </h1>
								<p class="lead">
									Sign in to your account to continue
								</p>
							</div>

							<div class="card">
								<div class="card-body">
									<div class="m-sm-4">
										<form>
											<div class="mb-3">
												<label class="form-label">image</label>
												<input class="form-control form-control-lg" type="file" name="file"  />
											</div>
											<div class="mb-3">
												<label class="form-label">Title</label>
												<input class="form-control form-control-lg" type="text" name="title" />
			
											</div>
										
											<div class="text-center mt-3">
												<a href="index.php" class="btn btn-lg btn-primary">Submit</a>
												<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		

			<?php $this->load->view('admin/common/footer');?> 
		</div>
	</div>

		<?php $this->load->view('admin/common/js');?> 

</body>
</html>