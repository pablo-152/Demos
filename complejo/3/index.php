
<style>
    * {
  box-sizing: border-box;
}

img {
  width: 100%;
  border-radius: 5px;
}
@media screen and (max-width: 599px) {
  img {
    height: 250px;
    object-fit: cover;
  }
}

body {
  background: #2b2a2b;
  color: white;
  margin: 0;
  padding: 0;
}

main {
  padding: 2rem;
  max-width: 1400px;
  margin: auto;
}

h1 {
  font-family: "Poppins", sans-serif;
}

h2 {
  color: #ed666f;
  font-family: "Poppins", sans-serif;
  font-weight: 500;
}

h3 {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  margin: 0.5rem 0;
}

@media screen and (min-width: 600px) {
  .grid-wrapper {
    display: grid;
    grid-auto-flow: column;
    grid-gap: 1rem;
  }
}
@media screen and (min-width: 1025px) {
  .grid-wrapper {
    grid-template-columns: 1fr 2fr 1fr 2fr;
  }
}
@media screen and (min-width: 600px) and (max-width: 1024px) {
  .grid-wrapper {
    grid-template-columns: 1fr 2fr;
  }
}

article {
  padding-bottom: 1rem;
  border-bottom: 1px solid #4d4d4d;
}
article p {
  font-family: "Karla", sans-serif;
  font-size: 1.95rem;
  color: #c8c8c8;
}
article:nth-child(4) {
  grid-area: 1/2/4/3;
}
@media screen and (min-width: 1025px) {
  article:nth-child(8) {
    grid-area: 1/4/4/-1;
  }
}
@media screen and (min-width: 600px) and (max-width: 1024px) {
  article:nth-child(8) {
    grid-area: 4/2/8/3;
  }
}
@media screen and (min-width: 1025px) {
  article:nth-child(4n+3) {
    border-bottom: 0;
  }
}
@media screen and (min-width: 1025px) {
  article:nth-child(4) {
    border-right: 1px solid #4d4d4d;
    padding-right: 1rem;
  }
}
@media screen and (min-width: 600px) {
  article:nth-child(4n) {
    border-left: 1px solid #4d4d4d;
    border-bottom: 0;
    padding-left: 1rem;
  }
}

