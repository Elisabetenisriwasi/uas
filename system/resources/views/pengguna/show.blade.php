@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data User
				</div>
				<div class="card-body">
					<table class="table">
					<tbody>
						<h3>{{$user->nama}}</h3>
						<hr>
						<p>
						{{"@".$user->username}} |
						  email : {{$user->email}} 
					
						</p>
						<p>
						 No Handphone : {{$user->detail->no_handphone}}
						</p>
						
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection