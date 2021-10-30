<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
        @include("admin.navbar")
        
        <div class="divincludesform">

            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>

                    <label for="title">Title</label>
                    <input type="text" name = "title" placeholder="title" class = 'formwritefield' required>

                </div>

                <div>

                    <label for="price">Price</label>
                    <input type="num" name = "price" placeholder="price" class = 'formwritefield' required>

                </div>

                <div>

                    <label for="image">Image</label>
                    <input type="file" name = "image" required>

                </div>

                <div>

                    <label for="description">Description</label>
                    <input type="text" name = "description" placeholder="description" class = 'formwritefield' required>

                </div>

                <div>
                    <input type="submit" value="Save" class="submitbtnfoodmenu">
                </div>

            </form>


            <br> <br><br> 
            <div>

                <table style = "background-color:black; border:3px solid white">

                    <tr align = "center">

                        <th style = "padding: 30px border:3px solid white">title</th>
                        <th style = "padding: 30px border:3px solid white">price</th>
                        <th style = "padding: 30px border:3px solid white">image</th>
                        <th style = "padding: 30px border:3px solid white">description</th>
                        <th style = "padding: 30px border:3px solid white">Action</th>

                    </tr>
                    
                    @foreach($data as $data)
                    <tr align = "center">
                        <td style = "border:3px solid white">{{$data->title}}</td>
                        <td style = "border:3px solid white">${{$data->price}}</td>
                        <td style = "border:3px solid white" width = "50px" height = "50px"><img src = "/foodimage/{{$data->image}}"></td>
                        <td style = "border:3px solid white">{{$data->description}}</td>
                        <td style = "border:3px solid white"><a href = '{{url("/deletemenu", $data->id)}}'>Delete</a></td>
                    </tr>
                    @endforeach
                </table>

            </div>

        </div>


    </div>   
    @include("admin.adminjs")
  </body>
</html>