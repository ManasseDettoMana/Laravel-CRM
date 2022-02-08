@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card" id="emp_card">
            <table>
                <thead>
                    <tr>
                        <th class="col-xl-3">NOME</th>
                        <th class="col-xl-3">COGNOME</th>
                        <th class="col-xl-3">AZIENDA</th>
                        <th class="col-xl-3">CELL</th>
                        <th class="col-xl-3">MAIL</th>
                        <th class="col-xl-3"><i class="fas fa-pencil"></i></th>
                        <th class="col-xl-3"><i class="fas fa-trash"></i></th>
                        
                    </tr>
                </thead>
                <tbody>
                    @forelse ($emps as $em)
                        <tr>
                            <td class="col-xl-3">{{$em->nome}}</td>
                            <td class="col-xl-3">{{$em->cognome}}</td>
                            <td class="col-xl-3">{{$em->azienda}}</td>
                            <td class="col-xl-3">{{$em->cell}}</td>
                            <td class="col-xl-3">{{$em->mail}}</td>
                        </tr>
                    @empty
                        <tr><td>NESSUN DIPENDENDTE TROVATO</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $emps->links() }}
        </div>
@endsection