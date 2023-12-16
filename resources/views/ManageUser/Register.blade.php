@extends('component.Master')

@section('content')
    <div align = "center" class = "container">
        <form align="center" action="/register" method="post" id="login">
            @csrf
            <br><br>
            <center><img src="{{asset('images/fk.png')}}" width ="170" height="130"><center>
            <div class ="header">
                <h3 style="font-size: 35px;color:  #000000 ;font-family: Playfair Display;"><center>Register Your Account</center></h3>
            </div>

            <div class="box"></div>
            <div class="input">
                <table style = "margin-left: auto;margin-right: auto">

                    <!-- Insert Username -->
                    <tr>
                        <td><input type = "text" name = "username" placeholder = "Username" required="required"></td>
                    </tr>
                    <!-- Insert Full Name -->
                    <tr>
                        <td><input type = "text" name = "full_name" placeholder = "Full Name" required="required"></td>
                    </tr>
                    <!-- Insert Email -->
                    <tr>
                        <td><input type = "text" name = "email" placeholder = "Email" required="required"></td>
                    </tr>
                    <!-- Insert Password -->
                    <tr>
                        <td><input type = "password" name = "password" placeholder = "Password" required="required"></td>
                    </tr>
                    <!-- Insert User type -->
                    <tr>
                        <td>User Type <select name = "user_role"><option>Admin</option><option>Kiosk Participant</option><option>FK Technical Team</option><option>Pupuk Admin</option><option>FK Bursary</option></select></td>
                    </tr>
                    <tr>
                        <!-- <td><br><center><input type = "submit" name = "login" value = "Login" ></center></td> -->
                        <td><br><center><input type="submit"  name="register" value = "Register" onclick = <?php $_SESSION['form'] = 'register'; ?>></center></td>
                    </tr>
                    <tr>
                        <td><br><center><p>Already Registered?? <a href="/login">Click Here</a></p></td>
                    </tr>

                </table>
            </div>
        </form>
    </div>
@endsection