 <script type="text/javascript">
    $(function(){

    var columnWidthValue = 185;
    let isMobile = window.matchMedia("only screen and (max-width: 600px)").matches;

    if (isMobile) {
        columnWidthValue = 130;
    }

    var $container = $('#content');
    $container.masonry({
            itemSelector: '.post',
            columnWidth: columnWidthValue,
            isFitWidth: true,
            animate: true
    });  
   window.addEventListener('resize', function(event){
        var columnWidthValue = 185;
        let isMobile = window.matchMedia("only screen and (max-width: 600px)").matches;

        if (isMobile) {
            columnWidthValue = 130;
        }
        var $container = $('#content');
            $container.masonry({
                itemSelector: '.post',
                columnWidth: columnWidthValue,
                isFitWidth: true,
                animate: true
        });  
    });

    if(PageType == "games" || PageType == "best") {
        $(window).scroll(function(){
            if($(document).scrollTop() + $(window).height() > $(document).height() - 500) {
                if (!loading) {
                    loading= true;
                    jsonajax(30);
                }
            }
        });
    }
    var LoadedGamesNum = 0;
    var loading= false;
    function jsonajax(e){
    if(e<=0) return;
    if (typeof cat !== 'undefined') {
        url = "{{LOAD_MORE_URL}}/ajax_loadmoregames.php?LoadedGamesNum=" + LoadedGamesNum + "&num=" + e + "&ids=" + ids + "&cat=" + cat;
    }
    else {
        url = "{{LOAD_MORE_URL}}/ajax_loadmoregames.php?LoadedGamesNum=" + LoadedGamesNum + "&num=" + e + "&ids=" + ids + "&pagetype=" + PageType;
    }
    $.ajax({
        url: url,
        success: function(t) {
                if(t == 'NoData')  {
                    loading = true;
                }else{
                    var $html = $(t);
                    $container.append($html).masonry('appended', $html);
                    loading = false;
                }
              LoadedGamesNum = LoadedGamesNum + e;
        }
    });
    }
    });
    if (typeof PageType !== 'undefined') {
        if(PageType == "played") {
            $(".bottomtext").hide();
        }
    }
</script>
{{CMS}}
{{COOKIE}}

<div id="footer" class=fix>
    <div class="foot-inner">
        <div class="link-b2">
            <a href="{{CONFIG_SITE_URL}}/">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{CONFIG_SITE_URL}}/tags">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{CONFIG_SITE_URL}}/about">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{CONFIG_SITE_URL}}/privacy">Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
            <a href="{{CONFIG_SITE_URL}}/terms">Terms of Service</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{CONFIG_SITE_URL}}/">Sitemap</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{CONFIG_SITE_URL}}/login">Admin Login</a>
            
        </div>
        <div class="link-b2">
            <span>&copy; {{CONFIG_THIS_YEAR}}&nbsp;&nbsp;{{CONFIG_SITE_NAME}}  All rights reserved</span>
        </div>
        </div>
    </div>
</div>
