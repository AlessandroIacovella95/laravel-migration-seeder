@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">

    @forelse($trains as $train)
      <p>
        <strong>Azienda</strong>: {{ $train->azienda }} <br>
        <strong>Stazione di partenza</strong>: {{ $train->stazione_di_partenza }} <br>
        <strong>Stazione di arrivo</strong>: {{ $train->stazione_di_arrivo }}<br>
        <strong>Data di partenza</strong>: {{ $train->data_di_partenza }}<br>
        <strong>Orario di partenza</strong>: {{ $train->orario_di_partenza }}<br>
        <strong>Orario di arrivo</strong>: {{ $train->orario_di_arrivo }}<br>
        <strong>Codice treno</strong>: {{ $train->codice_treno }}<br>
        <strong>Numero carrozze</strong>: {{ $train->numero_di_carrozze }}
      </p>
      <hr>
    @empty
      <h2>Non ci sono risultati</h2>
    @endforelse
  </section>
@endsection