<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Doctogram | Smart Disease Prediction</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	
  <link href="{{ url_for('static', filename='img/ic.png') }}">
	
	<link href="{{ url_for('static', filename='css/main.css') }}" />
  <link href="{{ url_for('static', filename='css/bootstrap.min.css') }}"/>
	<link href="{{ url_for('static', filename='css/font-awesome-4.5.0/css/font-awesome.min.css') }}" />
  <link href="{{ url_for('static', filename='css/home.css') }}" />
	
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- <script src="particlejs.js"></script> -->
  <script src="{{ url_for('static', filename='js/particlejs.js') }}"></script>
	<style>
		body{
		background-color:#33cccc;
		}

    .bg-dark {
    background-color: #343a40!important;
}
.navbar {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    /* padding: .5rem 1rem; */
}

.brand-tit {
    color: white;
    margin-left: 10px;
    display: inline-block;
}

.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
   
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.center {
  text-align: center;
  list-style-position: inside;
}
		
		.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #ff6666;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 8px;
  width: 140px;
  transition: all 0.5s;
  cursor: pointer;
  margin-top: 45px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

#webcoderskull{
    position:absolute;
    left: 0;
    top: 16%;
    padding: 0 20px;
    width: 100%;
    text-align: center;
}

canvas{
    height:100vh;
    background-color:#99ccff;
}
#webcoderskull h1{
  letter-spacing: 5px;
  font-size: 5rem;
  font-family: 'Roboto', sans-serif;
  text-transform: uppercase;
  font-weight: bold;
}
	</style>
</head>
<body>
<?php
$list=array('back_pain','constipation','abdominal_pain','diarrhoea','mild_fever','yellow_urine',
    'yellowing_of_eyes','acute_liver_failure','fluid_overload','swelling_of_stomach',
    'swelled_lymph_nodes','malaise','blurred_and_distorted_vision','phlegm','throat_irritation',
    'redness_of_eyes','sinus_pressure','runny_nose','congestion','chest_pain','weakness_in_limbs',
    'fast_heart_rate','pain_during_bowel_movements','pain_in_anal_region','bloody_stool',
    'irritation_in_anus','neck_pain','dizziness','cramps','bruising','obesity','swollen_legs',
    'swollen_blood_vessels','puffy_face_and_eyes','enlarged_thyroid','brittle_nails',
    'swollen_extremeties','excessive_hunger','extra_marital_contacts','drying_and_tingling_lips',
    'slurred_speech','knee_pain','hip_joint_pain','muscle_weakness','stiff_neck','swelling_joints',
    'movement_stiffness','spinning_movements','loss_of_balance','unsteadiness',
    'weakness_of_one_body_side','loss_of_smell','bladder_discomfort','foul_smell_of urine',
    'continuous_feel_of_urine','passage_of_gases','internal_itching','toxic_look_(typhos)',
    'depression','irritability','muscle_pain','altered_sensorium','red_spots_over_body','belly_pain',
    'abnormal_menstruation','dischromic _patches','watering_from_eyes','increased_appetite','polyuria','family_history','mucoid_sputum',
    'rusty_sputum','lack_of_concentration','visual_disturbances','receiving_blood_transfusion',
    'receiving_unsterile_injections','coma','stomach_bleeding','distention_of_abdomen',
    'history_of_alcohol_consumption','fluid_overload','blood_in_sputum','prominent_veins_on_calf',
    'palpitations','painful_walking','pus_filled_pimples','blackheads','scurring','skin_peeling',
    'silver_like_dusting','small_dents_in_nails','inflammatory_nails','blister','red_sore_around_nose',
    'yellow_crust_ooze');
?>
<div style="position:sticky">
	<nav id="myNav" class="navbar navbar-dark bg-dark navbar-expand-sm">
		<div class="col-md-12">
			<a href="/"><img src= "{{ url_for('static', filename='img/doctor-logo.jpg') }}" class="navbar-brand mr-0" width="37px" alt="Logo" /></a>

			<h4 class="brand-tit" style="align:center">Doctogram</h4>
		</div>

		<div class="col-md-10">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarMain">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navBarMain">
				
			</div>
		</div>
	</nav>
