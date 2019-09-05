<div class="col-sm-3">
    <div class="left-sidebar">
        <h2 id="cat">Categories <i class="fa fa-plus"></i></h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Bags</a></h4>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Shoes</a></h4>
                </div>
            </div>
        </div><!--/category-productsr-->

<script>
var screenwidth=$(window).width();

if(screenwidth<768){
        $(function() {
            $("#accordian").hide(); // hide id = 'l_default' using # operator after 300 ms

            });

            $(function() {
                $('#cat').on('click', function(){
                $('#accordian').toggle();
                });
                });
            }


</script>





        <div class="shipping text-center"><!--shipping-->
            <img src="images/home/shipping.jpg" alt="" />
        </div><!--/shipping-->

    </div>

</div>
