<dialog id="dialog-margherita">
  <div class="container">
    <div class="row">
      <div class="close col-md-12 d-flex justify-content-end">
          <i class="fas fa-times close-margherita"></i>
      </div>
      <div class="col-md-5">
        <img src="images/bacio-pizza-margherita.jpg" alt="Bacio Pizza Margherita" title="Bacio Pizza Margherita" class="img-fluid">
      </div>
      <div class="col-md-7 ps-5">
        <h2 class="mt-4">Pizza Margherita</h2>
        <p>Die Pizza Margherita ist ein klassisches italienisches Gericht, das für seine Einfachheit und seinen authentischen Geschmack bekannt ist. Mit einer Basis aus reichhaltiger Tomatensauce, bedeckt mit zart schmelzender Mozzarella und garniert mit duftendem, frischem Basilikum, bietet diese Pizza ein harmonisches Gleichgewicht von Aromen. Perfekt für Liebhaber traditioneller italienischer Küche.</p>
        <h3>das erwartet dich bei der Pizza Margherita</h3>
        <p>Tomatensauce, Mozzarella, frischer Basilikum</p>
        <a href="pizza.php"><button class="button-dark mt-3">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
      </div>
      <div class="tab-infos col-md-12 mt-5">
        <div class="tab">
          <button class="tablinks" onclick="openInfo(event, 'geschichte1')">Geschichte</button>
          <button class="tablinks" onclick="openInfo(event, 'zubereitung1')" id="defaultOpen">Zubereitung</button>
          <button class="tablinks" onclick="openInfo(event, 'naehrwerte1')">Nährwerte</button>
        </div>
        <div class="d-flex">
          <div id="geschichte1" class="tabcontent mt-3 story">
            <p>Auf ihrer Forschungsreise durch Italien machten Armando und Andreas auch Halt im malerischen Alberobello, einer Stadt, die für ihre einzigartigen Trulli-Häuser bekannt ist. Doch nicht nur die Architektur faszinierte die beiden Gründer von Pizza Bacio – es war vor allem der kulinarische Schatz, den sie dort entdeckten: das Geheimnis der besten Mozzarella.<br>In Alberobello lernten Armando und Andreas eine traditionelle Käserei kennen, in der seit Generationen die Kunst der Mozzarella-Herstellung perfektioniert wird. Hier erfuhren sie, dass die Qualität der Milch, die handwerkliche Fertigung und die Liebe zum Detail entscheidend sind, um eine Mozzarella von herausragendem Geschmack und Textur zu erzeugen. Die frische, laktosefreie Mozzarella aus Alberobello beeindruckte sie so sehr, dass sie beschlossen, dieses Geheimnis in ihre eigene Pizza Margherita einfließen zu lassen.<br>Während ihres Aufenthalts konnten sie nicht nur die Herstellung der Mozzarella aus nächster Nähe beobachten, sondern auch an Verkostungen teilnehmen und sich mit den örtlichen Käsemeistern austauschen. Diese intensiven Erlebnisse und das neu erworbene Wissen inspirieren heute die Pizza Margherita von Pizza Bacio.</p>
          </div>
          <div id="zubereitung1" class="tabcontent mt-3">
            <div class="col-md-12 d-flex">
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">1</p>
                </div>
                <div>
                  <h3>Antauen</h3>
                  <p>Die Pizza auspacken und richtig gut antauen lassen. Für ein optimales Ergebnis mindestens 20 Minuten.</p>
                </div>
              </div>
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">2</p>
                </div>
                <div>
                  <h3>Vorheizen</h3>
                  <p>Während des Auftauens den Ofen bei 250°C (Ober-/Unterhitze) voll vorheizen. Wenn der Ofen mehr hergibt: die Gradzahl gerne noch erhöhen.</p>
                </div>
              </div>
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">3</p>
                </div>
                <div>
                  <h3>Backen</h3>
                  <p>Die Pizza auf dem Rost, nicht dem Backblech, auf der mittleren Schiene in den Ofen schieben. Die Pizza ist fertig, wenn der Käse zerlaufen und der Rand goldbraun ist.</p>
                </div>
              </div>
              <div class="col-md-3 ps-3 tipps">
                <h3>Tipps</h3>
                <p>Bitte immer nur eine einzelne Pizza. Aufgrund der hohen Gradzahl kein Backpapier verwenden. Dann die Pizza zirka 6-10 Minuten backen.</p>
              </div>
            </div>
          </div>
          <div id="naehrwerte1" class="tabcontent naehrwerte">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">durchschnittliche Nährwerte</th>
                  <th scope="col">pro 100g</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Brennwert</td>
                  <td>1.371,21kJ / 327,88kcal</td>
                </tr>
                <tr>
                  <td>Fett<br>davon gesättigte Fettsäuren</td>
                  <td>8,42<br>3,25</td>
                </tr>
                <tr>
                  <td>Kohlenhydrate<br>davon Zucker</td>
                  <td>23,49<br>5,61</td>
                </tr>
                <tr>
                  <td>Eiweiß</td>
                  <td>26,21</td>
                </tr>
                <tr>
                  <td>Salz</td>
                  <td>2,63</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-12 accordion-infos mt-4">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Geschichte
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>Auf ihrer Forschungsreise durch Italien machten Armando und Andreas auch Halt im malerischen Alberobello, einer Stadt, die für ihre einzigartigen Trulli-Häuser bekannt ist. Doch nicht nur die Architektur faszinierte die beiden Gründer von Pizza Bacio – es war vor allem der kulinarische Schatz, den sie dort entdeckten: das Geheimnis der besten Mozzarella.</p>
                <p>In Alberobello lernten Armando und Andreas eine traditionelle Käserei kennen, in der seit Generationen die Kunst der Mozzarella-Herstellung perfektioniert wird. Hier erfuhren sie, dass die Qualität der Milch, die handwerkliche Fertigung und die Liebe zum Detail entscheidend sind, um eine Mozzarella von herausragendem Geschmack und Textur zu erzeugen. Die frische, laktosefreie Mozzarella aus Alberobello beeindruckte sie so sehr, dass sie beschlossen, dieses Geheimnis in ihre eigene Pizza Margherita einfließen zu lassen.</p>
                <p>Während ihres Aufenthalts konnten sie nicht nur die Herstellung der Mozzarella aus nächster Nähe beobachten, sondern auch an Verkostungen teilnehmen und sich mit den örtlichen Käsemeistern austauschen. Diese intensiven Erlebnisse und das neu erworbene Wissen inspirieren heute die Pizza Margherita von Pizza Bacio.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Zubereitung
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">1</p>
                      </div>
                      <div>
                        <h3>Antauen</h3>
                        <p>Die Pizza auspacken und richtig gut antauen lassen. Für ein optimales Ergebnis mindestens 20 Minuten.</p>
                      </div>
                    </div>
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">2</p>
                      </div>
                      <div>
                        <h3>Vorheizen</h3>
                        <p>Während des Auftauens den Ofen bei 250°C (Ober-/Unterhitze) voll vorheizen. Wenn der Ofen mehr hergibt: die Gradzahl gerne noch erhöhen.</p>
                      </div>
                    </div>
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">3</p>
                      </div>
                      <div>
                        <h3>Backen</h3>
                        <p>Die Pizza auf dem Rost, nicht dem Backblech, auf der mittleren Schiene in den Ofen schieben. Die Pizza ist fertig, wenn der Käse zerlaufen und der Rand goldbraun ist.</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3>Tipps</h3>
                      <p>Bitte immer nur eine einzelne Pizza – nicht zwei gleichzeitig. Aufgrund der hohen Gradzahl kein Backpapier verwenden. Dann die Pizza zirka 6-10 Minuten backen – somit deutlich kürzer als herkömmliche TK-Pizzen.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Nährwerte
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">durchschnittliche Nährwerte</th>
                      <th scope="col">pro 100g</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Brennwert</td>
                      <td>1.371,21kJ / 327,88kcal</td>
                    </tr>
                    <tr>
                      <td>Fett<br>davon gesättigte Fettsäuren</td>
                      <td>8,42<br>3,25</td>
                    </tr>
                    <tr>
                      <td>Kohlenhydrate<br>davon Zucker</td>
                      <td>23,49<br>5,61</td>
                    </tr>
                    <tr>
                      <td>Eiweiß</td>
                      <td>26,21</td>
                    </tr>
                    <tr>
                      <td>Salz</td>
                      <td>2,63</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</dialog>

