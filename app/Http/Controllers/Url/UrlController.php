<?php

namespace App\Http\Controllers\Url;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UrlController extends Controller
{

    /**
     * @return mixed
     */
    public function urllist()
    {
        $result = DB::table('t_urllist')
            ->where('flag', '=', '1')
            ->orderBy('url')
            ->get();

        return view('url.urllist')
            ->with('result', $result);
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        DB::table('t_urllist')->where('id', '=', $id)->update(['flag' => '9']);
        return redirect('/urllist');
    }


    /**
     * @param $id
     */
    public function tagset($id)
    {
        return view('url.tagset')
            ->with('id', $id);
    }


    /**
     *
     */
    public function taginput()
    {
        $update = [];
        $update['tag1'] = trim($_POST['tag1']);
        $update['tag2'] = trim($_POST['tag2']);
        $update['tag3'] = trim($_POST['tag3']);

        DB::table('t_urllist')->where('id', '=', $_POST['id'])->update($update);

        return redirect('/urllist');
    }


}
