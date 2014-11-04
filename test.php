<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<style type="text/css">
    img
    {
        border: none;
    }
</style>

<div id="demo" style="overflow: hidden; width: 500px;">
        <table border="0" align="center" cellpadding="1" cellspacing="1" cellspace="0">
            <tr>
                <td id="demo1" valign="top" bgcolor="ffffff">
                   <!-- 特别注意，下面的图片总宽度必须大于上面定义的demo的宽度，如上面demo的宽度为500px,则下面图片总宽度必须大于500,否则会出现些问题！ -->
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tr align="center">
                            <td>
                                <a href="#" target="_blank">
                                    <img src="img/1.jpg" width="150" alt="第一张图" height="100"></a>
                            </td>
                            <td>
                                <a href="#" target="_blank">
                                    <img src="img/2.jpg" width="150" alt="第二张图" height="100"></a>
                            </td>
                            <td>
                                <a href="#" target="_blank">
                                    <img src="img/3.jpg" width="150" alt="第三张图" height="100"></a>
                            </td>
                            <td>
                                <a href="#" target="_blank">
                                    <img src="img/4.jpg" width="150" alt="第四张图" height="100"></a>
                            </td>
                            <td>
                                <a href="#" target="_blank">
                                    <img src="img/5.jpg" width="150" alt="第五张图" height="100"></a>
                            </td>
                        </tr>
                    </table>
                </td>
                <td id="demo2" valign="top">
                </td>
            </tr>
        </table>
    </div>

    <script type="text/javascript"> 
    var speed=30;
    var demo = $("#demo");
    var demo1 = $("#demo1");
    var demo2 = $("#demo2");
    demo2.html(demo1.html());
    function Marquee(){ 
        if(demo.scrollLeft()>=demo1.width())
            demo.scrollLeft(0); 
        else{
            demo.scrollLeft(demo.scrollLeft()+1);
        }
    } 
    var MyMar=setInterval(Marquee,speed) 
    demo.mouseover(function() {
        clearInterval(MyMar);
    } )
    demo.mouseout(function() {
        MyMar=setInterval(Marquee,speed);
    } )
    </script>
