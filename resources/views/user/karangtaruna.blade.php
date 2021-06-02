@extends('layouts.user')

@section('title', 'Karang Taruna')

@section('content')
  <!--======= SUB BANNER =========-->
  <section class="sub-banner">
    <img src="{{ url('images/bg/peta-subbg.jpg') }}" alt="foto" width="100%" height="100%">
    <div class="container">
      <div class="position-center-center">
        <h2>Karang Taruna</h2>
        <ul class="breadcrumb">
          <li><a href="{{ url('/') }}">home</a></li>
          <li>karang taruna</li>
        </ul>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Latest News -->
    <section class="latest-news blog blog-single padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- Blog Side -->
        <div class="row">
          <div class="col-md-9"> 
            
            <!-- News 1 -->
            <article class="margin-bottom-50"> <a href="#."> <img class="img-responsive" src="images/blog-img-1.jpg" alt=""> </a>
              <div class="news-detail">
                <div class="row">
                  <div class="col-md-3 text-center">
                    <div class="avatar"> <img class="img-circle" src="images/avatar-1.png" alt=""> </div>
                    <p>28 Sep 2017 </p>
                    <p><i class="fa fa-comment"></i>03 </p>
                  </div>
                  <div class="col-md-9"> <a href="#.">Data Traffic Conversion</a>
                    <p>The weather started getting rough - the tiny ship was tossed. If not for the courages of the fearless for crew the Minnow would be lost. the Minnow woulds be lost. Just two good ol' boys Wouldn't change if they could. Fightin' the system like a true modern day Robin Hood. They call him Flipper Flipper faster flying there-under under the sea. Now the world don't move to the beat of just one drum. <br>
                      <br>
                      The movie star the professor and Mary Ann here on Gilligans Isle. Come and dance on our floor. Take a step that is new. We've a loveable space that needs your face threes company too! That this group would somehow form a family that's the way we all became the Brady Bunch. </p>
                    <div class="row margin-top-30 margin-bottom-30">
                      <div class="col-md-6"> <img src="images/blog-img-1.jpg" class="img-responsive" alt=" "> </div>
                      <div class="col-md-6">
                        <p class="font-italic">That this group would somehow form a family that's the way we all became the Brady Bunch. Make your way in the world today takes you've got. Takin' a break from all your worries sure would help a lot. </p>
                      </div>
                    </div>
                    <p>The movie star the professor and Mary Ann here on Gilligans Isle. Come and dance on our floor. Take a step that is new. We've a loveable space that needs your face threes company too! That this group would somehow form a family that's the way we all became the Brady Bunch.</p>
                  </div>
                </div>
              </div>
            </article>
            
            <!--=======  COMMENTS =========-->
            <div class="comments">
              <h4 class="text-uppercase">3 comments </h4>
              <ul class="media-list">
                
                <!--=======  COMMENTS =========-->
                <li class="media">
                  <div class="media-left"> <a href="#"> <img class="media-object" src="images/com-avatar-1.jpg" alt=""> </a> </div>
                  <div class="media-body light-gray-bg">
                    <h6 class="media-heading">Steave Hans<span> Sep 23, 2017</span></h6>
                    <p>Taque ipsa quae abe illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemosala enim ipsam volupitatem quia voluptas sit aspernatur aut odit aut fugite.</p>
                    <a href="#." class="reply">Reply</a> </div>
                </li>
                
                <!--=======  COMMENTS =========-->
                <li class="media margin-left-80">
                  <div class="media-left"> <a href="#"> <img class="media-object" src="images/com-avatar-2.jpg" alt=""> </a> </div>
                  <div class="media-body light-gray-bg">
                    <h6 class="media-heading">Jhon Kennadi <span> Sep 23, 2017</span></h6>
                    <p>Taque ipsa quae abe illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemosala enim ipsam volupitatem quia voluptas sit aspernatur aut odit aut fugite.</p>
                    <a href="#." class="reply">Reply</a> </div>
                </li>
                
                <!--=======  COMMENTS =========-->
                <li class="media">
                  <div class="media-left"> <a href="#"> <img class="media-object" src="images/com-avatar-3.jpg" alt=""> </a> </div>
                  <div class="media-body light-gray-bg">
                    <h6 class="media-heading">Rock Lancer <span>Sep 23, 2017</span></h6>
                    <p>Taque ipsa quae abe illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemosala enim ipsam volupitatem quia voluptas sit aspernatur aut odit aut fugite.</p>
                    <a href="#." class="reply">Reply</a> </div>
                </li>
              </ul>
              
              <!--=======  LEAVE COMMENTS =========-->
              <h4 class="font-alegreya">leave a comment</h4>
              <form>
                    <ul class="row">
                      <li class="col-sm-6">
                        <label> Name
                          <input type="text" class="form-control" name="name" placeholder="" >
                        </label>
                      </li>
                      <li class="col-sm-6">
                        <label> Email
                          <input type="text" class="form-control" name="name" placeholder="" >
                        </label>
                      </li>
                      
                      <li class="col-sm-12">
                        <label> COMMENTS
                          <textarea class="form-control" ></textarea>
                        </label>
                      </li>
                      <li class="col-sm-12">
                        <button type="submit" class="btn">post comment </button>
                      </li>
                    </ul>
              </form>
            </div>
          </div>
          
          <!-- Side Bar -->
          <div class="col-md-3">
            <div class="side-bar"> 
              
              <!-- Categories -->
              <h5 class="font-alegreya ">Categories</h5>
              <ul class="cate bg-defult">
                <li><a href="#.">SEO Services <span>(10)</span></a></li>
                <li><a href="#.">PayPerClick<span>(20)</span></a></li>
                <li><a href="#.">Social Media<span>(28)</span></a></li>
                <li><a href="#.">KeyWord Analytic<span>(18)</span></a></li>
                <li><a href="#.">Webdesigning<span>(09)</span></a></li>
                <li><a href="#.">Developing<span>(32)</span></a></li>
                <li><a href="#."><span>View All <i class="fa fa-long-arrow-right"></i></span></a></li>
              </ul>
              
              <!-- Categories -->
              <h5 class="font-alegreya">Latest Tweets</h5>
              <ul class="tweets bg-defult">
                <li>@Murphy zim To a deluxe apartment
                  in the sky <a href="#.">http://Comr.designer.com </a><span>1 hours ago</span></li>
                <li>@Murphy zim To a deluxe apartment
                  in the sky <a href="#.">http://Comr.designer.com </a><span>1 hours ago</span></li>
              </ul>
              
              <!-- Popular Post -->
              <h5 class="font-alegreya">Popular Post</h5>
              <div class="papu-post margin-t-40">
                <ul class="bg-defult">
                  <li class="media">
                    <div class="media-left"> <a href="#"> <img class="media-object" src="images/case-img-1.jpg" alt=""></a> </div>
                    <div class="media-body"> <a class="media-heading" href="#.">Were gonna pay a call a boldly go where no </a> <span>Sep 21, 2017</span> </div>
                  </li>
                  <li class="media">
                    <div class="media-left"> <a href="#"> <img class="media-object" src="images/case-img-2.jpg" alt=""></a> </div>
                    <div class="media-body"> <a class="media-heading" href="#.">So lets make the most is  beautiful day </a> <span>Sep 21, 2017</span> </div>
                  </li>
                  <li class="media">
                    <div class="media-left"> <a href="#"> <img class="media-object" src="images/case-img-3.jpg" alt=""></a> </div>
                    <div class="media-body"> <a class="media-heading" href="#.">We're gona make dreams comes true </a> <span>Sep 21, 2017</span> </div>
                  </li>
                </ul>
              </div>
              
              <!-- Categories -->
              <h5 class="font-alegreya ">Archives</h5>
              <ul class="cate bg-defult">
                <li><a href="#.">May 2017 <span>(10)</span></a></li>
                <li><a href="#.">June 2017<span>(20)</span></a></li>
                <li><a href="#.">July 2017<span>(28)</span></a></li>
                <li><a href="#.">Augest 2017<span>(18)</span></a></li>
                <li><a href="#."><span>View All <i class="fa fa-long-arrow-right"></i></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- End Content --> 
@endsection