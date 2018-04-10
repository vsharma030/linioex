<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use GuzzleHttp;

class Controller extends BaseController
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function temp()
    {

        $client = new GuzzleHttp\Client();
        $res = $client->get('https://api.github.com/issues', ['auth' => ['vsharma030', 'github030']],
            [
                'headers' => [
                    'Accept' => 'application/vnd.github.symmetra-preview+json',
                ]
            ]
        );
        $x = $res->getBody();
        $y = json_decode($x);

        return view('list', compact('y'));

    }


    /* public function create(Request $request)
     {
         $client = new  GuzzleHttp\Client([
             'headers' => ['Accept' => 'application/vnd.github.symmetra-preview+json',
                 'Authorization' => 'token  6edcda38195fa1d944caa25f98994bf56c2ea536'
             ]
         ]);
         $data = $request->json()->all();
 //         $id = $data['id'];
         $response = $client->post('https://api.github.com/repos/vsharma030/hello-world/issues',
             ['body' =>json_encode(
                 [  //$data

                     'title' => 'Kan',
                     'body' =>'ISBE',
                     'labels' => [
                         'New Issue'
                     ], 'assignees' => ['vsharma030'],

                 ]
             )]
         );
         //$send = $client->post('http hais://api.github.com/issues/repos/');
         dd($response);
         return view('create');
     }*/

    public function create(Request $request)
    {
        /*$client = new  GuzzleHttp\Client([
            'headers' => ['Accept' => 'application/vnd.github.symmetra-preview+json',
                'Authorization' => 'token  1bc2d8c1535da737f2b47983450158363dc7876d'


            ]
        ]);
      $data = $request->all();
        //dd($data);dd($request->all());
        // dd(GuzzleHttp\json_encode($data));
        $response = $client->post('https://api.github.com/repos/vsharma030/hello-world/issues',
           /* ['body' => json_encode(
                                        ['title'=> 'lamba',
                                        'body'=> 'example',
                                        'labels'=> [
                                            'bug'
                                        ], 'assignees' => ['vsharma030'],

                                        ]
            )
//            GuzzleHttp\json_encode($data)
            ]

           [GuzzleHttp\json_encode($data)]
        );*/
       $githubClient= new GuzzleHttp\Client();
        $ers=$githubClient->post('https://api.github.com/repos/vsharma030/hello-world/issues', [
            'headers' => ['Accept' => 'application/vnd.github.symmetra-preview+json',
                'Authorization' => 'token  1bc2d8c1535da737f2b47983450158363dc7876d'


            ]
        ], ['body'=>json_encode($request->except('_token'))]);
      //$send = $client->post('http hais://api.github.com/issues/repos/');
//    dd($r
   //dd(json_encode($request->except('_token')));
        return view('create');
   }

    public function createView()
    {
        return view('create');
    }

    public function cont()
    {
        $x = Request::capture();
    }
}
