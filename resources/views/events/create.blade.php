@extends('layouts.app')

@section('head')
	<script src="{{ asset('global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js')}}"></script>
	<script src="{{ asset('global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js')}}"></script>
	<script src="{{ asset('global_assets/js/plugins/uploaders/fileinput/fileinput.min.js')}}"></script>
	
	
	
	<script src="{{ asset('global_assets/js/demo_pages/uploader_bootstrap.js')}}"></script>
	
	<!-- Theme JS files -->
	<script src="{{ asset('global_assets/js/plugins/editors/summernote/summernote.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/demo_pages/editor_summernote.js') }}"></script>
	<!-- /theme JS files -->

@endsection

@section('content')

@if (session('status'))
    <div class="alert alert-success alert-styled-left alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
        <span class="font-weight-semibold">{{ session('status') }}</span>
    </div>
@endif
@if ($errors->any())

        <div class="alert alert-warning alert-styled-left alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
            <span class="font-weight-semibold">Atención!</span>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>


@endif

<div class="card">
		<div class="card-header header-elements-inline">
			<h5 class="card-title">Crear Evento</h5>
			<div class="header-elements">
				<div class="list-icons">
            		
            	</div>
        	</div>
		</div>

		<div class="card-body">
			<form id="formulario" action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
				
				@csrf
				
				<div class="form-row">
					
					<div class="form-group col-md-6">
				
						<label for="">Titulo</label>
					
						<input class="form-control" type="text" name="title" required>
					
					</div>

					<div class="form-group col-md-6">
				
						<label for="">Precio</label>
					
						<input class="form-control" type="text" name="price" required>
					
					</div>


				</div>

				
				
				<div class="form-row">

					<div class="form-group col-md-6">
						
						<label for="">Descripcion</label>
						<input name="description" type="text" class="form-control" required>

					</div>

					<div class="form-group col-md-6">
						
						<label for="">Direccion</label>
						<input name="address" type="text" class="form-control" required>

					</div>

				</div>

				<div class="form-row">
					
					<div class="form-group col-md-6">
						
						<label for="">Fecha</label>
						<input class="form-control" type="date" name="date_start" required>

					</div>

					<div class="form-group col-md-6">
						
						<label for="">Hora</label>
						<input class="form-control" type="text" name="hour" required>

					</div>

				</div>

				<div class="form-row">
					
					<div class="form-group col-md-6">
						
					
						<label for="">Acerca del evento</label>
					
						<div id="aboutnote" class="summernote"></div>
					
						<input id="about" class="form-control" type="hidden" name="about" required>
					

					</div>

					<div class="form-group col-md-6">
						
				
						<label for="">Temario</label>
					
						<div id="temarynote" class="summernote"></div>
					
						<input id="temary" class="form-control" type="hidden" name="temary" required>
					
				

					</div>
					
					<div class="form-group col-md-6">
						<label for="">País</label>
					
						<select class="form-control" name="contry_id">
							@forelse($countries as $country)
								<option value="{{$country->id}}">{{$country->name}}</option>
							@empty
							@endforelse
						</select>
					</div>

				</div>


				<div class="form-group">
					
					<label for="">Imagen</label>
				
					<input class="file-input" type="file" data-show-caption="false" data-show-upload="false" data-show-remove="true" name="img" required>
				
				</div>

				<button type="submit" class="btn btn-success">Guardar</button>
			</form>
		</div>
	</div>
@endsection

@section('scripts')
<script type="text/javascript">
	$('#formulario').submit(function(){
		var markupStr = $('#aboutnote').summernote('code');
		$('#about').val(markupStr);

		var markupStr2 = $('#temarynote').summernote('code');
		$('#temary').val(markupStr2);
			
	});
	
</script>
@endsection