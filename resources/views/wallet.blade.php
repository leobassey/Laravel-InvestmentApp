@extends('layouts.masterpage')
@section('title', 'Wallet')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

 <style type="text/css">
    .xcrud-list {
    min-width: 95%;
    width: auto;
    display: table !important;
    margin-bottom: 3px;
    table-layout: fixed;
}

table {
    border-collapse: collapse;
    border-spacing: 0
    }
    .table > thead > tr > th {
    vertical-align: bottom;
    border-bottom: 2px solid #dddddd;
}
.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
    padding: 5px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #F0F0F0;
    }
    .xcrud-th th {

    background: #efefef;
    white-space: nowrap;
   font-size: 16px;
   font-weight: bold;

}
th {
    text-align: left;
}
.btn-warning {
    color: #ffffff;
    background-color: #fbb450;
    border-color: #faa937;
}
.btn-xcrud, .btn-group-sm > .btn {

    padding: 0px 5px;
    font-size: 15px;
    line-height: 1.5;
    -webkit-border-radius: 0;
    border-radius: 0;

}
.btn-danger {

    color: #ffffff;
    background-color: #ee5f5b;
    border-color: #ec4844;

}
.btn-warning {

    color: #ffffff;
    background-color: #fbb450;
    border-color: #faa937;

}
.btn-danger {

    color: #ffffff;
    background-color: #ee5f5b;
    border-color: #ec4844;

}
/*.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: aliceblue;
}*/
</style>


<script>
  function payWithPaystack(){

    var paymentAmount = document.getElementById('txtamount').value;
    if(paymentAmount == "")
    {
        document.getElementById('amounterror').innerHTML = 'Please enter wallet amount';
        setTimeout(function(){document.getElementById('amounterror').innerHTML = ""}, 3000);
        return;
    }
    else if(isNaN(paymentAmount))
    {
        document.getElementById('amounterror').innerHTML = 'Wallet amount must be a numeric value';
        setTimeout(function(){document.getElementById('amounterror').innerHTML = ""}, 3000);
        document.getElementById('txtamount').value = "";
        return;
    }
    else if(paymentAmount == 0)
    {
        document.getElementById('amounterror').innerHTML = 'Wallet amount must be greater than zero';
        setTimeout(function(){document.getElementById('amounterror').innerHTML = ""}, 3000);
        document.getElementById('txtamount').value = "";
        return;
    }
    else
    {

    var walletamount = paymentAmount;
    paymentAmount += '0000';
    var paystackAmount = paymentAmount/100;
    var handler = PaystackPop.setup({
      key: 'pk_live_f3e722926b30a38c3171f7bdc0a54c8afb7d5a19',
    
      email: '{{$walletUser->Email}}',
      amount: paystackAmount,
      
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2347082846238"
            }
         ]
      },

      callback: function(response)
      {
        
        var transactionResponse = response.reference;
        var ajax = new XMLHttpRequest();
        var url = "/walletendpoint";
      
        var json = JSON.stringify({"walletamount":walletamount, "transactionResponse":transactionResponse});
        var fd = new FormData();
        fd.append("data", json);

          ajax.open("POST", url, true);
          ajax.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
          
          ajax.onreadystatechange = function()
          {
                if(ajax.status == 200 && ajax.readyState == 4)
               {

        document.getElementById('message').innerHTML = 'Transaction successful. Your transaction Id is ' + response.reference;
        setTimeout(function(){document.getElementById('message').innerHTML = ""}, 9000);
        
         window.location.reload();
        
                }

          }

        ajax.send(fd);

         // alert('success. transaction ref is ' + response.reference);


      },
      onClose: function()
      {
          //alert('window closed');
      }
      
    });
    handler.openIframe();
    }
  }
</script>   


