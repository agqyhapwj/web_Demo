<?php
    include("..//..//..//template_page//header_page.php");
?>



    <style>
        /* main 的 width 67% == 1270px */
        .test-container{
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            margin: auto;
            margin-bottom: 65px;
            /* background-color: pink; */
            overflow:hidden;
        }
        .test-container > .test-txt{
            width:27%;
            height:auto;
            border:5px solid #808040;
            padding:20px;
            margin:10px 15px;
            background-color: #eee;
            color: dark;
            font-size:20px;
            line-height:1.5;
        }
        .test-txt > a{
            text-decoration:none;
            color: #408080;
            font-size:25px;
        }
    </style>

    <div class="main">
        <div class="test-container">
            <div class="test-txt">
                <a href="#">Lorem</a> ipsum dolor sit amet consectetur adipisicing elit. Dolorum qui aliquam dolorem sunt? Eligendi nam hic consequatur animi facilis beatae expedita modi ad, sit sapiente, velit incidunt! Eveniet, aperiam nesciunt.
            </div>

            <div class="test-txt">
                <a href="#">Lorem</a> <br>★★★這個切版是電腦版，並非響應式，所以用手機看跑版是正常的^_^<br>★★★這個切版是電腦版，並非響應式，所以用手機看跑版是正常的^_^<br>  
            </div>

            <div class="test-txt">
                <a href="#">Lorem</a> ipsum dolor sit amet consectetur adipisicing elit. Dolorum qui aliquam dolorem sunt? Eligendi nam hic consequatur animi facilis beatae expedita modi ad, sit sapiente, velit incidunt! Eveniet, aperiam nesciunt.
            </div>

        </div>
    </div>




<?php
    include("..//..//..//template_page//footer_page.php");
?>