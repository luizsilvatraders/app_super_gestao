<h1>fornecedor</h1>


@php
    //kkkk
@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedor[0]['nome'] }}
    <br>
    Stutus: {{ $fornecedor[0]['status'] }}
    <br>
    CNPJ {{ $fornecedores[0]['cnpj']?? '' }}
@endisset
