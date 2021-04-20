<template>
	<div>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		  <div class="container">
		  	<div class="row w-100">		  	
			  	<div class="col-4">
			  		  <a class="navbar-brand" href="#">tavisi</a>
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
			  	</div>
			  	<div class="col-4">
			  		 <form class="d-fx">
				        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				      </form>
			  	</div>
			    <div class="col-4 ">
				    <div class="collapse navbar-collapse" id="navbarCollapse">
				     
				      <ul class="navbar-nav w-100 mb-2 mb-md-0 d-flex justify-content-around">
				        <li class="nav-item">
				         
				          <a class="nav-link active" aria-current="page" href="#">Home</a>
				        </li>
				        <li class="nav-item">
				          <inertia-link href="dashboard/index">
				           <button class="btn btn-md btn-outline-warning">
				       			Dashboard
				    	   </button>
				    	</inertia-link>
				        </li>
				       <button class="btn btn-md btn-warning">
				       		Login
				       </button>
				      </ul>
				    
				    </div>
		    </div>
		    </div>
		  </div>
		</nav>
		<slot />
	</div>
		
	
</template>

<style type="text/css">
	.left-nav{
		display: flex;
		justify-content: space-between;

	}
</style>