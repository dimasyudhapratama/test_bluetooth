<!doctype html>
<!--
Copyright 2015 Google Inc. All Rights Reserved.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->
<html>

<head>
  <title>Bluetooth Printer</title>
  <meta name="description" content="Print text and images to a Bluetooth Printer with a Web Bluetooth app.">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">


  <script src="bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>

  <!-- Polymer components -->
  <link rel="import" href="bower_components/paper-progress/paper-progress.html">
  <link rel="import" href="bower_components/paper-slider/paper-slider.html">
  <link rel="import" href="bower_components/paper-button/paper-button.html">
  <link rel="import" href="bower_components/paper-card/paper-card.html">
  <link rel="import" href="bower_components/paper-dialog/paper-dialog.html">
  <link rel="import" href="bower_components/paper-input/paper-input.html">
  <link rel="import" href="bower_components/paper-input/paper-input-container.html">
  <link rel="import" href="bower_components/paper-input/paper-input-error.html">
  <link rel="import" href="bower_components/paper-input/paper-input-char-counter.html">
  <link rel="import" href="bower_components/paper-input/paper-textarea.html">

  <link rel="import" href="bower_components/paper-styles/color.html">
  <link rel="stylesheet" href="bower_components/paper-styles/demo.css">
  <style is="custom-style">
    paper-progress {
      width: 100%;
    }

    paper-progress.blue {
      paper-progress-active-color: var(--paper-light-blue-500);
      paper-progress-secondary-color: var(--paper-light-blue-100);
    }

    paper-slider {
      width: 100%;
    }

    paper-slider.blue {
      paper-slider-active-color: var(--paper-light-blue-500);
      paper-slider-knob-color: var(--paper-light-blue-500);
    }

    paper-button {
      display: block;
      margin-bottom: 2px;
    }

    paper-button.colorful {
      color: #4285f4;
    }

    paper-button[raised].colorful {
      background: #4285f4;
      color: #fff;
    }

    paper-button.blue {
      color: var(--paper-light-blue-500);
      paper-button-flat-focus-color: var(--paper-light-blue-50);
    }

    body {
      background-color: var(--paper-grey-50);
    }

    #cards {
      margin-left: auto;
      margin-right: auto;
      max-width: 400px;
    }

    paper-card {
      margin-bottom: 5px;
      margin-top: 5px;
      width: 100%;
    }

    paper-card#logo {
      @apply(--layout-vertical);
      @apply(--layout-center);
    }
  </style>
</head>

