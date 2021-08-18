@include('layouts.app')

<!--
inline-flex flex-col space-y-52 items-end justify-end pl-96 pt-80 bg-gradient-to-b from-yellow-200 to-white" style="width: 1440px; height: 1024px;
-->
<header class="text-gray-600 body-font">

  </header>

<body>
    <div class="bg-gradient-to-b from-blue-400 via-purple-300 to-yellow-100">
        <div class="h-screen flex flex-col">
          <!-- header -->
          <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center p-4">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
              </svg>
              <span class="ml-3 text-xl text-red-100">On-Call Pharmacy</span>
            </a>
          </div>
          <div class="flex-grow flex flex-row overflow-hidden justify-center">
            <!-- lhs -->
            <div class="flex-shrink-0 w-1/4 p-4">
              Left menu
            </div>
            <!-- center -->
            <div class="flex-1 flex flex-col mt-8">

            <!-- Search -->
            <form action="" method="post">
                <div class="relative m-4 pb-2 ">
                    <input
                      type="text"
                      class="h-14 w-full pr-8 pl-5 rounded z-0 focus:shadow focus:outline-none"
                      placeholder="Search anything...">

                  <div class="absolute top-4 right-3">
                      <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
                  </div>
                </div>

            </form>


              <main class="flex-1 overflow-y-auto p-4 ">
                <div class="relative">
                  <!-- Card  -->
                  <div class="bg-white shadow-lg rounded-3xl overflow-hidden m-4 sm:flex border border-gray-600">
                    <div class="px-6 py-4 flex flex-wrap">
                      <tr>
                        <td class="px-6 py-4 ">
                          <div class="flex items-center  mr-auto pl-4 pr-1 p-1">
                              <div class="text-sm font-medium text-gray-900 mr-auto pr-4 p-2 text-red-600">
                                1<p class="text-red-600">İD</p>
                              </div>
                          </div>
                        </td>
                        <td class="px-6 py-4 ">
                          <div class="flex items-center  mr-auto pl-4 pr-1 p-1">
                              <div class="text-sm font-medium text-gray-900 mr-auto pr-4 p-2">
                                Laboratuvar Yönetim Sertifika Paketi Paket Adı<p class="text-red-600">Paket Adı</p>
                              </div>
                          </div>
                        </td>
                        <td class="px-6 py-4 ">
                          <div class="flex items-center  mr-auto pl-4 pr-1 p-1">
                              <div class="text-sm font-medium text-gray-900 mr-auto pr-4 p-2">
                                Laboratuvar Yönetim Sertifika Paketi Paket Bilgi<p class="text-red-600">Paket Bilgi</p>
                              </div>
                          </div>
                        </td>
                        <td class="px-6 py-4 ">
                          <div class="flex items-center  mr-auto pl-4 pr-1 p-1">
                              <div class="text-sm font-medium text-gray-900 mr-auto pr-4 p-2">
                                PKT1 <p class="text-red-600">Paket Kodu</p>
                              </div>
                          </div>
                        </td>
                      </tr>
                   </div>
                 </div>
                <!-- //Card  -->

                </div>
              </div>
            </main>
            <!-- rhs -->
            <div class="flex-shrink-0 w-1/4 p-4">
              Right sidebar
            </div>
          </div>
          <!-- footer -->
          <div class=" p-4">
            Footer
          </div>
        </div>
      </div>
</body>

