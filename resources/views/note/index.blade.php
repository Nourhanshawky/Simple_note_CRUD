<x-layout>
    <div class="container mt-5">
        <a href="{{ route('note.create') }}" class="btn btn-primary">New Note</a>
        <div class="row">
            @foreach ($notes as $note)
                <div class="col-md-4 mt-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <p class="card-text">{{ Str::words($note->note, 30) }}</p>
                            <a href={{ route('note.show', $note) }} class="btn" style="background-color: #07BB9C">View</a>
                            <a href={{ route('note.edit', $note) }} class="btn" style="background-color: #D773A2">Edit</a>
                            <form action="{{route('note.destroy',$note)}}"  method="POST">
                                @csrf
                                @method('DELETE')
                                 <button class="btn btn-danger mt-2">Delete</button>
                             </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            <div class="mt-3">
                {{$notes->links()}}
            </div>
    </div>
</x-layout>
