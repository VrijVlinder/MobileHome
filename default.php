<?php if(!defined('APPLICATION')) die();

$PluginInfo['MobileHome'] = array(
   'Name' => 'MobileHome',
   'Description' => 'Adds a MobileHome Landing page with links to various parts of the forum',
   'Version' => '1.0',
   'MobileFriendly' => TRUE,
   'Author' => "VrijVlinder"
);

class MobileHomePlugin extends Gdn_Plugin {

public function MenuModule_BeforeToString_Handler($Sender) {

  // The event is fired by all the menus when they are rendered. Using HtmlId, 
  // we can distinguish which menu fired it and alter it accordingly

  if(($Sender->HtmlId == 'Menu') && IsMobile()) {
    $Sender->AddLink('MobileHome', Img('/plugins/MobileHome/mhicon.png', array('alt' => T('MobileHome'))), '/mobilehome',  array('class' => 'MobileHome'));
  }
}

  //this was replaced with the function above
  //  public function Base_Render_Before($Sender) {
  //      $Session = Gdn::Session();
  //     if ($Sender->Menu) {
  //      
   //      }
  //  }

   

    public function PluginController_MobileHome_Create($Sender) {
   
        $Session = Gdn::Session();

        if ($Sender->Menu)  {
            $Sender->ClearCssFiles();
            $Sender->AddCssFile('mobile.css');
            $Sender->AddCssFile('style.css');
            $Sender->AddCssFile('moho.css', 'plugins/MobileHome');
            $Sender->MasterView = 'default';

            $Sender->Render('MobileHome', '', 'plugins/MobileHome');
        }
    
   
    }
  public function OnDisable() {
            $matchroute = '^mobilehome(/.*)?$';
             
             Gdn::Router()-> DeleteRoute($matchroute); 
  
  }
 
    public function Setup() {
  
             $matchroute = '^mobilehome(/.*)?$';
             $target = 'plugin/MobileHome$1';
        
             if(!Gdn::Router()->MatchRoute($matchroute))
                  Gdn::Router()->SetRoute($matchroute,$target,'Internal'); 
          
    }

}