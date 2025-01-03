<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Profile</title>
    <link rel="stylesheet" href="css/resume.css">
    <style>
        .tutorBox {
            align-items: center;
            display: block;
            margin-bottom: 4%;
            padding-bottom: 200px;
        }
        
        .button{
            padding-left: 200px;
            padding-top: 200px;
        }
        
        .cv {
            padding-top: 5%;
        }
        .userProfile {
            border-radius: 50px;
        }
        a {
            text-decoration: none;
            color: black;
        }
        #logout {
            color: black;
            border: none;
            font-family: 'Kameron';
            font-size: 1.5vw;
        }
        #logout:hover {
            text-decoration: underline;
            transition: 3s;
        }
    </style>
</head>

<body>
    @include('header')
    <br><br>
    <div class="button">
        <a href="{{ route('view_profileTutor', ['name' => $tutor->name, 'subject' => $subject]) }}"><img src="/Element/arrow.png" class="backButton"></a>
    </div>
    
    <div class="tutorBox">
        <div class="cv">
            <center><h1>Resume of {{ $tutor->name }}</h1></center>
            <center>
            <div class="cvBox">
                <center><img src="{{ $tutor->cv }}" class="iconProfile"></center>
            </div>
            </center>
        </div>
    </div>
    @include('footer')
</body>
</html>
