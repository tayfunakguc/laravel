@extends('customer.master-blades.navbar-footer')
@section('body')
    <section id="advertisement">
        <div class="container">
            <img src="images/shop/advertisement.jpg" alt="" />
        </div>
    </section>
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Giriş Yap</h2>
                        <form action="#">
                            <input type="text" placeholder="Kullanıcı Adı veya E-mail" />
                            <input type="password" placeholder="Şifre"/>
                            <span>
								<input type="checkbox" class="checkbox">
								Beni Hatırla
							</span>
                            <button type="submit" class="btn btn-default">Giriş Yap</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">VEYA</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Ücretsiz Kayıt Olun</h2>
                        <form action="#">
                            <input type="text" placeholder="Ad"/>
                            <input type="text" placeholder="Soyad"/>
                            <input type="text" placeholder="E-mail"/>
                            <input type="text" placeholder="Kullanıcı Adı"/>
                            <input type="password" placeholder="Şifre"/>
                            <input type="password" placeholder="Şifre Tekrar"/>
                            <button type="submit" class="btn btn-default">Kayıt Ol</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
@endsection