@extends('master')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5">
                <p>
                    <strong>Atenção!</strong> Projeto desenvolvido para estudar o plugin do jQuery, DataTable
                </p>
                <a class="btn btn-primary" href="{{ route('users.create') }}">Adicionar Usuário</a>
                <hr>
                <h4>Usuários</h4>
                <table class="table table-striped" id="datatable">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection

@section('css')
    
@endsection

@section('js')
    <script>
        $(function () {
            // No caso de uma aplicação maior é interessante a gente
            // selecionar por classe para que cada tabela DataTable 'herde' 
            // Esta configuração
            $("#datatable").DataTable({
                // Comando indicando que nossa tabela deve se adequar a 
                // o tamanho do dispositivo que o usuario estiver acessando nosso site
                responsive: true,
                // pre-defini um numero de registros a serem exibidos por paginação
                pageLength: 10,
                // Linguagem
                language: {
                    // Texto exibido quando a tabela estiver vazia
                    sEmptyTable: "Nenhum registro encontrado",
                    // Essa string fornece informações ao usuário final sobre as informações que estão atualmente em exibição na página
                    sInfo: "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    // Exibir string de informações para quando a tabela estiver vazia. Normalmente, o formato desta string deve corresponder a sInfo.
                    sInfoEmpty: "Mostrando 0 até 0 de 0 registros",
                    // Informaçõs mostrada quando o usuario filtra
                    sInfoFiltered: "(Filtrados de _MAX_ registros)",
                    // Detalhe a ação que será executada quando o menu suspenso para a opção de comprimento de paginação for alterado. A variável ' MENU '
                    //  é substituída por uma lista de seleção padrão de 10, 25, 50 e 100, e pode ser substituída por uma caixa de seleção personalizada, 
                    // se necessário.
                    sLengthMenu: "_MENU_ resultados por página",
                    // Quando estamos alimentando nossa tabela via ajax, Este texto será usado para indicar ao usuário que os dados estão 
                    sLoadingRecords: "Carregando...",
                    // Texto que será exibido quando o usuário realizar alguma ação no nossa tabela
                    sProcessing: "Processando...",
                    // texto a ser exibido quando nenhum dado foi encontrado após a filtragem do usuário
                    sZeroRecords: "Nenhum registro encontrado",
                    sSearch: "Pesquisar",
                    oPaginate: {
                        sNext: "Próximo",
                        sPrevious: "Anterior",
                        sFirst: "Primeiro",
                        sLast: "Último"
                    },
                    oAria: {
                        sSortAscending: ": Ordenar colunas de forma ascendente",
                        sSortDescending: ": Ordenar colunas de forma descendente"
                    }
                }
            });
        });
    </script>
@endsection