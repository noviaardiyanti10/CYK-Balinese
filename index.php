<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Index</title>
</head>
<body>
    <div class="container">
        <div class="container mb-4 justify-content-center" id="index-home" >
            <form action="hasil.php" method="POST">
                <h4 class="text-center">Application of CFG in Syntatic Parsing of A Balinese Sentence</h4>
                <p class="text-center">Teori Bahasa dan Otomata</p>
                <div class="row">
                    <div class="form-group col-md-8">
                        <input type="text" name="grammar" class="form-control">
                    </div>
                </div>
                <button class="btn btn-primary" id="tombol" type="submit" >Cari</button>
            </form>
                <a href="evaluasi.php" class="btn btn-secondary" id="tombol" type="submit" name="evaluasi">Evaluasi</a>         
        </div>
    </div>
</body>
</html>