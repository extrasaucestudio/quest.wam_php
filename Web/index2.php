<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=0.56, maximum-scale=0.56, user-scalable=no">
        <link rel="icon" type="image/png" href="img/common/favicon.png">
        <meta property="og:title" content="WaxQuest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://waxquest.com">
        <meta property="og:image" content="http://browserquest.mozilla.org/img/common/promo-title.jpg">
        <meta property="og:site_name" content="WaxQuest">
        <meta property="og:description" content="RemixWorlds launch WaxQuest - Open World multiplayer adventure game based on WAX blockchain.">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/achievements.css" type="text/css">
        <script src="js/lib/modernizr.js" type="text/javascript"></script>
        <!--[if lt IE 9]>
                <link rel="stylesheet" href="css/ie.css" type="text/css">
                <script src="js/lib/css3-mediaqueries.js" type="text/javascript"></script>
                <script type="text/javascript">
                document.getElementById('parchment').className = ('error');
                </script>
        <![endif]-->
        <script src="js/detect.js" type="text/javascript"></script>
        <title>WaxQuest</title>
        <script src='waxjs.js'></script>


<!-- notification -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        body {
            font-family: 'Open Sans';
        }
    </style>
<link href="files/notification/light-theme.min.css" rel="stylesheet">
<link href="files/notification/dark-theme.min.css" rel="stylesheet">
<link href="files/notification/colored-theme.min.css" rel="stylesheet">
<script type="text/javascript" src="files/notification/growl-notification.min.js"></script>


        <script async src="https://www.googletagmanager.com/gtag/js?id=G-xxx"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-xxx');
     </script>
        
        <script>
var url_string = window.location.href;
var url = new URL(url_string);
var ref = url.searchParams.get("ref") || 'kkere.wam';
const affiliate_wallet = url.searchParams.get("ref") || 'kkere.wam';

