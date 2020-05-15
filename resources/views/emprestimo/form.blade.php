@include('emprestimo.replicado',['codpes'=>Auth::user()->codpes])

@section('javascripts_head')
  <script src="{{asset('/js/script.js')}}"></script>
@endsection('javascript_head')


<div class="form-group}}">
    <label for="data_retirada" class="control-label"><b>Data que foi ou vai ser retirado o Equipamento:</b></label>
    <input autocomplete="off" class="form-control datepicker" name="data_retirada" type="text" id="data_retirada" value="{{ old('data_retirada',$emprestimo->data_retirada) }}" >
</div>

<div class="form-group">
    <label for="patrimonio" class="control-label"><b> Número de Patrimônio do Equipamento: </b></label>
    <input class="form-control patrimonio" name="patrimonio" type="text" id="patrimonio" value="{{ old('patrimonio',$emprestimo->patrimonio)}}" >
    <small>Exemplo: 008.034111</small>
</div>

<div class="form-group">
    <label for="motivo" class="control-label"><b> Motivo: </b></label>
    <textarea class="form-control" name="motivo">{{ old('motivo',$emprestimo->motivo)}}</textarea>
</div>

<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="termo" name="termo" value="termo">
    <label class="form-check-label" for="termo">
    <i>Pelo presente assumo a responsabilidade civil e criminal a utilização do bem acima.
    Estou ciente que a Faculdade de Filosofia, Letras e Ciências Humanas da Universidade de
São Paulo, poderá, a seu critério, revogar a presente permissão a qualquer momento, e que devolverei o material
aqui descrito.</i>
    </label>
  </div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="Enviar">
</div>
