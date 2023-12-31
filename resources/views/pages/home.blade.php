@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->



<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Homepage</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Homepage</a></li>
{{--					<li class="breadcrumb-item active">Homepage</li>--}}
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

		{{-- main content here --}}
        <div class="container text-center ">
            <div class="row d-flex align-items-center justify-content-center" style="height: 92.5vh;">
                <div class="col text-start">
                    <h1 style="font-size: 5em">
                        UnivAssist
                    </h1>
                    <p style="font-size: 1.5em">
                        Platform digital yang dirancang khusus untuk membantu mahasiswa dalam memenuhi berbagai kebutuhan sehari-hari.
                    </p>
                    <button type="button" class="btn btn-lg text-white rounded-5 px-5 py-2" style="background-color: #AA998F">Read More About This App</button>
                </div>
                <div class="col">
                    <img src="{{asset('img/LogoTrans.png')}}" alt="Logo">
                </div>
            </div>
        </div>
	</div><!-- /.container-fluid -->
</div>

<section  style="background-color: #AA998F">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12" style="padding: 4rem 6rem 3rem 6rem" >
                <h4 class="text-white lh-lg"><span class="fs-1">UnivAssist</span>  hadir untuk memberikan kemudahan akses, efisiensi waktu, harga bersaing, fleksibilitas, dan terhubungnya komunitas mahasiswa dalam memenuhi kebutuhan kos, laptop, dan buku kuliah. Sehingga mahasiswa dapat menjalani perkuliahan dengan nyaman, terjangkau, dan terhubung dengan sesama mahasiswa.</h4>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center text-center">
            <div class="col-md-1 mb-4"><i class="fa-brands fa-instagram fa-bounce fa-2xl "></i></div>
            <div class="col-md-1 mb-4 " ><i class="fa-brands fa-twitter fa-bounce fa-2xl "></i></div>
            <div class="col-md-1  mb-4"><i class="fa-brands fa-facebook fa-bounce fa-2xl "></i></div>
            <div class="col-md-1  mb-4"><i class="fa-brands fa-linkedin fa-bounce fa-2xl "></i></div>
        </div>
    </div>
</section>

