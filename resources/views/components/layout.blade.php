<!DOCTYPE html>
<html>
   <head>
      <title>NoteBase</title>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <script src="https://cdn.tailwindcss.com"></script>

   </head>

   <body>


      <nav class="flex justify-between px-4 h-[70px] items-center bg-blue-100">


         <h1 class="text-2xl grow-[1]"><a href="/">NoteBase</a></h1>


         <ul class="flex grow-[2] justify-evenly">
            <li><a href="/">Home</a></li>
            <li><a href="/notes/create">Create a new note</a></li>

            @auth
            <li>Hello {{ auth()->user()->name }}</li>
            <form class="inline" action="/logout" method="POST">
              @csrf
              <button type="submit"> Logout </button>
                
            </form>
            <li><a href="/notes/manage">Manage</a></li>

            @else
            <li><a href="/register">Register</a></li>
            
            <li><a href="/login">Login</a></li>
            @endauth 


      </nav>


      {{ $slot }}






       
   </body>

</html>