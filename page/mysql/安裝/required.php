<?php
    include("..//..//..//template_page//header_page.php");
?>


<div class="main">

    <div class="license">

        <div class="item">
            <div class="label">Step1</div>
            <!-- <div class="close">X</div> -->
            <img src="" alt="">
            <h2>路徑設定</h2>
            <p>
                Mysql常用的指令都在 c:\Program Files/MySQL/MySQL Server 8.0\bin 之下<br>
                例如：mysqldump備份資料等。<br>
                所以需手動設定「系統環境變數path」。<br>
                請由&nbsp;<span class="memob">開始按右鍵/系統/進階系統設定/環境變數</span><br>
                再在&nbsp;<span class="memob">系統變數，變數選 Path /再按編輯</span><br>
                新增如下路徑<br>
                <span class="memob">C:\Program Files\MySQL\MySQL Server 8.0\bin</span><br>
                <span class="memor">新增完後，重啟DOS(CMD)視窗，即可操作MySQL的相關指令</span>
            </p>
        </div>

        <div class="item">
            <div class="label">Step2</div>
            <!-- <div class="close">X</div> -->
            <img src="../../../images/mysql/安裝/required/mysql_createuser1.jpg" alt="">
            <h2>新增帳號及權限</h2>
            <p>
            若要新增其它使用者的帳號，則必需使 root 登入。<br>
            請開啟 Workbench，由 root 帳號登入，然後按下左上角的 “SQL” 按鈕, 輸入如下指令(參考上圖)，再按下 “閃電” 按鈕執行。<br>
            <span class="memob">use mysql;</span><br>
            <span class="memob">create user '   帳號'@'%' identified by '密碼';</span><br>
            <span class="memob">grant all privileges on *.* to '帳號'@'%';</span><br>
            </p>
        </div>

        <div class="item">
            <div class="label">Step3</div>
            <!-- <div class="close">X</div> -->
            <img src="" alt="">
            <h2>唯獨權限</h2>
            <p>
                唯獨權限只讀取，不能寫入，指令如下:<br>
                use mysql;<br>
                grant select on cloud.* to '帳號'@'%'
            </p>
        </div>

        <div class="item">
            <div class="label">step4</div>
            <!-- <div class="close">X</div> -->
            <img src="" alt="">
            <h2>刪除帳號</h2>
            <p>
                刪除帳號只要使用drop即可，指令如下:<br>
                use mysql;<br>
                drop user 帳號;
            </p>
        </div>

        <div class="item">
            <div class="label">step5</div>
            <!-- <div class="close">X</div> -->
            <img src="" alt="">
            <h2>變更帳號密碼</h2>
            <p>
                變更帳號的密碼，指令如下:<br>
                use mysql;<br>
                set password for 'root'@'localhost'='2266';<br>
                set password for '帳號'@'%'='2266';<br>
                <br>
                <span class="memor">請注意，現在密碼都有加密，所以不能使用以下的方法</span><br>
                <mark>update user set password='2266' where user='root'</mark>
            </p>
        </div>

        <div class="item">
            <div class="label">step6</div>
            <!-- <div class="close">X</div> -->
            <img src="" alt="">
            <h2>變更MySQL資料庫目錄</h2>
            <p>
                MySQL8.0 資料庫預設目錄為 C:\ProgramData\MySQL\MySQL Server 8.0\Data.<br>
                變更此目錄需操作如下步驟<br>
                1.使用<span class="memob">系統管理員</span>身份進入CMD執行如下指令<br>
                net stop mysql80<br><br>
                2.修改文件 C:\ProgramData\MySQL\MySQL Server8.0\my.ini<br>
                <span class="memob">datadir=</span>C:/ProgramData/MySQL/MySQL Server 8.0/Data<br>
                更改為<br>
                <span class="memob">datadir=</span>D:/server/mysql<br><br>
                3.將C:/ProgramData/MySQL/MySQL Server 8.0/Data 目錄 copy 到 d:/server/之下，並把 Data目錄改為 mysql。<br><br>
                4.重啟MySQL，指令如下<br>
                net start mysql80
            </p>
        </div>

        <div class="item">
            <div class="label">step7</div>
            <!-- <div class="close">X</div> -->
            <img src="" alt="">
            <h2>備份</h2>
            <p>
                備份資料庫指令如下<br>
                <span class="memob">mysqldump -u 帳號 -p --routines cloud > cloud.sql</span><br>
                <br>
            </p>
        </div>

        <div class="item">
            <div class="label">step8</div>
            <!-- <div class="close">X</div> -->
            <img src="" alt="">
            <h2>還原</h2>
            <p>
                使用workbench產生一個新的DB。<br>
                DB的Language必須為<span class="memor">utf8/utf8_unicode_ci/</span><br>
                然後在DOS命令下，使用如下指令還原DB<br>
                <span class="memob">mysql -u 帳號 -p --default-character-set=utf8 cloud < cloud.sql</span><br>
                <br>
            </p>
        </div>

        <div class="item">
            <div class="label">step9</div>
            <!-- <div class="close">X</div> -->
            <img src="" alt="">
            <h2>Linux與Windows轉換</h2>
            <p>
                如果在Linux備份，然後在Windows下還原<span class="memob">有可能會報ERROR 1064(42000)的語法錯誤</span><br>
                這其中的一個原因是匯出的預設編碼跟匯入的預設編碼不一樣所致。<br>
                此時就要加入--default-character-set=utf8(最好在mysqldump時也一併加入)<br><br>

                <span class="memor">如果資料庫太大，還原時會產生連線對時的錯誤，請更改my.ini如下設定</span><br>
                [wamp-mysql]<br>
                <span class="memob">max_allowed_packet = 5000M</span>
            </p>
        </div>

        <div class="item">
            <div class="label">step10</div>
            <!-- <div class="close">X</div> -->
            <img src="" alt="">
            <h2>中英文資料庫/資料表</h2>
            <p>
                <span class="memor">建立資料庫時，資料庫命名不可以使用中文。</span><br>
                <span class="memob">建立資料表時，表格的命名就可以使用中文。</span><br>
                ===================================<br>
                <span class="memor">建立資料庫時，可以想成建立一個目錄。</span><br>
                <span class="memob">建立資料表時，概念則是建立一個檔案。</span><br>
                若使用中文時，建立在硬碟的目錄或檔案會被轉成utf-8文字碼。<br>
                例："@5eab@5b58@7ba1@7406@54e1.ibd"<br><br>

                
                <mark>問題來了，備份資料表 mysqldump -u 帳號 -p 資料庫名 > output.sql，這個資料庫名被轉成了 utf-8 碼，是要怎麼打啊!! 所以資料庫名絕對不能使用中文。</mark><br>
                但為什麼資料表又可以使用中文呢!! 因為在備份後，系統自動去抓那些 utf-8 的檔案，不需要我們手動去打字，所以沒關係。
            </p>
        </div>

        <div class="item">
            <div class="label">step11</div>
            <!-- <div class="close">X</div> -->
            <img src="../../../images/mysql/安裝/required/mysql_login_out2.jpg" alt="">
            <h2>CMD登入/登出</h2>
            <p>
                C:\Users\ASUS<span class="memob">mysql -u username -p</span><br>
                Enter password:xxxxxx<br>
                登入成功後，會出現mysql>提示符號。<br>
                輸入<span class="memob">exit;</span>即可登出，輸入<span class="memob">quit;</span>同樣登出，兩者皆可。<br>

            </p>
        </div>

        <div class="item">
            <div class="label">step12</div>
            <!-- <div class="close">X</div> -->
            <img src="" alt="">
            <h2>Workbench中文化</h2>
            <p>
                workbench是一套很好且的資料庫操作介面，只可惜沒有中文版。<br>
                網路上找到的，也都是內地漢化的簡體中文版。<br>
                另網路上也有教人從Edit/Preference/Apperance，再更改為Simplfied Chinese，這都是沒用的。<br><br>


                要中文化，需打開C:\Program Files\MySQL\MySQL Workbench 8.0 CE\data 底下的main_menu.xml然後進行更改，比如把下面的那一段改掉<br>
                <span class="memob">＜value type="string" key="caption"＞_File＜/value＞</span><br>
                改成<br>
                <span class="memob">＜value type="string" key="caption"＞檔案(_F)＜/value＞</span><br>

            </p>
        </div>

        <div class="item">
            <div class="label">step13</div>
            <!-- <div class="close">X</div> -->
            <img src="" alt="">
            <h2>常見問題</h2>
            <p>
                <span class="memor">中文亂碼：</span><br>
                1.資料庫使用中文名稱，2.資料表使用中文名稱<br>
                3.欄位使用中文名稱✈，4.資料錄有中文資料✈<br>

                <span class="memob">資料庫使用中文名稱：</span><br>
                很多人喜愛使用中文來命名資料庫. 在MySQL裡, 一個資料庫會使用1~3個檔案來儲存. 所以用中文命名資料庫, 則其檔名是中文. 在Windows系統中, 若my.ini 裏的 datadir 在沒有變更的情形下, 打開檔案總管查看 C:\ProgramData\MySQL\MySQL Server 8.0\Data目錄, 就會有一個檔名類似為 “@7acb@5411@71df@9020”  的檔案. 其中@7acb代表一個中文字, 這就是中文系統的big5編碼.<br>
                <mark>Win7或是win10</mark>在繁體中文系統下，檔案名稱皆使用big5編碼，而MySQL就會把檔名使用big5來代替。<br>
                一開始使用MySQL是可以很順利的操作，但若想要把資料庫備份出來，必需使用如下指令↓↓↓<br>
                <mark>mysqldump -u account -p --routines --default-character-set=big5 db > db.sql</mark><br>
                上面的default-character-set=big5是指定備份的中文檔案名為 big5.<br>
                這下問題又來了, 資料表或是其中的欄位也是中文的話, MySQL系統卻使用 utf8, 而且是不可變更的. 所以會造成備份到一半就發生錯誤. 如果把 default-character-set改成 utf8, 則中文資料庫又找不到而無法備份了.<br>
                <mark>資料庫名稱, 絕對不可以使用中文</mark><br><br>

                <span class="memob">資料表、欄位、資料錄使用中文:</span><br>
                資料表, 欄位, 資料錄的字元設定, 就交由MySQL來負責了. 所以只要在開啟資料庫時, 把字元碼設定為 utf8/utf8-unicode-ci即可<br><br>

                <span class="memob">更改my.ini</span><br>
                許多教學都說, 可以設定my.ini裏的[mysql]/[mysqld] , 加入 default-character-set=utf8, 自已試試就知道, <span class="memor">這些都是沒用的</span><br><br>


                <span class="memor">資料表引擎</span>：<br>
                MyISAM將資料表分成三個檔，查詢速度快，但功能少，不能roll back<br>
                InnoDB是新型技術，只有一個檔，但支援的功能多，建議直接選用InnoDB<br><br>

                <span class="memor">日期格式：</span><br>
                <span class="memob">使用date or datetime格式，日後方便使用日期查詢</span><br>
                MySQL資料庫的日期型態有 date 及 time 及 datetime 三種格式。<br>
                date 記錄格式如 “2023/05/20″<br>
                time 記錄格式如 “05:00:00″<br>
                datetime 記錄格式如 “2023/05/20 05:00:00″<br>
                考慮查詢日期時，指令如下<br>
                <mark>select * from table where 日期 >= "2023/01/01"</mark><br>
                如果把日期格式變成 datetime 則查詢指令要變成<br>
                <mark>select * from table where 日期 like "2023/01/0%"</mark><br>
            </p>
        </div>

        <div class="item">
            <div class="label">step14</div>
            <!-- <div class="close">X</div> -->
            <img src="" alt="">
            <h2>效能調校</h2>
            <p>
                能讓MySQL效能加速的幾個常見設定<br>
                Ubuntu下更改 /etc/mysql/mysql.conf.d/<span class="memob">mysqld.cnf</span><br>
                Windows下更改C:\ProgramData\MySQL\MySQL Server 8.0\<span class="memob">my.ini</span><br><br>

                更改完，重新啟動MySQL<br>
                Ubuntu : <span class="memob">sudo srevice mysql restart</span><br>
                Windows : <span class="memob">net stop mysql80 / net start muysql80</span><br>
                ==============================<br>
                <span class="memor">更改內容如下：</span><br>
                innodb_log_buffer_size = 128M<br>
                innodb_log_file_size = 128M<br>
                innodb_autoextend_increment = 1000<br>
                innodb_flush_log_at_trx_commit = 0 #加速效能很有效<br>
                max_allowed_packet = 1024M #查詢過久斷線解決方式(Lost connection while query)<br>
                skip-log-bin #取消 binary logging
                innodb_buffer_pool_size=4G #緩衝區, 可大輻減少磁碟負載, 而且可加速查詢效能, 尤其是在select count(*)，但設太大會造成開機時無法自動啟動。<br>
                key_buffer_size = 64M<br>
                [mysql]<br>
                default-character-set = utf8<br>
                character_set_server = utf8<br>
            </p>
        </div>

        <div class="item">
            <div class="label">step15</div>
            <!-- <div class="close">X</div> -->
            <img src="" alt="">
            <h2>binary loggin</h2>
            <p>
                binary loggin會一直讀寫硬碟. 造成硬碟負載過大, 所以系統調校穩定後, 最好把這個設定取消<br>
                Linux之下, 只要在mysqld.cnf 加入 skip-log-bin即可.<br>
                Windows下, my.ini的設定中,  需先把 log-bin=”xxx” 刪除, 然後加為 skip-log-bin<br>

                <span class="memob">#log-bin="DESKTOP-D35ACP3-bin"</span><br>
                <span class="memob">skip-log-bin</span>
            </p>
        </div>

        <div class="item">
            <div class="label">step16</div>
            <!-- <div class="close">X</div> -->
            <img src="" alt="">
            <h2>php7.2相容性問題</h2>
            <p>
                php7.2不認得MySql 8.0 的認証及字元碼, 所以必需更改 /etc/mysql/mysql.conf.d/mysql.cnf<br>
                [mysqld]<br>
                <span class="memob">pid-file  = /var/run/mysqld/mysqld.pid</span><br>
                <span class="memob">socket    = /var/run/mysqld/mysqld.sock</span><br>
                <span class="memob">datadir   = /var/lib/mysql</span><br>
                <span class="memob">log-error = /var/log/mysql/error.log</span><br>
                <span class="memob">default_authentication_plugin=mysql_native</span><br>
                <span class="memob">_password</span><br>

                <span class="memob">character_set_server = utf8</span><br><br>

                然後登入mysql8.0修改帳號<br>
                <span class="memob">ALTER USER '帳號'@'%' IDENTIFIED WITH mysql_native_password BY '密碼';</span><br>
                儲存後，重啟mysql:service myhsql restart
            </p>
        </div>

        <div class="item">
            <div class="label">step17</div>
            <!-- <div class="close">X</div> -->
            <img src="" alt="">
            <h2>安全更新</h2>
            <p>
                新版MySQL在更新刪除時，如果條件所使用的欄位非索引鍵時，就會出現安全更新的問題。<br>
                此時需把SQL_SAFE_UPDATES設為0 (關勢)，待更新刪除完畢後，再設為 1(打開)。<br>
                <span class="memob">SET SQL_SAFE_UPDATES=0;</span><br>
                <span class="memob">update table set field1=value where condition;</span><br>
                <span class="memob">SET SQL_SAFE_UPDATES=1;</span><br>
            </p>
        </div>

        <div class="item">
            <div class="label">step18</div>
            <!-- <div class="close">X</div> -->
            <img src="" alt="">
            <h2>移除MySQL</h2>
            <p>
                mysql installer也可以移除MySQL. 但 mysql  for visual studio 1.2.8 無法移除,<br>
                這個是官方認定的已知issue, 要移除這個, 可以使用geek這套軟体. <br>
                下載解壓縮後, 直接執行 geek.exe，然後在 mysql for visual studio 按右鍵/強制移除 即可.<br>
                <br>
                <a href="https://geekuninstaller.com/download" target="_blank" rel="noopener">點我 geek 下載</a>
            </p>
        </div>



        <div class="item">
            <div class="label">step19</div>
            <!-- <div class="close">X</div> -->
            <img src="" alt="">
            <h2>關於Unicode</h2>
            <p>
                建立資料庫時，語系選擇<span class="memob">utf8/utf8_unicode_ci/</span>與<span class="memob">utf8mb4/Default Collation</span>，之間的區別:   <br><br>
                建立資料庫時選擇不同的字符集和校對規則（Collation）會對資料庫中儲存和排序的方式產生影響。下面我會解釋一下這兩者之間的區別：<br>
                <span class="memor">1.UTF-8 vs UTF-8MB4：</span><br>
                UTF-8（Unicode Transformation Format 8-bit）是一種可變長度的字符編碼，最常見的用於表示Unicode字符的編碼之一。它可以處理一到四個字節的字符。<br>
                UTF-8MB4（UTF-8 with four bytes）是UTF-8的一個擴展，可以處理四個字節的Unicode字符。這在處理一些特殊的Unicode字符時非常有用，例如emoji表情符號和一些罕見的漢字。<br><br>

                <span class="memor">2.UTF8 和 UTF8MB4 的比較：</span><br>
                如果你的應用程序不需要處理超出基本多文種平面（BMP）的Unicode字符，則使用UTF8就足夠了。<br>
                如果你的應用程序需要處理超出BMP範圍的Unicode字符，或者需要支持emoji等特殊字符，則應該選擇UTF8MB4。<br><br>

                <span class="memor">3.Collation：</span><br>
                校對規則影響如何比較和排序字符。utf8_unicode_ci 和 utf8mb4_unicode_ci 是基於Unicode字符集的校對規則，它們提供了比較函數，考慮了字符的字母順序和大小寫。<br>
                utf8_general_ci 和 utf8mb4_general_ci 也是Unicode字符集的校對規則，但比 utf8_unicode_ci 和 utf8mb4_unicode_ci 更加寬鬆，可能導致一些字符的比較和排序不符合預期。<br><br>

                總和來說，如果你的應用需要支持emoji等特殊字符，則應該選擇UTF8MB4字符集和相應的Unicode校對規則。否則，對於大多數應用，使用UTF8字符集和Unicode校對規則就足夠了。
            </p>
        </div>

    </div>

</div>


<?php
    include("..//..//..//template_page//footer_page.php");
?>