<script>
  function TestPay(){

    var paymentAmount = document.getElementById('txtamount').value;
    if(paymentAmount == "")
    {
        document.getElementById('amounterror').innerHTML = 'Please enter wallet amount';
        setTimeout(function(){document.getElementById('amounterror').innerHTML = ""}, 3000);
        return;
    }
    else if(isNaN(paymentAmount))
    {
        document.getElementById('amounterror').innerHTML = 'Wallet amount must be a numeric value';
        setTimeout(function(){document.getElementById('amounterror').innerHTML = ""}, 3000);
        document.getElementById('txtamount').value = "";
        return;
    }
    else if(paymentAmount == 0)
    {
        document.getElementById('amounterror').innerHTML = 'Wallet amount must be greater than zero';
        setTimeout(function(){document.getElementById('amounterror').innerHTML = ""}, 3000);
        document.getElementById('txtamount').value = "";
        return;
    }
    else
    {

      var walletamount = paymentAmount;
    

        var transactionResponse ="12345";
        var ajax = new XMLHttpRequest();
        var url = "/walletendpoint";
      
        var json = JSON.stringify({"walletamount":walletamount, "transactionResponse":transactionResponse, _token: '{!! csrf_token() !!}'});
        var fd = new FormData();
        fd.append("data", json);

          ajax.open("POST", url, true);
          ajax.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
          ajax.onreadystatechange = function()
          {
                if(ajax.status == 200 && ajax.readyState == 4)
               {

        document.getElementById('message').innerHTML = 'Transaction successful. Your transaction Id is ' + transactionResponse;
        setTimeout(function(){document.getElementById('message').innerHTML = ""}, 9000);
        
         window.location.reload();
        
                }

          }

        ajax.send(fd);

         // alert('success. transaction ref is ' + response.reference);


      }
  }
</script>   
<div class="content-wrapper">
   <section class="content-header">
      <h1>
     My wallet
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> dashboard</a></li>
        <li><a href="{{route('wallet')}}">Wallet</a></li>
        <li class="active">Wallet</li>
      </ol>
    </section>

    <section class="content">
  
  <section class="content container-fluid">

    

        <section class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="height:60px; padding-top:8px; font-size:18px;">Available Balance : <span style="font-size:30px"> &#8358; {{number_format($walletUser->Balance, 2)}}</span></div>
                    <div class="card-body"
                            
                            <div class="">
                            <div class="mt-3"  style="margin-left:150px">
                             @csrf
                               <script src="https://js.paystack.co/v1/inline.js"></script>
                                 <p class="text-center mb-4">
                        
                <div class="amounterror  mb-4 ml-5" id="amounterror" name="amounterror"></div>
                 <div class="messageDiv  mb-4 ml-5" id="message" name="message"></div>
                 </p>
                                <div class="form-group">
                                    <label for="firstname">Amount</label>
                                    <input type="number" class="form-control" id="txtamount" placeholder="Enter amount" name="txtamount"  style="width:67%" require>
                                </div>
                              
   <button type="submit" class="btn btn-info mb-5" style="background-color: #fbb450; border: solid 1px #fbb450" id="pay" name="pay" onclick="payWithPaystack()">Fund wallet</button>
    <button type="submit" class="btn btn-info mb-5" style="background-color: #fbb450; border: solid 1px #fbb450" id="pay" name="pay" onclick="TestPay()">Fund wallet</button>
                              
                            </div>
                             </div>
                             </div>
  
   
    

                        </section>   
    </section>

    <section class="content">
@if($transactionLists->isEmpty())
<p>No transaction history</p>
@else
<h4 class="text-center">Transaction history</h4>
<table  class="display nowrap" cellspacing="0" width="100%" id="transaction">
<thead>
<tr class="xcrud-th">
<th>Transaction Id</th>
<th>Amount</th>
<th>Log</th>
<th>Transaction Type</th>
<th>Transaction Date</th>
</tr>
</thead>
<tbody>
@foreach($transactionLists as $tl)
<tr>
<td>{{$tl->transaction_Id}}</td>
<td>&#8358; {{number_format($tl->amount, 2)}}</td>
<td>{{$tl->log_message}}</td>
<td>{{$tl->transaction_type}}</td>
<td>{{$tl->transaction_date}}</td>
</tr>
@endforeach
</tbody>
</table>
@endif

<script>
$(document).ready(function(){
 $('#transaction').dataTable();
});
/*$(document).ready(function() {
    $('#contact-detail').dataTable({
    "scrollX": true,
    "pagingType": "numbers",
        "processing": true,
        "serverSide": true,
        "ajax": "server.php"
    } );
} );*/
</script>

    </section>

  </div>

@endsection