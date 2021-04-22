<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Apollo</title>

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/apollo.css') }}"> --}}

        <style>
            body{
                  background-color:#fff;
                }
                body, html {
                  height: 100%;
                  width: 100%;
                  margin: 0;
                  padding: 0;
                }

                /* Demo container*/
                #container{
                  max-width:900px;
                  width:100%;
                  overflow:hidden; 
                  position: absolute;
                  top: 50%;
                  left: 50%;
                  margin-right: -50%;
                  transform: translate(-50%, -50%);
                }

                /* Bottom hack for IE*/
                svg{
                  width:100%;
                  padding-bottom: 55.55%;
                  height: 1px;
                  overflow: visible;
                 }
        </style>

    </head>
    <body>
        @yield('content')

        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/apollo.js') }}"></script> --}}
    </body>
</html>
