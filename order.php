<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <title>Five Guys</title>
  </head>
  <body>
    <section id="overlay">
      <img src="http://akns-images.eonline.com/eol_images/Entire_Site/2013728/rs_560x415-130828153928-560.fiveguys-logo.cm.82813.jpg" alt="Five Guys Logo" id="logo">
      <hr>
      <form action="submission.php" method="GET">
				<h1>Create a burger!</h1>
        <section class="protein">
          <label for="patty">What type of protein would you like?</label>
    			<input type="text" name="patty" id="patty">
        </section>
        <hr>
        
        <section class="patties">
          <label for="amount">How many patties would you like?</label>
          <input type="number" name="amount" id="amount">
        </section>
        <hr>
        
        <section class="cooked">
          <label for="doneness">How do you want your patty cooked</label>
          <br>
          <span>Rare</span>
          <input type="range" name="doneness" id="doneness" value="3" min="1" max="5">
          <span>Well-Done</span>
        </section>
        <hr>
        
        <section class="toppings">
          <span>What toppings would you like?</span>
          <br>
          <input type="checkbox" name="topping" id="mayo" value="mayo">
          <label for="mayo">Mayo</label>
          <input type="checkbox" name="topping" id="lettuce" value="lettuce">
          <label for="lettuce">Lettuce</label>
          <input type="checkbox" name="topping" id="pickle" value="pickle">
          <label for="pickle">Pickle</label>
          <input type="checkbox" name="topping" id="tomato" value="tomato">
          <label for="tomato">Tomato</label>
          <input type="checkbox" name="topping" id="onion" value="onion">
          <label for="onion">Onion</label>
          <input type="checkbox" name="topping" id="relish" value="relish">
          <label for="relish">Relish</label>
          <input type="checkbox" name="topping" id="grilled onion" value="grilled onion">
          <label for="grilled onion">Grilled Onion</label>
          <input type="checkbox" name="topping" id="mushroom" value="mushroom">
          <label for="mushroom">Mushroom</label>
          <input type="checkbox" name="topping" id="green pepper" value="green pepper">
          <label for="green pepper">Green Pepper</label>
          <input type="checkbox" name="topping" id="jalapeno" value="jalapeno">
          <label for="jalapeno">Jalapeno</label>
          <input type="checkbox" name="topping" id="hot sauce" value="hot sauce">
          <label for="hot sauce">Hot Sauce</label>
          <input type="checkbox" name="topping" id="barbeque sauce" value="barbeque sauce">         
          <label for="barbeque sauce">Barbeque Sauce</label>
          <input type="checkbox" name="topping" id="a1 sauce" value="a1 sauce">
          <label for="a1 sauce">A1 Sauce</label>
        </section>
        <hr>
        
        <section class="cheesy">
          <span>Would you like to add cheese?</span>
          <br>
          <input type="radio" name="cheese" id="yes" value="yes">
          <label for="yes">Yes</label>
          <input type="radio" name="cheese" id="no" value="yes">
          <label for="no">No</label>
        </section>
        <hr>
       
        <section class="bun-type">
          <label for="bun">What type of bun would you like?</label>
          <select name="bun" id="bun">
            <option value="sesame">Sesame</option>
            <option value="potatoe">Potato</option>
            <option value="pretzel">Pretzel</option>
          </select>
        </section>
        <hr>
        
        <section class="sauce-selection">
          <label for="sauce">What type of sauce would you like?</label>
          <input list="sauces" id="sauce" name="sauce">
          <datalist id="sauces">
            <option value="ketchup"></option>
            <option value="mayo"></option>
            <option value="mustard"></option>
          </datalist>
        </section>
        <hr>
        <section class="extra-info">
          <label for="extra">Anything else you want to add?</label>
          <br>
          <textarea id="extra" name="extra" rows="3" cols="40"></textarea>
        </section>
        <hr>

        <section class="submission">
          <input type="submit" value="Submit">
        </section>
      </form>
    </section>
    <div id="app"></div>
    <script src="./bundle.js"></script>
  </body>
</html>