<dialog id="dialog-spinaci-ricotta">
  <div class="container">
    <div class="row">
      <div class="close col-md-12 d-flex justify-content-end">
          <i class="fas fa-times close-spinaci-ricotta"></i>
      </div>
      <div class="col-md-5">
        <img src="images/bacio-pizza-spinaci-ricotta.jpg" alt="Bacio Pizza Spinaci e Ricotta" title="Bacio Pizza Spinaci e Ricotta"class="img-fluid">
      </div>
      <div class="col-md-7 ps-5">
        <h2 class="mt-4">Pizza Spinaci e Ricotta</h2>
        <p>Eine vegetarische Delikatesse, die den frischen Geschmack von Spinat mit der cremigen Textur von Ricotta-Käse vereint. Die Tomatensauce und der Mozzarella sorgen für eine reichhaltige Basis, während der Spinat und der Ricotta eine leichte und dennoch geschmacksintensive Kombination bilden.</p>
        <h3>das erwartet dich bei der Pizza Spinaci e Ricotta</h3>
        <p>Tomatensauce, Mozzarella, Spinat, Ricotta-Käse</p>
        <a href="pizza.php"><button class="button-dark mt-3">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
      </div>
      <div class="tab-infos col-md-12 mt-5">
        <div class="tab">
          <button class="tablinks" onclick="openInfo(event, 'geschichte2')">Geschichte</button>
          <button class="tablinks" onclick="openInfo(event, 'zubereitung2')" id="defaultOpen">Zubereitung</button>
          <button class="tablinks" onclick="openInfo(event, 'naehrwerte2')">Nährwerte</button>
        </div>
        <div class="d-flex">
          <div id="geschichte2" class="tabcontent mt-3 story">
            <p>Während ihrer Reise durch Italien verbrachten Andreas und Armando einige Tage in der Ewigen Stadt Rom. In einem belebten Viertel entdeckten sie eine traditionelle Trattoria, die für ihre köstliche Pizza al Taglio bekannt war. Der erfahrene Pizzaiolo Luigi begrüßte sie herzlich und zeigte ihnen, wie man den Teig perfekt aufgehen lässt und ihn mit den besten lokalen Zutaten belegt. Sie verbrachten Stunden damit, von Luigi zu lernen und die Feinheiten der römischen Pizzakunst zu verstehen.<br>Am Abend, mit Blick auf das majestätische Kolosseum, genossen sie eine frisch gebackene Pizza, die so authentisch schmeckte wie frisch vom Italiener. Diese unvergessliche Erfahrung inspirierte sie, mit Pizza Bacio ein Stück Rom in jede ihrer Pizzen zu bringen und die Leidenschaft und Handwerkskunst der römischen Küche zu teilen. Seitdem sind die Aromen und die Tradition Roms in jeder Pizza von Pizza Bacio zu finden.</p>
          </div>
          <div id="zubereitung2" class="tabcontent mt-3">
            <div class="col-md-12 d-flex">
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">1</p>
                </div>
                <div>
                  <h3>Antauen</h3>
                  <p>Die Pizza auspacken und richtig gut antauen lassen. Für ein optimales Ergebnis mindestens 20 Minuten.</p>
                </div>
              </div>
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">2</p>
                </div>
                <div>
                  <h3>Vorheizen</h3>
                  <p>Während des Auftauens den Ofen bei 250°C (Ober-/Unterhitze) voll vorheizen. Wenn der Ofen mehr hergibt: die Gradzahl gerne noch erhöhen.</p>
                </div>
              </div>
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">3</p>
                </div>
                <div>
                  <h3>Backen</h3>
                  <p>Die Pizza auf dem Rost, nicht dem Backblech, auf der mittleren Schiene in den Ofen schieben. Die Pizza ist fertig, wenn der Käse zerlaufen und der Rand goldbraun ist.</p>
                </div>
              </div>
              <div class="col-md-3 ps-3 tipps">
                <h3>Tipps</h3>
                <p>Bitte immer nur eine einzelne Pizza. Aufgrund der hohen Gradzahl kein Backpapier verwenden. Dann die Pizza zirka 6-10 Minuten backen.</p>
              </div>
            </div>
          </div>
          <div id="naehrwerte2" class="tabcontent naehrwerte">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">durchschnittliche Nährwerte</th>
                  <th scope="col">pro 100g</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Brennwert</td>
                  <td>1.371,21kJ / 327,88kcal</td>
                </tr>
                <tr>
                  <td>Fett<br>davon gesättigte Fettsäuren</td>
                  <td>8,42<br>3,25</td>
                </tr>
                <tr>
                  <td>Kohlenhydrate<br>davon Zucker</td>
                  <td>23,49<br>5,61</td>
                </tr>
                <tr>
                  <td>Eiweiß</td>
                  <td>26,21</td>
                </tr>
                <tr>
                  <td>Salz</td>
                  <td>2,63</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-12 accordion-infos mt-4">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Geschichte
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>Während ihrer Reise durch Italien verbrachten Andreas und Armando einige Tage in der Ewigen Stadt Rom. In einem belebten Viertel entdeckten sie eine traditionelle Trattoria, die für ihre köstliche Pizza al Taglio bekannt war. Der erfahrene Pizzaiolo Luigi begrüßte sie herzlich und zeigte ihnen, wie man den Teig perfekt aufgehen lässt und ihn mit den besten lokalen Zutaten belegt. Sie verbrachten Stunden damit, von Luigi zu lernen und die Feinheiten der römischen Pizzakunst zu verstehen.<br>Am Abend, mit Blick auf das majestätische Kolosseum, genossen sie eine frisch gebackene Pizza, die so authentisch schmeckte wie frisch vom Italiener. Diese unvergessliche Erfahrung inspirierte sie, mit Pizza Bacio ein Stück Rom in jede ihrer Pizzen zu bringen und die Leidenschaft und Handwerkskunst der römischen Küche zu teilen. Seitdem sind die Aromen und die Tradition Roms in jeder Pizza von Pizza Bacio zu finden.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Zubereitung
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">1</p>
                      </div>
                      <div>
                        <h3>Antauen</h3>
                        <p>Die Pizza auspacken und richtig gut antauen lassen. Für ein optimales Ergebnis mindestens 20 Minuten.</p>
                      </div>
                    </div>
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">2</p>
                      </div>
                      <div>
                        <h3>Vorheizen</h3>
                        <p>Während des Auftauens den Ofen bei 250°C (Ober-/Unterhitze) voll vorheizen. Wenn der Ofen mehr hergibt: die Gradzahl gerne noch erhöhen.</p>
                      </div>
                    </div>
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">3</p>
                      </div>
                      <div>
                        <h3>Backen</h3>
                        <p>Die Pizza auf dem Rost, nicht dem Backblech, auf der mittleren Schiene in den Ofen schieben. Die Pizza ist fertig, wenn der Käse zerlaufen und der Rand goldbraun ist.</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3>Tipps</h3>
                      <p>Bitte immer nur eine einzelne Pizza – nicht zwei gleichzeitig. Aufgrund der hohen Gradzahl kein Backpapier verwenden. Dann die Pizza zirka 6-10 Minuten backen – somit deutlich kürzer als herkömmliche TK-Pizzen.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Nährwerte
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">durchschnittliche Nährwerte</th>
                      <th scope="col">pro 100g</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Brennwert</td>
                      <td>1.371,21kJ / 327,88kcal</td>
                    </tr>
                    <tr>
                      <td>Fett<br>davon gesättigte Fettsäuren</td>
                      <td>8,42<br>3,25</td>
                    </tr>
                    <tr>
                      <td>Kohlenhydrate<br>davon Zucker</td>
                      <td>23,49<br>5,61</td>
                    </tr>
                    <tr>
                      <td>Eiweiß</td>
                      <td>26,21</td>
                    </tr>
                    <tr>
                      <td>Salz</td>
                      <td>2,63</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</dialog>

