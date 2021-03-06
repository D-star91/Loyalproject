<x-Studylayout>

    <div class="Bible-bg">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-6">
                    <div class="form-bg">
                        <h3>Bible Study</h3>
                        <p>
                            နှုတ်ကပတ်တော်သည် သင်၏ဘဝအသက်တာအတွက် အကောင်းအဆုံးတည်ဆောက်ပေးနေမည်။ <br>
                            သင်ခန်းစာများကို အခုပဲ ဝင်ရောက်လေ့လာခံယူလိုက်ပါ။
                        </p>
                        <form action="{{route('biblelog')}}" method="POST">
                        @csrf
                            <div class="md-form">
                                <input type="email" id="inputMDEx" class="form-control" name="email">
                                <label for="inputMDEx">Email</label>
                            </div>
                                @error("useremail")
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            <div class="md-form">
                                <input type="password" id="inputMDEx" class="form-control" name="password">
                                <label for="inputMDEx">Password</label>
                            </div>
                                @error("userpassword")
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                @if(session("error"))
                                    <h3 class="text-danger">{{Session("error")}}</h3>
                                @endif
                            <button type="submit" class="btn btn-default btn btn-block mt-5">Login</button>
                            <p class="text-center mt-5">Not a member?
                                <a href="{{route('Biblesignup')}}">Register</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="BS-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="BS-p text-center">
                        <P><i class="fas fa-quote-left mr-2"></i>နှုတ်ကပတ်တော်သည် အကျွန်ုပ်ခြေရှေ့မှာ မီးခွက်ဖြစ်၍၊<br>အကျွန်ုပ်လမ်းခရီးကိုလင်းစေပါ၏။ <br> ဆာလံကျမ်း၊ ၁၁၉:၁၀၅</P>
                        <P><i class="fas fa-quote-left mr-2"></i>နှုတ်ကပတ်တော်ကို ဖွင့်ပြခြင်းသည် အလင်းကိုပေး၍၊ <br>မလိမ္မာသောသူတို့ကို လိမ္မာစေတတ်ပါ၏။ <br> ဆာလံကျမ်း၊ ၁၁၉:၁၃၀</P>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-Studylayout>