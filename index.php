<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/styles/style.css">
</head>
<a href=""></a>
<body>
  <section>
    <main>
      <form action="views/view.php" method="post" enctype="multipart/form-data">
        <div>
          <label for="">News Title</label>
          <div class="input-holder">
            <input type="text" name="news-title" placeholder="Enter News Title" class="txt" require>
          </div>
        </div>    
        <div>
          <label for="">News Description</label>
          <div class="input-holder">
            <input type="text" name="news-descript" placeholder="Enter News Decription" class="txt" require>
          </div>
        </div>
        <div>
          <label for="">News Link</label>
          <div>
            <input type="text" name="news-link" placeholder="Enter News Link" class="txt" require>
          </div>
        </div>
        <div class="input-holder">
          <label for="">Video</label>
          <div>
            <input type="file" name="fileToUpload" placeholder="Upload Video" require>
          </div>
        </div>
        <div>
          <div>
            <input type="submit" name="btn-submit" value="Submit News" class="btn-submit">
          </div>
        </div>
      </form>
    </main>
  </section>
</body>
</html>