</script>
	</head>
    <!--[if lt IE 9]>
	<body class="intro upscaled">
    <![endif]-->
	<body class="intro">
	    <noscript>
	       <div class="alert">
	           You need to enable JavaScript to play WaxQuest.
	       </div>
	    </noscript>
	    
	    <div id="intro">
	        <h1 id="logo">
	           <span id="logosparks">
	               
	           </span>
	        </h1>
	        <article id="portrait">
	            <p>
	               Please rotate your device to landscape mode
	            </p>
	            <div id="tilt"></div>
	        </article>
	        <section id="parchment" class="createcharacter">
	            <div class="parchment-left"></div>
	            <div class="parchment-middle">
                    <article id="createcharacter">
          	           <h1>
          	               <span class="left-ornament"></span>
          	               RemixWorlds launch WaxQuest
          	               <span class="right-ornament"></span>
                         </h1>
                         Open World multiplayer adventure game based on WAX blockchain.
                         
                         <center>
                         <div>
                         <img id="login" onclick=login() src="files/wax.svg" alt="WAX Login" width="40px" height="40px">
                         <br>
                         
                         <p id="current2"></p>

                       
    </div>
    </center>
                        

                         <div id="character" class="disabled">
                             <div></div>
                         </div>


               <form action="none" method="get" accept-charset="utf-8" autocomplete="on">
               <input type="submit" id="nameinput" class="stroke" value="Submit" placeholder="username" maxlength="15">
                   </form>
                     



        <!-- 

        <script>
          document.write('<a href="affiliate.html?ref=');
          document.write(wallet);
          document.write('">Affiliates Listing</a>');
          </script>
         -->

        
          <p  hidden="hidden" id="current"></p>
         
          <input hidden="hidden" id="wallet">
          
          
          
          <p id="response"></p>
        
        
                <p>
                <script>
                  const wax = new waxjs.WaxJS({
                    rpcEndpoint: 'https://wax.greymass.com'
                  });
                
                  async function login() {
                    try {
                      const userAccount = await wax.login();
                      document.getElementById('wallet').value = wax.userAccount;
                      
                      var nameinput = wax.userAccount || 'kkere.wam';

                      await getCurrentMessage();
                    } catch(e) {
                      document.getElementById('response').append(e.message);
                    }
                  }
                
                  async function sign() {
                    if(!wax.api) {
                      return document.getElementById('response').append('* Login first *');
                      
                    }
                
                    const wallet = document.getElementById('wallet').value;

                
                    try {
                      const result = await wax.api.transact({
                        actions: [{
                          account: 'freecitygamx',
                          name: 'adduseraff',
                          authorization: [{
                            actor: wax.userAccount,
                            permission: 'active',
                          }],
                          data: {
                            wallet,
                            affiliate_wallet: ref,
                          },
                        }]
                      }, {
                        blocksBehind: 3,
                        expireSeconds: 30
                      });
                      
                      document.getElementById('response').append(`${wax.userAccount}`);
                      
                      // document.getElementById('response').append(wax.userAccount);

                      // document.createElement("<div id='myID'> my Text </div>");
                      // document.body.insertBefore(elem,document.body.childNodes[0]);

                      // document.getElementById('response').append(JSON.stringify(result));
                      // console.log(result); 
                      await new Promise(resolve => setTimeout(resolve, 1000));
                      await getCurrentMessage();
                    } catch(e) {
                      document.getElementById('response').append('* Expired Transaction *');
                    }
                  }
                
                    async function getCurrentMessage() {
                    const res = await wax.rpc.get_table_rows({
                      json: true,
                      code: 'freecitygamx',
                      scope: 'freecitygamx',
                      table: 'users',
                      lower_bound: wax.userAccount,
                      upper_bound: wax.userAccount,
                    });
                
                    const message = res.rows[0] ? res.rows[0].message : `Wallet: ${wax.userAccount}`;
                    document.getElementById('current').textContent = message;
                    document.getElementById('current2').textContent = `${wax.userAccount}`;
                    //document.getElementById('current3').textContent = `${wax.userAccount}`;


                    


                    //document.getElementById('nameinput').append(wax.userAccount);

                    //document.getElementById('nameinput').textContent = wax.userAccount;

                    // document.getElementById('current2').append(wax.userAccount);
                    //document.getElementById('options').textContent = (wax.userAccount);
                    //document.getElementById('options').textContent = (new GrowlNotification(options)).show();
                  }
                   // set a random value to the initial message value
                  document.getElementById('message').value = Math.random().toString(36).substring(2);
                
                </script>
        </p>

                         

                         <div class="play button disabled">
                             <div></div>
                             <img src="img/common/spinner.gif" alt="">
                         </div>
                         <div class="ribbon">
                            <div class="top"></div>
                            <div class="bottom"></div>
                         </div>
                    </article>
                    <article id="loadcharacter">
          	           <h1>
          	               <span class="left-ornament"></span>
          	               Load your character
          	               <span class="right-ornament"></span>
                         </h1>
                         <div class="ribbon">
                            <div class="top"></div>
                            <div class="bottom"></div>
                         </div>
                         <img id="playerimage" src="">
                         <div id="playername" class="stroke">
                         </div>
                         <div id="sign" onclick=sign() class="play button">
                             <div></div>
                             <img src="img/common/spinner.gif" alt="">
                         </div>
                         <div id="create-new">
                            <span><span>or</span> create a new character</span>
                         </div>
                    </article>
                    <article id="confirmation">
          	           <h1>
          	               <span class="left-ornament"></span>
          	               Delete your character?
          	               <span class="right-ornament"></span>
                         </h1>
                         <p>
                             All your items and achievements will be lost.<br>
                             Are you sure you wish to continue?
                         </p>
                         <div class="delete button"></div>
                         <div id="cancel">
                            <span>cancel</span>
                         </div>
                    </article>

    	            <article id="credits">
        	            <h1>
         	               <span class="left-ornament"></span>
                           
         	               <span class="title">
                            <br>
         	                   Made by Mozilla in 2012 and Waxed by <a target="_blank" class="stroke clickable" href="https://remixworlds.com/">RemixWorlds</a> in 2022
         	               </span>
         	               <span class="right-ornament"></span>
                        </h1>
                        <div id="authors">
                            <div id="guillaume">
                                <div class="avatar"></div>
                                Pixels by
                                <a class="stroke clickable" target="_blank" href="http://twitter.com/glecollinet">Guillaume Lecollinet</a>
                            </div>
                            <div id="franck">
                                <div class="avatar"></div>
                                Code by
                                <a class="stroke clickable" target="_blank" href="http://twitter.com/whatthefranck">Franck Lecollinet</a>
                            </div>
                            <div id="guillaume">
                                <div class="avatar"></div>
                                Waxed by
                                <a class="stroke clickable" target="_blank" href="http://waxio.io">Jordan Bourbonnais</a>
                            </div>
                            <div id="franck">
                                <div class="avatar"></div>
                                ReWaxed by
                                <a class="stroke clickable" target="_blank" href="http://waxio.io">Jordan Bourbonnais</a>
                            </div>
                        </div>
                        <div id="seb">
                        RemixWorlds: <a class="clickable" target="_blank" href="http://remixworlds.com">Website</a>, 
                        <a class="clickable" target="_blank" href="http://twitter.com/remixworlds">Twitter</a>, 
                        <a class="clickable" target="_blank" href="http://t.me/remixworlds">Telegram</a>, 
                        <a class="clickable" target="_blank" href="http://waxaffiliation.io">Affiliate Program</a>
                        </div>
	                    <div id="close-credits">
	                        <span>- click anywhere to close -</span>
                        </div>
    	            </article>

    	            <article id="about">
        	            <h1>
         	               <span class="left-ornament"></span>
         	               <span class="title">
         	                   What is WaxQuest?
         	               </span>
         	               <span class="right-ornament"></span>
                        </h1>
                        <p id="game-desc">
                        WaxQuest is a multiplayer game inviting you to explore a
                            world of adventure from your Web browser.
                        </p>
                        <div class="left">
                            <div class="img"></div>
                            <p>
                                This demo is powered by HTML5 and WebSockets, which allow for real-time gaming and apps on the Web.
                            </p>
                            <span class="link">
                                <span class="ext-link"></span>
                                <a target="_blank" class="clickable" href="http://hacks.mozilla.org/2012/03/browserquest/">Learn more</a> about the technology
                            </span>
                        </div>
                        <div class="right">
                            <div class="img"></div>
                            <p>
                                WaxQuest is available on Firefox, Chrome, Safari as well as iOS devices and Firefox for Android.
                            </p>
                            <span class="link">
                                <span class="ext-link"></span>
                                <a target="_blank" class="clickable" href="http://github.com/mozilla/BrowserQuest">Grab the source</a> on Github
                            </span>
                        </div>
	                    <div id="close-about">
	                        <span>- click anywhere to close -</span>
                        </div>
    	            </article>
    	            <article id="death">
                        <p>You are dead...</p>
    					<div id="respawn" class="button"></div>
    	            </article>
                    <article id="error">
          	           <h1>
          	               <span class="left-ornament"></span>
          	               Your browser cannot run WaxQuest!
          	               <span class="right-ornament"></span>
                         </h1>
                         <p>
                             We're sorry, but your browser does not support WebSockets.<br>
                             In order to play, we recommend using the latest version of Firefox, Chrome or Safari.
                         </p>
                    </article>
	            </div>
	            <div class="parchment-right"></div>
	        </section>
	    </div>
		<div id="container">
		    <div id="canvasborder">
		        <article id="instructions" class="clickable">
		            <div class="close"></div>
		            <h1>
     	               <span class="left-ornament"></span>
     	               How to play
     	               <span class="right-ornament"></span>
	                </h1>
	                <ul>
	                   <li><span class="icon"></span>Left click or tap to move, attack and pick up items.</li>
	                   <li><span class="icon"></span>Press ENTER to chat.</li>
	                   <li><span class="icon"></span>Your character is automatically saved as you play.</li>
	                </ul>
	                    <p>- click anywhere to close -</p>
		        </article>
		        <article id="achievements" class="page1 clickable">
		            <div class="close"></div>
		            <div id="achievements-wrapper">
		                <div id="lists">
        		        </div>
    		        </div>
    		        <div id="achievements-count" class="stroke">
    		            Completed
    		            <div>
    		                <span id="unlocked-achievements">0</span>
    		                /
    		                <span id="total-achievements"></span>
    		            </div> 
    		        </div>
		            <nav class="clickable">
		                <div id="previous"></div>
		                <div id="next"></div>
		            </nav>
		        </article>
    			<div id="canvas">
    				<canvas id="background"></canvas>
    				<canvas id="entities"></canvas>
    				<canvas id="foreground" class="clickable"></canvas>
    			</div>
    			<div id="bubbles">				
    			</div>
    			<div id="achievement-notification">
    			    <div class="coin">
    			        <div id="coinsparks"></div>
    			    </div>
    			    <div id="achievement-info">
        			    <div class="title">New Achievement Unlocked!</div>
        			    <div class="name"></div>
    			    </div>
    			</div>
    			<div id="bar-container">
					<div id="healthbar">
					</div>
					<div id="hitpoints">
					</div>
					<div id="weapon"></div>
					<div id="armor"></div>
					<div id="notifications">
					    <div>
					       <span id="message1"></span>
					       <span id="message2"></span>
					    </div>
					</div>
                    <div id="playercount" class="clickable">
                        <span class="count">0</span> <span>players</span>
                    </div>
                    <div id="barbuttons">
                        <div id="chatbutton" class="barbutton clickable"></div>
                        <div id="achievementsbutton" class="barbutton clickable"></div>
                        <div id="helpbutton" class="barbutton clickable"></div>
                        <div id="mutebutton" class="barbutton clickable active"></div>
                    </div>
    			</div>
				<div id="chatbox">
				    <form action="none" method="get" accept-charset="utf-8">
					    <input id="chatinput" class="gp" type="text" maxlength="60">
				    </form>
				</div>
                <div id="population">
                    <div id="instance-population" class="">
                        <span>0</span> <span>players</span> in your instance
                    </div>
                    <div id="world-population" class="">
                        <span>0</span> <span>players</span> total
                    </div>
                </div>
		    </div>
		</div>
		<footer>
		    <div id="sharing" class="clickable">
		      Share this on 
              <!--  
                <a href="http://twitter.com/share?url=http%3A%2F%2Fbrowserquest.mozilla.org&amp;text=Mozilla%27s%20BrowserQuest%3A%20HTML5%20massively%20multiplayer%20adventure%20game%20%23demo%20%23websockets&amp;related=glecollinet:Creators%20of%20BrowserQuest%2Cwhatthefranck" class="twitter"></a>
              <a href="http://www.facebook.com/share.php?u=http://browserquest.mozilla.org/" class="facebook"></a>
              -->
              <a href="http://twitter.com/share?url=http%3A%2F%2Fwaxquest.com&amp;text=RemixWorlds%20launch%20WaxQuest%20-%20Open%20World%20multiplayer%20adventure%20game%20based%20on%20WAX%20blockchain%20%23WAX%20%23WAXP" class="twitter"></a>
              <a href="http://www.facebook.com/share.php?u=http://waxquest.com/" class="facebook"></a>
		    </div>
		    <div id="credits-link" class="clickable">
		      – <span id="toggle-credits">Credits</span>
		    </div>
            
           <!-- 
            <script>
          document.write('<a href="https://waxaffiliation.io/?ref=');
          document.write(ref);
          document.write('">Affiliate Program</a>');
          </script>
             -->
            

		</footer>
		
		<ul id="page-tmpl" class="clickable" style="display:none">
        </ul>
        <ul>
            <li id="achievement-tmpl" style="display:none">
                <div class="coin"></div>
                <span class="achievement-name">???</span>
                <span class="achievement-description">???</span>
                <div class="achievement-sharing">
                  <a href="" class="twitter"></a>
                </div>
            </li>
        </ul>
        
        <img src="img/common/thingy.png" alt="" class="preload">
        
        <div id="resize-check"></div>
		
        <script type="text/javascript">
            var ctx = document.querySelector('canvas').getContext('2d'),
                parchment = document.getElementById("parchment");
            
            if(!Detect.supportsWebSocket()) {
                parchment.className = "error";
            }
            
            if(ctx.mozImageSmoothingEnabled === undefined) {
                document.querySelector('body').className += ' upscaled';
            }
            
            if(!Modernizr.localstorage) {
                var alert = document.createElement("div");
                    alert.className = 'alert';
                    alertMsg = document.createTextNode("You need to enable cookies/localStorage to play WaxQuest");
                    alert.appendChild(alertMsg);

                target = document.getElementById("intro");
                document.body.insertBefore(alert, target);
            } else if(localStorage && localStorage.data) {
                parchment.className = "loadcharacter";
            }
        </script>
        
        <script src="js/lib/log.js"></script>
        <script>
                var require = { waitSeconds: 60 };
        </script>
        <script data-main="js/home" src="js/lib/require-jquery.js"></script>
	</body>
</html>