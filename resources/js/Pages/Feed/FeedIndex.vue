<template>
	<div>
		<div class="row">
			<div class="col-3">
				<div class="float-right">
				<div class="text-center">
				  <img src="https://images.unsplash.com/photo-1579546929518-9e396f3cc809?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8&w=1000&q=80" class="rounded thumb-img" alt="gradient">
				</div>
				<div class="text-center mt-3">
				  <img src="https://images.pexels.com/photos/396547/pexels-photo-396547.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="rounded thumb-img" alt="gradient">
				</div>
				</div>
			</div>
			<div class="col-6 px-5">
				<feed-posts />
				<feed-posts />
				<feed-posts />
			</div>
			<div class="col-3 justify-content-center">
				<feed-showcase-post />
				<feed-showcase-post />
				<feed-showcase-post />
			</div>
		</div>
	</div>
</template>

<script type="text/javascript">
	import FeedPosts from './FeedPosts'
	import FeedShowcasePost from './FeedShowcasePost'
	export default {
		components: {
			FeedPosts,
			FeedShowcasePost
		}
	};	
</script>

<style type="text/css">
	.thumb-img{
		height: 50px;
		width:  50px;
	}
</style>

