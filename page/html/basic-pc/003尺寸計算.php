<?php
    include("..//..//..//template_page//header_page.php");
?>
    
    <style>
        /* 文字內容原寬度250px 
           ==============================================
           文字內容寬是還是250px 
           但整體寬度是 內容 + border + padding + margin
           現在總寬度=400px */
        /* 文字內容原寬度300px 
           ==============================================
           文字內容寬是還是300px 
           但整體寬度是 內容 + border + padding + margin
           現在總寬度=400px */
        *{
            margin:0;
            padding:0;
            list-style-type:none;
        }
        
        .test-txt{
            width:250px;
            height:auto;
            background-color: #aaa;
            border: 5px solid #666;
            padding:20px;
            margin:auto;
        }
    </style>
    
    <div class="main">
        <div class="test-txt">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse consequuntur labore eveniet nisi! Vel aliquam iste nemo ea placeat praesentium quos natus quaerat expedita quam deleniti modi, obcaecati excepturi <br>
            文字內容原寬度250px + border:5px + padding:20px + margin:0px <br>
            現在總寬度是:300px
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus magnam nulla fuga sit tenetur animi magni aspernatur tempora deserunt quis, distinctio ab nostrum officia eius porro cum, totam voluptatem quisquam!
            這是一個基本入門的課程，對於想學程式的新手，可以算是相當的友善。你們說是不是啊！
        </div>
    </div>




<?php
    include("..//..//..//template_page//footer_page.php");
?>