<?php
/**
 * Presets class
 * generates some presets for different portions of the site.
 */
 
class presets {
  
	var $active = '';

		function GenerateNavbar() {
			global $set, $user;
			$var = array();
			
			if($user->group->type == 2)
			   $var[] = array("item",
					array("href" => $set->url."/admin/",
						"name" => "<i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i> Dashboard",
						"class" => $this->isActive("dashboard")),
						"id" => "dashboard");
			
			if($user->group->type == 3)					
					
			//edit page user //
			if($user->group->type == 3) 
			$var[] = array("dropdown",

			if($user->group->type == 2)						
			//--End-- edit page user //						
			if($user->group->type == 3)
			   $var[] = array("item",
					array("href" => $set->url."/admin/seo.php?id=1",
						"name" => "<i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i> SEO Tool",
						"class" => $this->isActive("seosettings")),
					"id" => "seosettings");		
					
			if($user->group->type == 3) // we make it visible for admins only						
			$var[] = array("dropdown",
				array(  array("href" => $set->url."/admin/theme.php",
							   "name" => "Theme",
							   "class" => 0),					  
					  array("href" => $set->url."/admin/home-settings.php?id=1",
							   "name" => "Home Settings",
							   "class" => 0),	
					  array("href" => $set->url."/admin/footer-settings.php?id=1",
							   "name" => "Footer Settings",
							   "class" => 0),	
							   
				  ),
				"class" => 0,
				"style" => 0,
				"name" => "<i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> Theme Settings",
				"id" => "theme");
		  // keep this always the last one
			$var[] = array("dropdown",
				array(  array("href" => $set->url."/profile.php?u=".$user->data->userid,
							   "name" => "My Profile",
							   "class" => 0),
					  array("href" => $set->url."/user.php",
							   "name" => "Account settings",
							   "class" => 0),
					  array("href" => $set->url."/privacy.php",
							   "name" => "Privacy settings",
							   "class" => 0),

					  array("href" => $set->url."/logout.php",
								 "name" => "Logout",
								 "class" => 0),
				  ),
				"class" => 0,
				"style" => 0,
				"name" => "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i> Hello, " .$user->filter->username,
				"id" => "user");

		  return $var;
		} 

	function setActive($id) {
	$this->active = $id;
	}

	function isActive($id) {
	if($id == $this->active)
	  return "active";
	return 0;
	}

}