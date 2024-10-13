<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="spline-viewer">
        <spline-viewer url="https://prod.spline.design/Tyj7xMuCBlPpGXPN/scene.splinecode"></spline-viewer>
    </div>
    <div class="music">
        <script src="https://static.elfsight.com/platform/platform.js" async></script>
        <div class="elfsight-app-c755dbb8-7654-4812-ab1d-1605e7ac4b1c" data-elfsight-app-lazy></div>
    </div>

    <form action="code.php" method="post" align="center" style="margin-top: 200px;">
        <div class="email">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <br>
        <div class="password">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="g-recaptcha" date-sitekey="6LcZNmAqAAAAAPSlEw58ga5JHL-5fUTeJtO-i3qG"></div>

        <div class="send">
            <input type="submit" name="send" id="send" value="Login">
        </div>
        <a href="compte.php" class="add">cree un compte</a>
    </form>
    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.30/build/spline-viewer.js"></script>
    <script src="index.js"></script>
    <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>
</body>
</html>