<dialog id="dialog-prosciutto-funghi">
  <div class="container">
    <div class="row">
      <div class="close col-md-12 d-flex justify-content-end">
          <i class="fas fa-times close-prosciutto-funghi"></i>
      </div>
      <div class="col-md-5">
        <img src="images/bacio-pizza-prosciutto-funghi.jpg" alt="Bacio Pizza Prosciutto e Funghi" title="Bacio Pizza Prosciutto e Funghi" class="img-fluid">
      </div>
      <div class="col-md-7 ps-5">
        <h2 class="mt-4">Pizza Prosciutto e Funghi</h2>
        <p>Diese Pizza kombiniert den herzhaften Geschmack von hochwertigem Schinken mit den erdigen Noten frischer Champignons. Eine reichhaltige Tomatensauce und zerlaufener Mozzarella runden das Geschmacksprofil ab, sodass jeder Bissen eine ausgewogene Mischung von Aromen und Texturen bietet.</p>
        <h3>das erwartet dich bei der Pizza Prosciutto e Funghi</h3>
        <p>Tomatensauce, Mozzarella, Schinken, Champignons</p>
        <a href="pizza.php"><button class="button-dark mt-3">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
      </div>
      <div class="tab-infos col-md-12 mt-5">
        <div class="tab">
          <button class="tablinks" onclick="openInfo(event, 'geschichte3')">Geschichte</button>
          <button class="tablinks" onclick="openInfo(event, 'zubereitung3')" id="defaultOpen">Zubereitung</button>
          <button class="tablinks" onclick="openInfo(event, 'naehrwerte3')">Nährwerte</button>
        </div>
        <div class="d-flex">
          <div id="geschichte3" class="tabcontent mt-3 story">
            <p>Während ihrer Reise durch Italien führte der Weg Andreas und Armando nach Palermo, die pulsierende Hauptstadt Siziliens. Dort entdeckten sie eine versteckte Pizzeria im Herzen der Altstadt, geführt von der leidenschaftlichen Pizzaiola Maria. Sie zeigte ihnen, wie man den Teig traditionell per Hand ausrollt und mit sizilianischen Spezialitäten wie frischen Tomaten, Oliven und Kapern belegt. Am Abend, mit Blick auf das historische Teatro Massimo, genossen sie eine Pizza, deren Aromen und Knusprigkeit sie sofort begeisterten. Diese Erfahrung inspirierte sie, mit Pizza Bacio die intensiven Aromen und die Herzlichkeit Palermos in jede ihrer Pizzen zu bringen. Seitdem vereinen sie die sizilianische Tradition in jeder Pizza von Pizza Bacio.</p>
          </div>
          <div id="zubereitung3" class="tabcontent mt-3">
            <div class="col-md-12 d-flex">
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">1</p>
                </div>
                <div>
                  <h3>Antauen</h3>
                  <p>Die Pizza auspacken und richtig gut antauen lassen. Für ein optimales Ergebnis mindestens 20 Minuten.</p>
                </div>
              </div>
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">2</p>
                </div>
                <div>
                  <h3>Vorheizen</h3>
                  <p>Während des Auftauens den Ofen bei 250°C (Ober-/Unterhitze) voll vorheizen. Wenn der Ofen mehr hergibt: die Gradzahl gerne noch erhöhen.</p>
                </div>
              </div>
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">3</p>
                </div>
                <div>
                  <h3>Backen</h3>
                  <p>Die Pizza auf dem Rost, nicht dem Backblech, auf der mittleren Schiene in den Ofen schieben. Die Pizza ist fertig, wenn der Käse zerlaufen und der Rand goldbraun ist.</p>
                </div>
              </div>
              <div class="col-md-3 ps-3 tipps">
                <h3>Tipps</h3>
                <p>Bitte immer nur eine einzelne Pizza. Aufgrund der hohen Gradzahl kein Backpapier verwenden. Dann die Pizza zirka 6-10 Minuten backen.</p>
              </div>
            </div>
          </div>
          <div id="naehrwerte3" class="tabcontent naehrwerte">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">durchschnittliche Nährwerte</th>
                  <th scope="col">pro 100g</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Brennwert</td>
                  <td>1.371,21kJ / 327,88kcal</td>
                </tr>
                <tr>
                  <td>Fett<br>davon gesättigte Fettsäuren</td>
                  <td>8,42<br>3,25</td>
                </tr>
                <tr>
                  <td>Kohlenhydrate<br>davon Zucker</td>
                  <td>23,49<br>5,61</td>
                </tr>
                <tr>
                  <td>Eiweiß</td>
                  <td>26,21</td>
                </tr>
                <tr>
                  <td>Salz</td>
                  <td>2,63</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-12 accordion-infos mt-4">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Geschichte
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>Während ihrer Reise durch Italien führte der Weg Andreas und Armando nach Palermo, die pulsierende Hauptstadt Siziliens. Dort entdeckten sie eine versteckte Pizzeria im Herzen der Altstadt, geführt von der leidenschaftlichen Pizzaiola Maria. Sie zeigte ihnen, wie man den Teig traditionell per Hand ausrollt und mit sizilianischen Spezialitäten wie frischen Tomaten, Oliven und Kapern belegt. Am Abend, mit Blick auf das historische Teatro Massimo, genossen sie eine Pizza, deren Aromen und Knusprigkeit sie sofort begeisterten. Diese Erfahrung inspirierte sie, mit Pizza Bacio die intensiven Aromen und die Herzlichkeit Palermos in jede ihrer Pizzen zu bringen. Seitdem vereinen sie die sizilianische Tradition in jeder Pizza von Pizza Bacio.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Zubereitung
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">1</p>
                      </div>
                      <div>
                        <h3>Antauen</h3>
                        <p>Die Pizza auspacken und richtig gut antauen lassen. Für ein optimales Ergebnis mindestens 20 Minuten.</p>
                      </div>
                    </div>
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">2</p>
                      </div>
                      <div>
                        <h3>Vorheizen</h3>
                        <p>Während des Auftauens den Ofen bei 250°C (Ober-/Unterhitze) voll vorheizen. Wenn der Ofen mehr hergibt: die Gradzahl gerne noch erhöhen.</p>
                      </div>
                    </div>
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">3</p>
                      </div>
                      <div>
                        <h3>Backen</h3>
                        <p>Die Pizza auf dem Rost, nicht dem Backblech, auf der mittleren Schiene in den Ofen schieben. Die Pizza ist fertig, wenn der Käse zerlaufen und der Rand goldbraun ist.</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3>Tipps</h3>
                      <p>Bitte immer nur eine einzelne Pizza – nicht zwei gleichzeitig. Aufgrund der hohen Gradzahl kein Backpapier verwenden. Dann die Pizza zirka 6-10 Minuten backen – somit deutlich kürzer als herkömmliche TK-Pizzen.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Nährwerte
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">durchschnittliche Nährwerte</th>
                      <th scope="col">pro 100g</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Brennwert</td>
                      <td>1.371,21kJ / 327,88kcal</td>
                    </tr>
                    <tr>
                      <td>Fett<br>davon gesättigte Fettsäuren</td>
                      <td>8,42<br>3,25</td>
                    </tr>
                    <tr>
                      <td>Kohlenhydrate<br>davon Zucker</td>
                      <td>23,49<br>5,61</td>
                    </tr>
                    <tr>
                      <td>Eiweiß</td>
                      <td>26,21</td>
                    </tr>
                    <tr>
                      <td>Salz</td>
                      <td>2,63</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</dialog>

