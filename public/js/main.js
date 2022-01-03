$(document).ready(function () {
    $(".modal-update").hide();
    let baseUrl = origin;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: baseUrl + "/api/books", type: "GET", dataType: 'json', success: function (res) {
            displayAllBook(res)
        }
    });

    function displayAllBook(books) {
        let str = "";
        for (let i = 0; i < books.length; i++) {
            str += `<tr id="book-${books[i].id}">
<td class="b-id">${books[i].id}</td>
<td class="b-title">${books[i].title}</td>
<td class="b-code">${books[i].code}</td>
<td class="b-author">${books[i].author}</td>
<td><button data-id="${books[i].id}" class="btn btn-warning edit-book">Update</button></td>
<td><button data-id="${books[i].id}" class="btn btn-danger delete-book">Delete</button></td>
</tr>`
        }
        $(".book-list").html(str);
    }

    function addBook(book) {
        let str = `<tr id="book-${book.id}">
<td class="b-id">${book.id}</td>
<td class="b-title">${book.title}</td>
<td class="b-code">${book.code}</td>
<td class="b-author">${book.author}</td>
<td><button data-id="${book.id}" class="btn btn-warning edit-book">Update</button></td>
<td><button data-id="${book.id}" class="btn btn-danger delete-book">Delete</button></td>
</tr>`
        $(".book-list").prepend(str);
    }

    $("body").on("click", ".delete-book", function () {
        let id = $(this).attr('data-id');
        if (confirm('Bạn có muốn xóa không')) {
            $.ajax({
                url: baseUrl + "/api/books/delete/" + id,
                type: "GET",
                success: function (res) {
                    $(`#book-${id}`).remove();
                }
            })
        }
    })

    $("body").on("click", "#add-book", function () {
        $(".modal-create").show();
        $(".form-add").trigger("reset");

    });

    $("body").on("click", ".close-modal", function () {
        $(".modal").hide();
    });

    $("body").on("click", ".add-book", function () {
        let title = $("#book-title").val();
        let code = $("#book-code").val();
        let author = $("#book-author").val();
        $(".add-book").attr("disabled", true);

        $.ajax({
            url: baseUrl + "/api/books",
            type: "POST",
            dataType: "json",
            data: {
                title: title,
                code: code,
                author: author
            }, success: function (res) {
                console.log(res.data);
                $(".add-book").attr("disabled", false);
                $(".modal").hide();
                addBook(res.data);
            }
        });

    });
    $("body").on("click", ".edit-book", function () {
        $(".modal-update").show();
        let id = $(this).attr('data-id');
        $.ajax({
            url: baseUrl + "/api/books" + id,
            type: "GET",
            dataType: "json",
            success: function (res) {
                console.log(res.data.title);
                $(".book-id").val(res.data.id);
                $(".book-title").val(res.data.title);
                $(".book-code").val(res.data.code);
                $(".book-author").val(res.data.author);
            }
        });
    });

    $("body").on("click", ".update-book", function () {
        let id = $(this).attr('data-id').val();
        $.ajax({
            url: baseUrl + "/api/books" + id,
            type: "POST",
            dataType: "json",
            data: {
                id:id,
                title: $(".book-title").val(),
                code:$(".book-code").val(),
                author:$(".book-author").val(),
            },
            success: function (res) {
                console.log(res);
                $(".modal").hide();
                $(`#book-${id} .b-id`).html(res.data.id);
                $(`#book-${id} .b-title`).html(res.data.title);
                $(`#book-${id} .b-code`).html(res.data.code);
                $(`#book-${id} .b-author`).html(res.data.author);
            }
        });
    });
});


