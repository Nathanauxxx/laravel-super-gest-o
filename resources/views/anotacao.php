

 <!--
      $varial testada nao estiver definida
      ou
      $variavel testada possuir o valor null
      
   -->











   @php/*
    @for($i = 0; isset($fornecedores[$i]); $i++)

fornecedor: {{  $fornecedores[$i] ['nome'] }}
<br>
Status: {{  $fornecedores[$i] ['status'] }}
<br>
CNPJ: {{  $fornecedores[$i] ['cnpj'] }}
<br>
Telefone: ({{  $fornecedores[$i] ['ddd'] ?? 'dado nao foi preenchido' }}) {{  $fornecedores[$i] ['telefone'] ?? '' }}
<hr>
@endfor
@endisset
*/
@endphp




























   @php 
   /*
    @isset($fornecedores)
      fornecedor: {{  $fornecedores[0] ['nome'] }}
      <br>
      fornecedor: {{  $fornecedores[0] ['status'] }}
      <br>
      @isset($fornecedores[0] ['cnpj'])
      CNPJ: {{  $fornecedores[0] ['cnpj'] }}
          @empty($fornecedores[0] ['cnpj'])
            - vazio
         @endempty
      @endisset
   @endisset
   */
   @endphp



@php 
/*
@if( !($fornecedores[0]['status']=='s')) <!--  o ! inverte a condição -->
   fornecedor inativo
@endif
<br>
@unless( ($fornecedores[0]['status']=='s')) <!-- se o retorno da condição for falsa -->

fornecedor inativo
@endunless
<br>
*/
@endphp















@php 
 /*
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
   <h3>existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>existem varios fornecedores cadastrados</h3>
@else 
    <h3>ainda nao existem fornecedores cadastrados</h3>
@endif
codeigo blade acima
*/
@endphp