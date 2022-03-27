<x-app-layout>
    <div class="mycontainer py-8" >
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($posts as $post)

                <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url({{Storage::url($post->image->url)}})">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <div class="">
                            @foreach ($post->tags as $tag)
                                <a href="#" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 rounded-full">{{ $tag->name}}</a>
                            @endforeach
                            
                        </div>

                        <div class="text-4x1 text-white leading-8 font-bold">
                            <h1 class="text-4xl text-white lading-8 font-bold">
                                <a href="#">{{$post->name}}</a>
                            </h1>
                        </div>
                    </div>

                </article>
                
            @endforeach
        </div>
        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>    