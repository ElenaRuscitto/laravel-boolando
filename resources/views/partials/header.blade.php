

  <header>
      <div class="container-header ">
        <div class="row justify-beetween align-center  ">
          <div class="col ">
            <nav>
              <ul class="main-menu">
                <li
                v-for="(element, index) in mainMenu"
                :key="`m-${index}`">
                  <a :href="element.link">{{ element.tipo }}</a>
                </li>

              </ul>
            </nav>
          </div>
          <div class="col logo ">
            <img src="../assets/img/boolean-logo.png" alt="Logo">
          </div>

          <div class="col ">
            <nav>

              <ul class="social-menu">
                <li
                v-for="(elemento, index) in socialMenu"
                :key="`s-${index}`">
                  <a
                  :href="elemento.link"
                  v-html="elemento.icon">
                </a>
                </li>
              </ul>

            </nav>
          </div>

        </div>
      </div>
    </header>






