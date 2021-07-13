<?php

	class SetNewsUpload{

    public $newsTitle;
    public $newsDescription;
    public $newsLink;
    public $target_dir;
    public $target_file;
    public $imageFileType;
    public $uploadOk = 0;
    public $check;
    public $newFileName;

    public function setnewTitle(){
      return $newsTitle = $_POST['news-title'];
    }

    public function setnewsDescription(){
      return $newsDescription = $_POST['news-descript'];
    }
  
    public function setnewsLink(){
      return $newsLink = $_POST['news-link'];
    }

    // public function setvideoUpoad(){
    //   return $videoUpoad = $_POST['news-title'];
    // }
    public function setvideoUpoad(){
        $target_dir = "../assets/vidoes";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				// $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        //   if($target_file !== false) {
        //       $uploadOk = 1;
        //   } else {
        //       $uploadOk = 0;
        //   }
        //   if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        //       $uploadOk = 0;
		    //   } elseif ($_FILES["fileToUpload"]["size"] > 4000000) {
        //     $uploadOk = 0;
        //   }else{
        //     $newFileName = basename($_FILES["fileToUpload"]["name"]);
        //     move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        //   }
        //   return; 
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
          return  basename($_FILES["fileToUpload"]["name"]);
        } else {
          return "Something wrong";
        }
        return;
      }
  
    public function getNewsUpload(){

      echo "News Description: ".$this->setnewsDescription()."<br>";
      echo "News Link: "."<a href=".$this->setnewsLink().">".$this->setnewTitle()."</a>"."<br>";
      echo "Video: "."<img src=".$this->setvideoUpoad()." alt="."image here".">";
    }

    
	}
?>