@vite(['resources/css/app.css', 'resources/js/app.js'])
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0"
                        src="{{empty($book->image) ? Storage::url('/images/default.png') : Storage::url($book->image)}}"
                        alt="...">
                </div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{$book->name}}</h1>
                    <p>Autore: {{$book->author}} </p>
                    <p>Numero Pagine: {{$book->pages}} </p>
                </div>
            </div>
        </div>
    </section>
