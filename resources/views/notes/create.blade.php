<x-layout>

    

    <form
    method="POST"
     action="/notes"
     class="flex flex-col px-5 py-10 mx-auto w-[50%] space-y-[70px] mt-20 shadow-xl"
    
    >

    @csrf
    


       
            
            <input 
            class="h-[50px] p-4 focus:outline-none focus:border-b-2" 
            type="text" 
            name="title" 
            id="title" 
            placeholder="Title"
            value="{{ old("title") }}"
            />
            @error('title')
            <p class="text-red-400 mx-4 my-4 p-4">
                {{ $message }}
            </p>
            @enderror
        


        
            
            <textarea class="h-[200px] p-4 focus:outline-none border-2 resize-none " name="content" id="content" placeholder="Content">
                {{ old("content") }}
            </textarea>
            @error('content')
            <p class="text-red-400 mx-4 my-4 p-4">
                {{ $message }}
            </p>
            @enderror
        


            <button type="submit" name="submit" class="bg-blue-400 text-white px-7 py-2 rounded-sm">Edit</button>


        
       


    </form>

</x-layout>