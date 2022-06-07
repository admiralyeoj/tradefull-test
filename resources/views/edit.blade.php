@include('inc.header')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="container">
        <div class="row">

            <div class="col-8 mx-auto">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">Edit Note</h1>
                  @include('inc.note-form', ['title' => $note->title, 'description' => $note->description, 'button'=>'Update Note'])
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

@include('inc.footer')