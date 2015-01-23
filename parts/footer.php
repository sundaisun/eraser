    <footer>
        <div class="footer-btm" id="footer">
            <div class="row">
                <div class="small-12 columns">
                    <ul>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter-square"></i></a>
                        </li>
                        <li><a href="#" class="facebook"><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <p>2015 IW Group, Inc. All rightes reserved.</p>
            </div>
        </div>
    </footer>



    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/foundation/js/foundation.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/wow.js"></script>
    <script>
        var wow = new WOW(
            {
                offset:200
            });
        wow.init();
    </script>
<!--
    <script src="/js/typed.js"></script>
    <script>
  $(function(){
      $(".typed").typed({
        strings: ["does <strong>this</strong> and <strong>that</strong> and total market stuff"],
        typeSpeed: 60,
        showCursor:false
      });
  });
</script>
-->
    <script src="/js/classie.js"></script>
    <script src="/js/base.js"></script>
    <script src="/js/overlay-nav.js"></script>
<script>
    //sticky footer
         $(window).bind("load", function () {
        var footer = $("#footer");
        var pos = footer.position();
        var height = $(window).height();
        height = height - pos.top;
        height = height - footer.height();
        if (height > 0) {
            footer.css({
                'margin-top': height + 'px'
            });
        }
    });
</script>
</body>
<!--Chinese web font-->
<script type="text/javascript" src="http://www.youziku.com/UserDownFile/jquery.min.js"></script>
<script type="text/javascript" src="http://www.youziku.com/UserDownFile/jquery.md5.js"></script>
<script type="text/javascript"> 
    function youziku46865() {
        var resultStr = $(".Source-Han-Light").text();
        var md5 = "";
        resultStr = Trim(resultStr);
        resultStr = SelectWord(resultStr);
        md5 = $.md5("ede692e8f8164786a13b4e188c80e943"+"Source-Han-Light" + resultStr);
        $.getJSON("http://www.youziku.com/webfont/CSSPOST?jsoncallback=?", { "id": md5, "guid": "ede692e8f8164786a13b4e188c80e943", "type": "5" }, function (json) {
            if (json.result == 0) {/*alert("需要生成");*/
                $.post("http://www.youziku.com/webfont/PostCorsCreateFont", { "name": "Source-Han-Light", "gid": "ede692e8f8164786a13b4e188c80e943", "type": "5", "text": resultStr }, function (json) {
                if (json == "0") { /*alert("参数不对");*/
                } else if (json == "2") {/*alert("超过每日生成字体数的上限");*/
                } else if (json == "3") { /*alert("当前正在生成请稍后");*/
                } else {/*alert("正在生成");*/
                }
            });
            }
            else {/*alert("下载css文件");*/
                loadExtentFile("http://www.youziku.com/webfont/css?id=" + md5 + "&guid=" + "ede692e8f8164786a13b4e188c80e943" + "&type=5");
            }
        });
    }
    (function youziku() {
    if (window.location.href.toString().substring(0, 7) == "file://") {
            alert("你当前是通过双击打开html文件，进行本地测试的，这样看不到字体效果，一定要通过本地建立的虚拟网站或发布到外网进行测试。详见有字库的使用说明。");
        }else{
        youziku46865();
        }
    })()
</script>

</html>
