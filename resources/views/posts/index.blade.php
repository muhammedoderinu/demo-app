@extends('layout.app')

@section('content')
    <div class="container bg-white p-5 mt-5">
    <div class=" p-3 justify-center">
          <form action="{{route('posts')}}" method="post">
               @csrf
          <div class="container">
           
           <textarea name="body" id="body" cols="100" rows="4" class="bg-light"
               placeholder="post something"></textarea>

           @error('body')
              <div class="text-danger">
               {{$message}}
              </div>
              @enderror
              <div>
              <button type="submit" class="btn btn-primary">Post</button>
              </form>
              </div>

              @if($posts->count())
                   @foreach ($posts as $post)
                   <div>
                      <a href="" class="">{{$post->user->name}}</a> <span class="">{{$post->created_at->diffForHumans()}}</span>
                      <p class="">{{$post->body}}</p>
                   </div>
                   

                   @endforeach
                   {{$posts->links()}}

              @else
              <p> there are no post</p>

              @endif

          </div>

         
    </div>
     </div>
@endsection