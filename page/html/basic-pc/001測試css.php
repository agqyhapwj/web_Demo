<?php
    include("..//..//..//template_page//header_page.php");
?>


    <style type="text/css">
        .textnav{
                width: 85%;
                height: 50px;
                background-color: #000;
                display:flex;
                margin:auto;
                margin-top:15px;
                margin-bottom: 15px;
            }
            .list-a{
                width:20%;
                height: 30px;
                border:2px solid lightyellow;
                color: #fff;
                margin: 7px 10px 0 10px;
                /* background-color: #000; */
                text-decoration: none;
                text-align:center;
                padding: 5px 5px 0 5px;
                font-size: 20px;
            }

            .textparagraph{
                width: 85%;
                background-color: pink;
                margin: auto;
                margin-bottom: 15px;
                padding: 10px 0 15px 0;
                border-radius:10px;
            }
            .test-img{
                width:95%;
                display:flex;
                margin:auto;
                border-radius:10px;
            }
            h1{
                text-align: center;
                color:white;
            }
            .test-p{
                width:95%;
                display:flex;
                margin:auto;
            }
            .test-p:nth-child(even){
                color:blue;
            }
            @media screen and (min-width:992px) {
                .textnav{
                    width:75%;
                }
                .list-a{
                    width:20%;
                }
                .textparagraph{
                    width:75%;
                }
            }
    </style>

    <!-- ============================================= -->
    <!-- 這裡的自動輪播js功能，是後來才加入的 -->
    <script language="JavaScript">
        function pickapic() {
            const picname = [
                "https://picsum.photos/600/300?random=100",
                "https://picsum.photos/600/300?random=200",
                "https://picsum.photos/600/300?random=300",
                "https://picsum.photos/600/300?random=400",
                "https://picsum.photos/600/300?random=500",
                "https://picsum.photos/600/300?random=600",
                "https://picsum.photos/600/300?random=700",
                "https://picsum.photos/600/300?random=800",
                "https://picsum.photos/600/300?random=900",
            ];
            const which = Math.floor(Math.random() * 8);
            random_pic.src = picname[which];
        }
        setInterval(pickapic,5000); //每五秒自動更新一次
    </script>
    <!-- ============================================= -->

    <div class="main">
        <div class="license">
            <nav class="textnav">
                <a href="#" class="list-a">P1</a>
                <a href="#" class="list-a">P2</a>
                <a href="#" class="list-a">P3</a>
                <a href="#" class="list-a">P4</a>
                <a href="#" class="list-a">P5</a>
            </nav>
            <div class="textparagraph">
                <h1>Title</h1>
                <img class="test-img" src="" alt="" name="random_pic">
                <p class="test-p">工具第一個兩次雙手恐怖新鮮台鐵，深刻及時設施水溝對比，這麼行為配置通過思維多個最好登記哥哥室內今日，看到然而並不福建財政宣佈主持事實上理想接受走了等待，父母上次降低上路微軟陷入我這體系，把握獎勵選項高雄格式買了毫無靜靜把你建設加快理論，別的站點官方，在那。</p>
                <p class="test-p">標籤選擇器、class選擇器、id選擇器、虛擬選擇器:hover,:focus,:nth-child(1 enev odd)、階層選擇器.favorite a</p>
                <p class="test-p">轉貼行為包含頻道它們就能，發貼毫無車輛貼圖沒有任何一句話完了公共出席教授，因素批評討論區設立還要先進才是天使涉及，典型桃園不出比賽你還導演一會兒智慧，軍事依靠動作改造，正常大門唱片台北魯蛇監督中央容量，那位最近參加不是大師生態魅力又是只要期限我家，大家都。</p>
            </div>
        </div>
    </div>
    

<?php
    include("..//..//..//template_page//footer_page.php");
?>