<dialog id="dialog-salame">
  <div class="container">
    <div class="row">
      <div class="close col-md-12 d-flex justify-content-end">
          <i class="fas fa-times close-salame"></i>
      </div>
      <div class="col-md-5">
        <img src="images/bacio-pizza-salame.jpg" alt="Bacio Pizza Salame" title="Bacio Pizza Salame" class="img-fluid">
      </div>
      <div class="col-md-7 ps-5">
        <h2 class="mt-4">Pizza Salame</h2>
        <p>Ein Favorit für alle Fleischliebhaber. Die Pizza Salami besticht durch ihre großzügige Belegung mit würziger Salami, die auf einer Basis aus aromatischer Tomatensauce und cremigem Mozzarella liegt. Der pikante Geschmack der Salami wird durch die geschmolzene Käseschicht perfekt ergänzt, was diese Pizza zu einem echten Genuss macht.</p>
        <h3>das erwartet dich bei der Pizza Salame</h3>
        <p>Tomatensauce, Mozzarella, Salami</p>
        <a href="pizza.php"><button class="button-dark mt-3">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
      </div>
      <div class="tab-infos col-md-12 mt-5">
        <div class="tab">
          <button class="tablinks" onclick="openInfo(event, 'geschichte4')">Geschichte</button>
          <button class="tablinks" onclick="openInfo(event, 'zubereitung4')" id="defaultOpen">Zubereitung</button>
          <button class="tablinks" onclick="openInfo(event, 'naehrwerte4')">Nährwerte</button>
        </div>
        <div class="d-flex">
          <div id="geschichte4" class="tabcontent mt-3 story">
            <p>Auf ihrer Reise durch Italien machten Andreas und Armando eines Tages Halt in der wunderschönen Stadt Pisa. Begeistert von der reichen Geschichte und den malerischen Straßen, ließen sie sich von den lokalen Köstlichkeiten inspirieren. An einem sonnigen Nachmittag entdeckten sie eine kleine, familiengeführte Pizzeria, die bekannt für ihre traditionelle Zubereitungsmethode war.<br>Duft frisch gebackener Pizza lockte sie in das gemütliche Lokal. Der Pizzabäcker, ein älterer Herr namens Giuseppe, begrüßte sie herzlich und bot ihnen einen Platz in der Küche an, um die Zubereitung seiner berühmten Pizza Margherita zu beobachten. Andreas und Armando waren beeindruckt von der Hingabe und Präzision, mit der Giuseppe den Teig knetete und die frischen Zutaten arrangierte.<br>Sie verbrachten den ganzen Tag in der Pizzeria, tauschten Rezepte und Geschichten aus und lernten die Geheimnisse der perfekten Pizza kennen. Als die Sonne unterging, saßen sie auf der Piazza dei Miracoli und genossen eine frisch gebackene Pizza, die so knusprig und authentisch schmeckte, wie sie es sich immer erträumt hatten.<br>Diese Erfahrung prägte ihre Vision für Pizza Bacio. Die Leidenschaft und das handwerkliche Können, die sie in Pisa erlebten, fließen in jede ihrer Pizzen ein. So bringen sie ein Stück Italien direkt zu Ihnen nach Hause.</p>
          </div>
          <div id="zubereitung4" class="tabcontent mt-3">
            <div class="col-md-12 d-flex">
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">1</p>
                </div>
                <div>
                  <h3>Antauen</h3>
                  <p>Die Pizza auspacken und richtig gut antauen lassen. Für ein optimales Ergebnis mindestens 20 Minuten.</p>
                </div>
              </div>
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">2</p>
                </div>
                <div>
                  <h3>Vorheizen</h3>
                  <p>Während des Auftauens den Ofen bei 250°C (Ober-/Unterhitze) voll vorheizen. Wenn der Ofen mehr hergibt: die Gradzahl gerne noch erhöhen.</p>
                </div>
              </div>
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">3</p>
                </div>
                <div>
                  <h3>Backen</h3>
                  <p>Die Pizza auf dem Rost, nicht dem Backblech, auf der mittleren Schiene in den Ofen schieben. Die Pizza ist fertig, wenn der Käse zerlaufen und der Rand goldbraun ist.</p>
                </div>
              </div>
              <div class="col-md-3 ps-3 tipps">
                <h3>Tipps</h3>
                <p>Bitte immer nur eine einzelne Pizza. Aufgrund der hohen Gradzahl kein Backpapier verwenden. Dann die Pizza zirka 6-10 Minuten backen.</p>
              </div>
            </div>
          </div>
          <div id="naehrwerte4" class="tabcontent naehrwerte">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">durchschnittliche Nährwerte</th>
                  <th scope="col">pro 100g</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Brennwert</td>
                  <td>1.371,21kJ / 327,88kcal</td>
                </tr>
                <tr>
                  <td>Fett<br>davon gesättigte Fettsäuren</td>
                  <td>8,42<br>3,25</td>
                </tr>
                <tr>
                  <td>Kohlenhydrate<br>davon Zucker</td>
                  <td>23,49<br>5,61</td>
                </tr>
                <tr>
                  <td>Eiweiß</td>
                  <td>26,21</td>
                </tr>
                <tr>
                  <td>Salz</td>
                  <td>2,63</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-12 accordion-infos mt-4">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Geschichte
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>Auf ihrer Reise durch Italien machten Andreas und Armando eines Tages Halt in der wunderschönen Stadt Pisa. Begeistert von der reichen Geschichte und den malerischen Straßen, ließen sie sich von den lokalen Köstlichkeiten inspirieren. An einem sonnigen Nachmittag entdeckten sie eine kleine, familiengeführte Pizzeria, die bekannt für ihre traditionelle Zubereitungsmethode war.<br>Duft frisch gebackener Pizza lockte sie in das gemütliche Lokal. Der Pizzabäcker, ein älterer Herr namens Giuseppe, begrüßte sie herzlich und bot ihnen einen Platz in der Küche an, um die Zubereitung seiner berühmten Pizza Margherita zu beobachten. Andreas und Armando waren beeindruckt von der Hingabe und Präzision, mit der Giuseppe den Teig knetete und die frischen Zutaten arrangierte.<br>Sie verbrachten den ganzen Tag in der Pizzeria, tauschten Rezepte und Geschichten aus und lernten die Geheimnisse der perfekten Pizza kennen. Als die Sonne unterging, saßen sie auf der Piazza dei Miracoli und genossen eine frisch gebackene Pizza, die so knusprig und authentisch schmeckte, wie sie es sich immer erträumt hatten.<br>Diese Erfahrung prägte ihre Vision für Pizza Bacio. Die Leidenschaft und das handwerkliche Können, die sie in Pisa erlebten, fließen in jede ihrer Pizzen ein. So bringen sie ein Stück Italien direkt zu Ihnen nach Hause.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Zubereitung
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">1</p>
                      </div>
                      <div>
                        <h3>Antauen</h3>
                        <p>Die Pizza auspacken und richtig gut antauen lassen. Für ein optimales Ergebnis mindestens 20 Minuten.</p>
                      </div>
                    </div>
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">2</p>
                      </div>
                      <div>
                        <h3>Vorheizen</h3>
                        <p>Während des Auftauens den Ofen bei 250°C (Ober-/Unterhitze) voll vorheizen. Wenn der Ofen mehr hergibt: die Gradzahl gerne noch erhöhen.</p>
                      </div>
                    </div>
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">3</p>
                      </div>
                      <div>
                        <h3>Backen</h3>
                        <p>Die Pizza auf dem Rost, nicht dem Backblech, auf der mittleren Schiene in den Ofen schieben. Die Pizza ist fertig, wenn der Käse zerlaufen und der Rand goldbraun ist.</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3>Tipps</h3>
                      <p>Bitte immer nur eine einzelne Pizza – nicht zwei gleichzeitig. Aufgrund der hohen Gradzahl kein Backpapier verwenden. Dann die Pizza zirka 6-10 Minuten backen – somit deutlich kürzer als herkömmliche TK-Pizzen.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Nährwerte
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">durchschnittliche Nährwerte</th>
                      <th scope="col">pro 100g</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Brennwert</td>
                      <td>1.371,21kJ / 327,88kcal</td>
                    </tr>
                    <tr>
                      <td>Fett<br>davon gesättigte Fettsäuren</td>
                      <td>8,42<br>3,25</td>
                    </tr>
                    <tr>
                      <td>Kohlenhydrate<br>davon Zucker</td>
                      <td>23,49<br>5,61</td>
                    </tr>
                    <tr>
                      <td>Eiweiß</td>
                      <td>26,21</td>
                    </tr>
                    <tr>
                      <td>Salz</td>
                      <td>2,63</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</dialog>

