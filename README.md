<h1>Google Chrome v.44 WordPress SSL Fix<br>by <a href="http://themeforest.net/user/IshYoBoy/portfolio?ref=IshYoBoy" target="_blank">IshYoBoy.com</a></h1>

<strong>1. SYMPTOMS:</strong>

<strike>The latest version of Google Chrome Browser does a very strange thing. It sends HTTPS header with value 1 which the is_ssl() WordPress function reads and sets the HTTPS as TRUE.</strike>

<strong>Update #1<.strong - 24.07.2015 - 13:05<br>
It seems the problems were caused due to a wrong implementation and usage of "$_SERVER['HTTP_HTTPS']" either by Themes, Plugins or Even Hosting providers.

What this results in is that even though your WordPress is not set to use SSL and no security certificate is present all files like CSS, JavaScripts, Images even all links are set to go through HTTPS connection.

The problem occurs only on the latest Google Chrome v.44 and everything works perfectly on Firefox, Opera, Safari and evene Google Chrome version 43.


<strong>2. RESULT:</strong>

This results in a majority of WordPress installs being broken (completely broken layout and functionality) and reported as unsafe.


<strong>3. WHAT THIS PLUGIN DOES:</strong>

The plugin unsets:

<code>unset( $_SERVER[‘HTTP_HTTPS’] );</code>

This ensures that the connection is always handled correctly. If this does not solve the problem, you might need to contact your hosting provider about this issue as SSL might be turned on before the WordPress even starts.


<strong>4. HOW TO USE:</strong>

Simply download this plugin using the "Download Zip" button in the right column of this GitHub page and install it via WordPress. You might have to use a different browser like FireFox, Opera or Safari to access the administration of your WordPress installation if you already have Google Chrome 44 where it is broken and thus inaccessible.

Remeber to deactivate and remove the plugin once the next version of Google Chrome is releasd. It is planned to be on the 27.07.2015 and a fix should already be a part of the release.


<strong>5. USEFUL LINKS:</strong>

Innitial Spunmonkey mention about the problem:<br>
http://spunmonkey.design/chrome-beta-44-causing-problems-with-httpsssl/
https://ma.ttias.be/chrome-44-sending-https-header-by-mistake-breaking-web-applications-everywhere/

Chromium Project Bug Tracker:<br>
https://code.google.com/p/chromium/issues/detail?id=505268
https://code.google.com/p/chromium/issues/detail?id=501842

<strong>6. CONTRIBUTORS</strong>

Thanks to <a href="https://github.com/tomsommer" target="_blank">Tom Sommer</a> and <a href="https://github.com/DanielRuf" target="_blank">Daniel Ruf</a> for the active approach in making the plugin better.


<strong>7. BUY ME A COFFEE:</strong>

Did this fix help you? Or even saved a lot of troubles?<br>
Well, it did for me and our business <a href="http://themeforest.net/user/IshYoBoy/portfolio?ref=IshYoBoy" target="_blank">IshYoBoy.com - Premium WordPress Themes</a>. 

I am always open to invitations for a hot cup of coffee in the form of a donation. Enjoy this fix!

<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=vlooman%40gmail%2ecom&lc=SK&item_name=IshYoBoy%2ecom&item_number=chrome44%2dfix&currency_code=EUR&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank"><img src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" width="147" height="47" /><a>
