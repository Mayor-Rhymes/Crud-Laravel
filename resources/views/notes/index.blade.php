



<x-layout>



@unless($notes->isEmpty())

<div class="grid grid-rows-1 lg:grid-cols-2 gap-x-4 gap-y-4 px-5 py-5 ">
@foreach($notes as $note)


   <div class="flex flex-col px-10 py-5 space-y-4 bg-slate-100 text-xl text-dark-500">

     <h6>{{ $note->title }}</h6>

     <p>{{ substr($note->content, 0, 5) }} ... </p>

     <a href="/notes/{{ $note->id }}" class="text-indigo-300 hover:text-purple-700 hover:underline">See more</a>


   </div>


   


@endforeach
</div>
@else
<h3>There are notes available</h3>

@endunless


</x-layout>