<div id="particles">
  <div id="webcoderskull" >
<center>
            <h2 style="color:#000;font-size: 4.5vw; font-family: Times New Roman, Times, serif;">Doctogram Disease Predictor</h2>
			<br>
            <h2 class="tagline container" style="color:#000; font-family: Times New Roman, Times, serif;">Please help Doctogram predict your disease, by providing your symptoms...</h2>
            <br>
</center>
<div style="margin-top:40px">
<center>

<form action="/acceptor" method="POST">

<div id="symp1" style="display:inline-block;">
<label for="symptom1"><b>Symptom 1</b></label> 
<select id="Symptom_1" name="Symptom1">
            <option disabled selected value> -- Select a symptom -- </option>
            {% for client in data %}
            <option value="{{client}}">{{client}}</option>
            {% endfor %}
        </select>
</div>



<div id="symp2" style="display:inline-block; padding-left:30px">
<label for="symptom2"><b>Symptom 2</b></label> 
<select id="Symptom_2" name="Symptom2">
            <option disabled selected value> -- Select a symptom -- </option>
            {% for client in data %}
            <option value="{{client}}">{{client}}</option>
            {% endfor %}
        </select>
</div>


<div id="symp3" style="display:inline-block; padding-left:30px">
<label for="symptom3"><b>Symptom 3</b></label> 
<select id="Symptom_3" name="Symptom3">
            <option disabled selected value> -- Select a symptom --</option>
            {% for client in data %}
            <option value="{{client}}">{{client}}</option>
            {% endfor %}
        </select>
		
</div>



<div id="symp4" style="display:inline-block; padding-left:30px">
<label for="symptom4"><b>Symptom 4</b></label> 
<select id="Symptom_4" name="Symptom4">
            <option disabled selected value>  -- Select a symptom -- </option>
            {% for client in data %}
            <option value="{{client}}">{{client}}</option>
            {% endfor %}
        </select>
		
</div>



<div id="symp5" style="display:inline-block; padding-top:40px">
<label for="symptom5"><b>Symptom 5</b></label> 
<select id="Symptom_5" name="Symptom5">
            <option disabled selected value> -- Select a symptom -- </option>
            {% for client in data %}
            <option value="{{client}}">{{client}}</option>
            {% endfor %}
        </select>
</div>		


<p>
<button type="submit" class="button" style="vertical-align:middle"><span>Submit</span></button></a>
</div></div></div></div>

</center>
</form>
</div>
<br>

<center>
<div id="pred1">



<h2><b><u>{{sometext}}<br></b></u></h2>
<ol class="center">{% for i in requestData %}<h3><li>
{{i}}</li></h3>
{% endfor %}</b><br></ol>


<!-- <b>{{ randomText }}</b><br>
<b>{{ randomText2 }}</b><br> -->
<!-- {{randomText3}} -->

{% if (disease1!=disease2) and (randomText6) %}

<h2><u><b>{{ randomText }}</b><a href="{{randomText5}}" target="_blank"></u>     (Know More...)</a><br></h2>
<h2><u><b>{{ randomText2 }}</b><a href="{{randomText6}}" target="_blank"></u>    (Know More...)</a><br><br></h2>

<br><h3>{{randomText3}}</h3></br>

{% endif %}


{% if (disease1==disease2) and (randomText5) %}
<h2><u><b>{{ randomText9 }}</b><a href="{{randomText5}}" target="_blank"></u>    (Know More...)</a><br></h2>

{% endif %}
</div>
</center>
<center>
  
  <button type="submit" onClick="window.location='/map'" class="button" style="vertical-align:middle; width:260px"><span>View Hospitals Near You</span></button></a>
</center>

<br>
<script "{{ url_for('static', filename='js/script.js') }}"></script>

<script "{{ url_for('static', filename='js/particles.min.js') }}"></script>

<script "{{ url_for('static', filename='js/app.js') }}"></script>

<script "{{ url_for('static', filename='js/typed.min.js') }}"></script>
</body>
</html>
