@extends('home.layouts')
@section('main_content')

    <div class="page-banner page-banner-home">
        <div class="banner-slogan">
            <div class="container">
                <h1 class="slogan-title">重新定义加速<br>混淆加密传输</h1><br>
                <h2 class="slogan-desc">现在加入即可享受高达1Gbps数据传输加速<br>
                    <br>节点覆盖：香港、台湾、韩国、日本、美国、新加坡、英国、法国、国内节点等，全球10+数据中心、40+动态加速节点，助您网络加速。<br>
                    <br>目前线路采用以下机房服务器（机房线路会动态调整，最终以网站公告为准）：阿里云HKB数据中心、阿里云华东数据中心、台湾Hinet数据中心、日本IIJ名古屋数据中心、日本Choopa数据中心、日本KDDI数据中心、英国Choopa数据中心、美国Choopa数据中心、法国OVH机房、韩国KT机房、洛杉矶CN2机房、美国C3EDGE机房、新加坡PCCW机房等</h2>

            </div>
        </div>
        <!-- /.banner-slogan -->
    </div>
    <div class="page-section section-center" style="padding-top: 200px;">
        <div class="container">
            <h3>我们是全球首家（且目前唯一）使用GeoTrust EV SSL证书的ShadowsocksR概念加速服务商，从最大限度上确保网站的安全性。</h3><br><br>
            <div class="services">
                <div class="row">
                    <div class="col-sm-4">
                        <a class="service" href="{{url('/home/features')}}">
                            <i class="service-icon service-icon-dedicated image-shadow-sm animate zoomIn"></i>
                            <div class="service-body">
                                <h3>免费体验</h3>
                                <p>最低至8毫秒的延迟，让您游戏体验如同本地宽带，酣畅淋漓。</p>
                                <span class="btn btn-lg btn-link">普通速度节点，终身使用</span>
                            </div>
                        </a>
                        <!--/ .service -->
                    </div>
                    <div class="col-sm-4">
                        <a class="service" href="{{url('/home/datacenter')}}">
                            <i class="service-icon service-icon-compute image-shadow-sm animate zoomIn"></i>
                            <div class="service-body">
                                <h3>按月计费</h3>
                                <p>国际知名顶级数据中心接入，保证高速浏览与稳定体验 </p>
                                <span class="btn btn-lg btn-link">按月计费，12元/10GB起</span>
                            </div>
                        </a>
                        <!--/ .service -->
                    </div>
                    <div class="col-sm-4">
                        <a class="service" href="{{url('/home/panel')}}">
                            <i class="service-icon service-icon-storage image-shadow-sm animate zoomIn"></i>
                            <div class="service-body">
                                <h3>按量计费</h3>
                                <p>提供单线路高达1Gbps的节点，为您快速访问网络的提供有力保障。</p>
                                <span class="btn btn-lg btn-link">按量计费，30元/20GB起</span>
                            </div>
                        </a>
                        <!--/ .service -->
                    </div>

                    <h3>全节点使用aes-256-cfb高强度流加密算法，支持auth_sha1协议，支持http_simple以及http_post流量混淆。</h3>
                </div>
            </div>
            <!--/ .services -->
        </div>
    </div>
    <div class="page-section section-dark section-center ">
        <div class="container">
            <h2 class="section-title">我们的连接点分布图</h2>
            <div class="location-map location-map-lg">
                <div class="location-container">
                    <div class="location location-seattle animate zoomIn">
                        <span class="location-name"><span>西雅图</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-los-angeles animate zoomIn"><span class="location-name">
						<span>洛杉矶</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-dallas animate zoomIn"><span class="location-name">
					    <span>达拉斯</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-paris animate zoomIn">
                            <span class="location-name">
						<span>法国</span></span><span class="location-pin"></span></div>
                    <div class="location location-kr animate zoomIn">
                            <span class="location-name">
						<span>韩国</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-london animate zoomIn"><span class="location-name">
					    <span>英国</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-shenzhen animate zoomIn"><span class="location-name">
					    <span>深圳</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-taiwan animate zoomIn"><span class="location-name">
					    <span>台湾</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-hongkong animate zoomIn"><span class="location-name">
					    <span>香港</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-sgp animate zoomIn"><span class="location-name">
						<span>新加坡</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-tokyo animate zoomIn"><span class="location-name">
						<span>日本</span></span><span class="location-pin"></span>
                    </div>
                    <div class="map"></div>
                </div>
                <div class="actions text-center">
                    <a class="btn btn-lg btn-light btn-outline" href="{{url('/home/datacenter')}}">数据中心及线路更多信息<i class="zmdi zmdi-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-section -->

    <div class="page-section section-center  section-blue" style="color:white;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h2 class="title-head" style="color:white;">适合哪些人群？</h2>
                    <p class="desc">ShadowsocksR提供分布全球的加速服务，使得您可以在任何地方开展国际贸易、收发Gmail及观看视频。</p>
                </div>
            </div>
            <div class="empty_space" style="height: 30px"></div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="main wow fadeInLeft">
                        <h4 class="title-head" style="color:white;">海外业务关系人</h4>
                        <p>越过互联网服务提供商和国家防火墙的限制，与其它国家的任何企业自由地沟通合作、在线协作和无障碍交易，而不用担心网络连接时不时地被重置。</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="main wow fadeInRight">
                        <h4 class="title-head" style="color:white;">海淘客、代购客</h4>
                        <p>在亚马逊、易贝、樂天市场、沃尔格林、健安喜、百思买、第五大道、诺德斯特龙、丝芙兰、巴塔哥尼亚、6PM、Drugstore、Diapers 等网站上快捷购物。</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="main wow fadeInLeft">
                        <h4 class="title-head" style="color:white;">游戏党、影视党</h4>
                        <p>在索尼PS4，微软Xbox Live、Steam、Battle.net 和其它游戏私服比如魔兽世界和英雄联盟上享受低延迟的畅玩体验。在线观看高清Youtube、Netflix和Twitch。</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="main wow fadeInRight">
                        <h4 class="title-head" style="color:white;">国外友人</h4>
                        <p>在谷歌、Youtube、脸书、推特、Gmail、Instagram、Pinterest、Flickr、Netflix、Reddit、Wordpress blogs 等网站上的访问连接将被保护并提升访问速度。</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="main wow fadeInLeft">
                        <h4 class="title-head" style="color:white;">设计师、攻城狮</h4>
                        <p>在Smashing Magazine、Flickr、DeviantArt 等网站上轻松获得设计素材。加入Github、Stack OverFlow、Reddit、Android.com 等编程社区自由交谈。</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="main wow fadeInRight">
                        <h4 class="title-head" style="color:white;">留学党、科研党</h4>
                        <p>在谷歌学术、ScienceDirect、BASE Search、Amazon A9等网站上快速搜索学术论文资料。在手机上使用WhatsApp、LINE、Skype、脸书和推特。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-section -->

    <div class="page-section section-center">
        <div class="container">
            <h2 class="section-title">为什么选择我们？</h2>
            <div class="features features-icon-top features-center">
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="feature"><i class="icon icon-lg icon-realtime-protection animate zoomIn"></i>
                            <h4>极致的网速，给您节省更多的时间</h4>
                        </div>
                    </div>
                    <!-- /.feature -->
                    <div class="col-sm-3 col-xs-6">
                        <div class="feature"><i class="icon icon-lg icon-globe animate zoomIn"></i>
                            <h4>全球数10个加速网络连接服务点</h4>
                        </div>
                    </div>
                    <!-- /.feature -->
                    <div class="clear-xs"></div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="feature"><i class="icon icon-lg icon-helping-hand animate zoomIn"></i>
                            <h4>全节点SLA保证，随时畅通的高效加速</h4>
                        </div>
                    </div>
                    <!-- /.feature -->
                    <div class="col-sm-3 col-xs-6">
                        <div class="feature"><i class="icon icon-lg icon-electronics animate zoomIn"></i>
                            <h4>安全稳定的流加密算法，安全与速度兼得</h4>
                        </div>
                    </div>
                    <!-- /.feature -->
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="feature"><i class="icon icon-lg icon-broadcasting animate zoomIn"></i>
                            <h4>连接点多重负载均衡机制，智能分流加速</h4>
                        </div>
                    </div>
                    <!-- /.feature -->
                    <div class="col-sm-3 col-xs-6">
                        <div class="feature"><i class="icon icon-lg icon-multiple-devices animate zoomIn"></i>
                            <h4>全平台支持，一个帐号畅通你的所有设备</h4>
                        </div>
                    </div>
                    <!-- /.feature -->
                    <div class="clear-xs"></div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="feature"><i class="icon icon-lg icon-admin-tools animate zoomIn"></i>
                            <h4>简单易用的控制面板，无需任何学习成本</h4>
                        </div>
                    </div>
                    <!-- /.feature -->
                    <div class="col-sm-3 col-xs-6">
                        <div class="feature"><i class="icon icon-lg icon-last-hour animate zoomIn"></i>
                            <h4>支付后秒级自动开通服务，无需等待</h4>
                        </div>
                    </div>
                    <!-- /.feature -->
                </div>
            </div>
            <!-- /.features -->



        </div>
    </div>

@endsection