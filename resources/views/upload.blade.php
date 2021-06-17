<h1>Upload File </h1>

<form action="uploaddocument" method="post" enctype="multipart/form-data">

@csrf
    <input type="file" name="file" placeholder="Upload File" />
    <br><br>
    <input type="submit" name="save" value="Upload" />
</form>