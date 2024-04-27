<x-app-layout>
	<div class="container py-8">
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
			@foreach( $postsRandom as $key => $post)
				<div class="w-full h-80 bg-cover bg-center @if($loop->first) col-span-2 @endif">
					
					<a href="{{ route('post.show', $post->id+1 ) }}">
						<article class="w-full h-80 bg-cover bg-center @if($loop->first) col-span-2 @endif" style="background-image: url('{{$post->urlToImage}}');">
							<div class="w-full h-full px-8 flex flex-col justify-center">
								<h6 class="text-1xl text-black leading-8 font-bold">
									{{$post->title}}
								</h6>
								{{$post->source->name}}
							</div>
						</article>
					</a>
				</div>
			@endforeach
		</div>
		<div class="mt-4">
			{{ $postController->links() }}
		</div>
	</div>
</x-app-layout>