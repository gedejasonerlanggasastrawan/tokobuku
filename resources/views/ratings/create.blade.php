<form method="POST" action="{{ route('rate.store') }}">
    @csrf
    <label>Book Author:</label>
    <select id="author" name="author_id">
        <option value="">Select an author</option>
        @foreach($authors as $author)
            <option value="{{ $author->id }}">{{ $author->name }}</option>
        @endforeach
    </select>

    <br>

    <label>Book Title:</label>
    <select id="book" name="book_id">
        <option value="">Select a book</option>
        <!-- Options will be populated dynamically based on selected author -->
    </select>
    <br>

    <label>Rating:</label>
    <select name="rating">
        @for ($i = 1; $i <= 10; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>
    <br>

    <button type="submit">Submit</button>
</form>

<!-- jQuery for simplicity -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#author').on('change', function() {
            var authorID = $(this).val();

            if (authorID) {
                $.ajax({
                    url: '/getBooks/' + authorID,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#book').empty();
                        $('#book').append('<option value="">Select a book</option>');
                        $.each(data, function(key, value) {
                            $('#book').append('<option value="' + value.id + '">' + value.title + '</option>');
                        });
                    }
                });
            } else {
                $('#book').empty();
                $('#book').append('<option value="">Select a book</option>');
            }
        });
    });
</script>
