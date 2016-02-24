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
	    width: 640px;
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
	    width: 280px;
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
	<div class="login-block">
	    <h1>Sign Up</h1>
	    <table>
	    	<tr>
	    		<td><input type="text" value="" placeholder="First Name" id="first_name" style="background-color:black"/></td>
	    		<td><input type="text" value="" placeholder="Last Name" id="last_name" style="background-color:black"/></td>
			</tr>
			<tr>
	    		<td><input type="text" value="" placeholder="Email" id="email" style="background-color:black"/></td>
	    		<td><input type="text" value="" placeholder="Phone Number" id="phone_number" style="background-color:black"/></td>
    		</tr>
		</table>
	    <div align="center">
	    <input type="text" value="" placeholder="Date of Birth" id="date_of_birth" style="background-color:black" />
	    </div>
    	<h5> <font color="black"> Password requires at least 6 characters, at least one number, and no special characters </font> </h5>
    	<table>
    		<tr>
	    		<td><input type="password" value="" placeholder="Password" id="password" style="background-color:black"/></td>
	    		<td><input type="password" value="" placeholder="Retype Password" id="retype_password" style="background-color:black"/></td>
	    	</tr>
		</table>
		<div align="center">
		<input type="text" value="" placeholder="Manager/Admin ID" id="man_admin_id" style="background-color:black"/>
		</div>
		<button type="button" class="btn btn-primary btn-block">Submit</button>
	</div>
	</body>

	</html>
@stop