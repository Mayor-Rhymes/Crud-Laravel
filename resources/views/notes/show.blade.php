


<x-layout>


   <div class="flex flex-col mt-10 p-5 space-y-20">
     

      <h1 class="text-3xl">{{ $note->title }}</h1>


      <p class="text-2xl">{{ $note->content }}</p>


      <div class="flex justify-evenly">
        <a href="/notes/{{ $note->id }}/edit"><button class="bg-blue-400 text-white px-7 py-2 rounded-sm">Edit</button>
        <a href="/"><button class="bg-slate-200 text-dark px-7 py-2 rounded-sm">Back</button></a>
        <form method="POST" action="/notes/{{$note->id}}/delete">
            @csrf
            @method('DELETE')
             <button type="submit" class="bg-red-400 text-white px-7 py-2 rounded-sm">Delete</button>
        </form>
      </div>



   </div>

</x-layout>