@extends('layouts.user')

@section('title', 'Pemerintah Desa')

@section('content')
  <!--======= SUB BANNER =========-->
  <section class="sub-banner">
    <img src="{{ url('images/bg/peta-subbg.jpg') }}" alt="foto" width="100%" height="100%">
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Latest News -->
    <section class="latest-news blog blog-single padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- Blog Side -->
        <div class="row">
          <div class="col-md-9"> 
            <div class="container">
              <div class="position-left-left">
                <h2>Pemerintah Desa Tengkurak</h2>
                <ul class="breadcrumb">
                  <li><a href="{{ url('/') }}">home</a></li>
                  <li>pemerintah desa</li>
                </ul>
              </div>
            </div>
            
            <!-- News 1 -->
            <div class="artikel-konten clearfix"><p style="text-align: center;"><strong>SUSUNAN ORGANISASI DAN TATA KERJA PEMERINTAH DESA</strong></p>
              <p style="text-align: center;"><strong>DESA TENGKURAK KECAMATAN TIRTAYASA KABUPATEN SERANG </strong></p>
              <p>&nbsp;&nbsp;</p>
              <img src="{{ url('images/struktur.jpeg') }}" alt="Struktur Organisasi">
            </div>
          </div>
          
          <!-- Side Bar -->
          <div class="col-md-3">
            <div class="side-bar"> 
              
              <!-- Categories -->
              <h5 class="font-alegreya ">Arsip</h5>
              <ul class="cate bg-defult">
                <li><a href="#.">Januari 2020 <span>(10)</span></a></li>
                <li><a href="#.">Februari 2020<span>(20)</span></a></li>
                <li><a href="#.">Maret 2020<span>(28)</span></a></li>
                <li><a href="#.">April 2020<span>(18)</span></a></li>
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