<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use Illuminate\Http\Request;

class EmprestimosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emprestimos = Emprestimo::paginate(5);
        return view('emprestimo.index',array('emprestimos' => $emprestimos,'busca'=>null));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buscar(Request $request) {
        $emprestimos = Emprestimo::where('contato_id',
        '=', $request->input('busca'))->orwhere
        ('livro_id','=',$request->input('busca'))
        ->orwhere('obs','LIKE','%'.$request->input
        ('busca').'%')->paginate(5);
        return view('emprestimo.index', array
        ('emprestimos'=>$emprestimos,
        'busca'=>$request->input('busca')));
    }

    public function create()
    {
        $contatos = Contato::all();
        $livros = Livro::all();
       return view('emprestimo.create',['contatos'=>$contatos,
       'livros'=>$livros]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emprestimo = new Emprestimo();
        $emprestimo->contato_id = $request->input('contato_id');
        $emprestimo->livro_id = $request->input('livro_id');
        $emprestimo->datahora=
        \Carbon\Carbon::createFromFormat('d/m/Y H:i:s',
        $request->input('datahora'));
        $emprestimo->obs = $request->input('obs');
        $emprestimo->datadevolucao = null;

        if($emprestimo->save()){
            return redirect('emprestimos');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    public function show(Emprestimo $emprestimo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    public function edit(Emprestimo $emprestimo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emprestimo $emprestimo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emprestimo $emprestimo)
    {
        //
    }
}
