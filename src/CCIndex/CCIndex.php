<?php

/**
* Standard controller layout.
* 
* @package VargCore
*/
class CCIndex implements IController {

   /**
    * Implementing interface IController. All controllers must have an index action.
    */
   public function Index() {   
      global $va;
      $va->data['title'] = "The Index Controller";
   }

}