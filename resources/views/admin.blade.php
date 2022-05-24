<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div>
        <h1>Admin Dashboard </h1>
    </div>


    <div>
        <form action="{{url('/addseller')}}" method='POST'>
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Seller Name</label>
                <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="name">
                <div id="nameHelp" class="form-text">Please enter seller name.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Seller email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Please enter seller email.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</x-app-layout>


