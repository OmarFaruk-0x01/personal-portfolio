<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Portfolio - Tailwind CSS Template</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    @stack('styles')
  <body>

    <header class="header me d f g y bc mb id ai">
      <div class="a">
        <div class="mb ca id ld e">
          <div class="df cc oc">
            <a href="index.html" class="header-logo bc kb ef xl">
              <img src=/imgs/logo.svg alt="logo" class="bc" />
            </a>
          </div>
          <div class="mb df ld id bc">
            <div>
              <button id="navbarToggler" name="navbarToggler" aria-label="navbarToggler"
                class="kb d h i/2 bd hl bj zh ff gf qd">
                <span class="e dc pb da kb ne"></span>
                <span class="e dc pb da kb ne"></span>
                <span class="e dc pb da kb ne"></span>
              </button>
              <nav id="navbarCollapse" class="d hf yl zl dn oe vl th qd pc bc rl il h j ob el sk pm">
                <ul class="ln fl">
                  <li class="e dj">
                    <a href="/" class="menu-scroll  ug jh gj if _l gl am mb ea zk"> Me </a>
                  </li>
                  <li class="e dj">
                    <a href="/projects" class="menu-scroll ug jh gj if _l gl am mb ea zk _k vm">
                      Projects
                    </a>
                  </li>
                  <li class="e dj">
                    <a href="/contact" class="menu-scroll ug jh gj if _l gl am mb ea zk _k vm">
                      Contact
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="nj jd ob xf gm">
              <a href="https://docs.google.com/document/d/1q8LDW-NyZKZXS87TK3v3mulJsW_ZSBw42BV2AyvuRhU/edit?usp=sharing" target="_blank" class="ug dh kh pe td kf lf jk bm en yi si ai ei ci">
                Download CV
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    @yield('page_content')

    <footer class="qe ag bg e z">
      <div class="a">
        <div class="mb hd ga">
          <div class="bc ek/2 kl/12 df">
            <div class="la">
              <h2 class="dh kh xg hh oa">Let's Talk!</h2>
              <h3 class="dh kh qh yg ta">Contact Info</h3>
              <p class="eh ug lh qa"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                  data-cfemail="e7848b8894829597868082a7828a868e8bc984888a">[email&#160;protected]</a></p>
              <p class="eh ug lh qa">12 Hilton St, Manchester M1 1JF</p>
              <p class="eh ug lh qa">+44 012 34 5678</p>
            </div>
          </div>
          <div class="bc ek/2 ll/12 df">
            <div class="la">
              <h3 class="fh kh zg wa">What I Do?</h3>
              <ul>
                <li>
                  <a href="javascript:void(0)" class="lb ug lh ua ui"> The Studio </a>
                </li>
                <li>
                  <a href="javascript:void(0)" class="lb ug lh ua ui"> Sponsoring </a>
                </li>
                <li>
                  <a href="javascript:void(0)" class="lb ug lh ua ui"> Newsletter </a>
                </li>
                <li>
                  <a href="javascript:void(0)" class="lb ug lh ua ui"> Contact Us </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="bc ek/2 ml/12 df">
            <div class="la">
              <h3 class="fh kh zg wa">News</h3>
              <ul>
                <li>
                  <a href="javascript:void(0)" class="lb ug lh ua ui"> Hot Stuff </a>
                </li>
                <li>
                  <a href="javascript:void(0)" class="lb ug lh ua ui"> Perfect Place </a>
                </li>
                <li>
                  <a href="javascript:void(0)" class="lb ug lh ua ui"> Vintage </a>
                </li>
                <li>
                  <a href="javascript:void(0)" class="lb ug lh ua ui"> Products </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="bc ek/2 ll/12 df">
            <div class="la">
              <h3 class="fh kh zg wa">Quick Links</h3>
              <ul>
                <li>
                  <a href="javascript:void(0)" class="lb ug lh ua ui"> Style </a>
                </li>
                <li>
                  <a href="javascript:void(0)" class="lb ug lh ua ui"> Health </a>
                </li>
                <li>
                  <a href="javascript:void(0)" class="lb ug lh ua ui"> Relationship </a>
                </li>
                <li>
                  <a href="javascript:void(0)" class="lb ug lh ua ui"> Legal & Privacy </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="xa cg _d ee ke">
          <div class="mb id kd oa">
            <a href="javascript:void(0)" class="mb id kd gc tb on ha lh ui" aria-label="social-link" name="social-link">
              <svg width="32" height="32" viewBox="0 0 32 32" class="ye" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M32 16C32 7.1625 24.8375 0 16 0C7.1625 0 0 7.1625 0 16C0 24.8375 7.1625 32 16 32C16.0938 32 16.1875 32 16.2812 31.9937V19.5438H12.8438V15.5375H16.2812V12.5875C16.2812 9.16875 18.3688 7.30625 21.4188 7.30625C22.8813 7.30625 24.1375 7.4125 24.5 7.4625V11.0375H22.4C20.7437 11.0375 20.4188 11.825 20.4188 12.9812V15.5312H24.3875L23.8687 19.5375H20.4188V31.3813C27.1063 29.4625 32 23.3062 32 16Z" />
              </svg>
            </a>
            <a href="javascript:void(0)" class="mb id kd gc tb on ha lh ui" aria-label="social-link" name="social-link">
              <svg width="32" height="32" viewBox="0 0 32 32" class="ye">
                <path
                  d="M19.0625 16C19.0625 17.6914 17.6914 19.0625 16 19.0625C14.3086 19.0625 12.9375 17.6914 12.9375 16C12.9375 14.3086 14.3086 12.9375 16 12.9375C17.6914 12.9375 19.0625 14.3086 19.0625 16Z" />
                <path
                  d="M23.1621 10.5813C23.0149 10.1824 22.78 9.82129 22.4749 9.5249C22.1785 9.21973 21.8176 8.98486 21.4185 8.83765C21.0947 8.71191 20.6084 8.56226 19.7126 8.52148C18.7437 8.47729 18.4531 8.46777 16 8.46777C13.5466 8.46777 13.2561 8.47705 12.2874 8.52124C11.3916 8.56226 10.905 8.71191 10.5815 8.83765C10.1824 8.98486 9.82129 9.21973 9.52515 9.5249C9.21997 9.82129 8.98511 10.1821 8.83765 10.5813C8.71191 10.905 8.56226 11.3916 8.52148 12.2874C8.47729 13.2561 8.46777 13.5466 8.46777 16C8.46777 18.4531 8.47729 18.7437 8.52148 19.7126C8.56226 20.6084 8.71191 21.0947 8.83765 21.4185C8.98511 21.8176 9.21973 22.1785 9.5249 22.4749C9.82129 22.78 10.1821 23.0149 10.5813 23.1621C10.905 23.2881 11.3916 23.4377 12.2874 23.4785C13.2561 23.5227 13.5464 23.532 15.9998 23.532C18.4534 23.532 18.7439 23.5227 19.7124 23.4785C20.6082 23.4377 21.0947 23.2881 21.4185 23.1621C22.2197 22.853 22.853 22.2197 23.1621 21.4185C23.2878 21.0947 23.4375 20.6084 23.4785 19.7126C23.5227 18.7437 23.532 18.4531 23.532 16C23.532 13.5466 23.5227 13.2561 23.4785 12.2874C23.4377 11.3916 23.2881 10.905 23.1621 10.5813ZM16 20.7175C13.3943 20.7175 11.282 18.6055 11.282 15.9998C11.282 13.394 13.3943 11.282 16 11.282C18.6055 11.282 20.7178 13.394 20.7178 15.9998C20.7178 18.6055 18.6055 20.7175 16 20.7175ZM20.9043 12.198C20.2954 12.198 19.8018 11.7043 19.8018 11.0955C19.8018 10.4866 20.2954 9.99292 20.9043 9.99292C21.5132 9.99292 22.0068 10.4866 22.0068 11.0955C22.0066 11.7043 21.5132 12.198 20.9043 12.198Z" />
                <path
                  d="M16 0C7.16479 0 0 7.16479 0 16C0 24.8352 7.16479 32 16 32C24.8352 32 32 24.8352 32 16C32 7.16479 24.8352 0 16 0ZM25.1321 19.7878C25.0876 20.7659 24.9321 21.4336 24.7051 22.0181C24.2278 23.2522 23.2522 24.2278 22.0181 24.7051C21.4338 24.9321 20.7659 25.0874 19.7881 25.1321C18.8083 25.1768 18.4954 25.1875 16.0002 25.1875C13.5049 25.1875 13.1921 25.1768 12.2122 25.1321C11.2344 25.0874 10.5664 24.9321 9.98218 24.7051C9.3689 24.4744 8.81372 24.1128 8.35474 23.6453C7.88745 23.1865 7.52588 22.6311 7.29517 22.0181C7.06812 21.4338 6.9126 20.7659 6.86816 19.7881C6.823 18.8081 6.8125 18.4951 6.8125 16C6.8125 13.5049 6.823 13.1919 6.86792 12.2122C6.91235 11.2341 7.06763 10.5664 7.29468 9.98193C7.52539 9.3689 7.88721 8.81348 8.35474 8.35474C8.81348 7.88721 9.3689 7.52563 9.98193 7.29492C10.5664 7.06787 11.2341 6.9126 12.2122 6.86792C13.1919 6.82324 13.5049 6.8125 16 6.8125C18.4951 6.8125 18.8081 6.82324 19.7878 6.86816C20.7659 6.9126 21.4336 7.06787 22.0181 7.29468C22.6311 7.52539 23.1865 7.88721 23.6455 8.35474C24.1128 8.81372 24.4746 9.3689 24.7051 9.98193C24.9324 10.5664 25.0876 11.2341 25.1323 12.2122C25.177 13.1919 25.1875 13.5049 25.1875 16C25.1875 18.4951 25.177 18.8081 25.1321 19.7878Z" />
              </svg>
            </a>
            <a href="javascript:void(0)" class="mb id kd gc tb on ha lh ui" aria-label="social-link" name="social-link">
              <svg width="32" height="32" viewBox="0 0 32 32" class="ye">
                <path
                  d="M16 0C7.16479 0 0 7.16479 0 16C0 24.8352 7.16479 32 16 32C24.8352 32 32 24.8352 32 16C32 7.16479 24.8352 0 16 0ZM23.3054 12.4751C23.3125 12.6326 23.3159 12.7908 23.3159 12.9497C23.3159 17.8025 19.6221 23.3984 12.8669 23.3987H12.8672H12.8669C10.793 23.3987 8.86304 22.7908 7.23779 21.749C7.52515 21.783 7.81763 21.7998 8.11377 21.7998C9.83447 21.7998 11.418 21.2129 12.675 20.2278C11.0674 20.198 9.71191 19.1362 9.24414 17.677C9.46802 17.72 9.69824 17.7434 9.93433 17.7434C10.2695 17.7434 10.5942 17.6982 10.9028 17.614C9.22241 17.2776 7.95654 15.7925 7.95654 14.0142C7.95654 13.9976 7.95654 13.9827 7.95703 13.9673C8.4519 14.2424 9.01782 14.408 9.62036 14.4265C8.63428 13.7686 7.98608 12.6438 7.98608 11.3696C7.98608 10.6968 8.16797 10.0664 8.4834 9.52368C10.2944 11.7458 13.001 13.2073 16.0532 13.3608C15.9902 13.0918 15.9578 12.8115 15.9578 12.5234C15.9578 10.4961 17.6025 8.85132 19.6306 8.85132C20.687 8.85132 21.6411 9.29785 22.3113 10.0117C23.1479 9.84668 23.9336 9.54102 24.6433 9.12036C24.3687 9.97754 23.7866 10.6968 23.0283 11.1516C23.7712 11.0627 24.4792 10.8657 25.1372 10.5732C24.6458 11.3098 24.0225 11.9568 23.3054 12.4751Z" />
              </svg>
            </a>
            <a href="javascript:void(0)" class="mb id kd gc tb on ha lh ui" aria-label="social-link" name="social-link">
              <svg width="32" height="32" viewBox="0 0 32 32" class="ye">
                <path
                  d="M16 0C7.16479 0 0 7.16479 0 16C0 24.8352 7.16479 32 16 32C24.8352 32 32 24.8352 32 16C32 7.16479 24.8352 0 16 0ZM11.3506 24.1875H7.45386V12.4641H11.3506V24.1875ZM9.40234 10.8633H9.37695C8.06934 10.8633 7.22363 9.96313 7.22363 8.83813C7.22363 7.68774 8.09521 6.8125 9.42822 6.8125C10.7612 6.8125 11.5815 7.68774 11.6069 8.83813C11.6069 9.96313 10.7612 10.8633 9.40234 10.8633ZM25.4014 24.1875H21.5051V17.9158C21.5051 16.3396 20.9409 15.2646 19.531 15.2646C18.4546 15.2646 17.8135 15.9897 17.5317 16.6897C17.4287 16.9402 17.4036 17.2903 17.4036 17.6406V24.1875H13.5071C13.5071 24.1875 13.5581 13.564 13.5071 12.4641H17.4036V14.124C17.9214 13.3252 18.8479 12.189 20.9153 12.189C23.479 12.189 25.4014 13.8645 25.4014 17.4653V24.1875Z" />
              </svg>
            </a>
          </div>
          <p class="eh ug lh sg">All rights reserved by © Portfolio creative 2024</p>
        </div>
      </div>
      <div class="d g k nn" aria-label="shape" name="shape">
        <span class="ob">shape</span>
        <svg width="143" height="138" viewBox="0 0 143 138" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="25" cy="118" r="101" stroke="url(#paint0_linear_52:83)" stroke-width="34" />
          <defs>
            <linearGradient id="paint0_linear_52:83" x1="-12.7969" y1="-37.3359" x2="99.2109" y2="173.773"
              gradientUnits="userSpaceOnUse">
              <stop stop-color="#4A6CF7" />
              <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
            </linearGradient>
          </defs>
        </svg>
      </div>
      <div class="d l m nn" aria-label="shape" name="shape">
        <span class="ob">shape</span>
        <svg width="61" height="77" viewBox="0 0 61 77" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g opacity="0.5">
            <circle cx="45.0001" cy="1.66667" r="1.66667" transform="rotate(90 45.0001 1.66667)" fill="white" />
            <circle cx="16.0001" cy="1.66667" r="1.66667" transform="rotate(90 16.0001 1.66667)" fill="white" />
            <circle cx="59.0001" cy="1.66667" r="1.66667" transform="rotate(90 59.0001 1.66667)" fill="white" />
            <circle cx="30.6668" cy="1.66667" r="1.66667" transform="rotate(90 30.6668 1.66667)" fill="white" />
            <circle cx="1.66683" cy="1.66667" r="1.66667" transform="rotate(90 1.66683 1.66667)" fill="white" />
            <circle cx="45.0001" cy="16.3332" r="1.66667" transform="rotate(90 45.0001 16.3332)" fill="white" />
            <circle cx="16.0001" cy="16.3332" r="1.66667" transform="rotate(90 16.0001 16.3332)" fill="white" />
            <circle cx="59.0001" cy="16.3332" r="1.66667" transform="rotate(90 59.0001 16.3332)" fill="white" />
            <circle cx="30.6668" cy="16.3332" r="1.66667" transform="rotate(90 30.6668 16.3332)" fill="white" />
            <circle cx="1.66683" cy="16.3332" r="1.66667" transform="rotate(90 1.66683 16.3332)" fill="white" />
            <circle cx="45.0001" cy="31.0002" r="1.66667" transform="rotate(90 45.0001 31.0002)" fill="white" />
            <circle cx="45.0001" cy="74.6667" r="1.66667" transform="rotate(90 45.0001 74.6667)" fill="white" />
            <circle cx="16.0001" cy="31.0002" r="1.66667" transform="rotate(90 16.0001 31.0002)" fill="white" />
            <circle cx="16.0001" cy="74.6667" r="1.66667" transform="rotate(90 16.0001 74.6667)" fill="white" />
            <circle cx="59.0001" cy="31.0002" r="1.66667" transform="rotate(90 59.0001 31.0002)" fill="white" />
            <circle cx="59.0001" cy="74.6667" r="1.66667" transform="rotate(90 59.0001 74.6667)" fill="white" />
            <circle cx="30.6668" cy="31.0002" r="1.66667" transform="rotate(90 30.6668 31.0002)" fill="white" />
            <circle cx="30.6668" cy="74.6667" r="1.66667" transform="rotate(90 30.6668 74.6667)" fill="white" />
            <circle cx="1.66683" cy="31.0002" r="1.66667" transform="rotate(90 1.66683 31.0002)" fill="white" />
            <circle cx="1.66683" cy="74.6667" r="1.66667" transform="rotate(90 1.66683 74.6667)" fill="white" />
            <circle cx="45.0001" cy="45.6667" r="1.66667" transform="rotate(90 45.0001 45.6667)" fill="white" />
            <circle cx="16.0001" cy="45.6667" r="1.66667" transform="rotate(90 16.0001 45.6667)" fill="white" />
            <circle cx="59.0001" cy="45.6667" r="1.66667" transform="rotate(90 59.0001 45.6667)" fill="white" />
            <circle cx="30.6668" cy="45.6667" r="1.66667" transform="rotate(90 30.6668 45.6667)" fill="white" />
            <circle cx="1.66683" cy="45.6667" r="1.66667" transform="rotate(90 1.66683 45.6667)" fill="white" />
            <circle cx="45.0001" cy="60.3332" r="1.66667" transform="rotate(90 45.0001 60.3332)" fill="white" />
            <circle cx="16.0001" cy="60.3332" r="1.66667" transform="rotate(90 16.0001 60.3332)" fill="white" />
            <circle cx="59.0001" cy="60.3332" r="1.66667" transform="rotate(90 59.0001 60.3332)" fill="white" />
            <circle cx="30.6668" cy="60.3332" r="1.66667" transform="rotate(90 30.6668 60.3332)" fill="white" />
            <circle cx="1.66683" cy="60.3332" r="1.66667" transform="rotate(90 1.66683 60.3332)" fill="white" />
          </g>
        </svg>
      </div>
    </footer>


    <a href="javascript:void(0)" class="ob id kd pe kh hc ub vd c n o p _ yi ai ci back-to-top">
      <span class="ic vb _d ae ee cd ya"></span>
    </a>


    <script src="/js/email-decode.min.js"></script>
    <script src="/js/bundle.js"></script>
  </body>

</html>
