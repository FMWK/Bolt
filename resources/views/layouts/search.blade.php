<!--
    ____  ____  __  ______
   / __ )/ __ \/ / /_  __/
  / __  / / / / /   / /
 / /_/ / /_/ / /___/ /
/_____/\____/_____/_/
BY SYS
 -->
<html lang="en">
  <head>
      <title>Bolt - Home</title>
      @include('layouts.header')
  </head>
  <body>
        <div id="wrap">
            <div class="topnav">
              @include('layouts.nav')
            </div>
            <div class="maincontent" id="main">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6" id="searchcol6">
                    <center><img src="images/logo.svg" style="width:50px; height:50px; margin-top: 15px;"></center>
                      <hr>
                      <center><a href="{{$parse['profile_url']}}" class="playername" target="_blank">{{$parse['name']}}</a></center>
                      <!--NESTED COLUMNS-->
                      <div id="nestedrow" class="row">
                        <div class="col-sm-5 col-sm-offset-1">
                          <center><h3 class="statheader">Hardcore</h3></center><br>

                          <p class="leftstatname"> Rank</p> <p class="leftresult">{{$parse['hardcore_summary']['rank']['rank']}}</p><br>
                          <hr class="divider">
                          <p class="leftstatname"> Rank N<sup>o</sup></p> <p class="leftresult">{{$parse['hardcore_summary']['global_rank']}}</p><br>
                          <hr class="divider">
                          <p class="leftstatname"> Kills</p> <p class="leftresult">{{$parse['hardcore_summary']['kills']}}</p><br>
                          <hr class="divider">
                          <p class="leftstatname"> Wins</p> <p class="leftresult">{{$parse['hardcore_summary']['wins']}}</p><br>
                          <hr class="divider">
                          <p class="leftstatname"> Losses</p> <p class="leftresult">{{$parse['hardcore_summary']['losses']}}</p><br>
                          <hr class="divider">
                        </div>
                        <div class="col-sm-5">
                          <center><h3 class="statheader">Regular</h3></center><br>

                          <p class="rightstatname"> Rank</p> <p class="rightresult">{{$parse['regular_summary']['rank']['rank']}}</p><br>
                          <hr class="divider">
                          <p class="rightstatname"> Rank N<sup>o</sup></p> <p class="rightresult">{{$parse['regular_summary']['global_rank']}}</p><br>
                          <hr class="divider">
                          <p class="rightstatname"> Kills</p> <p class="rightresult">{{$parse['regular_summary']['kills']}}</p><br>
                          <hr class="divider">
                          <p class="rightstatname"> Wins</p> <p class="rightresult">{{$parse['regular_summary']['wins']}}</p><br>
                          <hr class="divider">
                          <p class="rightstatname"> Losses</p> <p class="rightresult">{{$parse['regular_summary']['losses']}}</p><br>
                          <hr class="divider">
                        </div>
                        <div class="col-sm-1"></div>
                      </div>
                      <!--END OF NESTED COLUMNS-->
                  </div>
                  <div class="col-md-3"></div>
                </div>
              </div>
            </div>
            <div id="push"></div>
        </div>
    <footer class="footer">
      <div class="container">
        <center><p class="text-muted">Bolt was created by <b>SYS</b> &nbsp;| Credit to the Battle Royale Developers and staff</p></center>
      </div>
    </footer>
  </body>

</html>
