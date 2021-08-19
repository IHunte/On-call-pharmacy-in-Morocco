@include('layouts.app')

<!--
inline-flex flex-col space-y-52 items-end justify-end pl-96 pt-80 bg-gradient-to-b from-yellow-200 to-white" style="width: 1440px; height: 1024px;
-->

<body>
    <div class="bg-gradient-to-b from-blue-400 via-purple-300 to-yellow-100">
        <div class="h-screen flex flex-col">
          <!-- header -->
          <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center p-4">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img src="{{ asset('img/drapeau-maroc.png') }}" alt="" srcset=""
                class="rounded-full h-20 w-20 flex items-center justify-center">
              <span class="ml-3 text-xl text-red-100">On-Call Pharmacy</span>
            </a>
          </div>
          <div class="flex-grow flex flex-row overflow-hidden justify-center">
            <!-- lhs -->
            <div class="flex-shrink-0 w-1/4 p-4"></div>
            <!-- center -->
            <div class="flex-1 flex flex-col mt-8">

            <!-- Search -->
            <form action="" method="post">
                <div class="relative m-4 pb-2 ">
                    <select
                      type="text"
                      id="fromCity"
                      class="h-14 w-full pr-8 pl-5 rounded z-0 focus:shadow focus:outline-none"
                      placeholder="Search anything...">
                      <option disabled selected value> -- Select a city -- </option>
                    </select>

                </div>

            </form>

              <main class="flex-1 overflow-y-auto p-4">
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
            <div class="flex-shrink-0 w-1/4 p-4"></div>
          </div>
          <!-- footer -->
          <div class=" p-4">
            Footer
          </div>
        </div>
      </div>

      <script>
        let cities = [
            'Casablanca',
            'Marrakech',
            'Agadir',
            'Meknes',
            'Taourirt',
            'Safi',
            'Fes',
            'Rabat',
            'Nador',
            'Berkane',
            'Tanger',
            'Sefrou',
            'Oujda',
            'Khouribga',
            'Beni Mellal',
            'Guelmim',
            'Mohammedia',
            'Taza',
            'El Jadida',
            'Sale',
            'Laayoune',
            'Tetouan',
            'Berrechid',
            'Ouarzazate',
            'Tan Tan',
            'Ben Guerir',
            'Ait Melloul',
            'Settat',
            'El Kelaa Des Sraghna',
            'Chefchaouen',
            'Temara',
            'Kenitra',
            'Errachidia',
            'Souk El Arba Du Gharb',
            'Al Hoceima',
            'Larache',
            'Tikiouine',
            'Fkih Ben Salah',
            'Tahla',
            'Bouknadel',
            'Sidi Slimane',
            'Selouane',
            'Azrou',
            'Al Arrui',
            'Ksar El Kebir',
            'Zghanghan',
            'Tiflet',
            'Sidi Kacem'
        ];
        citySelect = document.getElementById('fromCity');

        for (var city in cities) {
          citySelect.options[citySelect.options.length] = new Option(cities[city], cities[city]);
        }

        function CallAPI()
        {
            console.log(citySelect.value);
            fetch('http://localhost:8000/api/pharmacy/' + citySelect.value).then(function (response) {
                // The API call was successful,
                return response.json();
            }).then(function (data) {
                // This is the JSON from our response.
                console.log(data);
            }).catch(function (error) {
                // There was an error
                console.warn('Something went wrong.', err);
            });
        }

        document.getElementById('fromCity').addEventListener('change', CallAPI);



    </script>
</body>



