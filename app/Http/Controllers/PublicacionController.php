<?php

namespace App\Http\Controllers;

use App\Models\publicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = DB::table('publicacions')->get();
        return $publicaciones;
    }

    public function mayorPublicaciones()
    {
        //$publicaciones = DB::table('publicacions')->get();
        /*
        $query = DB::table('publicacions')
            ->select('users.name, users.id', DB::raw('COUNT(*)'))
            ->join('users', 'users.id', '=', 'publicacions.id_user')
            ->groupBy('users.id','users.name')
            ->get();
            */
            
        $query = DB::select('SELECT u.name, u.id, p.imagen, COUNT(*) as total FROM publicacions p 
            INNER JOIN users u ON p.id_user = u.id GROUP BY u.name, u.id, p.imagen ORDER BY total DESC');
        
        return $query;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
