<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    
      <div class="container mt-5">

         <div class="flex flex-row items-center justify-between space-x-4 mb-5">
            <h1 class="m-1 text-[50px] font-bold">PRODUCTS LIST</h1>
            <form action="{{ route('products.download-excel') }}" method="POST" target="__blank">
               @csrf
               <button class=" px-4 py-2 border rounded bg-blue-500 text-white">Export Excel</button>
            </form>
         </div>


         <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Description</th>
                     <th>Price</th>
                     <th>Created At</th>
                     <th>Updated At</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($products as $product)
                     <tr>
                           <td>{{ $product->id }}</td>
                           <td>{{ $product->name }}</td>
                           <td>{{ $product->description }}</td>
                           <td>{{ $product->price }}</td>
                           <td>{{ $product->created_at }}</td>
                           <td>{{ $product->updated_at }}</td>
                     </tr>
                  @endforeach
               </tbody>
         </table>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>