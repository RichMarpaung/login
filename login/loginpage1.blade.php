<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section class="sign-section pt_40 pb_40">
        <div class="large-container">
            <div class="sec-title centred mb_20">
                <h2>Log in</h2>
            </div>
            <div class="form-inner">
                <form method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label>Email <span>*</span></label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Password <span>*</span></label>
                        <input type="password" name="password" required>
                    </div>
                    @if (Session::has('status'))
                    <div class="alert {{ Session::get('status') == 'success' ? 'alert-success' : 'alert-danger' }} mt-2" role="alert">
                     {{Session::get('massage')}}
                      </div>
                    @endif
                    <div class="form-group message-btn">
                        <button type="submit" class="theme-btn btn-one">Log In</button>
                    </div>

                </form>
                {{-- <div class="lower-text centred"><p>Not registered yet? <a href="{{ route('register') }}">Create an Account</a></p></div> --}}
            </div>
        </div>
    </section>
</body>
</html>
