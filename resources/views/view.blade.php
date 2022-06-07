@include('inc.header')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="container">
        <div class="row">

            @if(session('status'))
                <div class="col-8 mx-auto mb-3">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif

            <div class="col-8 mx-auto mb-3 text-end">
                <a href="{{  url('add') }}" class="btn btn-success">Add Note</a>
            </div>

            <div class="col-8 mx-auto">
                <div class="accordion accordion-flush" id="accordion-example">
                    @foreach ($notes as $note)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="note-{{ $note->id }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#note-collapse-{{ $note->id }}" aria-expanded="false" aria-controls="note-collapse">
                                {{ $note->title }}
                            </button>
                        </h2>
                        <div id="note-collapse-{{ $note->id }}" class="accordion-collapse collapse" aria-labelledby="{{ 'note-'.$note->id }}" data-bs-parent="#accordion-example">
                            <div class="accordion-body">
                                <p>{{ $note->description }}</p>
                                <a href="{{ url('edit/'.$note->id) }}" class="btn btn-dark">Edit</a>
                                <a href="{{ url('delete/'.$note->id) }}" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@include('inc.footer')