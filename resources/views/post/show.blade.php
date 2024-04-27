<x-app-layout>
	<div class="container py-8">
		<h1 class="text-4xl font-bold text-gray-600">{{$posts->title}}</h1>
		<div class="text-lg text-gray-500 mb-2">
			{{$posts->description}}
		</div>

		<div class="grid grid-cols-3">
			<div class="col-span-2">
				<figure>
					<img class="w-full h-80 object-cover object-center" src="{{$posts->urlToImage}}">
				</figure>

				<div class="text-base text-gray-500 mt-4">
					{{$posts->content}}
				</div>
				<label>Autor:{{$posts->author}}</label>
			</div>

			<aside>
				
			</aside>
		</div>
	</div>
</x-app-layout>