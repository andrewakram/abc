1-install xampp
2-open the directory [xampp/htdocs] in command line
3-run the command [composer global require laravel/installer]
4-open the folder xampp/htdocs
5-put the folder [abc] in path [xampp/htdocs]
//---------------------------------------------------

//-----------------APIs------------------------------
//The register api using [POST] method
localhost/abc/public/api/register

//The login api using [POST] method
localhost/abc/public/api/login

//get all urls api using [GET] method
localhost/abc/public/api/urls

//create new url api using [POST] method
//parameters >> url_name=[string],url_status=[0 or 1]
localhost/abc/public/api/url/create

//get specific url by (url_id) api using [GET] method
localhost/abc/public/api/url/get/{url_id}

//delete specific url by (url_id) api using [DELETE] method
localhost/abc/public/api/url/delete/{url_id}

//update specific url by (url_id) api using [PATCH] method
//parameters >> url_id=[int], url_name=[string], url_status=[0 or 1]
localhost/abc/public/api/url/update/{url_id}

