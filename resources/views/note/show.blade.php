<x-layout>
    <div class="container mt-5">
        
        <h2>Note: {{$note->created_at}} </h2>
        
        <div class="mb-3">
            <div class="border p-3">
                {{$note->note}}
            </div>
        </div>
    
        <a href="{{route('note.edit',$note)}}" class="btn btn-secondary">Edit</a>
        <form action="{{route('note.destroy',$note)}}" class="btn btn-danger" method="Post">
           @csrf
           @method('delete');
            Delete
        </form>
    
    </div>
</x-layout>
