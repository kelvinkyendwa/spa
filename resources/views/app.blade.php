<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Spa</title>

        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>


    <div id="app">
        <div class="container mx-auto">
            <header class="py-6">
                <h1>App </h1>
            </header>
            <main class="flex">
                <aside class="w-1/5">
                    <ul>
                      <h3 class="py-2 uppercase ">Title</h3>
                        <li class="capitalize"><router-link to ="/">Home</router-link></li>
                        <li class="capitalize"><router-link to ="/about">About</router-link></li>
                    </ul>
                      <ul class="py-3">
                        <h3 class="py-2 uppercase ">Title</h3>
                        <li class="capitalize"><router-link to ="/">Home</router-link></li>
                        <li class="capitalize"><router-link to ="/about">About</router-link></li>
                    </ul>
                
                </aside>

                <div class="primary flex-1">
                    <router-view></router-view>
                </div>
            </main>
        
        </div>
        
    </div>
          
    <script src="/js/app.js"></script>
    </body>
</html>
