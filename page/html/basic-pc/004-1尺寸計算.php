<?php
    include("..//..//..//template_page//header_page.php");
?>
    <style type="text/css">
        .pc-wrap{
            width:90%;
            display:flex;
            flex-direction:column;
            margin:auto;

        }
        .pc-item{
            background-color: #ddd;
            margin:20px 20px; 
            padding:10px 10px;
            border:3px solid #000;
            word-wrap:break-word;
        }
        .item1{flex-basis:50px; border-radius:5px;}
        .item2{flex-basis:100px; border-radius:10px;}
        .item3{flex-basis:150px; border-radius:15px;}
    </style>

    <div class="main">
        <div class="pc-wrap">
            <div class="pc-item item1">
                <div class="pic"></div>
                <h3>Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="pc-item item2">
                <div class="pic"></div>
                <h3>Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae blanditiis animi perspiciatis. Ipsa, sit ex distinctio voluptates, atque voluptatem labore nesciunt deserunt debitis earum animi a! In labore illum nemo.</p>
            </div>
            <div class="pc-item item3">
                <div class="pic"></div>
                <h3>Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae blanditiis animi perspiciatis. Ipsa, sit ex distinctio voluptates, atque voluptatem labore nesciunt deserunt debitis earum animi a! In labore illum nemo.</p>
            </div>
        </div>
    </div>

<?php
    include("..//..//..//template_page//footer_page.php");
?>