<x-main.base>

    <section class="p-3 rounded border shadow">
        <form action="/add-post" method="post">
            @csrf
            <div class="row">
                <div class="mb-3 col-sm-6">
                    <label for="title" class="form-label">Post Title</label>
                    <input type="text" name="title" class="form-control" id="title"
                        aria-describedby="Enter Post Title">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3 col-sm-6">
                    <label for="prama-link" class="form-label">Prama Link</label>
                    <input type="text" name="prama_link" class="form-control" id="prama-link" aria-describedby="">
                    <div id="emailHelp" class="form-text">Auto Updated Prama Link</div>
                </div>
                <div class="mb-3 col-sm-6">
                    <label for="english-title" class="form-label">English Post Title</label>
                    <input type="text" class="form-control" id="english-title" aria-describedby="Enter Post Title">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3 col-sm-6">
                    <label for="title" class="form-label">Key Word</label>
                    <input type="text" class="form-control" id="title" aria-describedby="Enter Post Title">
                    <div id="emailHelp" class="form-text">Enter KeyWords</div>
                </div>
                <div class="mb-3 col-sm-6 text-end mt-2"> <br>
                    <input type="submit" value="Create Post" class="btn btn-sm btn-success">
                </div>
            </div>
        </form>
    </section>
    <script>
        const title = document.getElementById('english-title');
        const pramaLink = document.getElementById('prama-link');
        title.addEventListener('keyup', () => {
            pramaLink.value = replaceSpacesWithHyphens(title.value);
        });

        function replaceSpacesWithHyphens(str) {
            let replacedChars = str.replace(/[^a-zA-Z0-9]/g, '-');
            if (replacedChars.endsWith('-')) {
                replacedChars = replacedChars.slice(0, -1);
            }
            return replacedChars.toLowerCase();
        }
    </script>
</x-main.base>
