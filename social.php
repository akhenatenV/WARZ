<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<style type="text/css">
		#wrapper{

		}
		#header{
			width: 100%;
			height: 31rem;
			background-color: #ff0000;
			display: inline-flex;
		}
			.logo_container{
				padding-left: 1.5rem;
				width: 33.333%;
			}
			.search_bar_container{
				padding-top: 20px;
				width: 33.333%;
				text-align: center;
			}
				.search_bar{
					width: 50%;
					height: 20px;
					border-radius: 10px;
				}
			.menu_btn_container{
				width: 33.333%;
			}
			.user_name{
				position:absolute; 
				top:26rem; 
				left:24.75rem;
			}
		#user_profile{
			position: absolute;
			top: 5rem;
			left: 5rem;
			background-color: #eeeeee;
			width: 18.75rem;
			height:40rem ;
			box-shadow: 20px 20px 20px rgba(10, 10, 10, 0.5);
		}
			.user_profile_header{
				width: 100%;
				height: 50%;
				background-color: #ff0000;
			}
			img{
				border-radius: 50%;
			}
			.user_profile_btn_container{
				width: 100%;
				position: absolute;
				bottom: 50%;
				left: 0.5rem;
			}
				.follow_btn{
					width: 100%;
					height: 2rem;
					border-radius: 10px;
					background:transparent;
				}
				.options_btn{
					font-size: 2rem;
					font-weight: bolder;
					border-radius: 50%;
					border-color: #EEEEEE;
					background:transparent;
				}
			.user_profile_body{
				width: 100%;
				height: 50%;
				background-color: #EEEEEE;
			}
		@media(max-width:791px){
			#header{
				height: 33rem;
			}
		}
		@media(max-width: 991px){
			.user_name{
				position:absolute; 
				top:26rem; 
				right:0.5rem;
				text-align: right;
			}
			#user_profile{
				position: absolute;
				margin-left: 1.5rem;
				top: 5rem;
				left: 0rem;
				background-color: #eeeeee;
				width: 45%;
				height:40rem ;
				box-shadow: 20px 20px 20px rgba(10, 10, 10, 0.5);
			}
				.user_profile_header{
					width: 100%;
					height: 50%;
					background-color: #ff0000;
				}
				img{
					border-radius: 50%;
				}
				.user_profile_btn_container{
					width: 100%;
					position: absolute;
					bottom: 50%;
					left: 0.5rem;
				}
					.follow_btn{
						width: 100%;
						height: 2rem;
						border-radius: 10px;
						background:transparent;
					}
					.options_btn{
						font-size: 2rem;
						font-weight: bolder;
						border-radius: 50%;
						border-color: #EEEEEE;
						background:transparent;
					}
				.user_profile_body{
					width: 100%;
					height: 50%;
					background-color: #EEEEEE;
				}
		}
		#body{
			width: 100%;
			background-color: #555555;
		}
	</style>
	<body>
		<div id="wrapper">
			<div id="header">
				<div class="logo_container">
					<h2>EverTalk</h2>
				</div>
				<div class="search_bar_container">
					<input type="search" name="search_bar" placeholder="Search..." class="search_bar">
				</div>
				<div class="menu_btn_container">
					<span style="font-size:4rem; float:right; padding-right:1.5rem;">&#8801;</span>
				</div>
				<div class="user_name">
					<h1 style="margin-bottom:0;">Sebastian Salameed Wilson</h1>
					<h4 style="margin-top:0;">Rutherglen, Glasgow</h4>
				</div>
			</div>

			<div id="user_profile">
				<div class="user_profile_header">
					<img src="" width="100px" height="100px">
					<div class="user_profile_btn_container">
						<table width="100%" style="padding-right:1rem;">
							<tr align="right">
								<td>
									<button class="follow_btn">Follow</button>
								</td>
								<td>
									<button class="options_btn">...</button>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="user_profile_body">
					<div style="padding:0.8rem 1.0rem;">
						<p>
							<h3>About</h3>
						</p>
						<p>
							lorem epsom Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip
						</p>
						<hr>
						<table width="100%">
							<tr>
								<td>
									Followers
								</td>
								<td>
									22
								</td>
							</tr>
							<tr>
								<td>
									Following
								</td>
								<td>
									8
								</td>
							</tr>
							<tr>
								<td>
									Posts
								</td>
								<td>
									18
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div id="body">
			</div>
		</div>
	</body>
</html>