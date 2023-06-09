<x-main.base>
    <section class="p-3 rounded border shadow">
        <form action="/add-post" method="post">
            @csrf
            <div class="row">
                <div class="mb-3 col-sm-6">
                    <label for="title" class="form-label">Post Title</label>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" id="title"
                        aria-describedby="Enter Post Title">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3 col-sm-6">
                    <label for="prama-link" class="form-label">Prama Link</label>
                    <input type="text" name="prama_link" class="form-control" id="prama-link"
                        value="{{ $post->prama_link }}">
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

            </div>

    </section>

    <section class="mt-5">
        <div class="row">
            <div class="col-sm-8">
                <div class="options">
                    <!-- Text Format -->
                    <button id="bold" class="option-button format">
                        <i class="fa-solid fa-bold"></i>
                    </button>
                    <button id="italic" class="option-button format">
                        <i class="fa-solid fa-italic"></i>
                    </button>
                    <button id="underline" class="option-button format">
                        <i class="fa-solid fa-underline"></i>
                    </button>
                    <button id="strikethrough" class="option-button format">
                        <i class="fa-solid fa-strikethrough"></i>
                    </button>
                    <button id="superscript" class="option-button script">
                        <i class="fa-solid fa-superscript"></i>
                    </button>
                    <button id="subscript" class="option-button script">
                        <i class="fa-solid fa-subscript"></i>
                    </button>

                    <!-- List -->
                    <button id="insertOrderedList" class="option-button">
                        <div class="fa-solid fa-list-ol"></div>
                    </button>
                    <button id="insertUnorderedList" class="option-button">
                        <i class="fa-solid fa-list"></i>
                    </button>

                    <!-- Undo/Redo -->
                    <button id="undo" class="option-button">
                        <i class="fa-solid fa-rotate-left"></i>
                    </button>
                    <button id="redo" class="option-button">
                        <i class="fa-solid fa-rotate-right"></i>
                    </button>

                    <!-- Link -->
                    <button id="createLink" class="adv-option-button">
                        <i class="fa fa-link"></i>
                    </button>
                    <button id="unlink" class="option-button">
                        <i class="fa fa-unlink"></i>
                    </button>

                    <!-- Alignment -->
                    <button id="justifyLeft" class="option-button align">
                        <i class="fa-solid fa-align-left"></i>
                    </button>
                    <button id="justifyCenter" class="option-button align">
                        <i class="fa-solid fa-align-center"></i>
                    </button>
                    <button id="justifyRight" class="option-button align">
                        <i class="fa-solid fa-align-right"></i>
                    </button>
                    <button id="justifyFull" class="option-button align">
                        <i class="fa-solid fa-align-justify"></i>
                    </button>
                    <button id="indent" class="option-button spacing">
                        <i class="fa-solid fa-indent"></i>
                    </button>
                    <button id="outdent" class="option-button spacing">
                        <i class="fa-solid fa-outdent"></i>
                    </button>

                    <!-- Headings -->
                    <select id="formatBlock" class="adv-option-button">
                        <option value="H1">H1</option>
                        <option value="H2">H2</option>
                        <option value="H3">H3</option>
                        <option value="H4">H4</option>
                        <option value="H5">H5</option>
                        <option value="H6">H6</option>
                    </select>

                    <!-- Font -->
                    <select id="fontName" class="adv-option-button"></select>
                    <select id="fontSize" class="adv-option-button"></select>

                    <!-- Color -->
                    <div class="input-wrapper">
                        <input type="color" id="foreColor" class="" />
                        <label class="font-color" for="foreColor"> T </label>
                    </div>
                    <div class="input-wrapper">
                        <input type="color" id="backColor" class="" />
                        <label for="backColor"> B</label>
                    </div>
                </div>
                <div id="text-input" contenteditable="true" style="overflow:scroll;">{{ $post->content }}</div>
            </div>
            <div class="col-sm-4">
                <section class="p-2">
                    <p class="m-2">Thumbnil Image</p>
                    <img class="picture" src="{{ $post->thumb_img_src }}" alt="">
                    {{-- <label class="picture" for="picture__input" tabIndex="0">
                        <span class="picture__image">
                        </span>
                    </label>

                    <input type="file" name="picture__input" id="picture__input"> --}}

                    <p class="m-2">Content Image</p>
                    <label class="content-picture" for="content-image" tabIndex="0">
                        <i class="fa fa-plus-circle fa-2x"></i>
                    </label>

                    <input type="file" name="picture__input" id="content-image">
                </section>

            </div>
        </div>
        </form>
    </section>
    <button class="btn btn-success" id="submit">Save</button>

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
