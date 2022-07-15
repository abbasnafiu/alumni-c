@extends('layout.app')

@section('content')
<div class="row">
<aside id="leftmenu">
    

    
        <h4>Quick Link</h4>
        <p>
        <ul>
        <li><a href="">Bulletin</a></li>
        <li><a href="">Location</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">About us</a></li>
        
    </ul>
</p>
    
</aside>
<main id="main">
    <article>
        <header>
            <h1 style="font-size:35px;color:#a593c2">Alumni Webpage</h1>
        </header>
        <figure>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.5977145616166!2d5.197181714233992!3d13.124652115053852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11b7e78ca067c44d%3A0x423e109e43a67621!2sUsmanu%20Danfodiyo%20University%20Sokoto!5e0!3m2!1sen!2sng!4v1657881421597!5m2!1sen!2sng" width="600" height="450" 
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </figure>
        <!-- <picture>
            <source media="(min-width: 650px)" srcset="images/bethany.jpg" width="600">
            <source media="(min-width: 465px)" srcset="images/bethanysmall.jpg" width="350">
            <img src="images/bethany.jpg" alt="Bethany in her pie shop" style="width:auto;">
          </picture> -->
        <!-- <img src="images/bethany.jpg" width="700" /> -->
        
    </article>

    
</main>

</div>

@endsection