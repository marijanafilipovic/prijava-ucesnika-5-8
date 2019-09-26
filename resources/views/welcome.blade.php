<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Participation of scientists from Serbia in ERC calls</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body>
  {{--  <div >
        <h3>CALL FOR EVENT</h3>
    </div>--}}
        <div class="flex-center position-ref full-height">
            {{--@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
--}}
            <div class="content">
                <div class="container" style="">
{{--<img src="{{ asset('file/Horizon-2020.jpg') }}" style="width:100%; height:auto;" />--}}
                </div>
                <div class="container" style="margin-bottom: 20px;">
                    <div class="col-md-6" >
                        <img src="{{ asset('file/LOGO_ERC.png') }}" style="width:100%; height:auto;" />
                  {{--      <p>European Research Council</p>
                        <p style="font-size:small">Established by the European Commision</p>--}}
                    </div>
                    <div class="col-md-6" >
                        <img src="{{ asset('file/MNPTR_logoENG.jpg') }}" style="width:100%; height:auto;" />
{{--
                        <p>MINISTRY OF EDUCATION,<BR>SCIENCE AND TECHNOLOGICAL DEVELOPMENT</p>
                        <p style="font-size:small">Established by the European Commision</p>--}}
                    </div>
                </div>
                <div id="done" class="container bg-white shadow" style="border: 1px solid darkred; padding:30px;">
                    <p style="color:darkred;">Thank you for your interest!</p>
                    <p style="color:darkred;">
                        You can find the web-stream records <a class="btn btn-default" href="https://www.youtube.com/playlist?list=PLt4tYBLXE3yEHwSGh6hKpMW-CNdHL3yVR">HERE</a>.
                    </p>
                    <p  style="color:darkred;">
                        Download the presentations <a class="btn btn-default" href=" http://www.cpn.rs/prezentacije/">HERE</a>.
                    </p>
{{--<p  style="color:darkred;">Unfortunately, the registration for the event is over.</p>
                    <p  style="color:darkred;">However, you can follow the event through the live-stream <a class="btn btn-default" href="https://youtu.be/eT2RPBRcOYc">HERE</a>.</p>--}}
                </div>
                <div class="container">
                    <h2 style="text-align:center; color: #1b6d85; margin-bottom:15px;">ERC Funding Opportunities: Supporting excellent researchers all over Europe</h2>

                    <p style="font-size:16px;">Date: September 5, 2019</p>
                    <p style="font-size:16px;">Location: Rectorate of the University of Belgrade, Serbia</p>
                    <p style="font-size:16px;">Organized by: European Research Council (ERC) of the European Commission and the Ministry of Education, Science and Technological Development
                    </p>
                </div>
                <div id="objectives" class="container">
                    <h3>Objectives of the event</h3>
                    <p style="font-size:16px;">The European Research Council (ERC) and the Ministry of Education, Science and Technological Development of the Republic of Serbia are organizing a joint event in order to inform scientists in Serbia about ERC funding opportunities.</p>
                    <p style="font-size:16px;">The ERC's mission is to encourage the highest quality research in Europe through competitive funding and to support investigator-driven frontier research across all fields including social sciences and humanities, based on scientific excellence.</p>
                    <p style="font-size:16px;">The event is convening representatives of national institutions that can play a role in supporting ERC applicants to bring them together with potential ERC candidates, the ERC Scientific Council members, and staff from the ERC Executive Agency, in order to discuss together the best possible ways of supporting outstanding scientist and help them successfully apply to the ERC.</p>
                </div>
                <div class="container shadow">
                 <div id="objectives"  class="col-md-6 shadow-sm well-sm">
                    <h3>Draft Agenda</h3>
                    <a style="color:#113049;" class="btn btn-outline-info bg-info" href="{{ asset('file/ERC-Draft-agenda05.09.2019final.pdf') }}">Click here to download the draft agenda.</a>
                   {{-- <h3>Target number of participants</h3>
                    <p>
                        150 (In order to be admitted to the event, we require all interested applicants to complete the registration form. Participation will be subject to space availability.)

                    </p>--}}
                </div>
                <div class="container align-content-center" style="margin-bottom: 100px;">
                    <a  class="btn btn-lg btn-outline-primary center" style="background-color: #113049; width:100%; color:white;">REGISTER FOR EVENT HERE</a>
                </div>

               {{-- <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>--}}
            </div>
        </div>
    </body>
</html>
