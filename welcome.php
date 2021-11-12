<!DOCTYPE html>
<html lan="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Geeks Forum</title>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link rel="stylesheet" href="style1.css">

    </head>
    <body>
        <header>
            <div id="menu" class="fas fa-bars"></div>
            <a href="#" class="logo"><i class="fas fa-user-graduate"></i>LOGO</a>
            <nav class="navbar">
                <ul>
                    <li><a class="active" href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#course">Faculty</a></li>
                    <li><a href="#teacher">Teacher</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div id="login" class="fas fa-user-circle"></div>
        </header>
        <!--login form-->
        <div class="login-form">
            <form action="">
                <h3>login</h3>
                <input type="email" name="username" placeholder="username" class="box">
                <input type="password" name="password" placeholder="password" class="box">
                <p>forget password?<a href="#">click here</a></p>
                <p>don't have an account?<a href="http://localhost/login/register.php">register now</a></p>
                <input type="submit" class="btn" value="login">
                <i class="fas fa-times"></i>
            </form>
        </div>
<!--home section starts-->
<section class="home" id="home">
    <h1>Education from HOME</h1>
    <p>College is a time of constant learning and exploration. A website is a great way to share your newly gained knowledge and skills with people from all around world.<br>
        People Google “How to…” all the time. If your website comes up in the search, you’ll not only help a person out, but gradually build a community of people who are into 
        learning what you’re learning.</p>
        <a href="#"><button class="btn">Get Started</button></a>
        <div class="shape"></div>
</section>
<!--home section ends-->
<!--about section starts-->
<section class="about" id="about">
    <div class="image">
        <img src="about-us.png" alt="">
    </div>
    <div class="content">
        <h3>WHY CHOOSE US?</h3>
        <p>
            These websites help make the process of learning entertaining and attractive to the student, especially in today's age.Why website is important for college?
            A university's web presence is extremely important because visiting the website first is found to be a precursor to visiting the campus.The need to enhance the 
            shopping tool for better navigation on the first page and the overall visual appeal is paramount in website design.</p>
            <p> A website is a great way to share your newly gained knowledge and skills with people from all around the world. ... If your website comes up in the search, you'll not only help a person out, but gradually build a community 
            of people who are into learning what you're learning. One of the major advantages of having a website is that it is accessible to anyone, anywhere, anytime. Even during
             non-business hours, customers can access your website and avail your services or get the information they need, which is one of the key elements in the importance of a 
             website in business.
        </p>
        <a href="#"><button class="btn">LEARN MORE</button></a>
    </div>
</section>
<!--about section ends-->
<!--course section starts-->
<section class="course" id="course">
<h1 class="heading">OUR FACULTY</h1>
<div class="box-container">
    <div class="box">
        <img src="https://www.charusat.ac.in/depstar/cse/img/faculties/12.png" alt="">
        <h3 class="price">CSE</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">AISHWARIYA BUDHRANI</a>
        <p>
            C language is used to develop system applications that forms major portion of operating systems such as Windows, UNIX and Linux.
            Operating systems, C compiler and all UNIX application programs are written in C language.
        </p>
        <div class="info">
            <h3><i class="far fa-clock"></i>3 hours</h3>
            <h3><i class="far fa-calendar-alt"></i> 6 months</h3>
            <h3><i class="fas fa-book"></i>10 modules</h3>
            

        </div>
        </div>
    </div>
<div class="box">
    <img src="7.png" alt="">
    <h3 class="price">IT</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <a href="#" class="title">AKASH PATEL</a>
    <p>
        C++ is a cross-platform language that can be used to create high-performance applications. C++ was developed by Bjarne Stroustrup,
        as an extension to the C language.C++ gives programmers a high level of control over system resources and memory.     
    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i>5 hours</h3>
        <h3><i class="far fa-calendar-alt"></i> 6 months</h3>
        <h3><i class="fas fa-book"></i>12 modules</h3>
        

    </div>
    </div>
</div>

