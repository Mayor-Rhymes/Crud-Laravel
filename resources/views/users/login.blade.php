<x-layout>

    

    <form
     method="POST"
     action="/users/authenticate"
     class="flex flex-col px-5 py-10 mx-auto w-[50%] space-y-[70px] mt-20 shadow-xl"
    
    >

    @csrf
    


       
            
           
        
            <input 
            class="h-[50px] p-4 focus:outline-none focus:border-b-2" 
            type="email" 
            name="email" 
            id="email" 
            placeholder="Email"
            value="{{ old("email") }}"
            />
            @error('email')
            <p class="text-red-400 mx-4 my-4 p-4">
                {{ $message }}
            </p>
            @enderror


            <input 
            class="h-[50px] p-4 focus:outline-none focus:border-b-2" 
            type="password" 
            name="password" 
            id="password" 
            placeholder="Password"
            value="{{ old("password") }}"
            />
            @error('password')
            <p class="text-red-400 mx-4 my-4 p-4">
                {{ $message }}
            </p>
            @enderror


        


        
            
            
        


            <button type="submit" name="submit" class="bg-blue-400 text-white px-7 py-2 rounded-sm">Sign In</button>
          
            

            <p class="text-center">Don't have account? <a href="/register" class="text-blue-400">Register</a></p>


        
       


    </form>

</x-layout>