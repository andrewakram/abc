<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Url;
use DB;

class UrlController extends Controller
{
    public function all_urls(){
        $urls = Url::orderBy('url_id','asc')->get();
        return response(['urls' => $urls]);
    }

    public function get_url($url_id){
        $urls = Url::where('url_id',$url_id)->get();
        return response(['urls' => $urls]);
    }

    public function insert_url(Request $request){
        $add                = new Url();
        $add->url_name      = request('url_name');
        $add->url_status    = request('url_status');
        $add->save();
        return "success";
    }

    public function update_url(Request $request,$url_id){
        DB::table('urls')
            ->where('url_id', $url_id)
            ->update([
                'url_name'      =>request('url_name'),
                'url_status'    =>request('url_status'),
            ]);
        return "success";
    }

    public function delete_url($url_id){
        Url::where('url_id', $url_id)->forcedelete();
        return "success";
    }
}
