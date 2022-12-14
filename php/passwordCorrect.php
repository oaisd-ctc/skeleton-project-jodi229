<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/passwordCorrect.css">
    <title>Upload Image</title>
</head>
<body>
    <div class="center-content">
    <?php
        if($_POST["password"] == "its24-hourtime") {
            $details = 
            '
            <h1>Upload your photo, John.</h1>
            <form action="php/upload.php" method="post" enctype="multipart/form-data" class="upload-pic-form" style="display: block;">
                <h3>Select image to upload:</h3>
                <div>
                    <div class="tags-and-upload">
                        <input style="display: none;" type="password" name="password" id="password" value="its24-hourtime">
                        <input type="file" name="fileToUpload" id="fileToUpload" required>
                        
                        <div class="filter-classes checkbox-list"></div>
                        <div class="modify-area">
                            <div>
                                <input class="newTagInp" name="newTags[]" placeholder="new tag">
                            </div>
                            <button class="new-tag-btn" type="button">add another new tag</button>
                        </div>

                        <div class="search-area">
                            <input form="searchNamesForm" type="text" id="nameSearch" list="namesList" placeholder="Search for names here...">
                            <datalist id="namesList"></datalist>
                        </div>

                        <div class="names-list checkbox-list"></div>
                        <div class="modify-area">
                            <div>
                                <input class="newNameInp" name="newNames[]" placeholder="new name">
                            </div>
                            <button class="new-tag-btn" type="button">add another new name</button>
                        </div>

                        <div class="img-submit-area">
                            <input name="date" type="date" id="date" required>
                            <input class="upload-btn big-btn" type="submit" value="Upload Image" name="submit">
                        </div>
                    </div>
                </div>
                <div class="choose-feature-area">
                    <span class="changeFormBtn chngForm" id="changeFormBtn" data-formClass="update-pic">Update Existing Picture</span>
                    <span class="changeFormBtn chngForm" id="chngTagsFrmBtn" data-formClass="update-tags">Update Existing Tags</span>
                </div>
            </form>

            <form action="php/pictureForm.php" method="post" class="update-pic-form">
                <div class="choose-feature-area">
                    <label for="fileInput">Name of file to update:</label>
                    <input type="text" id="fileInput"/>
                </div>
                <div class="choose-feature-area">
                    <label for="fullText">Full Path To File:</label>
                    <input type="text" id="fullText"/>
                </div>
                <input type="text" id="fileName" name="fileName" style="display: none;"/>
                <input style="display: none;" type="password" name="password" id="password" value="its24-hourtime">
                <div class="choose-feature-area" style="margin-top: 1em;">
                    <span class="changeFormBtn chngForm" data-formClass="upload-pic">Go Back To Upload</span>
                    <button class="changeFormBtn">Select File</button>
                </div>
            </form>

            <form action="php/updateTags.php" method="POST" enctype="multipart/form-data" class="update-tags-form">
                <input style="display: none;" type="password" name="password" id="password" value="its24-hourtime">
                
                <div class="modify-area">
                    <span>Change</span>
                    <select class="data-change-select" name="type">
                        <option value="tags" selected>Tags</option>
                        <option value="names">Names</option>
                    </select>
                </div>

                <h2>Remove Tags</h2>
                <div class="remove-names-list checkbox-list hidden"></div>
                <div class="remove-tags-list checkbox-list"></div>

                <h2>New Tags</h2>

                <div class="modify-area add-new-data"></div>

                <h2>Replace Tag</h2>
                <div class="modify-area">
                    <div>
                        <select name="oldTagName" id="oldDataSelect">
                            <option value=""></option>
                        </select>
                        <input type="text" name="newTagName">
                    </div>
                </div>
                <div class="choose-feature-area" style="margin-top: 1em;">
                    <span class="changeFormBtn chngForm" data-formClass="upload-pic">Go Back To Upload</span>
                    <button class="changeFormBtn">Submit</button>
                </div>
            </form>
            <form data-simple="true" id="searchNamesForm" style="display: none;"></form>
            ';
        } else {
            $details = 
            '
                <h1>Incorrect password.</h1>
                <a class="btn" href="/">Go to homepage.</a>
            ';
        } 
        echo '
            <div class="form-holder">'.$details.'</div>
        ';
        ?>
    </div>
    <script>
        fullText.addEventListener('change', () => {
            fileName.value = fullText.value.replace(`${location.origin}/images/`, ''); 
        })
    </script>
    <script src="../js/options.js"></script>
    <script src="../js/passwordCorrect.js"></script>
    <script src="../js/search.js"></script>
</body>
</html>