<div class="box">
    <img src="HTML.png" alt="">
    <h3 class="price">$40</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        HTML is the language for describing the structure of Web pages. HTML gives authors the means to: Publish online documents with headings, text, tables, lists, photos, etc.
        Retrieve online information via hypertext links, at the click of a button.
    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i>3 hours</h3>
        <h3><i class="far fa-calendar-alt"></i>3 months</h3>
        <h3><i class="fas fa-book"></i>5 modules</h3>
        

    </div>
    </div>
</div>

<div class="box">
    <img src="css.png" alt="">
    <h3 class="price">$40</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML.
        ... CSS is designed to enable the separation of presentation and content, including layout, colors, and fonts.
    </p>
    <div class="info">
        <h3><i class="far fa-clock">1 hours</i></h3>
        <h3><i class="far fa-calendar-alt"></i> 1 months</h3>
        <h3><i class="fas fa-book"></i>2 modules</h3>
        

    </div>
    </div>
</div>

<div class="box">
    <img src="django.jpg" alt="">
    <h3 class="price">$30</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        Django is a high-level Python web framework that encourages rapid development and clean, pragmatic design.
        Built by experienced developers, it takes care of much of the hassle of web development,
        so you can focus on writing your app without needing to reinvent the wheel. It's free and open source.
    </p>
    <div class="info">
        <h3><i class="far fa-clock">3 hours</i></h3>
        <h3><i class="far fa-calendar-alt"></i> 3 months</h3>
        <h3><i class="fas fa-book"></i>6 modules</h3>
        

    </div>
    </div>
</div>

<div class="box">
    <img src="java.png" alt="">
    <h3 class="price">$70</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        Java is the most widely used programming language. It is designed for the distributed environment of the Internet.
         Java is freely accessible to users, and we can run it on all the platforms. Java follows the WORA (Write Once, Run Anywhere) principle,
          and is platform-independent.
    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i></h3>
        <h3><i class="far fa-calendar-alt"></i> 6 months</h3>
        <h3><i class="fas fa-book"></i>12 modules</h3>
        

    </div>
    </div>
</div>

<div class="box">
    <img src="javascript.png" alt="">
    <h3 class="price">$40</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        JavaScript (often shortened to JS) is a lightweight, interpreted, object-oriented language with first-class functions,
         and is best known as the scripting language for Web pages, but it's used in many non-browser environments as well.
    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i>4 hours</h3>
        <h3><i class="far fa-calendar-alt"></i> 3 months</h3>
        <h3><i class="fas fa-book"></i>6 modules</h3>
        

    </div>
    </div>
</div>

<div class="box">
    <img src="python.png" alt="">
    <h3 class="price">$90</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        Python is a general-purpose interpreted, interactive, object-oriented, and high-level programming language.
        It was created by Guido van Rossum during 1985- 1990. Like Perl, Python source code is also available under the GNU General Public License (GPL).
         
    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i>4 hours</h3>
        <h3><i class="far fa-calendar-alt"></i>10 months</h3>
        <h3><i class="fas fa-book"></i>15 modules</h3>
        

    </div>
    </div>
</div>

<div class="box">
    <img src="fullstack.jpg" alt="">
    <h3 class="price">$100</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        In technology development, full stack refers to an entire computer system or application from the front end to the back end and the code that connects the two.
        The back end of a computer system encompasses “behind-the-scenes” technologies such as the database and operating system.
    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i>2 hours</h3>
        <h3><i class="far fa-calendar-alt"></i> 12 months</h3>
        <h3><i class="fas fa-book"></i>20 modules</h3>
        

    </div>
    </div>

</div>
<div class="box">
    <img src="flutter.png" alt="">
    <h3 class="price">$50</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        Flutter is a cross-platform UI toolkit that is designed to allow code reuse across operating systems such as iOS and Android,
        while also allowing applications to interface directly with underlying platform services.
    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i>2 hours</h3>
        <h3><i class="far fa-calendar-alt"></i> 6 months</h3>
        <h3><i class="fas fa-book"></i>10 modules</h3>
        

    </div>
    </div>
