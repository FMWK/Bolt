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
                  <div class="col-md-6" id="homecol6" style="padding-bottom:100px;">
                    <center><img src="images/logo.svg" style="width:50px; height:50px; margin-top: 15px;"></center>
                      <hr>
                      <form action="/search" method="GET">
                      <center><input name="playerlookup" type="text" placeholder="Enter a player name you wish to lookup" class="search"></center>
                      </form>
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
