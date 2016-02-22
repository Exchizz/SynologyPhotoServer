<?php
include("base.php");
function getCurrentUri()
{
	$basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
	$uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
	if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
	$uri = '/' . trim($uri, '/');
	return $uri;
}

if(isGet() && strpos(getCurrentUri(), "photo/webapi/PhotoStation.api") !== false){
	header("Content-Type: text/plain");
	error_log("GET: PhotoStation.api");
	echo serverSupports();
} else if(isPost() && strpos(getCurrentUri(), "photo/webapi/query.php") !== false){
	echo '{"success":true,"data":{"SYNO.PhotoStation.Auth":{"path":"auth.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.Info":{"path":"info.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.Album":{"path":"album.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.Permission":{"path":"permission.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.Photo":{"path":"photo.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.Thumb":{"path":"thumb.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.Cover":{"path":"cover.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.SmartAlbum":{"path":"smart_album.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.File":{"path":"file.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.Download":{"path":"download.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.Category":{"path":"category.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.About":{"path":"about.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.Tag":{"path":"tag.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.PhotoTag":{"path":"photo_tag.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.Comment":{"path":"comment.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.Timeline":{"path":"timeline.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.Group":{"path":"group.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.Rotate":{"path":"rotate.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.SlideshowMusic":{"path":"slideshow_music.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.DsmShare":{"path":"dsm_share.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.SharedAlbum":{"path":"shared_album.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.PhotoLog":{"path":"log.php","minVersion":1,"maxVersion":1},"SYNO.PhotoStation.Path":{"path":"path.php","minVersion":1,"maxVersion":1},"SYNO.API.Info":{"path":"query.php","minVersion":1,"maxVersion":1}}}';

	error_log("query: ".print_r($_POST,1));

} else if(isPost() && strpos(getCurrentUri(), "photo/webapi/auth.php") !== false){
	echo '{"success":true,"data":{"sid":"3el27sethg3c1b1f7p4fs6qa83","username":"mneerup","reg_syno_user":true,"is_admin":false,"allow_comment":false,"permission":{"browse":true,"upload":true,"manage":true},"enable_face_recog":false,"allow_public_share":false}}';
	error_log("auth: ".print_r($_POST,1));

} else if(isPost() && strpos(getCurrentUri(), "photo/webapi/info.php") !== false){
	echo '{"success":true,"data":{"version_string":"6.3-2962","version":2962,"dsm_version":5644,"title":"","about_me_title":"About Me","sort_by":"filename","sort_direction":"asc","use_album_explorer":true,"paging_use_bar":true,"paging_item_count":50,"folder_sort_direction":"asc","allow_download_album":false,"allow_download_orig":false,"allow_download_video":false,"disable_right_button":false,"hide_search":false,"hide_gps_from_normal_user":false,"hide_rss_feed":false,"enable_blog":false,"external_host":"http:\/\/172.16.0.10:80","external_host_quickconnect":"http:\/\/172.16.0.10:80","external_host_external_ip":"http:\/\/172.16.0.10:80","allow_social_share":true,"allow_social_upload":false,"allow_social_upload_guest":false,"social_network_list":[{"name":"Facebook","enable":true,"allowShare":true,"allowSingleUpload":true,"allowMultiUpload":true,"allowPhoto":true,"allowVideo":false},{"name":"Twitter","enable":true,"allowShare":true,"allowSingleUpload":true,"allowMultiUpload":false,"allowPhoto":true,"allowVideo":false},{"name":"Plurk","enable":true,"allowShare":true,"allowSingleUpload":false,"allowMultiUpload":false,"allowPhoto":false,"allowVideo":false},{"name":"Google+","enable":true,"allowShare":true,"allowSingleUpload":true,"allowMultiUpload":true,"allowPhoto":true,"allowVideo":false},{"name":"Weibo","enable":true,"allowShare":true,"allowSingleUpload":true,"allowMultiUpload":false,"allowPhoto":true,"allowVideo":false},{"name":"QQ","enable":true,"allowShare":true,"allowSingleUpload":true,"allowMultiUpload":false,"allowPhoto":true,"allowVideo":false},{"name":"YouTube","enable":true,"allowShare":false,"allowSingleUpload":true,"allowMultiUpload":false,"allowPhoto":false,"allowVideo":true},{"name":"Flickr","enable":true,"allowShare":false,"allowSingleUpload":true,"allowMultiUpload":true,"allowPhoto":true,"allowVideo":false},{"name":"FacebookMessenger","enable":false,"allowShare":false,"allowSingleUpload":false,"allowMultiUpload":false,"allowPhoto":false,"allowVideo":false}],"virtual_tag":{"desc_tag":false,"geo_tag":false,"people_tag":false},"default_geo_location":{"lng":"","lat":""},"home_category":null,"default_album_public":false,"disable_aboutme":false,"show_album_hit":true,"use_dsm_account":true,"collapse_left_panel":false,"hide_lightbox_information":false,"use_pop_window_to_edit_desc":false,"def_album_disable_conversion":false}}';
	error_log("info: ".print_r($_POST,1));

} else if(isPost() && strpos(getCurrentUri(), "photo/webapi/category.php") !== false){
	echo 'offset=0&limit=120&api=SYNO.PhotoStation.Category&method=list&version=1';
	error_log("Category: ".print_r($_POST,1));

} else if(isPost() && strpos(getCurrentUri(), "photo/webapi/album.php") !== false){
	echo '{"success":true,"data":{"total":0,"offset":0,"items":[]}}';
	error_log("Album: ". print_r($_POST,1));

} else if(isPost() && strpos(getCurrentUri(), "photo/webapi/file.php") !== false){
	error_log("File: ". print_r($_POST,1));
	error_log("File: ". print_r($_FILES,1));

	file_put_contents("upload_files.txt", print_r($_FILES,1));

	$allGood = true;
//	foreach ($_FILES["original"]["error"] as $key => $error) {
//		if ($error == UPLOAD_ERR_OK) {
		        $tmp_name = $_FILES["original"]["tmp_name"];
		        $name = $_FILES["original"]["name"];
		        move_uploaded_file($tmp_name, "images/$name");
//		} else {
//			$allGood = false;
//			error_log("file upload failed: ". $error);
//		}
//	}
	if($allGood){
		echo '{"success":true}';
	} else {
		echo '{"success":false}';
	}
} else {
	error_log("unknown request: ".getCurrentUri() );
	echo "Requested uri: ";
}

?>