</div>

<div class="box">
    <img src="lisp.png" alt="">
    <h3 class="price">$5</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        Lisp (historically LISP) is a family of programming languages with a long history and a distinctive, fully parenthesized prefix notation.
        Originally specified in 1958, Lisp is the second-oldest high-level programming language. Only Fortran is older, by one year.
    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i>2 hours</h3>
        <h3><i class="far fa-calendar-alt"></i> 8 months</h3>
        <h3><i class="fas fa-book"></i>10 modules</h3>
        

    </div>
    </div>
</div>
<div class="box">
    <img src="perl.png" alt="">
    <h3 class="price">$10</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <i class="fas fa-star-half"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        Perl is a family of two high-level, general-purpose, interpreted, dynamic programming languages. "Perl" refers to Perl 5,
        but from 2000 to 2019 it also referred to its redesigned "sister language", Perl 6, before the latter's name was officially changed to Raku in October 2019.
    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i>1 hours</h3>
        <h3><i class="far fa-calendar-alt"></i> 2 months</h3>
        <h3><i class="fas fa-book"></i>4 modules</h3>
        

    </div>
    </div>
</div>
<div class="box">
    <img src="php.png" alt="">
    <h3 class="price">$30</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        PHP (Hypertext Preprocessor) is known as a general-purpose scripting language that can be used to develop dynamic and interactive websites.
        It was among the first server-side languages that could be embedded into HTML, making it easier to add functionality to web pages without needing to call external files for data.
    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i>1 hours</h3>
        <h3><i class="far fa-calendar-alt"></i> 4 months</h3>
        <h3><i class="fas fa-book"></i>11 modules</h3>
        

    </div>
    </div>
</div>
<div class="box">
    <img src="fortran.png" alt="">
    <h3 class="price">$50</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        Fortran (/ˈfɔːrtræn/; formerly FORTRAN) is a general-purpose, compiled imperative programming language that is especially suited to numeric computation and scientific computing. ..
        It is a popular language for high-performance computing and is used for programs that benchmark and rank the world's fastest supercomputers.
    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i>2 hours</h3>
        <h3><i class="far fa-calendar-alt"></i> 5 months</h3>
        <h3><i class="fas fa-book"></i>13 modules</h3>
        

    </div>
    </div>
</div>

<div class="box">
    <img src="cobol.png" alt="">
    <h3 class="price">$25</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
            <i class="fas fa-star-half"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        Common Business-Oriented Language (COBOL) is a programming language similar to English that is widely used to develop business-oriented
        applications in the area of commercial data processing.COBOL has been almost a generic term for computer programming in this kind of computer language.
    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i>3.5 hours</h3>
        <h3><i class="far fa-calendar-alt"></i> 4.5 months</h3>
        <h3><i class="fas fa-book"></i>10 modules</h3>
        

    </div>
    </div>
</div>



<div class="box">
    <img src="de.jpg" alt="">
    <h3 class="price">$30</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        Digital electronics is a field of electronics involving the study of digital signals and the engineering of devices that use or produce them.
        This is in contrast to analog electronics and analog signals.Complex devices may have simple electronic representations of Boolean logic functions.
    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i>2 hours</h3>
        <h3><i class="far fa-calendar-alt"></i> 4 months</h3>
        <h3><i class="fas fa-book"></i>2 modules</h3>
        

    </div>
    </div>
</div>

<div class="box">
    <img src="dm.jpg" alt="">
    <h3 class="price">$50</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        Discrete mathematics has numerous applications in computer science, it is used in programming languages, software development,
        cryptography, algorithms etc. It includes various topics such as graph theory, set theory, probability theory and many more.
    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i>1.5 hours</h3>
        <h3><i class="far fa-calendar-alt"></i> 6 months</h3>
        <h3><i class="fas fa-book"></i>3 modules</h3>
        

    </div>
    </div>
</div>