.footer-note {
  text-align: center;
  font-family: "Karla", sans-serif;
  font-size: 1.9rem;
  background: white;
  padding: 1rem;
  color: black;
  border-radius: 5px;
}
.footer-note a {
  color: inherit;
  font-weight: 600;
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
      font-size:47px
		}

		.wrap {
        height: 0%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .button {
        max-width: 190px;
        min-height: 40px;
        font-family: 'Nunito', sans-serif;
        font-size: 27px;
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
<main>
  <div style="text-align: center;">
    <h1>Complejo Santa Rosa</h1>
    <h2 style="text-align:center;font-size:47px">Calendario 2023 - 
      <select name="" id="" class="select-test">
        <option value="0">TODOS</option>
        <option value="0">Enero</option>
        <option value="0">Febrero</option>
        <option value="0">Marzo</option>
      </select>
    </h2>
  </div>
  <section>
    <h2>28 Julio</h2>
    <div class="grid-wrapper">
      <article>
        <h3>9:00 AM</h3>
        <p>📌Feliz día del Padre con los mejores en cumbia y folclor<br>🚨Lugar: Complejo Santa Rosa de Santa Anita</p>
        <img style="max-width:100%" src="https://scontent.flim28-1.fna.fbcdn.net/v/t39.30808-6/356845307_740609751402137_8497927027741604559_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=sKlTFx9vzgAAX_zsPeK&_nc_ht=scontent.flim28-1.fna&oh=00_AfDWCTsStpL7JeXdjaafYbeiIZ9PkJPwuOytQUwoFhz3ng&oe=64A2330C" alt="Black and White Eiffel Tower">
        <div class="div-btn">
          <button class="button">Reservar</button>   
        </div>
      </article>
      <article>
        <h3>10:00 AM</h3>
        <p>I've crashed into a beet truck </p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Eiffel_tower_at_Exposition_Universelle%2C_Paris%2C_1889.jpg/1200px-Eiffel_tower_at_Exposition_Universelle%2C_Paris%2C_1889.jpg" alt="Black and White Eiffel Tower">
      </article>
      <article>
        <h3>12:30 AM</h3>
        <p>I was part of something special. </p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Eiffel_tower_at_Exposition_Universelle%2C_Paris%2C_1889.jpg/1200px-Eiffel_tower_at_Exposition_Universelle%2C_Paris%2C_1889.jpg" alt="Black and White Eiffel Tower">
      </article>
      <article>
        <h3>13:30 AM</h3>
        <p>📌Feliz día del Padre con los mejores en cumbia y folclor<br>🚨Lugar: Complejo Santa Rosa de Santa Anita </p>
        <img style="max-width:100%;" src="https://scontent.flim28-1.fna.fbcdn.net/v/t39.30808-6/355458051_738207671642345_2018407315739883290_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGjPE5OcwyZjH5LOAPZcYBZTg2iqoB318dODaKqgHfXx4CTIe5J1GRK0N0ZC5Uw9ADPxhxpUU56gu29EyovozKF&_nc_ohc=7EUzUtvwG4oAX-g-T8g&_nc_ht=scontent.flim28-1.fna&oh=00_AfBrAkyRMFHxMhfQEqKTUkcjLRNCiiXUWOXB1rB77Pf7Zg&oe=64A0EE12" alt="Black and white photo of a lake">
        <div class="div-btn">
          <button class="button">Reservar</button>   
        </div>
      </article>
      <article>
        <h3>14:30 AM</h3>
        <p>📌Feliz día del Padre con los mejores en cumbia y folclor<br>🚨Lugar: Complejo Santa Rosa de Santa Anita </p>
      </article>
      <article>
        <h3>15:30 AM</h3>
        <p>📌Feliz día del Padre con los mejores en cumbia y folclor<br>🚨Lugar: Complejo Santa Rosa de Santa Anita </p>
      </article>
      <article>
        <h3>16:30 AM</h3>
        <p>📌Feliz día del Padre con los mejores en cumbia y folclor<br>🚨Lugar: Complejo Santa Rosa de Santa Anita </p>
      </article>
      <article>
        <h3>17:30 AM</h3>
        <p>What do they got in there? King Kong?  </p>
        <img style="max-width:100%;" src="https://scontent.flim28-1.fna.fbcdn.net/v/t39.30808-6/354233879_733109495485496_2528357788494244569_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEXoK7AqaG_sbC3nJAwcqnypJ57kl0PpbGknnuSXQ-lsWcZR0cgTzX2b3v0iR0WPMYMJ6lX95VwLxQJ01wTUW0T&_nc_ohc=u22MkH8JvcMAX85Cytf&_nc_ht=scontent.flim28-1.fna&oh=00_AfAO-Gz7OncL3-eqCvDRUhT8FNY3IWQK6nmTiLFh96ewyQ&oe=64A0FA35" alt="Black and White Eiffel Tower"" alt="Black and white Mountian view">
        <div class="div-btn">
          <button class="button">Reservar</button>   
        </div>
      </article>
    </div>
  </section>
  <section>
    <h2>3 Junio</h2>
    <div class="grid-wrapper">
      <article>
        <h3>9:00 AaM</h3>
        <p>Life finds a way. You know what? It is beets. </p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Eiffel_tower_at_Exposition_Universelle%2C_Paris%2C_1889.jpg/1200px-Eiffel_tower_at_Exposition_Universelle%2C_Paris%2C_1889.jpg" alt="Black and White Eiffel Tower">
      </article>
      <article>
        <h3>10:00 AM</h3>
        <p>I've crashed into a beet truck </p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Eiffel_tower_at_Exposition_Universelle%2C_Paris%2C_1889.jpg/1200px-Eiffel_tower_at_Exposition_Universelle%2C_Paris%2C_1889.jpg" alt="Black and White Eiffel Tower">
      </article>
      <article>
        <h3>12:30 AM</h3>
        <p>I was part of something special. </p>
      </article>
      <article>
        <h3>13:30 AM</h3>
        <p>Yeah, but your scientists were so preoccupied with whether or not they could, they didn't stop to think if they should. </p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Eiffel_tower_at_Exposition_Universelle%2C_Paris%2C_1889.jpg/1200px-Eiffel_tower_at_Exposition_Universelle%2C_Paris%2C_1889.jpg" alt="Black and White Eiffel Tower">
      </article>
      <article>
        <h3>14:30 AM</h3>
        <p>Just my luck, no ice. God help us, we're in the hands of engineers. </p>
      </article>
      <article>
        <h3>15:30 AM</h3>
        <p>I gave it a cold? I gave it a virus. A computer virus. </p>
      </article>
      <article>
        <h3>16:30 AM</h3>
        <p>God creates dinosaurs. God destroys dinosaurs. God creates Man. Man destroys God. Man creates Dinosaurs. </p>
      </article>
      <article>
        <h3>17:30 AM</h3>
        <p>What do they got in there? King Kong?  </p>
        <img src="https://images.fineartamerica.com/images-medium-large-5/maroon-bells-aspen-colorado-black-and-white-photography-by-sai.jpg" alt="Black and white Mountian view">
      </article>
    </div>
  </section>
  
</main>