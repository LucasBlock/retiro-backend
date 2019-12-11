
<form method="post" action="{{ route('acampamentos.store') }}">
@csrf
    <input type="text" value="" name="nome" dataplaceholder="Nome...">
    <input type="date" value="" name="inicio" dataplaceholder="Início...">
    <input type="date" value="" name="fim" dataplaceholder="Fim...">
    <input type="submit" value="Enviar">
</form>