<div class="box">
    <img src="ict.png" alt="">
    <h3 class="price">$30</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        PC Hardware is a study of the basic assembly, maintenance, and repair of microcomputer systems. Divided into eight (8) units,
        these hardware-oriented topics include subcomponents, such as system board, video, memory, storage, multimedia, networking, and printers.
    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i>3 hours</h3>
        <h3><i class="far fa-calendar-alt"></i> 3 months</h3>
        <h3><i class="fas fa-book"></i>4 modules</h3>
        

    </div>
    </div>
</div>

<div class="box">
    <img src="dcn.jpg" alt="">
    <h3 class="price">$10</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        Data communications are the exchange of data between two devices via some form of transmission medium such as a wire cable.
        For data communications to occur, the communicating devices must be part of a communication system made up of a combination of hardware (physical equipment) and software (programs).

    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i>2.5 hours</h3>
        <h3><i class="far fa-calendar-alt"></i> 4 months</h3>
        <h3><i class="fas fa-book"></i>10 modules</h3>
        

    </div>
    </div>
</div>

<div class="box">
    <img src="engineeringmaths.jpg" alt="">
    <h3 class="price">$20</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        In addition to engineering geometry, trigonometry is one of the more usual maths for engineers. By applying the principle of trigonometry,
        engineers can calculate such data as the height of an existing structure, the measurement of an angle, or the distance between two points.
    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i>1 hours</h3>
        <h3><i class="far fa-calendar-alt"></i> 5 months</h3>
        <h3><i class="fas fa-book"></i>12 modules</h3>
        

    </div>
    </div>
</div>

<div class="box">
    <img src="beee.png" alt="">
    <h3 class="price">$15</h3>
    <div class="content">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
        </div>
        <a href="#" class="title">Learn about different courses</a>
    <p>
        Electrical current, voltage, resistance, capacitance, and inductance are a few of the basic elements of electronics and radio. Apart from current,
        voltage, resistance, capacitance, and inductance, there are many other interesting elements to basic electronics technology.
    </p>
    <div class="info">
        <h3><i class="far fa-clock"></i>3 hours</h3>
        <h3><i class="far fa-calendar-alt"></i> 3 months</h3>
        <h3><i class="fas fa-book"></i>4 modules</h3>
        

    </div>
    </div>
</div>
</div>
</section>


<!--course section ends-->
<!--teacher section starts-->
<section class="teacher" id="teacher">
<h1 class="heading">Our Expert Teachers</h1>
<p>HEy there!!!
    love ya all!
    muskan here..
</p>
<a href="#"><button class="btn">learn more</button></a>

</section>


<!--teacher section ends-->
<!--contact section starts-->
<section class="contact" id="contact">
    <h1 class="heading">contact us</h1>
    <div class="row">
        <form action="">
            <input type="text" placeholder="full name" class="box">
            <input type="email" placeholder="your email" class="box">
            <input type="password" placeholder="your password" class="box">
            <input type="number" placeholder="your number" class="box">
            <textarea  name="" id="" cols="30" rows="10" class="box address" placeholder="your address" ></textarea>
            <input type="submit" class="btn" value="send now">
        </form>
        <div class="image">
            <img src="contact-img.png" alt="" >
        </div>
    </div>
</section>
<!--contact section ends-->
<!--footer section starts-->
<div class="footer">
    <div class="box-container">
        <div class="box">
            <h3>branch location</h3>
            <a href="#">Charusat</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">course</a>
            <a href="#">teacher</a>
            <a href="#">contact</a>

        </div>
        <div class="box">
            <h3>contact info</h3>
            <p>
                <i class="fas fa-map-marker-alt"></i>Off. Nadiad-Petlad Highway, Changa-388421, Anand, Gujarat, India            </p>
            <p><i class="fas fa-envelope"></i>principal.depstar@charusat.ac.in</p>
            <p><i class="fas fa-phone"></i>+91 2697 265287</p>

        </div>
    </div>
    <h1 class="credit">created by<a href="#">20DIT077 20DIT081 20DIT082</a></h1>
</div>
<!--footer section ends-->





       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <script src="script.js"></script>
    </body>
</html>