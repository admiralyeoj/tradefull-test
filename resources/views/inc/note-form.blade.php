<form>
  <div class="form-group">
    <label for="subject">Subject *</label>
    <input id="subject" type="text" class="form-control" name="subject" placeholder="" required value="{{ $subject ?? '' }}">
  </div>
  <div class="form-group">
    <label for="description">Example textarea</label>
    <textarea id="description" class="form-control" name="description" rows="5">{{ $description ?? '' }}</textarea>
  </div>

  <div class="mt-3 w-100 d-inline-block">
    <a href="{{  url('/') }}" class="btn btn-danger float-md-start">Back</a>
    <button type="submit" class="btn btn-dark float-md-end">Create Note</button>
  </div>
</form>