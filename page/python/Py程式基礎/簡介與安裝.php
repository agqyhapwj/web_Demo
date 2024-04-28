<?php
    include("C:\\server\\web\\template_page\\header_page.php");
?>



    <div class="main">

        <div class="license">
            <!-- 內容 -->
            
            <div class="item">
                <div class="label">Step1</div>
                <!-- <div class="close">X</div> -->
                <img src="../../../images/python/Py程式基礎/安裝與簡介/python_download.jpg" alt="">
                <h2>Python-下載</h2>
                <p>進入 python.org 網站，選取 3.8.10 版 Windows x86-64 executable installer 檔案。網址如下
                   <a href="https://www.python.org/downloads/windows" target="_blank">https://www.python.org/downloads/windows</a><br><br>
                   <span class="memob">其實程式工具很忌諱一直追求新的版本，除非是有安全性的問題，否則每次進版都可能導致以前的專案無法執行，或是其它第三方套件尚未跟進而無法運作，所以請不要一眛的追求最新版本，穩定才是最重要的。</span>
                </p>
            </div>

            <div class="item">
                <div class="label">Step2</div>
                <!-- <div class="close">X</div> -->
                <img src="../../../images/python/Py程式基礎/安裝與簡介/python_install_1.jpg" alt="">
                <h2>安裝</h2>
                <p>
                   <span class="memob">開始安裝 Python 3.8.10時，記得要將 Add Python 3.8 to PATH 打勾</span>
                </p>
            </div>

            <div class="item">
                <div class="label">Step3</div>
                <!-- <div class="close">X</div> -->
                <img src="../../../images/python/Py程式基礎/安裝與簡介/python_install_2.jpg" alt="">
                <h2>安裝</h2>
                <p>
                第一次安裝時，在安裝完後要點選Disable path length limit，解除系統變數 path 的長度限制，如下圖所示。日後解除安裝再重新安裝時，解除長度限制的畫面就不會再度出現了。
                </p>
            </div>

            <div class="item">
                <div class="label">Step4</div>
                <!-- <div class="close">X</div> -->
                <img src="../../../images/python/Py程式基礎/安裝與簡介/python_version.jpg" alt="">
                <h2>測試是否安裝成功</h2>
                <p>
                    進入Dos模式, 直接輸入 python –version ，若有看到 3.x.xx 版本編號，即表示安裝成功。
                </p>
            </div>

            <div class="item">
                <div class="label">Step5</div>
                <!-- <div class="close">X</div> -->
                <img src="../../../images/python/Py程式基礎/安裝與簡介/python_setpath.jpg" alt="">
                <h2>環境路徑設定</h2>
                <p>
                    <span class="memob">上述若有勾選 Add Python3.8 to Path, 則路徑都會幫我們設好. 若忘了勾取, 請自行設定</span><br>
                    
                </p>
            </div>

            <!-- <div class="item">
                <div class="label">Step5</div>
                <div class="close">X</div>
                <img src="../../../images/python/Py程式基礎/安裝與簡介/python_setpath.jpg" alt="">
                <h2>環境路徑設定</h2>
                <p>
                    <span class="memob">上述若有勾選 Add Python3.8 to Path, 則路徑都會幫我們設好. 若忘了勾取, 請自行設定</span>

                    1：set path=C:\Users\ASUS\AppData\Local\Programs\Python\Python39;%path%
                    即可輸入 python --version 測試是否安裝成功
                    2：set path=C:\Users\ASUS\AppData\Local\Programs\Python\Python39\Scripts;%path%
                    即可輸入 pip list 如果模組列表有出現，即可使用 pip install moduleName 安裝模組套件

                </p>
            </div> -->

            <div class="item">
                <div class="label">Step6</div>
                <!-- <div class="close">X</div> -->
                <img src="../../../images/python/Py程式基礎/安裝與簡介/python_upgradepip.jpg" alt="">
                <h2>更新pip</h2>
                <p>
                    python.exe -m pip install --upgrade pip
                </p>
            </div>
            
        </div>

    </div>



<?php
    include("C:\\server\\web\\template_page\\footer_page.php");
?>