

@extends('layouts.admin-panel')

@section('content')
<div class="container-fluid small">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Customer Chat bot</h1>
  <p class="mb-4">Any query or information you need! Chat with bot.</p>
  
  <iframe width="350" height="430" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/f670ccf8-a131-4b87-9d58-dc79c55decbc"></iframe>

</div>
@endsection

@push('css')
<style>
.chatbox-list{
  height:75vh;
  overflow-y: scroll;
  display: flex;
  flex-direction: column-reverse;
}

.clientbox{
  overflow-y: scroll;
}

::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  width: 5px;
  background: #f5f5f5;
}

::-webkit-scrollbar-thumb {
  width: 1em;
  background-color: #ddd;
  outline: 1px solid slategrey;
  border-radius: 1rem;
}

.text-small {
  font-size: 0.9rem;
}

.rounded-lg {
  border-radius: 0.5rem;
}

input::placeholder {
  font-size: 0.9rem;
  color: #999;
}
</style>
@endpush