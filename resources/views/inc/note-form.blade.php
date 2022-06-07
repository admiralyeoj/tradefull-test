<form name="note-form" id="note-form" method="post" action="{{url('form-submit')}}">
  @csrf
  <div class="form-group">
    <label for="title">Title *</label>
    <input id="title" type="text" class="form-control" name="title" placeholder="" required value="{{ $title ?? '' }}">
  </div>
  <div class="form-group">
    <label for="description">Example textarea</label>
    <textarea id="description" class="form-control" name="description" rows="5">{{ $description ?? '' }}</textarea>
  </div>

  <div class="mt-3 w-100 d-inline-block">
    <a href="{{  url('/') }}" class="btn btn-danger float-md-start">Back</a>
    <button type="submit" class="btn btn-dark float-md-end">{{ $button ?? 'Create Note' }}</button>
  </div>
</form>