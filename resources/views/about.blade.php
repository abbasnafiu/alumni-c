@extends('layout.app');

@section('content');


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
            <h1 style="font-size:35px;color:#a593c2">Welcome to UDUS Alumni</h1>
        </header>
        <figure>
            <img src="{{ asset('img/udus-pro.jpeg') }}"  width="600" alt="Bethany in her pie shop" />
            <figcaption>UDUS Alumni</figcaption>
        </figure>
        <!-- <picture>
            <source media="(min-width: 650px)" srcset="images/bethany.jpg" width="600">
            <source media="(min-width: 465px)" srcset="images/bethanysmall.jpg" width="350">
            <img src="images/bethany.jpg" alt="Bethany in her pie shop" style="width:auto;">
          </picture> -->
        <!-- <img src="images/bethany.jpg" width="700" /> -->
       
            
<p>
Finding information about past Cambridge students, both recent and historic

An alumnus/alumna of the University of Cambridge is someone who has both matriculated within the University and studied within the University on an approved course.
Checking a Cambridge degree

The University’s Student Registry handles verifications of Cambridge degrees. Further information is available on the Student Registry’s verifications of Cambridge degrees webpage.
Advertising jobs to Cambridge alumni

Recruitment opportunities for students and graduates of the University are handled by the Careers Service.

Contact information and full list of the services available to recruiters can be found on the Careers Service website.

Alumni of the University may join and post directly in our official Cambridge LinkedIn group.
Trace an ancestor or historic figure who may have been to Cambridge

The Archives department in the University Library has compiled comprehensive guides for those doing historical or genealogical research:

    How to find Cambridge alumni >
    How to find staff >

Informing us of a death

If you know a Cambridge alumnus/a who has died, please email us with the individual's details and we will update our records and notify the relevant College.

Please note that due to space restrictions we are not able to print obituaries in CAM. However Colleges' publications may do so - please enquire with the relevant College's development and alumni relations office directly.
Finding a lost Cambridge friend

Please email us to make an initial enquiry, making sure you give us as much relevant information as possible - details that are most useful include:

    Full name, including any initials and previous names (eg maiden name) while at the University
    College(s)
    Subject(s) and Cambridge degree(s)
    Matriculation and/or graduation year (or an approximation thereof)

If we do have their details on our database, we won't be able to release them to you, but we might be able to pass on a message.

        </p>
        <p>Download our full <a href="">event list</a></p>
    </article>

    <section id="promos">
        <h3 style="font-family:verdana;">Our yearly</h3>
        <h4>Undergraduates Sports Conpetition</h4>
        $1000 Worth Trophy - serves 4<br>
        <!-- <img src="https://gillcleerenpluralsight.blob.core.windows.net/files/cheesecake.jpg" width="500"
            alt="Cheese cak with strawberry" height="300" /> -->
        
    </section>
</main>

</div>
@endsection
        

