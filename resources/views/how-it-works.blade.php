<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How It Works</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">


</head>
<style>
    @import 'css/main.css';
    @import 'css/general.css';
</style>

<body>
    @include('includes/header')

    <div class="page-banner" style="background-image: url('../images/how-it-works/banner.jpg');">
        <div class="container">
            <h1 class="banner-title center"><span class="red-text">How</span> It Works </h1>
        </div>
    </div>

    <div class="section section-1">
        <div class="container content">
            <h1 class="title">Step 1</h1>
            <p class="center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>

            <div class="shadow p-3 mb-5 bg-white rounded flex">
                <img src="images/how-it-works/signup.jpg" alt="">
                <div class="my-auto">
                    <h2>Creating an Account</h2>
                    <h4>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-2">
        <div class="container content">
            <h1 class="title">Step 2</h1>
            <p class="center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>

            <div class="shadow p-3 mb-5 bg-white rounded flex">
                <img src="images/how-it-works/login.jpg" alt="">
                <div class="my-auto">
                    <h2>Log In</h2>
                    <h4>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-3">
        <div class="container content">
            <h1 class="title">Step 3</h1>
            <p class="center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>

            <div class="shadow p-3 mb-5 bg-white rounded flex">
                <img src="images/how-it-works/manage.jpg" alt="">
                <div class="my-auto">
                    <h2>Manage Your Account</h2>
                    <h4>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta</h4>
                </div>
            </div>
        </div>
    </div>
    @include('includes/footer')
</body>

@include('includes/links')

</html>