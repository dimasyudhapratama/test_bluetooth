<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
</head>

<body>
    <button type="button" id="print" name="print">Print</button>
    <script>
    let printButton = document.querySelector('#print');
    let printCharacteristic;

    function handleError(error) {
      console.log(error);
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
        //   progress.hidden = true;
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