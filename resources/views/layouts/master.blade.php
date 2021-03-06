<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.min.css">
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel=stylesheet href="css/app.css">
        <title>Oussama Keddar</title>
    </head>
    <body>
    <div id="app" >
    @include('layouts.header')
        <router-view> </router-view>
    </div>
    <style type="text/css">
        span.help:empty {
            display: none;
            }
        .disable {
            background-color: black;
        }
    </style>
<footer id="form">
<form  @keydown="errors.clear($event.target.name)" class="cf animated" method="POST" @submit.prevent="sendMessage" :class="{ 'bounceOutUp' : isFlying, 'shake' : isShaking}">
     {{ csrf_field() }}
  <div class="half left cf">
    <input v-model="name" type="text" id="input-name" placeholder="Name" name="name" @keydown="unshake">
    <span class="help is-danger" v-text="errors.get('name')"></span>
    <input v-model="email" type="email" id="input-email" placeholder="Email address" name="email">
    <span class="help is-danger" v-text="errors.get('email')"></span>
    <input v-model="subject" type="text" id="input-subject" placeholder="Subject">
  </div>
  <div class="half right cf">
    <textarea v-model="message" type="text" id="input-message" placeholder="Message" name="message"></textarea>
    <span class="help is-danger" v-text="errors.get('message')"></span>
  </div>  
  <input v-bind:style="baseSubmit" :disabled="errors.any()" type="submit" value="Submit" :class=" {'disable' : isDisabled} " >
</form>
</footer>

    </body>
    <script src="/js/app.js"></script>
</html>