<section>
    <section class="client pb-5">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12  mx-auto ">
                    <div class="carousel" data-interval="25" data-bs-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row" style="padding: 4rem 6rem 4rem 6rem">
                                    <div class="t-card">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="lh-lg py-2 fs-5">UnivAssist telah menjadi penyelamat bagi saya dalam mencari kos-kosan yang sesuai dengan kebutuhan saya. Fitur pencarian yang lengkap dan detail informasi kos-kosan membantu saya memilih dengan mudah. Selain itu, kemampuan untuk menyewa laptop dan buku kuliah dengan harga terjangkau benar-benar membantu saya menghemat biaya.Terima kasih UnivAssist, kini hidup perkuliahan saya menjadi lebih praktis dan terhubung!</p>
                                        <div class="text-end">
                                            <i class="fa fa-quote-right" aria-hidden="true"></i><br />
                                        </div>

                                    </div>
                                    <div class="row pt-4 d-flex ms-auto">
                                        <div class="col-sm-10 text-dark pt-3 my-auto text-end">
                                            <h5><strong>Yehezkiel David Setiawan</strong></h5>
                                            <p class="testimonial_subtitle">
                                                <span>Mahasiswa Teknik Informatika</span><br />
                                                <span>Universitas Kristen Maranatha</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-2 my-auto">
                                            <img src="{{asset('img/david.JPG')}}" class="rounded-circle" style="max-width: 150px; width: 100%" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row" style="padding: 4rem 6rem 4rem 6rem">
                                    <div class="t-card">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="lh-lg py-2 fs-5">UnivAssist sangat membatu bagi mahasiswa baru untuk menemukan tempat kos ternyaman dan dekat dengan kampus. Saya juga terbantu dengan adanya komunitas yang dibuat oleh UnivAssist, saya jadi lebih dapat berbaur dengan lingkungan kampus.</p>
                                        <div class="text-end">
                                            <i class="fa fa-quote-right" aria-hidden="true"></i><br />
                                        </div>

                                    </div>
                                    <div class="row pt-4 d-flex ms-auto">
                                        <div class="col-sm-10 text-dark pt-3 my-auto text-end">
                                            <h5><strong>Cristianto Tri Arthurito</strong></h5>
                                            <p class="testimonial_subtitle">
                                                <span>Mahasiswa Teknik Industri</span><br />
                                                <span>Universitas Kristen Maranatha</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-2 my-auto">
                                            <img src="{{asset('img/arthur.JPG')}}" class="rounded-circle" style="max-width: 150px; width: 100%" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row" style="padding: 4rem 6rem 4rem 6rem">
                                    <div class="t-card">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="lh-lg py-2 fs-5">Komunitas yang dibentuk oleh UnivAssist sangat membantu mobilitas saya sebagai mahasiswa di lingkungan kampus. Peminjaman buku yang disediakan oleh UnivAssist sangat membantu saya untuk menemukan buku dengan cepat dan hanya tinggal sekali klik saja.</p>
                                        <div class="text-end">
                                            <i class="fa fa-quote-right" aria-hidden="true"></i><br />
                                        </div>

                                    </div>
                                    <div class="row pt-4 d-flex ms-auto">
                                        <div class="col-sm-10 text-dark pt-3 my-auto text-end">
                                            <h5><strong>Laurentius Gusti Ontoseno Panata Yudha</strong></h5>
                                            <p class="testimonial_subtitle">
                                                <span>Mahasiswa Teknik Elektro</span><br />
                                                <span>Universitas Kristen Maranatha</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-2 my-auto">
                                            <img src="{{asset('img/onto.jpeg')}}" class="rounded-circle" style="max-width: 150px; width: 100%" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<section>
    <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-md-3"><div class="card cardMenuDalam1" style="width: 18rem;height: 18rem">
                    <div class="blur">
                        <h1 class="my-5 py-5 text-white">Pencarian Indekos</h1>
                    </div>

                </div>
            </div>
            <div class="col-md-3"><div class="card cardMenuDalam2" style="width: 18rem;height: 18rem">
                    <div class="blur">
                        <h1 class="my-5 py-5 text-white">Penyewaan Laptop</h1>
                    </div>

                </div>
            </div>
            <div class="col-md-3"><div class="card cardMenuDalam3" style="width: 18rem;height: 18rem">
                    <div class="blur">
                        <h1 class="my-5 py-5 text-white">Peminjaman Buku</h1>
                    </div>

                </div>
            </div>
            <div class="col-md-3"><div class="card cardMenuDalam4" style="width: 18rem;height: 18rem">
                    <div class="blur">
                        <h1 class="my-5 py-5 text-white">Komunitas Kami</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row d-flex justify-content-center text-center mb-5">
            <div class="col-md-4 my-auto">
                <span class="number">150 +</span><br/>
                <p class="kataNumber">Tempat Indekos</p>
            </div>
            <div class="col-md-4 my-auto">
                <span class="number">100 +</span><br/>
                <p class="kataNumber">Laptop</p>
            </div>
            <div class="col-md-4 my-auto">
                <span class="number">300 +</span><br/>
                <p class="kataNumber">Buku Kuliah</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center my-5">
            <div class="col-md-10  mx-5">
                <p class="text-center fs-1 px-5">Ambil langkah pertama menuju kehidupan kampus yang lebih baik.</p>
            </div>
        </div>

    </div>
</section>

<section>
    <div class="row d-flex justify-content-center maha">
        <div class="col-md-12 blur1 text-white">
            <p class=" px-5 mx-5">"Education is the most powerful weapon which you can use to change the world."
            </p>
            <h1 class="px-5 mx-5">- Nelson Mandela</h1>
        </div>
    </div>
</section>


<!-- /.content -->
@endsection