<dialog id="dialog-quattro-formaggi">
  <div class="container">
    <div class="row">
      <div class="close col-md-12 d-flex justify-content-end">
          <i class="fas fa-times close-quattro-formaggi"></i>
      </div>
      <div class="col-md-5">
      <img src="images/bacio-pizza-quattro-formaggi.jpg" alt="Bacio Pizza Quattro Formaggi" title="Bacio Pizza Quattro Formaggi" class="img-fluid">
      </div>
      <div class="col-md-7 ps-5">
      <h2 class="mt-4">Pizza Quattro Formaggi</h2>
      <p>Ein wahrer Genuss für Käseliebhaber. Diese Pizza vereint die intensiven Aromen von vier verschiedenen Käsesorten: Mozzarella, Bergkäse, Cheddar und Blauschimmelkäse. Jede Käsesorte bringt ihre eigene Textur und Geschmack mit, die zusammen eine reichhaltige und geschmacklich komplexe Pizza ergeben. Ein luxuriöses Geschmackserlebnis.</p>
      <h3>das erwartet dich bei der Pizza Quattro Formaggi</h3>
        <p>Tomatensauce, Mozzarella, Bergkäse, 
        Cheddar und Blauschimmelkäse</p>
        <a href="pizza.php"><button class="button-dark mt-3">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
      </div>
      <div class="tab-infos col-md-12 mt-5">
        <div class="tab">
          <button class="tablinks" onclick="openInfo(event, 'geschichte5')">Geschichte</button>
          <button class="tablinks" onclick="openInfo(event, 'zubereitung5')" id="defaultOpen">Zubereitung</button>
          <button class="tablinks" onclick="openInfo(event, 'naehrwerte5')">Nährwerte</button>
        </div>
        <div class="d-flex">
          <div id="geschichte5" class="tabcontent mt-3 story">
          <p>Auf ihrer kulinarischen Entdeckungsreise durch Italien machten Andreas und Armando Halt am wunderschönen Lago di Garda. Dort fanden sie eine idyllische Pizzeria direkt am Seeufer, geführt von dem herzlichen Pizzaiolo Antonio. Antonio zeigte ihnen, wie man den Teig mit Olivenöl verfeinert und mit frischen Kräutern und regionalem Käse belegt. Am Abend, bei Sonnenuntergang und mit Blick auf den funkelnden See, genossen sie eine Pizza, die so frisch und köstlich war wie die Umgebung selbst. Diese unvergessliche Erfahrung inspirierte sie, mit Pizza Bacio die Frische und das Aroma des Lago di Garda in jede ihrer Pizzen zu bringen.</p>
          </div>
          <div id="zubereitung5" class="tabcontent mt-3">
            <div class="col-md-12 d-flex">
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">1</p>
                </div>
                <div>
                  <h3>Antauen</h3>
                  <p>Die Pizza auspacken und richtig gut antauen lassen. Für ein optimales Ergebnis mindestens 20 Minuten.</p>
                </div>
              </div>
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">2</p>
                </div>
                <div>
                  <h3>Vorheizen</h3>
                  <p>Während des Auftauens den Ofen bei 250°C (Ober-/Unterhitze) voll vorheizen. Wenn der Ofen mehr hergibt: die Gradzahl gerne noch erhöhen.</p>
                </div>
              </div>
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">3</p>
                </div>
                <div>
                  <h3>Backen</h3>
                  <p>Die Pizza auf dem Rost, nicht dem Backblech, auf der mittleren Schiene in den Ofen schieben. Die Pizza ist fertig, wenn der Käse zerlaufen und der Rand goldbraun ist.</p>
                </div>
              </div>
              <div class="col-md-3 ps-3 tipps">
                <h3>Tipps</h3>
                <p>Bitte immer nur eine einzelne Pizza. Aufgrund der hohen Gradzahl kein Backpapier verwenden. Dann die Pizza zirka 6-10 Minuten backen.</p>
              </div>
            </div>
          </div>
          <div id="naehrwerte5" class="tabcontent naehrwerte">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">durchschnittliche Nährwerte</th>
                  <th scope="col">pro 100g</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Brennwert</td>
                  <td>1.371,21kJ / 327,88kcal</td>
                </tr>
                <tr>
                  <td>Fett<br>davon gesättigte Fettsäuren</td>
                  <td>8,42<br>3,25</td>
                </tr>
                <tr>
                  <td>Kohlenhydrate<br>davon Zucker</td>
                  <td>23,49<br>5,61</td>
                </tr>
                <tr>
                  <td>Eiweiß</td>
                  <td>26,21</td>
                </tr>
                <tr>
                  <td>Salz</td>
                  <td>2,63</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-12 accordion-infos mt-4">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Geschichte
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
              Auf ihrer kulinarischen Entdeckungsreise durch Italien machten Andreas und Armando Halt am wunderschönen Lago di Garda. Dort fanden sie eine idyllische Pizzeria direkt am Seeufer, geführt von dem herzlichen Pizzaiolo Antonio. Antonio zeigte ihnen, wie man den Teig mit Olivenöl verfeinert und mit frischen Kräutern und regionalem Käse belegt. Am Abend, bei Sonnenuntergang und mit Blick auf den funkelnden See, genossen sie eine Pizza, die so frisch und köstlich war wie die Umgebung selbst. Diese unvergessliche Erfahrung inspirierte sie, mit Pizza Bacio die Frische und das Aroma des Lago di Garda in jede ihrer Pizzen zu bringen.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Zubereitung
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">1</p>
                      </div>
                      <div>
                        <h3>Antauen</h3>
                        <p>Die Pizza auspacken und richtig gut antauen lassen. Für ein optimales Ergebnis mindestens 20 Minuten.</p>
                      </div>
                    </div>
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">2</p>
                      </div>
                      <div>
                        <h3>Vorheizen</h3>
                        <p>Während des Auftauens den Ofen bei 250°C (Ober-/Unterhitze) voll vorheizen. Wenn der Ofen mehr hergibt: die Gradzahl gerne noch erhöhen.</p>
                      </div>
                    </div>
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">3</p>
                      </div>
                      <div>
                        <h3>Backen</h3>
                        <p>Die Pizza auf dem Rost, nicht dem Backblech, auf der mittleren Schiene in den Ofen schieben. Die Pizza ist fertig, wenn der Käse zerlaufen und der Rand goldbraun ist.</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3>Tipps</h3>
                      <p>Bitte immer nur eine einzelne Pizza – nicht zwei gleichzeitig. Aufgrund der hohen Gradzahl kein Backpapier verwenden. Dann die Pizza zirka 6-10 Minuten backen – somit deutlich kürzer als herkömmliche TK-Pizzen.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Nährwerte
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">durchschnittliche Nährwerte</th>
                      <th scope="col">pro 100g</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Brennwert</td>
                      <td>1.371,21kJ / 327,88kcal</td>
                    </tr>
                    <tr>
                      <td>Fett<br>davon gesättigte Fettsäuren</td>
                      <td>8,42<br>3,25</td>
                    </tr>
                    <tr>
                      <td>Kohlenhydrate<br>davon Zucker</td>
                      <td>23,49<br>5,61</td>
                    </tr>
                    <tr>
                      <td>Eiweiß</td>
                      <td>26,21</td>
                    </tr>
                    <tr>
                      <td>Salz</td>
                      <td>2,63</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</dialog>

