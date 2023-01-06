<x-layout>


    <table class="w-[100%] border-4 my-10">

        {{-- <thead>

             <tr>

                <td>Note</td>


                <td>Action one</td>



                <td>Action two</td>
             </tr>
        </thead> --}}


        
        <tbody>

            
            @foreach($notes as $note)



            <tr class="border-4">

                <td>{{ $note->title }}</td>


                <td>
                    <a href="/notes/{{ $note->id }}/edit"><button class="bg-blue-400 text-white px-7 py-2 rounded-sm">Edit</button>
                </td>
                <td>

                    <form method="POST" action="/notes/{{$note->id}}/delete">
                        @csrf
                        @method('DELETE')
                         <button type="submit" class="bg-red-400 text-white px-7 py-2 rounded-sm">Delete</button>
                    </form>
                </td>
            </tr>



            @endforeach
        <tbody>



    </table>

</x-layout>