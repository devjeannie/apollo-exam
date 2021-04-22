<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
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
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div id= "container1">
                     <section class="content-header">
                                <h1>
                             <a href=""> Generate </a> 
                            </h1>

                        </section>
                </div>
                <div id="container2">  
                      <svg preserveAspectRatio="xMidYMin slice" viewBox="0 0 728 400">
                        <!--Background-->  
                        <path d="M0 0h728v400H0z" fill="#fff"/> 
                        <!--Spiral path-->  
                        <defs>
                          <path id="s" d="M363.32 203.973c3.65 3.65-3.119 6.72-6.066 6.066-7.986-1.773-9.27-12.002-6.066-18.198 5.731-11.082 20.612-12.38 30.33-6.065 14.26 9.267 15.584 29.339 6.065 42.46-12.686 17.49-38.107 18.828-54.592 6.067-20.745-16.06-22.09-46.897-6.066-66.725 19.408-24.015 55.695-25.365 78.856-6.066 27.294 22.744 28.648 64.502 6.066 90.988-26.071 30.58-73.313 31.935-103.12 6.066-33.869-29.394-35.225-82.127-6.066-115.252 32.713-37.16 90.944-38.518 127.384-6.065 40.455 36.028 41.813 99.762 6.065 139.515-39.342 43.75-108.581 45.11-151.646 6.065-47.048-42.655-48.408-117.402-6.066-163.778 45.966-50.346 126.224-51.706 175.91-6.066 53.645 49.277 55.005 135.047 6.066 188.042-52.587 56.945-143.87 58.305-200.174 6.066-60.244-55.895-61.605-152.693-6.066-212.306 59.204-63.545 161.518-64.906 224.438-6.065 53.59 50.116 66.879 131.92 33.787 197.072" />
                        </defs>  
                        
                        <text font-family="monospace" font-size="20" fill="#1d1f20">
                        <textPath id="text" xlink:href="#s">Text herexcvxcvxcvxcvxcvxcvxcvxccbvxcmfvmsfvsdffjsdhvfjhdfgsdjhgf</textPath>
                        </text>  
                      </svg> 
                    </div>

            </div>
        </div>
    </body>
</html>