<body unresolved>

  <div id="cards">
    <paper-card heading="Bluetooth Printer">
      <div class="card-content">
        <paper-progress id="progress" indeterminate></paper-progress>
      </div>
    </paper-card>

    <!-- <paper-card>
      <div class="card-content">
        <paper-button id="print" raised class="colorful">Print</paper-button>
      </div>
    </paper-card> -->
    <button type="button" id="print">Print</button>

    <paper-dialog id="dialog">
      <h2>Error</h2>
      <p>Could not connect to bluetooth device!</p>
    </paper-dialog>
  </div>
  <script>
    let progress = document.querySelector('#progress');
    let dialog = document.querySelector('#dialog');
    let message = document.querySelector('#message');
    let printButton = document.querySelector('#print');
    let printCharacteristic;
    progress.hidden = true;

    function handleError(error) {
      console.log(error);
      progress.hidden = true;
      printCharacteristic = null;
      dialog.open();
    }

    function sendHeaderTextData() {
      let encoder = new TextEncoder("utf-8");
      let headerText = encoder.encode(
        "-------------------------------\n          Uber Resto\nJln. Hayam Wuruk No. 23 Lumajang\n");
      return printCharacteristic.writeValue(headerText);
    }

    function sendHeaderTextData2() {
      let encoder = new TextEncoder("utf-8");
      let headerText2 = encoder.encode("Jln. Hayam Wuruk\n");
      return printCharacteristic.writeValue(headerText2);
    }
    function sendBodyData(nama,qty,subtotal){
      let encoder = new TextEncoder("utf-8");
      let bodytext = encoder.encode(nama+" X"+qty+"\n"+subtotal+"\n");
      return printCharacteristic.writeValue(bodytext);
    }
    function sendBodyData2(nama, harga) {
      let encoder = new TextEncoder("utf-8");
      let bodytext = encoder.encode(nama + "\n" + harga + "X2\n");
      return printCharacteristic.writeValue(bodytext);
    }

    function sendData() {
      let encoder = new TextEncoder("utf-8");
      // let text = for(int i=0;i<10;i++){}
      let bodytext = encoder.encode("ASSSIAPPPPPPPPP\n");
      // let bodytext = encoder.encode("Nama Barang X2\nRp.20.000\nNama Barang X2\nRp.20.000\nNama Barang X2\nRp.20.000\nNama Barang X2\nRp.20.000\nNama Barang X2\nRp.20.000\n");
      // let var1 = encoder.encode("TEST\nTEST\nTEST\nTEST\nTEST\nTEST\nTEST\nTEST\nTEST\nTEST\nTEST\n");
      // let var2 = encoder.encode("BB");
      return printCharacteristic.writeValue(bodytext);
      // printCharacteristic.writeValue(var2);
      // return printCharacteristic.writeValue(bodytext);
    }

    function sendFooterTextData() {
      let encoder = new TextEncoder("utf-8");
      let footertext = encoder.encode("Kasir : Dinda\nKritik & Saran : 08XXXXX\n\n\n");
      return printCharacteristic.writeValue(footertext);
    }

    function sendTextData() {
      // Get the bytes for the text
      let encoder = new TextEncoder("utf-8");
      // Add line feed + carriage return chars to text

      // let text = encoder.encode("AAAAAAAAAAA\nAAAAAAAAAAA\nAAAAAAAAAAA\n\n\n\n");
      let text = encoder.encode(message.value);

      // printCharacteristic.writeValue(text);

      // printCharacteristic.writeValue(headerText)
      return printCharacteristic.writeValue(text).then(() => {
        // printCharacteristic.writeValue(text);
        console.log('Write done.');
      });
    }

    function sendPrinterData() {
      sendTextData()
        .then(() => {
          progress.hidden = true;
        })
        .catch(handleError);
    }
    document.addEventListener('WebComponentsReady', function() {
      printButton.addEventListener('click', function() {
        alert("AAAA");
        progress.hidden = false;
        if (printCharacteristic == null) {
          navigator.bluetooth.requestDevice({
              filters: [{
                services: ['000018f0-0000-1000-8000-00805f9b34fb']
              }]
            })
            .then(device => {
              console.log('> Found ' + device.name);
              console.log('Connecting to GATT Server...');
              return device.gatt.connect();
            })
            .then(server => server.getPrimaryService("000018f0-0000-1000-8000-00805f9b34fb"))
            .then(service => service.getCharacteristic("00002af1-0000-1000-8000-00805f9b34fb"))
            .then(characteristic => {
              // Cache the characteristic
              printCharacteristic = characteristic;
              // sendData()
              //   .then((data) => sendBodyData2("Es Teh", "50000"))
              //   .then((data) => sendBodyData2("Asyaip", "20000"))
              //   .then((data) => sendBodyData2("Mie Goleng", "10000"));

              sendHeaderTextData()
              .then((data) => sendBodyData("Micin","5","2500"))
              .then((data) => sendBodyData("Es Jeruk","3","10000"))
              .then(sendFooterTextData);



              // sendPrinterData();
              // sendHeaderTextData();
              //Menuju Bener;
              //sendData()
              // <?php for ($i = 0; $i < 5; $i++) { ?>
                // .then(sendData)
                // <?php } ?>;
              // sendHeaderTextData()
              //   .then(sendData)
              //   .then(sendFooterTextData);
            })
            .catch(handleError);
        } else {
          // sendHeaderTextData();
          sendHeaderTextData()
              .then((data) => sendBodyData("Micin","5","2500"))
              .then((data) => sendBodyData("Es Jeruk","3","10000"))
              .then(sendFooterTextData);
          // sendHeaderTextData()
          //   .then(sendFooterTextData);
        }
      });
    });
  </script>
</body>

</html>