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
      <title>Bolt - About</title>
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
                    <div class="col-md-6" id="aboutcol6">
                      <center>
                        <img src="images/logo.svg" style="width:50px; height:50px; margin-top: 15px;">
                        <hr>
                        <h4>My Aim</h4>
                        <p>My aim for Bolt is to provide the players of "PLAYERUNKNOWN'S Battle Royale" clear and consise information that may not be availiable elsewhere. Being a avid gamer myself who has played numerous amounts of PLAYERUNKNOWN'S Battle Royale in the past.</p>
                        <h4>Official Leaderboards</h4>
                        <a href="{{URL::to ('http://leaderboard.battleroyalegames.com/')}}" id="leaderboardlink" target="_blank">Leaderboards</a>
                        <h4 style="padding-top:30px;">Battle Royale Discord</h4>
                        <p style="padding-bottom:100px;">A link to the Official Battle Royale Discord is availiable by clicking the "Discord" button at the top right of your display. This is where you can also send me a PM if you have a question</p>
                        <h4>Credit</h4>
                        <p>Credit goes out to the developers of PLAYERUNKNOWN'S Battle Royale.<br><span class="devs">Rexeh, Ollie, Anatanokami, Tzer, Keoto, SniperGhost, Stormridge and PLAYERUNKNOWN</span>.<br>Also the admins that keep things running smoothly</p>
                      </center>
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
