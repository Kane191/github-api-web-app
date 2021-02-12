<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use Illuminate\Http\Request;

class GithubController extends Controller
{
    //
    public function index(){

            $client = new \Github\Client();
            $repos = $client->api('repo')->all();

//            dd($repos);

            $data = [
                'repos' => $client->api('repo')->all(),
                'favourites' => Favourite::all(),
                'no' => 1,
            ];

            return view('index',$data);

    }
    public function dd(){
        $client = new \Github\Client();
        $repos = $client->api('repo')->all();

        dd($repos);
    }

    public function details($id){
        $client = new \Github\Client();
        $repo = $client->api('repo')->showById($id);
//        dd($repo);
        $data = [
            'repo' => $client->api('repo')->showById($id),
        ];
        return view('details', $data);
    }
    public function favourite($id){
        $favourite = new Favourite();
        $favourite->status = 1;
        $favourite->github_id = $id;
        $favourite->save();
        return redirect('/');
    }
}
