<x-layout>
    <div class="container mt-5">
        <form action="{{route('note.update',$note)}}" method="POST">
            @csrf
            @method('PUT')
        <h2>Edit your note 📝</h2>
    <div class="mb-3">
      <textarea name="note" id="" cols="30" rows="10" placeholder="place your note here">
        {{$note->note}}
      </textarea>
    </div>
        <a href="{{route('note.index')}}" class="text-decoration-none">Cancle</a>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</x-layout>
