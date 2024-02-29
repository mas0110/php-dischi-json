<main>
    <div class="container">
        <div class="row">
            <div v-for="(element, index) in dischi" :key="index" class="col-4 pb-3">
                <div class="card text-center" style="width: 14rem;">
                  <img :src="element.poster" class="card-img-top" alt="...">
                  <div class="card-body">
                        <h5 class="card-title">{{ element.title }}</h5>
                        <p class="card-text">{{ element.author }}</p>
                        <p class="card-text">{{ element.year }}</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</main>