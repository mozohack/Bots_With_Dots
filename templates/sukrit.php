<!DOCTYPE html>
<html>
<body>

<h1>Doctogram</h1>




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
<form action="/acceptor" method="POST">
<label for="symptom1">Symptom 1</label> 
<select id="Symptom_1" name="Symptom1">
            <option disabled selected value> -- Select a symptom -- </option>
            {% for client in data %}
            <option value="{{client}}">{{client}}</option>
            {% endfor %}
        </select>

<br>



<label for="symptom2">Symptom 2</label> 
<select id="Symptom_2" name="Symptom2">
            <option disabled selected value> -- Select a symptom -- </option>
            {% for client in data %}
            <option value="{{client}}">{{client}}</option>
            {% endfor %}
        </select>
<br>

<label for="symptom3">Symptom 3</label> 
<select id="Symptom_3" name="Symptom3">
            <option disabled selected value> -- Select a symptom --</option>
            {% for client in data %}
            <option value="{{client}}">{{client}}</option>
            {% endfor %}
        </select>
<br>

<label for="symptom4">Symptom 4</label> 
<select id="Symptom_4" name="Symptom4">
            <option disabled selected value>  -- Select a symptom -- </option>
            {% for client in data %}
            <option value="{{client}}">{{client}}</option>
            {% endfor %}
        </select>
<br>

<label for="symptom5">Symptom 5</label> 
<select id="Symptom_5" name="Symptom5">
            <option disabled selected value> -- Select a symptom -- </option>
            {% for client in data %}
            <option value="{{client}}">{{client}}</option>
            {% endfor %}
        </select>
<br>

<!-- <input type="radio" name="ss" id="ss" value="Hello">Hello

<br> -->

<input type="submit" name="submitButton" id="submitButton">

</form>

Your output for decision tree is <b>{{ randomText }}</b>

</body>
</html>