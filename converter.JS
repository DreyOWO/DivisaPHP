 //   const monedaEl_one = document.getElementById('moneda-uno');
  //  const monedaEl_two = document.getElementById('moneda-dos');
  //  const CantidadEl_one = document.getElementById('cantidad-uno');
   // const CantidadEl_two = document.getElementById('cantidad-dos');
    // const cambioEl = document.getElementById('cambio');
     //const tazaEl = document.getElementById('taza');

    // Fetch Exchange Rate and Update the DOM
     //function calculate(){

        //const moneda_one = monedaEl_one.value;
        //const moneda_two = monedaEl_two.value;

       // fetch(`https://v6.exchangerate-api.com/v6/275572c639af7aaced28c608/latest/${moneda_one}`)
       // .then(res => res.json())
        //.then(data => {
            //had to look into the response of the documentation, for version number 6 of the API
            //the name of the "rates" it's no longer rates, it's defined as "conversion_rates"
           // const taza = data.conversion_rates[moneda_two];
            
          //  cambioEl.innerText = `1 ${moneda_one} = ${taza} ${moneda_two} `;

           // CantidadEl_two.value = (CantidadEl_one.value * taza).toFixed(2);
       // } );


   // }

    //Event Listeners

   // monedaEl_one.addEventListener('change', calculate);
   // monedaEl_two.addEventListener('input', calculate);
   // monedaEl_one.addEventListener('change', calculate);
    //monedaEl_two.addEventListener('input', calculate);


   // tazaEl.addEventListener('click', calculate);

   // calculate();