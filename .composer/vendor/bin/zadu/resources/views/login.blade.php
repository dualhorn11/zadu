@extends('layout')

@section('tempheading')
    
@stop

@section('content')
	<head>
	<style>
	

	.logo {
	    width: 213px;
	    height: 36px;
	    
	    margin: 30px auto;
	}

	.login-block {
	    width: 320px;
	    padding: 20px;
	    background: #fff;
	    border-radius: 5px;
	    border-top: 5px solid #a9a9a9;
	    margin: 0 auto;
	}

	.login-block h1 {
	    text-align: center;
	    color: #000;
	    font-size: 18px;
	    text-transform: uppercase;
	    margin-top: 0;
	    margin-bottom: 20px;
	}

	.login-block input {
	    width: 100%;
	    height: 42px;
	    box-sizing: border-box;
	    border-radius: 5px;
	    border: 1px solid #ccc;
	    margin-bottom: 20px;
	    font-size: 14px;
	    font-family: Montserrat;
	    padding: 0 20px 0 50px;
	    outline: none;
	}

	.login-block input#username {
	    background: #fff 20px top no-repeat;
	    background-size: 16px 80px;
	}

	.login-block input#username:focus {
	    background: #fff 20px bottom no-repeat;
	    background-size: 16px 80px;
	}

	.login-block input#password {
	    background: #fff 20px top no-repeat;
	    background-size: 16px 80px;
	}

	.login-block input#password:focus {
	    background: #fff 20px bottom no-repeat;
	    background-size: 16px 80px;
	}

	.login-block input:active, .login-block input:focus {
	    border: 1px solid #a9a9a9;
	}

	.login-block button {
	    width: 100%;
	    height: 40px;
	    background: #a9a9a9;
	    box-sizing: border-box;
	    border-radius: 5px;
	    border: 1px solid #a9a9a9;
	    color: #fff;
	    font-weight: bold;
	    text-transform: uppercase;
	    font-size: 14px;
	    font-family: Montserrat;
	    outline: none;
	    cursor: pointer;
	}

	.login-block button:hover {
	    background: #767676;
	}

	</style>
	</head>

	<body>

	<div class="logo"></div>
	<div class="login-block">
	    <h1>Login</h1>
	    <input type="text" value="" placeholder="Username" id="username" style="background-color:black"/>
	    <input type="password" value="" placeholder="Password" id="password" style="background-color:black"/>
	    
	    <button>Submit</button>
	    <div style="float: left; width: 50%; position:aboslute">
	    <br>
	    <a href="/signup" style="color: rgb(255,255, 255)">Sign Up</font></a>
	    </div>
	    <div style="float: right; width: 50%; position:aboslute" align = "right">
	    <br>
	    <a href="/passreset" style="color: rgb(255,255,255)">Forgot Password?</a>
	    </div>
	</div>

	</body>

	</html>
@stop