<dialog id="dialog-prosciutto-ananas">
  <div class="container">
    <div class="row">
      <div class="close col-md-12 d-flex justify-content-end">
          <i class="fas fa-times close-prosciutto-ananas"></i>
      </div>
      <div class="col-md-5">
      <img src="images/bacio-pizza-prosciutto-ananas.jpg" alt="Bacio Pizza Prosciutto e Ananas" title="Bacio Pizza Prosciutto e Ananas" class="img-fluid">
      </div>
      <div class="col-md-7 ps-5">
      <h2 class="mt-4">Pizza Prosciutto e Ananas</h2>
      <p>Die Hawaii-Pizza kombiniert den salzigen Geschmack von saftigem Schinken mit der süßen Frische von Ananas. Die Tomatensauce und der Mozzarella bieten eine köstliche Grundlage, die die süß-salzige Geschmackskombination perfekt zur Geltung bringt. Eine exotische Wahl für mutige Genießer.</p>
      <h3>das erwartet dich bei der Pizza Prosciutto e Ananas</h3>
        <p>Tomatensauce, Mozzarella, Schinken, Ananas</p>
        <a href="pizza.php"><button class="button-dark mt-3">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
      </div>
      <div class="tab-infos col-md-12 mt-5">
        <div class="tab">
          <button class="tablinks" onclick="openInfo(event, 'geschichte6')">Geschichte</button>
          <button class="tablinks" onclick="openInfo(event, 'zubereitung6')" id="defaultOpen">Zubereitung</button>
          <button class="tablinks" onclick="openInfo(event, 'naehrwerte6')">Nährwerte</button>
        </div>
        <div class="d-flex">
          <div id="geschichte6" class="tabcontent mt-3 story">
          <p>Während ihrer Reise durch Italien war ein Stopp in Neapel für Andreas und Armando ein Muss. In der Heimat der Pizza fanden sie eine traditionsreiche Pizzeria, geführt von dem leidenschaftlichen Pizzaiolo Luigi. Luigi zeigte ihnen, wie man den Teig perfekt knetet und die Pizza im Holzofen backt, um die charakteristische neapolitanische Kruste zu erreichen. Am Abend, mit Blick auf den Vesuv und den Golf von Neapel, genossen sie eine Pizza Margherita, die so authentisch und köstlich war, dass sie sofort inspiriert wurden. Diese Erfahrung veranlasste sie, mit Pizza Bacio die traditionelle neapolitanische Pizza in jede ihrer Kreationen zu bringen.</p>
          </div>
          <div id="zubereitung6" class="tabcontent mt-3">
            <div class="col-md-12 d-flex">
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">1</p>
                </div>
                <div>
                  <h3>Antauen</h3>
                  <p>Die Pizza auspacken und richtig gut antauen lassen. Für ein optimales Ergebnis mindestens 20 Minuten.</p>
                </div>
              </div>
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">2</p>
                </div>
                <div>
                  <h3>Vorheizen</h3>
                  <p>Während des Auftauens den Ofen bei 250°C (Ober-/Unterhitze) voll vorheizen. Wenn der Ofen mehr hergibt: die Gradzahl gerne noch erhöhen.</p>
                </div>
              </div>
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">3</p>
                </div>
                <div>
                  <h3>Backen</h3>
                  <p>Die Pizza auf dem Rost, nicht dem Backblech, auf der mittleren Schiene in den Ofen schieben. Die Pizza ist fertig, wenn der Käse zerlaufen und der Rand goldbraun ist.</p>
                </div>
              </div>
              <div class="col-md-3 ps-3 tipps">
                <h3>Tipps</h3>
                <p>Bitte immer nur eine einzelne Pizza. Aufgrund der hohen Gradzahl kein Backpapier verwenden. Dann die Pizza zirka 6-10 Minuten backen.</p>
              </div>
            </div>
          </div>
          <div id="naehrwerte6" class="tabcontent naehrwerte">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">durchschnittliche Nährwerte</th>
                  <th scope="col">pro 100g</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Brennwert</td>
                  <td>1.371,21kJ / 327,88kcal</td>
                </tr>
                <tr>
                  <td>Fett<br>davon gesättigte Fettsäuren</td>
                  <td>8,42<br>3,25</td>
                </tr>
                <tr>
                  <td>Kohlenhydrate<br>davon Zucker</td>
                  <td>23,49<br>5,61</td>
                </tr>
                <tr>
                  <td>Eiweiß</td>
                  <td>26,21</td>
                </tr>
                <tr>
                  <td>Salz</td>
                  <td>2,63</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-12 accordion-infos mt-4">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Geschichte
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
              <p>Während ihrer Reise durch Italien war ein Stopp in Neapel für Andreas und Armando ein Muss. In der Heimat der Pizza fanden sie eine traditionsreiche Pizzeria, geführt von dem leidenschaftlichen Pizzaiolo Luigi. Luigi zeigte ihnen, wie man den Teig perfekt knetet und die Pizza im Holzofen backt, um die charakteristische neapolitanische Kruste zu erreichen. Am Abend, mit Blick auf den Vesuv und den Golf von Neapel, genossen sie eine Pizza Margherita, die so authentisch und köstlich war, dass sie sofort inspiriert wurden. Diese Erfahrung veranlasste sie, mit Pizza Bacio die traditionelle neapolitanische Pizza in jede ihrer Kreationen zu bringen.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Zubereitung
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">1</p>
                      </div>
                      <div>
                        <h3>Antauen</h3>
                        <p>Die Pizza auspacken und richtig gut antauen lassen. Für ein optimales Ergebnis mindestens 20 Minuten.</p>
                      </div>
                    </div>
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">2</p>
                      </div>
                      <div>
                        <h3>Vorheizen</h3>
                        <p>Während des Auftauens den Ofen bei 250°C (Ober-/Unterhitze) voll vorheizen. Wenn der Ofen mehr hergibt: die Gradzahl gerne noch erhöhen.</p>
                      </div>
                    </div>
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">3</p>
                      </div>
                      <div>
                        <h3>Backen</h3>
                        <p>Die Pizza auf dem Rost, nicht dem Backblech, auf der mittleren Schiene in den Ofen schieben. Die Pizza ist fertig, wenn der Käse zerlaufen und der Rand goldbraun ist.</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3>Tipps</h3>
                      <p>Bitte immer nur eine einzelne Pizza – nicht zwei gleichzeitig. Aufgrund der hohen Gradzahl kein Backpapier verwenden. Dann die Pizza zirka 6-10 Minuten backen – somit deutlich kürzer als herkömmliche TK-Pizzen.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Nährwerte
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">durchschnittliche Nährwerte</th>
                      <th scope="col">pro 100g</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Brennwert</td>
                      <td>1.371,21kJ / 327,88kcal</td>
                    </tr>
                    <tr>
                      <td>Fett<br>davon gesättigte Fettsäuren</td>
                      <td>8,42<br>3,25</td>
                    </tr>
                    <tr>
                      <td>Kohlenhydrate<br>davon Zucker</td>
                      <td>23,49<br>5,61</td>
                    </tr>
                    <tr>
                      <td>Eiweiß</td>
                      <td>26,21</td>
                    </tr>
                    <tr>
                      <td>Salz</td>
                      <td>2,63</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</dialog>

