<?php
    class PiwikAnalyticsExtender extends DataExtension
    {
            function contentControllerInit($controller) {
                                     
                    $accountId = $this->owner->SiteConfig->PiwikAnalyticsAccountID;
                    $serverUrl = $this->owner->SiteConfig->PiwikAnalyticsUrlServer;
                                     
                    if($accountId!=""&&$serverUrl!="") {
                     
                        Requirements::customScript('
								var pkBaseURL = (("https:" == document.location.protocol) ? "https://'.$serverUrl.'" : "http://'.$serverUrl.'");
								document.write(unescape("%3Cscript src=\'" + pkBaseURL + "piwik.js\' type=\'text/javascript\'%3E%3C/script%3E"));
								</script><script type="text/javascript">
								try {
								var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", '.$accountId.');
								piwikTracker.trackPageView();
								piwikTracker.enableLinkTracking();
								piwikTracker.setCustomData({SiteSearch_Results: XX});
								} catch( err ) {}
							');         
                    }
            }
    }
