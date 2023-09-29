@extends("layouts.public")

{{-- Sezione che andrà nel Main --}}
@section("content")
<div class="container">
    <div class="row">
        <div class="col p-3">
            <div class="bg-warning">
            <h1 class="text-center text-primary border border-warning p-3">Orari Treni Partenze/Arrivi</h1>
        </div>
        {{-- Tabella treni --}}
            <table class="table table-warning table-striped">
                <thead>
                    <tr>
                        {{-- Titoli tabella --}}
                        <th>Azienda</th>
                        <th>Stazione di partenza</th>
                        <th>Stazione di arrivo</th>
                        <th>Orario di partenza</th>
                        <th>Orario di arrivo</th>
                        <th>Codice treno</th>
                        <th>Numero carrozze</th>
                        <th>Treno in orario</th>
                        <th>Treno cancellato</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- ciclo foreach che stampa dinamicamente i dati della tabella --}}
                    @foreach($trains as $train)
                    <tr>
                        <td>{{$train['Azienda']}}</td>
                        <td>{{$train['stazione_di_partenza']}}</td>
                        <td>{{$train['stazione_di_arrivo']}}</td>
                        <td>{{$train['orario_di_partenza']}}</td>
                        <td>{{$train['orario_di_arrivo']}}</td>
                        <td>{{$train['codice_treno']}}</td>
                        <td>{{$train['numero_carrozze']}}</td>
                        <td>{{$train['treno_in_orario']}}</td>
                        <td>{{$train['treno_cancellato']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection