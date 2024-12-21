<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suzuki Hayabusa</title>
  
    <style>.fon{
    background-image: radial-gradient(rgb(105, 116, 132), rgb(22, 22, 32));
    width: 100%;
    min-height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
}
header {
    background-color: rgb(22, 22, 32);
    position: absolute;
    width: 100%;
    height: 130px;
    text-align: center;
    top: 0;
    left: 0;
}
.content_1 {
    display: flex;
    align-items: center;
    height: 100%;
}
.box {
    height: 100px;
    width: 100px;
    border-radius: 50%;
    margin: 30px;
    border: solid 3px rgb(180, 180, 180);
}
.btn {
    text-decoration: none;
    color: whitesmoke;
    margin-left: auto;
    margin-right: 40px;
    font-weight: 800;
    font-size: 18px;
}
.btn:hover {
    transition: all 0.5s ease;
    transform: scale(1.07);
}
main {
    margin: 15px;
    padding-top: 150px;
}
.content_2 {
    display: flex;
    margin-top: 20px;
}
.box_moto {
    width: 500px;
    height: 350px;
    margin-left: 140px;
    border: ridge 10px rgb(33, 33, 47);
    border-radius:15px;
}
.box_moto img {
    width: 100%;
    height: 100%;
    object-fit: cover
}
.content_3 {
    color: azure;
    margin-left: 70px;
    font-weight: 500;
}
.content_4{
    color: azure;
    margin: 5%;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    justify-items: center;
    text-align: center;
}      
img{
    width: 70%;
    height: auto;
    margin: 10px;
    border: ridge 5px rgb(0, 0, 0);
    border-radius:15px;
}
.text{

    height: auto;
}
footer{
    margin-bottom: 0;
    background-color: rgb(22, 22, 32);
    position: absolute;
    width: 100%;
    height: 130px;
    text-align: center;
    left: 0;
}
.portner{
    text-decoration: none;
    color: whitesmoke;
    margin-left: auto;
    margin-right: 40px;
    font-weight: 800;
    font-size: 18px;
}
.content_5{
    text-decoration: none;
    display: flex;
    align-items: center;
    height: 100%;
}
.footers{
    margin: 2%;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
    justify-items: center;
    text-align: center;
}
.phone{
    color: whitesmoke;
    text-decoration: none;
}
.text2{
    color: whitesmoke;
    font-size: 17px;
}
@media (max-width: 768px) {
.box_moto {
width: 100%;
height: auto;
margin-left: 3px;
}
.box_moto img {
height: auto;
}
header {
height: auto;
}
.content_1 {
flex-direction: column;
justify-content: center;
}

.box {
margin: 10px;
}

.btn {
margin: 10px 0;
}

.content_2 {
flex-direction: column;
align-items: center;
}

.box_moto {
margin-left: 0;
}

.content_3 {
margin-left: 0;
}
.content_4 {
grid-template-columns: 1fr;
}
.text {
width: 100%
}
img {
width: 100%;
}
} </style>  
</head>
<body>
    
    <div class="fon">
    <header>
        <div class="content_1">
            <img class="box" src="https://avatars.mds.yandex.net/i?id=89d9957b5337e8c3c540a7307cb6d3cb-4120498-images-thumbs&n=13" alt="">
            <a href="#" class="btn" id="registerLink">Регистрация</a>
            <script>
                document.getElementById("registerLink").addEventListener("click", function(event) {
            event.preventDefault();
            alert("Ошибка: Невозможно перейти по ссылке.");
        });
            </script>
        </div>
    </header>
    <main>
        <H1>404</H1>
    </main>
    <footer>
    <div class="footers">
        <div class="text2">
            связаться с нами<br>
            можно по телефону:<br>
        <a class="phone" type="phone" href="tel+7 999 123 45 67">+7 999 123 45 67</a>
    </div>

        <div class="content_5">
        <a href="https://moto.av.by/bike/suzuki/gsx1300r-hayabusa/111357108" class="portner">наш партнер</a>
        </div>
    </div>
    </footer>
    </div>
</body>
</html>