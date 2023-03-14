<h3>Fornecedor</h3>

@php 
   /*if(!<condicao>){ //enquanto a executa se o retorno for true

   }

   }*/
@endphp

@isset($fornecedores)

         @forelse($fornecedores as $indice => $fornecedor)
         
         Iteração atual: {{ $loop->iteration }}
         <br>
         fornecedor:  {{  $fornecedor ['nome'] }}
         <br>
         Status: {{  $fornecedor ['status'] }}
         <br>
         CNPJ: {{  $fornecedor ['cnpj'] }}
         <br>
         Telefone: ({{  $fornecedor ['ddd'] ?? 'dado nao foi preenchido' }}) {{  $fornecedor ['telefone'] ?? '' }}
       
         <br>
         @if($loop->first)
            primeira interação do loop
            <br>
            total de registros: {{ $loop->count }}
         @endif

         @if($loop->last)
              ultima interação do loop
             
          @endif
         <hr>
         @empty
            nao existem fornecedores cadastrados!!

           
      @endforelse
   @endisset

 
