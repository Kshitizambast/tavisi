<template>
	<div class="container-fluid homenav">
		<div class="row py-5 px-3">
			<div class="col">
				<inertia-link href='#'>
					<p class="display-5 text-white">Fashion</p>
				</inertia-link>
			</div>
			<div class="col">
				<inertia-link href='#'>
					<p class="display-5 text-white">Games</p>
				</inertia-link>
			</div>
			<div class="col">
				<inertia-link href='#'>
					<p class="display-5 text-white">Study</p>
				</inertia-link>
			</div>
			<div class="col">
				<inertia-link href='#'>
					<p class="display-5 text-white">Food</p>
				</inertia-link>
			</div>
			<div class="col">
				<inertia-link href='#'>
					<p class="display-5 text-white">Stunts</p>
				</inertia-link>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<p class="text-white display-6 float-right">Posts</p>
			</div>
			<div class="col-6 px-4 d-flex my-auto">
				<inertia-link href='#'>
					<p class="text-white active px-5">Newer</p>
				</inertia-link>
				<inertia-link href='#'>
					<p class="text-white px-5">Trends</p>
				</inertia-link>
				<inertia-link href='#'>
					<p class="text-white px-5">Hot</p>
				</inertia-link>
			</div>
			<div class="col-3">
				<p class="text-white display-6" style="font-size:1.7rem">SHOWCASE</p>
			</div>
		</div>
		<feed-index/>
	</div>
</template>

<script type="text/javascript">
	import FeedIndex from './FeedIndex'
	export default {
		components: {
			FeedIndex
		}
	};

</script>

<style type="text/css">
	.homenav{
		background-color: #2F3338;
	}
</style>