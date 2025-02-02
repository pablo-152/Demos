<!DOCTYPE html>
<html>
<head>
	<title>Complejo Santa Rosa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
		*, html,body{
			padding:0px;
			margin:0px;
			box-sizing:border-box;
			font-family:'Poppins', sans-serif;
			perspective:800px;
		}
		body{
			background-color:#227093;
			width:100%;
			min-height:100vh;
			display:flex;
			justify-content:center;
			align-items:center;
		}
		.timeline{
			width:800px;
			background-color:#072736;
			color:#fff;
			padding:30px 20px;
			box-shadow:0px 0px 10px rgba(0,0,0,.5);
		}
		.timeline ul{
			list-style-type:none;
			border-left:2px solid #094a68;
			padding:10px 5px;
		}
		.timeline ul li{
			padding:20px 20px;
			position:relative;
			cursor:pointer;
			transition:.5s;
		}
		.timeline ul li span{
			display:inline-block;
			background-color:#1685b8;
			border-radius:25px;
			padding:2px 5px;
			font-size:15px;
			text-align:center;
		}
		.timeline ul li .content h3{
			color:#34ace0;
			font-size:17px;
			padding-top:5px;
		}
		.timeline ul li .content p{
			padding:5px 0px 15px 0px;
			font-size:15px;
		}
		.timeline ul li:before{
			position:absolute;
			content:'';
			width:10px;
			height:10px;
			background-color:#34ace0;
			border-radius:50%;
			left:-11px;
			top:28px;
			transition:.5s;
		}
		.timeline ul li:hover{
			background-color:#071f2a;
		}
		.timeline ul li:hover:before{
			background-color:#0F0;
			box-shadow:0px 0px 10px 2px #0F0;
		}
		@media (max-width:300px){
			.timeline{
				width:100%;
				padding:30px 5px 30px 10px;
			}
			.timeline ul li .content h3{
				color:#34ace0;
				font-size:15px;
			}

		}
		.select-test{
			margin-bottom: 10px;
			margin-top: 10px;
			font-family: cursive, sans-serif;
			outline: 0;
			background: #909c95;
			color: #fff;
			border: 1px solid #909c95;
			padding: 4px;
			border-radius: 9px;
		}

		.wrap {
        height: 0%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .button {
        max-width: 120px;
        min-height: 40px;
        font-family: 'Nunito', sans-serif;
        font-size: 17px;
        text-transform: uppercase;
        letter-spacing: 1.3px;
        font-weight: 700;
        color: #313133;
        background: #4FD1C5;
        background: linear-gradient(90deg, rgba(129,230,217,1) 0%, rgba(79,209,197,1) 100%);
        border: none;
        border-radius: 1000px;
        /*box-shadow: 12px 12px 24px rgba(79,209,197,.64);*/
        transition: all 0.3s ease-in-out 0s;
        cursor: pointer;
        outline: none;
        position: relative;
        padding: 10px;
    }


    .button:hover, .button:focus {
        color: #313133;
        transform: translateY(-6px);
    }

    button:hover::before, button:focus::before {
        opacity: 1;
    }

    button::after {
        content: '';
        width: 30px; height: 30px;
        border-radius: 100%;
        /*border: 6px solid #00FFCB;*/
        position: absolute;
        z-index: -1;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: ring 1.5s infinite;
    }
    .div-btn{
        text-align-last: center;
    }
	</style>
</head>
<body>
	<div class="timeline">
		<div style="text-align: center;">
			<h1>Complejo Santa Rosa</h1>
			<h2 style="text-align:center">Calendario 2023 - 
				<select name="" id="" class="select-test">
					<option value="0">TODOS</option>
					<option value="0">Enero</option>
					<option value="0">Febrero</option>
					<option value="0">Marzo</option>
				</select>
			</h2>
		</div>
		<ul>
			<li>
				<span>3 Enero 2023</span>
				<div class="content">
					<h3>📌Feliz día del Padre</h3>
					<p>
					📌Feliz día del Padre con los mejores en cumbia y folclor<br>🚨Lugar: Complejo Santa Rosa de Santa Anita
					</p>
					<div class="div-btn">
						<button class="button">Reservar</button>   
					</div>
				</div>
			</li>
			<li>
				<span>10 Enero 2023</span>
				<div class="content">
					<h3>📌Feliz día del Campesino</h3>
					<p>
					Lo mejor de la Cumbia estará en la 𝐆𝐫𝐚𝐧 𝐅𝐢𝐞𝐬𝐭𝐚 𝐝𝐞𝐥 𝐓𝐫𝐚𝐛𝐚𝐣𝐚𝐝𝐨𝐫 𝟐𝟎𝟐𝟑👨‍🌾❗ 🎶. 🏃‍♂CORRE QUE QUEDAN POCAS ENTRADAS de 𝗣𝗥𝗘𝗩𝗘𝗡𝗧𝗔 𝟮𝘅𝟭
					</p>
					<div class="div-btn">
						<button class="button">Reservar</button>   
					</div>
				</div>
			</li>
			<li>
				<span>10 Enero 2023</span>
				<div class="content">
					<h3>📌Feliz día del Campesino</h3>
					<p>
					Lo mejor de la Cumbia estará en la 𝐆𝐫𝐚𝐧 𝐅𝐢𝐞𝐬𝐭𝐚 𝐝𝐞𝐥 𝐓𝐫𝐚𝐛𝐚𝐣𝐚𝐝𝐨𝐫 𝟐𝟎𝟐𝟑👨‍🌾❗ 🎶. 🏃‍♂CORRE QUE QUEDAN POCAS ENTRADAS de 𝗣𝗥𝗘𝗩𝗘𝗡𝗧𝗔 𝟮𝘅𝟭
					</p>
					<img style="max-width:100%" src="https://scontent.flim28-1.fna.fbcdn.net/v/t39.30808-6/356845307_740609751402137_8497927027741604559_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=sKlTFx9vzgAAX_zsPeK&_nc_ht=scontent.flim28-1.fna&oh=00_AfDWCTsStpL7JeXdjaafYbeiIZ9PkJPwuOytQUwoFhz3ng&oe=64A2330C" alt="Black and White Eiffel Tower">
					<div class="div-btn">
						<button class="button">Reservar</button>   
					</div>
				</div>
			</li>
			<li>
				<span>28 Julio 2023</span>
				<div class="content">
					<h3>📌Feliz día 28 de Julio</h3>
					<p>
					Lo mejor de la Cumbia estará en la 𝐆𝐫𝐚𝐧 𝐅𝐢𝐞𝐬𝐭𝐚 𝐝𝐞𝐥 𝐓𝐫𝐚𝐛𝐚𝐣𝐚𝐝𝐨𝐫 𝟐𝟎𝟐𝟑👨‍🌾❗ 🎶. 🏃‍♂CORRE QUE QUEDAN POCAS ENTRADAS de 𝗣𝗥𝗘𝗩𝗘𝗡𝗧𝗔 𝟮𝘅𝟭
					</p>
				</div>
			</li>
		</ul>
	</div>

</body>
</html>