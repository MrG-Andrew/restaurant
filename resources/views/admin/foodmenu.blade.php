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

        </div>


    </div>   
    @include("admin.adminjs")
  </body>
</html>