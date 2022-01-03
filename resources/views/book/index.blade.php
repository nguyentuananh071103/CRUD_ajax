<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <button id="add-book" class="btn btn-primary mt-3 mb-3">CREATE BOOK</button>

    <div class="card">
        <div class="card-header">
            Book Manager
        </div>
        <div class="card-header">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Code</th>
                    <th scope="col">Author</th>
                </tr>
                </thead>
                <tbody class=".table-striped book-list">
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal modal-create" tabindex="1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">CREATE BOOK</h5>
                <button type="button" class="close-modal" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-add">
                    <div class="form-group">
                        <label for="book-title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="book-title" >
                    </div>
                    <div class="form-group">
                        <label for="book-code">Code</label>
                        <input type="number" class="form-control" id="book-code">
                    </div>
                    <div class="form-group">
                        <label for="book-author">Author</label>
                        <input type="text" class="form-control" id="book-author">
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary add-book">ADD</button>
                <button type="button" class="btn btn-secondary close-modal" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-update" tabindex="2" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">UPDATE BOOK</h5>
                <button type="button" class="close-modal" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-add">
                    <div class="form-group">
                        <label for="book-id" class="form-label">ID</label>
                        <input type="text" class="form-control book-id" disabled>
                    </div>
                    <div class="form-group">
                        <label for="book-title" class="form-label">Title</label>
                        <input type="text" class="form-control book-title">
                    </div>
                    <div class="form-group">
                        <label for="book-code">Code</label>
                        <input type="number" class="form-control book-code">
                    </div>
                    <div class="form-group">
                        <label for="book-author">Author</label>
                        <input type="text" class="form-control book-author">
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary update-book">UPDATE</button>
                <button type="button" class="btn btn-secondary close-modal" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset("js/main.js")}}"></script>
</body>
</html>