<dialog id="dialog-tonno-cipolla">
  <div class="container">
    <div class="row">
      <div class="close col-md-12 d-flex justify-content-end">
          <i class="fas fa-times close-tonno-cipolla"></i>
      </div>
      <div class="col-md-5">
      <img src="images/bacio-pizza-tonno-cipolla.jpg" alt="Bacio Pizza Tonno e Cipolla" title="Bacio Pizza Tonno e Cipolla" class="img-fluid">
      </div>
      <div class="col-md-7 ps-5">
      <h2 class="mt-4">Pizza Tonno e Cipolla</h2>
      <p>Diese Pizza bietet eine einzigartige Kombination aus zartem Thunfisch und knackigen roten Zwiebeln. Die Tomatensauce und der Mozzarella bilden die perfekte Basis, um die maritimen Aromen des Thunfischs und die süße Schärfe der Zwiebeln zu betonen. Ein Muss für alle Liebhaber von Meeresfrüchten.</p>
      <h3>das erwartet dich bei der Pizza Tonno e Cipolla</h3>
        <p>Tomatensauce, Mozzarella, Thunfisch, rote Zwiebeln</p>
        <a href="pizza.php"><button class="button-dark mt-3">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
      </div>
      <div class="tab-infos col-md-12 mt-5">
        <div class="tab">
          <button class="tablinks" onclick="openInfo(event, 'geschichte7')">Geschichte</button>
          <button class="tablinks" onclick="openInfo(event, 'zubereitung7')" id="defaultOpen">Zubereitung</button>
          <button class="tablinks" onclick="openInfo(event, 'naehrwerte7')">Nährwerte</button>
        </div>
        <div class="d-flex">
          <div id="geschichte7" class="tabcontent mt-3 story">
          <p>Auf ihrer Reise durch Italien führte der Weg Andreas und Armando in das malerische Küstenstädtchen Tropea in Kalabrien. Dort entdeckten sie eine charmante Pizzeria mit Blick auf das tiefblaue Meer, geführt von dem freundlichen Pizzaiolo Giuseppe. Er zeigte ihnen, wie man den Teig mit einer Prise Meersalz verfeinert und mit frischen Zutaten wie roten Zwiebeln aus Tropea und scharfem 'Nduja belegt. Am Abend, während sie den Sonnenuntergang über dem Tyrrhenischen Meer genossen, teilten sie eine Pizza, die die Aromen der Region perfekt einfing. Diese besondere Erfahrung inspirierte sie, mit Pizza Bacio die Essenz Tropeas in jede ihrer Pizzen zu bringen.</p>
          </div>
          <div id="zubereitung7" class="tabcontent mt-3">
            <div class="col-md-12 d-flex">
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">1</p>
                </div>
                <div>
                  <h3>Antauen</h3>
                  <p>Die Pizza auspacken und richtig gut antauen lassen. Für ein optimales Ergebnis mindestens 20 Minuten.</p>
                </div>
              </div>
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">2</p>
                </div>
                <div>
                  <h3>Vorheizen</h3>
                  <p>Während des Auftauens den Ofen bei 250°C (Ober-/Unterhitze) voll vorheizen. Wenn der Ofen mehr hergibt: die Gradzahl gerne noch erhöhen.</p>
                </div>
              </div>
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">3</p>
                </div>
                <div>
                  <h3>Backen</h3>
                  <p>Die Pizza auf dem Rost, nicht dem Backblech, auf der mittleren Schiene in den Ofen schieben. Die Pizza ist fertig, wenn der Käse zerlaufen und der Rand goldbraun ist.</p>
                </div>
              </div>
              <div class="col-md-3 ps-3 tipps">
                <h3>Tipps</h3>
                <p>Bitte immer nur eine einzelne Pizza. Aufgrund der hohen Gradzahl kein Backpapier verwenden. Dann die Pizza zirka 6-10 Minuten backen.</p>
              </div>
            </div>
          </div>
          <div id="naehrwerte7" class="tabcontent naehrwerte">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">durchschnittliche Nährwerte</th>
                  <th scope="col">pro 100g</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Brennwert</td>
                  <td>1.371,21kJ / 327,88kcal</td>
                </tr>
                <tr>
                  <td>Fett<br>davon gesättigte Fettsäuren</td>
                  <td>8,42<br>3,25</td>
                </tr>
                <tr>
                  <td>Kohlenhydrate<br>davon Zucker</td>
                  <td>23,49<br>5,61</td>
                </tr>
                <tr>
                  <td>Eiweiß</td>
                  <td>26,21</td>
                </tr>
                <tr>
                  <td>Salz</td>
                  <td>2,63</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-12 accordion-infos mt-4">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Geschichte
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
              <p>Auf ihrer Reise durch Italien führte der Weg Andreas und Armando in das malerische Küstenstädtchen Tropea in Kalabrien. Dort entdeckten sie eine charmante Pizzeria mit Blick auf das tiefblaue Meer, geführt von dem freundlichen Pizzaiolo Giuseppe. Er zeigte ihnen, wie man den Teig mit einer Prise Meersalz verfeinert und mit frischen Zutaten wie roten Zwiebeln aus Tropea und scharfem 'Nduja belegt. Am Abend, während sie den Sonnenuntergang über dem Tyrrhenischen Meer genossen, teilten sie eine Pizza, die die Aromen der Region perfekt einfing. Diese besondere Erfahrung inspirierte sie, mit Pizza Bacio die Essenz Tropeas in jede ihrer Pizzen zu bringen.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Zubereitung
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">1</p>
                      </div>
                      <div>
                        <h3>Antauen</h3>
                        <p>Die Pizza auspacken und richtig gut antauen lassen. Für ein optimales Ergebnis mindestens 20 Minuten.</p>
                      </div>
                    </div>
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">2</p>
                      </div>
                      <div>
                        <h3>Vorheizen</h3>
                        <p>Während des Auftauens den Ofen bei 250°C (Ober-/Unterhitze) voll vorheizen. Wenn der Ofen mehr hergibt: die Gradzahl gerne noch erhöhen.</p>
                      </div>
                    </div>
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">3</p>
                      </div>
                      <div>
                        <h3>Backen</h3>
                        <p>Die Pizza auf dem Rost, nicht dem Backblech, auf der mittleren Schiene in den Ofen schieben. Die Pizza ist fertig, wenn der Käse zerlaufen und der Rand goldbraun ist.</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3>Tipps</h3>
                      <p>Bitte immer nur eine einzelne Pizza – nicht zwei gleichzeitig. Aufgrund der hohen Gradzahl kein Backpapier verwenden. Dann die Pizza zirka 6-10 Minuten backen – somit deutlich kürzer als herkömmliche TK-Pizzen.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Nährwerte
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">durchschnittliche Nährwerte</th>
                      <th scope="col">pro 100g</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Brennwert</td>
                      <td>1.371,21kJ / 327,88kcal</td>
                    </tr>
                    <tr>
                      <td>Fett<br>davon gesättigte Fettsäuren</td>
                      <td>8,42<br>3,25</td>
                    </tr>
                    <tr>
                      <td>Kohlenhydrate<br>davon Zucker</td>
                      <td>23,49<br>5,61</td>
                    </tr>
                    <tr>
                      <td>Eiweiß</td>
                      <td>26,21</td>
                    </tr>
                    <tr>
                      <td>Salz</td>
                      <td>2,63</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</dialog>

