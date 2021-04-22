<?php

namespace Modules\Apollo\Http\Controllers;

use Illuminate\Http\{Request,Response};
use Illuminate\Routing\{Controller,Redirector};
use Session,DB,Redirect;
use Modules\Setup\Init;
use Modules\Apollo\Entities\{ Breakdown, Random};
class ApolloController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {

        $rand = Random::get();
        $break = Breakdown::get();
        return view('apollo::index',  compact( 'rand', 'break'));
    }


    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        
       
        $ran_num = rand(5, 10);
        $names = array(
        'Kai',
        'Sehun',
        'Xiumin',
        'Chanyeol',
        'Lay',
        'Baekhyun',
        'Kyungsoo',
        'Suho',
        'Chen',
        );
        $rand_name = $names[rand ( 1 , count($names) -1)];
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $rand_alpnum = '';
        $length = 5;
        for ($i = 0; $i < $length; $i++) {
            $rand_alpnum .= $characters[rand(0, $charactersLength - 1)];
        }

        for($x=0; $x < $ran_num; $x++)
        {
            $rand = Random::create([
                        'values' => $rand_name,
                        'flag' => ''
                    ]);

             for($x=0; $x < $ran_num; $x++)
                {
                    Breakdown::create([
                        'values' => $rand_alpnum,
                        'random_id' => $rand->id
                    ]);
                }
        }


        return redirect()->route('apollo.index');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('apollo::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('apollo::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
