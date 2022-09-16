<section id="comics" class="container">
    <button id="current-series-button" class="button-primary">CURRENT
      SERIES</button>
    <div class="comics-wrapper">
      <div  class="comic-col">
        <div class="comic-card">
          <figure>

            <img :src="{{asset('images/comic.thumb')}}" :alt="comic.series">
          </figure>
          <span></span>
        </div>
      </div>



    </div>
    <button id="load-more-button" class="button-primary">LOAD MORE</button>

  </section>