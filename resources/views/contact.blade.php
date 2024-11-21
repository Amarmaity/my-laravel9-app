@extends('app')

@section('contents')

    <section>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 mb-5">
                 <div class="card-body">
                     <form action ="{{route('contact-submit')}}" method="POST">
                        @csrf
                         <div class="mb-3">
                             <label for="" class="form-label">Name</label>
                             <input type="text" class="form-control" id="" name="name">
                             <span class="text-denger">
                                @error('name')
                                <span class="text-color">{{ $message }}*</span>                       
                                @enderror
                             </span>
                         </div>
                         <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" id="" name="email">
                            <span class="text-denger">
                                @error('email')
                                <span class="text-color">{{ $message }}*</span>                                
                                @enderror
                             </span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="" name="subject">
                            <span class="text-denger">
                                @error('subject')
                                <span class="text-color">{{ $message }}*</span>                                   
                                @enderror
                             </span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Message</label>
                            <textarea class="form-control" name="message"></textarea>
                            <span class="text-denger">
                                @error('message')
                                <span class="text-color">{{ $message }}*</span>                               
                                @enderror
                             </span>
                        </div>                      
                         <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                 </div>
                </div>
             </div>
        </div>

    </section>
@endsection
