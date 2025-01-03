<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Profile</title>
    <link rel="stylesheet" href="css/resume.css">
    <style>
        html, body{
            font-family: 'Kameron', serif;
            background-color: #FFFBE9 !important;
            margin: 0;
            padding: 0;
            /* color: #5C3A2D; */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        
        .tutorBox {
            align-items: center;
            display: block;
            margin-bottom: 4%;
        }
        
        .button{
            height: 4vw;
            width: 4vw;
            margin: 7vw 5vw 1vw 8vw;
            background-color: #E5D0BC;
            transition: 0.3s;
            padding: 1%;
            cursor: pointer;
            border-radius: 20%;
            width: 4%;
        }
        .userProfile {
            border-radius: 50px;
        }
        
        .cvBox{
            width: 50%;
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
