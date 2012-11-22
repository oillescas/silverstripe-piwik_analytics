<?php
class PiwikAnalytics extends DataExtension

{
    static $db = array(
        'PiwikAnalyticsUrlServer' => 'Text',
				'PiwikAnalyticsAccountID' => 'Int'
    );
    
        public function updateCMSFields(FieldList $fields)  {
                $fields->addFieldToTab('Root.Piwik', new TextField('PiwikAnalyticsUrlServer', 'Piwik Analytics Url Server (http://...)'));
                $fields->addFieldToTab('Root.Piwik', new NumericField('PiwikAnalyticsAccountID', 'Piwik Analytics Id domain'));
        }
         
        function contentControllerInit($controller) {
        }
         
}