<dialog id="dialog-salame-piccante">
  <div class="container">
    <div class="row">
      <div class="close col-md-12 d-flex justify-content-end">
          <i class="fas fa-times close-salame-piccante"></i>
      </div>
      <div class="col-md-5">
      <img src="images/bacio-pizza-salame-piccante.jpg" alt="Bacio Pizza Salame Piccante" title="Bacio Pizza Salame Piccante" class="img-fluid">
      </div>
      <div class="col-md-7 ps-5">
      <h2 class="mt-4">Pizza Salame Piccante</h2>
      <p>Für diejenigen, die es gerne scharf mögen, bietet diese Pizza eine feurige Mischung aus scharfer Salami und Chili-Peperoni. Die Tomatensauce und der Mozzarella balancieren die Schärfe und sorgen für ein intensives und aufregendes Geschmackserlebnis.</p>
      <h3>das erwartet dich bei der Pizza Salame Piccante</h3>
        <p>Tomatensauce, Mozzarella, scharfe Salami, Peperoni (Chili)</p>
        <a href="pizza.php"><button class="button-dark mt-3">jetzt bestellen <i class="fa-solid fa-angle-right"></i></button></a>
      </div>
      <div class="tab-infos col-md-12 mt-5">
        <div class="tab">
          <button class="tablinks" onclick="openInfo(event, 'geschichte8')">Geschichte</button>
          <button class="tablinks" onclick="openInfo(event, 'zubereitung8')" id="defaultOpen">Zubereitung</button>
          <button class="tablinks" onclick="openInfo(event, 'naehrwerte8')">Nährwerte</button>
        </div>
        <div class="d-flex">
          <div id="geschichte8" class="tabcontent mt-3 story">
          <p>Auf ihrer Reise durch Italien machten Andreas und Armando Halt in der romantischen Stadt Venedig. In einer kleinen, versteckten Pizzeria am Kanal fanden sie den erfahrenen Pizzaiolo Carlo, der sie in die Geheimnisse der venezianischen Pizza einweihte. Sie lernten, den Teig hauchdünn zu rollen und mit frischen Meeresfrüchten und Kräutern zu belegen. Am Abend, während sie in einer Gondel über die Kanäle glitten und die beleuchtete Rialtobrücke bewunderten, genossen sie eine köstliche Pizza, die nach Meer und Tradition schmeckte. Diese magische Erfahrung inspirierte sie, mit Pizza Bacio die Einzigartigkeit und den Zauber Venedigs in jede Pizza zu bringen.</p>
          </div>
          <div id="zubereitung8" class="tabcontent mt-3">
            <div class="col-md-12 d-flex">
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">1</p>
                </div>
                <div>
                  <h3>Antauen</h3>
                  <p>Die Pizza auspacken und richtig gut antauen lassen. Für ein optimales Ergebnis mindestens 20 Minuten.</p>
                </div>
              </div>
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">2</p>
                </div>
                <div>
                  <h3>Vorheizen</h3>
                  <p>Während des Auftauens den Ofen bei 250°C (Ober-/Unterhitze) voll vorheizen. Wenn der Ofen mehr hergibt: die Gradzahl gerne noch erhöhen.</p>
                </div>
              </div>
              <div class="col-md-3 number-container">
                <div class="d-flex align-items-center">
                  <p class="number-zubereitung">3</p>
                </div>
                <div>
                  <h3>Backen</h3>
                  <p>Die Pizza auf dem Rost, nicht dem Backblech, auf der mittleren Schiene in den Ofen schieben. Die Pizza ist fertig, wenn der Käse zerlaufen und der Rand goldbraun ist.</p>
                </div>
              </div>
              <div class="col-md-3 ps-3 tipps">
                <h3>Tipps</h3>
                <p>Bitte immer nur eine einzelne Pizza. Aufgrund der hohen Gradzahl kein Backpapier verwenden. Dann die Pizza zirka 6-10 Minuten backen.</p>
              </div>
            </div>
          </div>
          <div id="naehrwerte8" class="tabcontent naehrwerte">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">durchschnittliche Nährwerte</th>
                  <th scope="col">pro 100g</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Brennwert</td>
                  <td>1.371,21kJ / 327,88kcal</td>
                </tr>
                <tr>
                  <td>Fett<br>davon gesättigte Fettsäuren</td>
                  <td>8,42<br>3,25</td>
                </tr>
                <tr>
                  <td>Kohlenhydrate<br>davon Zucker</td>
                  <td>23,49<br>5,61</td>
                </tr>
                <tr>
                  <td>Eiweiß</td>
                  <td>26,21</td>
                </tr>
                <tr>
                  <td>Salz</td>
                  <td>2,63</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-12 accordion-infos mt-4">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Geschichte
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
              <p>Auf ihrer Reise durch Italien machten Andreas und Armando Halt in der romantischen Stadt Venedig. In einer kleinen, versteckten Pizzeria am Kanal fanden sie den erfahrenen Pizzaiolo Carlo, der sie in die Geheimnisse der venezianischen Pizza einweihte. Sie lernten, den Teig hauchdünn zu rollen und mit frischen Meeresfrüchten und Kräutern zu belegen. Am Abend, während sie in einer Gondel über die Kanäle glitten und die beleuchtete Rialtobrücke bewunderten, genossen sie eine köstliche Pizza, die nach Meer und Tradition schmeckte. Diese magische Erfahrung inspirierte sie, mit Pizza Bacio die Einzigartigkeit und den Zauber Venedigs in jede Pizza zu bringen.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Zubereitung
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">1</p>
                      </div>
                      <div>
                        <h3>Antauen</h3>
                        <p>Die Pizza auspacken und richtig gut antauen lassen. Für ein optimales Ergebnis mindestens 20 Minuten.</p>
                      </div>
                    </div>
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">2</p>
                      </div>
                      <div>
                        <h3>Vorheizen</h3>
                        <p>Während des Auftauens den Ofen bei 250°C (Ober-/Unterhitze) voll vorheizen. Wenn der Ofen mehr hergibt: die Gradzahl gerne noch erhöhen.</p>
                      </div>
                    </div>
                    <div class="col-md-6 number-box">
                      <div class="d-flex align-items-center">
                        <p class="number">3</p>
                      </div>
                      <div>
                        <h3>Backen</h3>
                        <p>Die Pizza auf dem Rost, nicht dem Backblech, auf der mittleren Schiene in den Ofen schieben. Die Pizza ist fertig, wenn der Käse zerlaufen und der Rand goldbraun ist.</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3>Tipps</h3>
                      <p>Bitte immer nur eine einzelne Pizza – nicht zwei gleichzeitig. Aufgrund der hohen Gradzahl kein Backpapier verwenden. Dann die Pizza zirka 6-10 Minuten backen – somit deutlich kürzer als herkömmliche TK-Pizzen.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Nährwerte
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">durchschnittliche Nährwerte</th>
                      <th scope="col">pro 100g</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Brennwert</td>
                      <td>1.371,21kJ / 327,88kcal</td>
                    </tr>
                    <tr>
                      <td>Fett<br>davon gesättigte Fettsäuren</td>
                      <td>8,42<br>3,25</td>
                    </tr>
                    <tr>
                      <td>Kohlenhydrate<br>davon Zucker</td>
                      <td>23,49<br>5,61</td>
                    </tr>
                    <tr>
                      <td>Eiweiß</td>
                      <td>26,21</td>
                    </tr>
                    <tr>
                      <td>Salz</td>
                      <td>2,63</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</dialog>