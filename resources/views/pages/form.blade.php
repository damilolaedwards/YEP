<!DOCTYPE html>
<html>
<head>
    <title>
      Youth Empowered Nigeria 2017
   
    </title>
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
 <body >
        
 <div class="container " style="margin-bottom:30px;">
    
         <div class="row">
             <img  src="css/images/yep.jpeg" class="img-responsive" width="100%" alt="banner" height="20px;"> </div>
<br>
     <div class="row">
         <div class=" col-sm-12 ">
      <div class="well">
          <div id="justify">
    
<p>Youth Empowered Nigeria is a programme designed to support young Nigerian graduates and undergraduates to build life skills, business skills and long-lasting networks to transition to meaningful employment or to start a business. The goal is to empower them with the skills needed to succeed in the workplace and business environment. Lagos, Kano and Port Harcourt will host the live workshops in 2017. 
Please fill out the #YEP2017 registration form below:

</p></div>
  </div></div>
     </div>
     <div class="form-bg">
    <div class="container">
        <div class="row">
        
            <div class="col-md-offset-2 col-md-8">
            
                <form class="form-horizontal" name="details" method="POST" action="{{url('/')}}">
                    <div class="form-group {{ $errors->has('name') ?  ' has-error' : '' }}">
                        <label class="col-sm-3 control-label" for="name">Name</label>
                        <div class="col-sm-9">
                            <input class="form-control" name="name" id="username" placeholder="Name" type="text" value="{{ Request::old('name') ?: ''}}"  required>
                            @if($errors->has('name'))
              <span class="help-block">{{$errors->first('name')}}</span>
            @endif
                        </div>
                        
                    </div>
                    <hr>
                    <div class="form-group {{ $errors->has('age') ?  ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Age Range</label>
                        <div class="col-sm-9">
                            <div class="row">

                            {{-- start edits --}}

                            <div class="col-sm-4">
                                    <input value="below 18 years" name="age" class="radio-inline"  type="radio">
                                    <label for="checkbox-1" class="checkbox-custom-label">Below 18 years</label>
                                </div>
                                <div class="col-sm-4">
                                    <input value="18–20 years" name="age" class="radio-inline"  type="radio">
                                    <label for="checkbox-1" class="checkbox-custom-label">18 – 20 years </label>
                                </div>

                                {{-- end edit --}}

                                <div class="col-sm-4">
                                    <input value="20-25 years" name="age" class="radio-inline"  type="radio">
                                    <label for="checkbox-2" class="checkbox-custom-label">20-25 years </label>
                                </div>
 
 
                                <div class="col-sm-4">
                                    <input value="26-30 years" name="age" class="radio-inline"  type="radio">
                                    <label for="checkbox-2" class="checkbox-custom-label">26-30 years </label>
                                </div>
 
                                <div class="col-sm-4">
                                    <input value="30–35 years" name="age" class="radio-inline"  type="radio">
                                    <label for="checkbox-3" class="checkbox-custom-label">30–35 years</label>
                                </div>
 
                                <div class="col-sm-4">
                                    <input value="above 35 years" name="age" class="radio-inline"  type="radio">
                                    <label for="checkbox-4" class="checkbox-custom-label">Above 35 years</label>
                                </div>
                                
                            </div>
                             @if($errors->has('age'))
              <span class="help-block">{{$errors->first('age')}}</span>
            @endif
                        </div>
                       
                    </div>
                    <hr>
                <div class="form-group {{ $errors->has('email') ?  ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input class="form-control" name="email" placeholder="Must be a valid mail" type="email" value="{{ Request::old('email') ?: ''}}"  required>
                             @if($errors->has('email'))
              <span class="help-block">{{$errors->first('email')}}</span>
            @endif
                        </div>
                       
                    </div>
                    <hr>
                    <div class="form-group {{ $errors->has('phone') ?  ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Phone</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="{{ Request::old('phone') ?: ''}}" name="phone" placeholder="Type a valid phone number" type="text"  required>
                             @if($errors->has('phone'))
              <span class="help-block">{{$errors->first('phone')}}</span>
            @endif
                        </div>
                       
                    </div>
                    <hr>
                    <div class="form-group {{ $errors->has('gender') ?  ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Gender</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-4 col-xs-12">
                                    <input value="Male" class="radio-inline" name="gender" type="radio">
                                    <label for="checkbox-1" class="checkbox-custom-label">Male</label>
                                </div>
 
                                <div class="col-sm-4 col-xs-12">
                                    <input value="Female" class="radio-inline" name="gender" type="radio">
                                    <label for="checkbox-2" class="checkbox-custom-label">Female</label>
                                </div>
 
                                
                            </div>
                             @if($errors->has('gender'))
              <span class="help-block">{{$errors->first('gender')}}</span>
            @endif
                        </div>
                        
                    </div>
                    
                    <hr>
                    <div class="form-group {{ $errors->has('state') ?  ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">State of residence</label>
                        <div class="col-sm-9">
                            <select class="form-control"  type="text" name="state[]" id="state">
                                <option value="Lagos">Lagos</option>
                                 <option value="Kano">Kano</option>
                                 <option value="Port Harcourt">Port Harcourt</option>
                                 <option value="">Others</option>>
                            </select>
                            @if($errors->has('state'))
              <span class="help-block">{{$errors->first('state')}}</span>
            @endif
                        </div>
                         
                    </div>
                    <div id="fillstate" class="form-group {{ $errors->has('state') ?  ' has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="state">Fill in your State</label>
                        <div class="col-sm-9">
                            <input class="form-control" name="state[]" id="state" placeholder="Your State" type="text">
                             @if($errors->has('state'))
              <span class="help-block">{{$errors->first('state')}}</span>
            @endif
                        </div>
                       
                    </div>
                    <hr>
                    <div class="form-group {{ $errors->has('academic') ?  ' has-error' : '' }}">
                        <label class="col-sm-7 control-label">Academic Status</label>
                        <div class="col-sm-5">
                            <select class="form-control" name="academic"  id="academic">
                                <option value="Undergraduate">Under-graduate</option>
                                 <option value="Graduate">Graduate</option>
                            </select>
                             @if($errors->has('academic'))
              <span class="help-block">{{$errors->first('academic')}}</span>
            @endif
                        </div>
                       
                    </div>
                    <hr>
                   
                    <div id="institution" class="form-group undergraduate {{ $errors->has('institution') ?  ' has-error' : '' }}">
                        <label class="col-sm-7  control-label">Institution of learning (FOR UNDERGRADUATES ONLY)</label>
                        <div class="col-sm-5">
                           <select class="form-control" name="institution[]"  >
                                <option value=""> Select Institution</option>
            <option value="Abdu Gusau Polytechnic">Abdu Gusau Polytechnic</option>
                             
             <option value="Abia State Polytechnic">Abia State Polytechnic</option>
                             
             <option value="Abia State University">Abia State University</option>
                             
             <option value="Abraham Adesanya Polytechnic">Abraham Adesanya Polytechnic</option>
                             
             <option value="Abubakar Tafewa Belewa University">Abubakar Tafewa Belewa University</option>
                             
             <option value="Abubakar Tatari Ali Polytechnic">Abubakar Tatari Ali Polytechnic</option>
                             
             <option value="Achievers University">Achievers University</option>
                             
             <option value="Adamawa State College of Agriculture">Adamawa State College of Agriculture</option>
                             
             <option value="Adamawa State College of Education">Adamawa State College of Education</option>
                             
             <option value="Adamawa State Polytechnic">Adamawa State Polytechnic</option>
                             
             <option value="Adamawa State University">Adamawa State University</option>
                             
             <option value="Adamu Augie College of Education">Adamu Augie College of Education</option>
                             
             <option value="Adekunle Ajasin University">Adekunle Ajasin University</option>
                             
             <option value="Adeleke University">Adeleke University</option>
                             
             <option value="Adenirian Ogunsanya College of Education">Adenirian Ogunsanya College of Education</option>
                             
             <option value="Adeyemi College of Education">Adeyemi College of Education</option>
                             
             <option value="Afe Babalola University">Afe Babalola University</option>
                             
             <option value="African Thinkers Community of Inquiry">African Thinkers Community of Inquiry</option>
                             
             <option value="African University of Science and Technology">African University of Science and Technology</option>
                             
             <option value="Ahmadu Bello University">Ahmadu Bello University</option>
                             
             <option value="Ajayi Crowther University">Ajayi Crowther University</option>
                             
             <option value="Akanu Ibiam Federal Polytechnic">Akanu Ibiam Federal Polytechnic</option>
                             
             <option value="Akperan Orshi College of Agriculture">Akperan Orshi College of Agriculture</option>
                             
             <option value="Akwa Ibom State College of Arts and Science">Akwa Ibom State College of Arts and Science</option>
                             
             <option value="Akwa Ibom State College of Education">Akwa Ibom State College of Education</option>
                             
             <option value="Akwa Ibom State Polytechnic">Akwa Ibom State Polytechnic</option>
                             
             <option value="Akwa Ibom State University">Akwa Ibom State University</option>
                             
             <option value="Al-Hikmah University">Al-Hikmah University</option>
                             
             <option value="Al-Qalam University">Al-Qalam University</option>
                             
             <option value="Allover Central Polytechnic">Allover Central Polytechnic</option>
                             
             <option value="Alvan Ikoku College of of Education">Alvan Ikoku College of of Education</option>
                             
             <option value="Ambrose Alli University">Ambrose Alli University</option>
                             
             <option value="American University of Nigeria">American University of Nigeria</option>
                             
             <option value="Anambra State College of Agriculture">Anambra State College of Agriculture</option>
                             
             <option value="Anambra State School of Health Technology">Anambra State School of Health Technology</option>
                             
             <option value="Anambra State University">Anambra State University</option>
                             
             <option value="Ansar-Ud-Deen College of Education">Ansar-Ud-Deen College of Education</option>
                             
             <option value="Auchi Polytechnic">Auchi Polytechnic</option>
                             
             <option value="Audu Bako School of Agriculture">Audu Bako School of Agriculture</option>
                             
             <option value="Augustine University">Augustine University</option>
                             
             <option value="Babcock University">Babcock University</option>
                             
             <option value="Bauchi Institute of Arabic and Islamic Studies">Bauchi Institute of Arabic and Islamic Studies</option>
                             
             <option value="Bauchi State School of Health Technology">Bauchi State School of Health Technology</option>
                             
             <option value="Bauchi State University">Bauchi State University</option>
                             
             <option value="Bayero University">Bayero University</option>
                             
             <option value="Baze University">Baze University</option>
                             
             <option value="Bells University of Technology">Bells University of Technology</option>
                             
             <option value="Benson Idahosa University">Benson Idahosa University</option>
                             
             <option value="Benue State Polytechnic">Benue State Polytechnic</option>
                             
             <option value="Benue State University">Benue State University</option>
                             
             <option value="Bingham University">Bingham University</option>
                             
             <option value="Bowen University">Bowen University</option>
                             
             <option value="CETEP City University">CETEP City University</option>
                             
             <option value="Caleb University">Caleb University</option>
                             
             <option value="Caritas University">Caritas University</option>
                             
             <option value="Christland University">Christland University</option>
                             
             <option value="Christopher University">Christopher University</option>
                             
             <option value="City College of Education Mararaba">City College of Education Mararaba</option>
                             
             <option value="College of Administration and Business Studies Konduga">College of Administration and Business Studies Konduga</option>
                             
             <option value="College of Administration and Business Studies Potiskum">College of Administration and Business Studies Potiskum</option>
                             
             <option value="College of Agriculture (DAC) Kabba">College of Agriculture (DAC) Kabba</option>
                             
             <option value="College of Agriculture Jalingo">College of Agriculture Jalingo</option>
                             
             <option value="College of Agriculture Lafia">College of Agriculture Lafia</option>
                             
             <option value="College of Agriculture Zuru">College of Agriculture Zuru</option>
                             
             <option value="College of Education Lafiagi">College of Education Lafiagi</option>
                             
             <option value="College of Education Arochukwu">College of Education Arochukwu</option>
                             
             <option value="College of Education Azare">College of Education Azare</option>
                             
             <option value="College of Education Gindiri">College of Education Gindiri</option>
                             
             <option value="College of Education Ikere-Ekiti">College of Education Ikere-Ekiti</option>
                             
             <option value="College of Education Ila-Orangun">College of Education Ila-Orangun</option>
                             
             <option value="College of Education Jalingo">College of Education Jalingo</option>
                             
             <option value="College of Education Katsina-Ala">College of Education Katsina-Ala</option>
                             
             <option value="College of Education Offa">College of Education Offa</option>
                             
             <option value="College of Education Waka BIU">College of Education Waka BIU</option>
                             
             <option value="College of Education Warri">College of Education Warri</option>
                             
             <option value="College of Education, Gashua">College of Education, Gashua</option>
                             
             <option value="College of Education Ekiadolor-Benin">College of Education Ekiadolor-Benin</option>
                             
             <option value="Corner Stone College of Education">Corner Stone College of Education</option>
                             
             <option value="Covenant Polytechnic">Covenant Polytechnic</option>
                             
             <option value="Covenant University">Covenant University</option>
                             
             <option value="Crawford University">Crawford University</option>
                             
             <option value="Crescent University">Crescent University</option>
                             
             <option value="Cross River State College of Education">Cross River State College of Education</option>
                             
             <option value="Cross River State University of Technology">Cross River State University of Technology</option>
                             
             <option value="Crown Polytechnic">Crown Polytechnic</option>
                             
             <option value="Delar College of Education">Delar College of Education</option>
                             
             <option value="Delta State College of Education">Delta State College of Education</option>
                             
             <option value="Delta State College of Physical Education">Delta State College of Physical Education</option>
                             
             <option value="Delta State Polytechnic Otefe-Ogharra">Delta State Polytechnic Otefe-Ogharra</option>
                             
             <option value="Delta State Polytechnic Ozoro">Delta State Polytechnic Ozoro</option>
                             
             <option value="Delta State Polytechnic Ugwashi-Uku">Delta State Polytechnic Ugwashi-Uku</option>
                             
             <option value="Delta State University">Delta State University</option>
                             
             <option value="Digital Bridge Institute">Digital Bridge Institute</option>
                             
             <option value="Dorben Polytechnic">Dorben Polytechnic</option>
                             
             <option value="Eastern Palm University">Eastern Palm University</option>
                             
             <option value="Ebonyi State College of Education">Ebonyi State College of Education</option>
                             
             <option value="Ebonyi State University">Ebonyi State University</option>
                             
             <option value="Edo State College of Agriculture">Edo State College of Agriculture</option>
                             
             <option value="Edo State College of Agriculture">Edo State College of Agriculture</option>
                             
             <option value="Edo State College of Education">Edo State College of Education</option>
                             
             <option value="Edo State Institute of Management and Technology">Edo State Institute of Management and Technology</option>
                             
             <option value="Edo University">Edo University</option>
                             
             <option value="Edwin Clark University">Edwin Clark University</option>
                             
             <option value="Ekiti State University">Ekiti State University</option>
                             
             <option value="Elizade University">Elizade University</option>
                             
             <option value="Enugu State College of Education">Enugu State College of Education</option>
                             
             <option value="Enugu State University of Science and Technology">Enugu State University of Science and Technology</option>
                             
             <option value="Evangel University">Evangel University</option>
                             
             <option value="FCT College of Education Zuba">FCT College of Education Zuba</option>
                             
             <option value="Federal College of Agriculture Akure">Federal College of Agriculture Akure</option>
                             
             <option value="Federal College of Agriculture Dadinkowa">Federal College of Agriculture Dadinkowa</option>
                             
             <option value="Federal College of Agriculture Ibadan">Federal College of Agriculture Ibadan</option>
                             
             <option value="Federal College of Agriculture Ishiagu">Federal College of Agriculture Ishiagu</option>
                             
             <option value="Federal College of Animal Health and Production Technology Ibadan">Federal College of Animal Health and Production Technology Ibadan</option>
                             
             <option value="Federal College of Animal Health and Production Technology Vom">Federal College of Animal Health and Production Technology Vom</option>
                             
             <option value="Federal College of Chemical and Leather Technology Zaria">Federal College of Chemical and Leather Technology Zaria</option>
                             
             <option value="Federal College of Dental Technology Enugu">Federal College of Dental Technology Enugu</option>
                             
             <option value="Federal College of Education Oyo">Federal College of Education Oyo</option>
                             
             <option value="Federal College of Education Potiskum">Federal College of Education Potiskum</option>
                             
             <option value="Federal College of Education Asaba">Federal College of Education Asaba</option>
                             
             <option value="Federal College of Education Akoka">Federal College of Education Akoka</option>
                             
             <option value="Federal College of Education Bichi">Federal College of Education Bichi</option>
                             
             <option value="Federal College of Education Bissau">Federal College of Education Bissau</option>
                             
             <option value="Federal College of Education Gombe">Federal College of Education Gombe</option>
                             
             <option value="Federal College of Education Omoku">Federal College of Education Omoku</option>
                             
             <option value="Federal College of Education Umunze">Federal College of Education Umunze</option>
                             
             <option value="Federal College of Education Eha-Amufu">Federal College of Education Eha-Amufu</option>
                             
             <option value="Federal College of Education Kano">Federal College of Education Kano</option>
                             
             <option value="Federal College of Education Katsina">Federal College of Education Katsina</option>
                             
             <option value="Federal College of Education Kontagora">Federal College of Education Kontagora</option>
                             
             <option value="Federal College of Education Obudu">Federal College of Education Obudu</option>
                             
             <option value="Federal College of Education Okene">Federal College of Education Okene</option>
                             
             <option value="Federal College of Education Osiele">Federal College of Education Osiele</option>
                             
             <option value="Federal College of Education Pankshin">Federal College of Education Pankshin</option>
                             
             <option value="Federal College of Education Yola">Federal College of Education Yola</option>
                             
             <option value="Federal College of Education Zaria">Federal College of Education Zaria</option>
                             
             <option value="Federal College of Fisheries and Marine Technology">Federal College of Fisheries and Marine Technology</option>
                             
             <option value="Federal College of Forestry Ibadan">Federal College of Forestry Ibadan</option>
                             
             <option value="Federal College of Forestry Jos">Federal College of Forestry Jos</option>
                             
             <option value="Federal College of Forestry Mechanisation Afaka">Federal College of Forestry Mechanisation Afaka</option>
                             
             <option value="Federal College of Freshwater Fisheries Technology New Bussa">Federal College of Freshwater Fisheries Technology New Bussa</option>
                             
             <option value="Federal College of Land Resources Technology Kuru">Federal College of Land Resources Technology Kuru</option>
                             
             <option value="Federal College of Land Resources Technology Owerri">Federal College of Land Resources Technology Owerri</option>
                             
             <option value="Federal College of Statistics Enugu">Federal College of Statistics Enugu</option>
                             
             <option value="Federal College of Statistics Ibadan">Federal College of Statistics Ibadan</option>
                             
             <option value="Federal College of Statistics Kaduna">Federal College of Statistics Kaduna</option>
                             
             <option value="Federal College of Wildlife Management">Federal College of Wildlife Management</option>
                             
             <option value="Federal Cooperative College Ibadan">Federal Cooperative College Ibadan</option>
                             
             <option value="Federal Cooperative College Kaduna">Federal Cooperative College Kaduna</option>
                             
             <option value="Federal Cooperative College Oji River">Federal Cooperative College Oji River</option>
                             
             <option value="Federal Polytechnic Ado Ekiti">Federal Polytechnic Ado Ekiti</option>
                             
             <option value="Federal Polytechnic Bali">Federal Polytechnic Bali</option>
                             
             <option value="Federal Polytechnic Bauchi">Federal Polytechnic Bauchi</option>
                             
             <option value="Federal Polytechnic Bida">Federal Polytechnic Bida</option>
                             
             <option value="Federal Polytechnic Damaturu">Federal Polytechnic Damaturu</option>
                             
             <option value="Federal Polytechnic Ede">Federal Polytechnic Ede</option>
                             
             <option value="Federal Polytechnic Ekowe">Federal Polytechnic Ekowe</option>
                             
             <option value="Federal Polytechnic Idah">Federal Polytechnic Idah</option>
                             
             <option value="Federal Polytechnic Ilaro">Federal Polytechnic Ilaro</option>
                             
             <option value="Federal Polytechnic Kaura Namoda">Federal Polytechnic Kaura Namoda</option>
                             
             <option value="Federal Polytechnic Mubi">Federal Polytechnic Mubi</option>
                             
             <option value="Federal Polytechnic Nasarawa">Federal Polytechnic Nasarawa</option>
                             
             <option value="Federal Polytechnic Nekede">Federal Polytechnic Nekede</option>
                             
             <option value="Federal Polytechnic Offa">Federal Polytechnic Offa</option>
                             
             <option value="Federal Polytechnic Oko">Federal Polytechnic Oko</option>
                             
             <option value="Federal School of Survey Oyo">Federal School of Survey Oyo</option>
                             
             <option value="Federal Training Center Calabar">Federal Training Center Calabar</option>
                             
             <option value="Federal Training Center Enugu">Federal Training Center Enugu</option>
                             
             <option value="Federal Training Center Kaduna">Federal Training Center Kaduna</option>
                             
             <option value="Federal Training Center Maiduguri">Federal Training Center Maiduguri</option>
                             
             <option value="Federal University Birnin-Kebbi">Federal University Birnin-Kebbi</option>
                             
             <option value="Federal University Dutse">Federal University Dutse</option>
                             
             <option value="Federal University Dutsin-Ma">Federal University Dutsin-Ma</option>
                             
             <option value="Federal University Gashua">Federal University Gashua</option>
                             
             <option value="Federal University Gusau">Federal University Gusau</option>
                             
             <option value="Federal University Kashere">Federal University Kashere</option>
                             
             <option value="Federal University Lafia">Federal University Lafia</option>
                             
             <option value="Federal University Lokoja">Federal University Lokoja</option>
                             
             <option value="Federal University Ndufu-Alike">Federal University Ndufu-Alike</option>
                             
             <option value="Federal University Otuoke">Federal University Otuoke</option>
                             
             <option value="Federal University Oye-Ekiti">Federal University Oye-Ekiti</option>
                             
             <option value="Federal University Wukari">Federal University Wukari</option>
                             
             <option value="Federal University of Agriculture Abeokuta">Federal University of Agriculture Abeokuta</option>
                             
             <option value="Federal University of Agriculture Makurdi">Federal University of Agriculture Makurdi</option>
                             
             <option value="Federal University of Petroleum Resources Effurun">Federal University of Petroleum Resources Effurun</option>
                             
             <option value="Federal University of Technology Akure">Federal University of Technology Akure</option>
                             
             <option value="Federal University of Technology Minna">Federal University of Technology Minna</option>
                             
             <option value="Federal University of Technology Owerri">Federal University of Technology Owerri</option>
                             
             <option value="Fidei Polytechnic">Fidei Polytechnic</option>
                             
             <option value="Fountain University">Fountain University</option>
                             
             <option value="Godfrey Okoye University">Godfrey Okoye University</option>
                             
             <option value="Gombe State University">Gombe State University</option>
                             
             <option value="Grace Polytechnic">Grace Polytechnic</option>
                             
             <option value="Gregory University">Gregory University</option>
                             
             <option value="Hallmark University">Hallmark University</option>
                             
             <option value="Hassan Usman Katsina Polytechnic">Hassan Usman Katsina Polytechnic</option>
                             
             <option value="Havard Wilson College of Education">Havard Wilson College of Education</option>
                             
             <option value="Heritage Polytechnic">Heritage Polytechnic</option>
                             
             <option value="Hezekiah University">Hezekiah University</option>
                             
             <option value="Hussaini Adamu Federal Polytechnic">Hussaini Adamu Federal Polytechnic</option>
                             
             <option value="Ibrahim Babangida University">Ibrahim Babangida University</option>
                             
             <option value="Igbajo Polytechnic">Igbajo Polytechnic</option>
                             
             <option value="Igbinedion University">Igbinedion University</option>
                             
             <option value="Ignatius Ajuru University of Education">Ignatius Ajuru University of Education</option>
                             
             <option value="Imo State Polytechnic">Imo State Polytechnic</option>
                             
             <option value="Imo State School of Health Technology">Imo State School of Health Technology</option>
                             
             <option value="Imo State University">Imo State University</option>
                             
             <option value="Institute of Ecumenical Education (Thinkers Corner) Enugu">Institute of Ecumenical Education (Thinkers Corner) Enugu</option>
                             
             <option value="Institute of Management and Technology Enugu">Institute of Management and Technology Enugu</option>
                             
             <option value="Interlink Polytechnic">Interlink Polytechnic</option>
                             
             <option value="Isa Kaita College of Education Dutsin-Ma">Isa Kaita College of Education Dutsin-Ma</option>
                             
             <option value="Isaac Jasper Boro College of Education">Isaac Jasper Boro College of Education</option>
                             
             <option value="JamaAtu College of Education (JACE) Kaduna">JamaAtu College of Education (JACE) Kaduna</option>
                             
             <option value="Jigawa State College of Education">Jigawa State College of Education</option>
                             
             <option value="Jigawa State Collge of Agriculture">Jigawa State Collge of Agriculture</option>
                             
             <option value="Jigawa State Polytechnic">Jigawa State Polytechnic</option>
                             
             <option value="Joseph Ayo Babalola University">Joseph Ayo Babalola University</option>
                             
             <option value="Kaduna Polytechnic Kaduna">Kaduna Polytechnic Kaduna</option>
                             
             <option value="Kaduna State College of Education Gidan-Waya">Kaduna State College of Education Gidan-Waya</option>
                             
             <option value="Kaduna State University">Kaduna State University</option>
                             
             <option value="Kano State Polytechnic">Kano State Polytechnic</option>
                             
             <option value="Kano University of Science and Technology">Kano University of Science and Technology</option>
                             
             <option value="Kashim Ibrahim College of Education">Kashim Ibrahim College of Education</option>
                             
             <option value="Kebbi State University of Science and Technology">Kebbi State University of Science and Technology</option>
                             
             <option value="Kings Polytechnic">Kings Polytechnic</option>
                             
             <option value="Kings University">Kings University</option>
                             
             <option value="Kogi State College of Education">Kogi State College of Education</option>
                             
             <option value="Kogi State College of Education (Technical)">Kogi State College of Education (Technical)</option>
                             
             <option value="Kogi State Polytechnic">Kogi State Polytechnic</option>
                             
             <option value="Kogi State University">Kogi State University</option>
                             
             <option value="Kwara State College of Education">Kwara State College of Education</option>
                             
             <option value="Kwara State College of Education Oro">Kwara State College of Education Oro</option>
                             
             <option value="Kwara State Polytechnic">Kwara State Polytechnic</option>
                             
             <option value="Kwara State University">Kwara State University</option>
                             
             <option value="Kwararafa University">Kwararafa University</option>
                             
             <option value="Ladoke Akintola University of Technology">Ladoke Akintola University of Technology</option>
                             
             <option value="Lagos City Polytechnic">Lagos City Polytechnic</option>
                             
             <option value="Lagos State Polytechnic">Lagos State Polytechnic</option>
                             
             <option value="Lagos State University">Lagos State University</option>
                             
             <option value="Landmark university">Landmark university</option>
                             
             <option value="Lead City University">Lead City University</option>
                             
             <option value="Lighthouse Polytechnic">Lighthouse Polytechnic</option>
                             
             <option value="Madonna University">Madonna University</option>
                             
             <option value="Maftau Olanihun College of Education">Maftau Olanihun College of Education</option>
                             
             <option value="Maritime Academy of Nigeria">Maritime Academy of Nigeria</option>
                             
             <option value="McPherson University">McPherson University</option>
                             
             <option value="Michael Opara University of Agriculture">Michael Opara University of Agriculture</option>
                             
             <option value="Michael Otedola College of Primary Education">Michael Otedola College of Primary Education</option>
                             
             <option value="Michael and Cecilia Ibru University">Michael and Cecilia Ibru University</option>
                             
             <option value="Modibbo Adama University of Technology">Modibbo Adama University of Technology</option>
                             
             <option value="Mohamet Lawan College of Agriculture">Mohamet Lawan College of Agriculture</option>
                             
             <option value="Moshood Abiola Polytechnic">Moshood Abiola Polytechnic</option>
                             
             <option value="Mountain Top University">Mountain Top University</option>
                             
             <option value="Muhyideen College of Education">Muhyideen College of Education</option>
                             
             <option value="NKST College of Health Technology Mkar">NKST College of Health Technology Mkar</option>
                             
             <option value="Nacabs Polytechnic">Nacabs Polytechnic</option>
                             
             <option value="Nasarawa State College of Education">Nasarawa State College of Education</option>
                             
             <option value="Nasarawa State Polytechnic">Nasarawa State Polytechnic</option>
                             
             <option value="Nasarawa State University">Nasarawa State University</option>
                             
             <option value="National Metallurgical Training Institute">National Metallurgical Training Institute</option>
                             
             <option value="National Open University of Nigeria">National Open University of Nigeria</option>
                             
             <option value="Niger Delta University">Niger Delta University</option>
                             
             <option value="Niger State College of Agriculture">Niger State College of Agriculture</option>
                             
             <option value="Niger State College of Education">Niger State College of Education</option>
                             
             <option value="Niger State Polytechnic">Niger State Polytechnic</option>
                             
             <option value="Nigerian Turkish Nile University">Nigerian Turkish Nile University</option>
                             
             <option value="Nnamdi Azikiwe University">Nnamdi Azikiwe University</option>
                             
             <option value="Nogak Polytechnic">Nogak Polytechnic</option>
                             
             <option value="Northwest University">Northwest University</option>
                             
             <option value="Novena University">Novena University</option>
                             
             <option value="Nuhu Bamalli Polytechnic">Nuhu Bamalli Polytechnic</option>
                             
             <option value="Nwafor Orizu College of Education">Nwafor Orizu College of Education</option>
                             
             <option value="OSISA Tech College of Education Enugu">OSISA Tech College of Education Enugu</option>
                             
             <option value="Obafemi Awolowo University">Obafemi Awolowo University</option>
                             
             <option value="Obong University">Obong University</option>
                             
             <option value="Oduduwa University">Oduduwa University</option>
                             
             <option value="Ogun State Institute of Technology">Ogun State Institute of Technology</option>
                             
             <option value="Ogun State Institute of Technology Igbesa">Ogun State Institute of Technology Igbesa</option>
                             
             <option value="Olabisi Onabanjo University">Olabisi Onabanjo University</option>
                             
             <option value="Ondo State University of Technology">Ondo State University of Technology</option>
                             
             <option value="Osun State College of Education Illesa">Osun State College of Education Illesa</option>
                             
             <option value="Osun State College of Technology">Osun State College of Technology</option>
                             
             <option value="Osun State Polytechnic">Osun State Polytechnic</option>
                             
             <option value="Osun State University">Osun State University</option>
                             
             <option value="Othman Dan-Fodio University">Othman Dan-Fodio University</option>
                             
             <option value="Our Saviour institute of Science Agriculture and Technology ">Our Saviour institute of Science Agriculture and Technology </option>
                             
             <option value="Oyo State College of Agriculture">Oyo State College of Agriculture</option>
                             
             <option value="Emmanuel Alayande College of Education">Emmanuel Alayande College of Education</option>
                             
             <option value="Pan-Atlantic University">Pan-Atlantic University</option>
                             
             <option value="Paul University">Paul University</option>
                             
             <option value="Petroleum Training Institute">Petroleum Training Institute</option>
                             
             <option value="Plateau State College of Agriculture">Plateau State College of Agriculture</option>
                             
             <option value="Plateau State Polytechnic">Plateau State Polytechnic</option>
                             
             <option value="Plateau State University">Plateau State University</option>
                             
             <option value="Ramat Polytechnic">Ramat Polytechnic</option>
                             
             <option value="Redeemers University">Redeemers University</option>
                             
             <option value="Regional Agricultural Training School">Regional Agricultural Training School</option>
                             
             <option value="Renaissance University">Renaissance University</option>
                             
             <option value="Rhema University">Rhema University</option>
                             
             <option value="Ritman University">Ritman University</option>
                             
             <option value="Rivers State College of Arts and Science">Rivers State College of Arts and Science</option>
                             
             <option value="Ignatius Ajuru University of Education">Ignatius Ajuru University of Education</option>
                             
             <option value="Rivers State College of Health Sciences and Technology">Rivers State College of Health Sciences and Technology</option>
                             
             <option value="Rivers State Polytechnic">Rivers State Polytechnic</option>
                             
             <option value="Rivers State University of Science and Technology">Rivers State University of Science and Technology</option>
                             
             <option value="Ronik Polytechnic">Ronik Polytechnic</option>
                             
             <option value="Rufus Giwa Polytechnic">Rufus Giwa Polytechnic</option>
                             
             <option value="Saadatu Rimi College of Education Kumbotso  ">Saadatu Rimi College of Education Kumbotso  </option>
                             
             <option value="Salem University">Salem University</option>
                             
             <option value="Samaru College of Agriculture (DAC) Zaria">Samaru College of Agriculture (DAC) Zaria</option>
                             
             <option value="Samuel Adegboyega University">Samuel Adegboyega University</option>
                             
             <option value="School of Health Takum">School of Health Takum</option>
                             
             <option value="School of Health Technology Aba">School of Health Technology Aba</option>
                             
             <option value="School of Health Technology Akure">School of Health Technology Akure</option>
                             
             <option value="School of Health Technology Alushi Via">School of Health Technology Alushi Via</option>
                             
             <option value="School of Health Technology Benin City">School of Health Technology Benin City</option>
                             
             <option value="School of Health Technology Calabar">School of Health Technology Calabar</option>
                             
             <option value="School of Health Technology Daura">School of Health Technology Daura</option>
                             
             <option value="School of Health Technology Elesa">School of Health Technology Elesa</option>
                             
             <option value="School of Health Technology Etinan">School of Health Technology Etinan</option>
                             
             <option value="School of Health Technology Idah">School of Health Technology Idah</option>
                             
             <option value="School of Health Technology Ijero-Elati">School of Health Technology Ijero-Elati</option>
                             
             <option value="School of Health Technology Illesa">School of Health Technology Illesa</option>
                             
             <option value="School of Health Technology Inyi">School of Health Technology Inyi</option>
                             
             <option value="School of Health Technology Jahun">School of Health Technology Jahun</option>
                             
             <option value="School of Health Technology Jega">School of Health Technology Jega</option>
                             
             <option value="School of Health Technology Kaltungo">School of Health Technology Kaltungo</option>
                             
             <option value="School of Health Technology Kankia">School of Health Technology Kankia</option>
                             
             <option value="School of Health Technology Kano">School of Health Technology Kano</option>
                             
             <option value="School of Health Technology Maiduguri">School of Health Technology Maiduguri</option>
                             
             <option value="School of Health Technology Makurdi">School of Health Technology Makurdi</option>
                             
             <option value="School of Health Technology Minna">School of Health Technology Minna</option>
                             
             <option value="School of Health Technology Mubi">School of Health Technology Mubi</option>
                             
             <option value="School of Health Technology Offa">School of Health Technology Offa</option>
                             
             <option value="School of Health Technology Ofuoma">School of Health Technology Ofuoma</option>
                             
             <option value="School of Health Technology Oji River">School of Health Technology Oji River</option>
                             
             <option value="School of Health Technology Pankshin">School of Health Technology Pankshin</option>
                             
             <option value="School of Health Technology Tungar Magajiya">School of Health Technology Tungar Magajiya</option>
                             
             <option value="School of Health Technology Yaba">School of Health Technology Yaba</option>
                             
             <option value="School of Health Technology Zawan-Jos">School of Health Technology Zawan-Jos</option>
                             
             <option value="School of Hygiene Eleyele">School of Hygiene Eleyele</option>
                             
             <option value="School of Hygiene Kano">School of Hygiene Kano</option>
                             
             <option value="School of Public Health Nursing Nsukka">School of Public Health Nursing Nsukka</option>
                             
             <option value="Shaka Polytechnic">Shaka Polytechnic</option>
                             
             <option value="Shehu Idris College of Health Sciences and Technogy Makarfi">Shehu Idris College of Health Sciences and Technogy Makarfi</option>
                             
             <option value="Shehu Shagari College of Education">Shehu Shagari College of Education</option>
                             
             <option value="Sokoto State Polytechnic">Sokoto State Polytechnic</option>
                             
             <option value="Sokoto State University">Sokoto State University</option>
                             
             <option value="Southwestern University">Southwestern University</option>
                             
             <option value="St. Augustine College of Education">St. Augustine College of Education</option>
                             
             <option value="Sule Lamido University">Sule Lamido University</option>
                             
             <option value="Sultan Abdur-Rahman School of Health Technology Gwadabawa">Sultan Abdur-Rahman School of Health Technology Gwadabawa</option>
                             
             <option value="Summit University">Summit University</option>
                             
             <option value="Tai Solarin College of Education">Tai Solarin College of Education</option>
                             
             <option value="Tansian University">Tansian University</option>
                             
             <option value="Taraba State Polytechnic">Taraba State Polytechnic</option>
                             
             <option value="Taraba State University">Taraba State University</option>
                             
             <option value="Temple Gate Polytechnic">Temple Gate Polytechnic</option>
                             
             <option value="The Gateway ICT Polytechnic Saapade">The Gateway ICT Polytechnic Saapade</option>
                             
             <option value="The Polytechnic Ibadan">The Polytechnic Ibadan</option>
                             
             <option value="The Polytechnic Ile-Ife">The Polytechnic Ile-Ife</option>
                             
             <option value="The Polytechnic Imesi-Ife">The Polytechnic Imesi-Ife</option>
                             
             <option value="The Technical University">The Technical University</option>
                             
             <option value="Tower Polytechnic">Tower Polytechnic</option>
                             
             <option value="Umar Ibn Ibrahim El-Kanemi College of Education Science and Technology">Umar Ibn Ibrahim El-Kanemi College of Education Science and Technology</option>
                             
             <option value="Umaru Musa Yaradua University">Umaru Musa Yaradua University</option>
                             
             <option value="University of Abuja">University of Abuja</option>
                             
             <option value="University of Benin">University of Benin</option>
                             
             <option value="University of Calabar">University of Calabar</option>
                             
             <option value="University of Ibadan">University of Ibadan</option>
                             
             <option value="University of Ilorin">University of Ilorin</option>
                             
             <option value="University of Jos">University of Jos</option>
                             
             <option value="University of Lagos">University of Lagos</option>
                             
             <option value="University of Maiduguri">University of Maiduguri</option>
                             
             <option value="University of Mkar">University of Mkar</option>
                             
             <option value="University of Nigeria Nsukka">University of Nigeria Nsukka</option>
                             
             <option value="University of Port-Harcourt">University of Port-Harcourt</option>
                             
             <option value="University of Uyo">University of Uyo</option>
                             
             <option value="Usman Danfodio University">Usman Danfodio University</option>
                             
             <option value="Veritas University">Veritas University</option>
                             
             <option value="Waziri Umaru Federal Polytechnic">Waziri Umaru Federal Polytechnic</option>
                             
             <option value="Wellspring University">Wellspring University</option>
                             
             <option value="Wesley University of Science and Technology">Wesley University of Science and Technology</option>
                             
             <option value="Western Delta University">Western Delta University</option>
                             
             <option value="Wolex Polytechnic">Wolex Polytechnic</option>
                             
             <option value="Yaba College of Technology">Yaba College of Technology</option>
                             
             <option value="Yewa Central College of Education">Yewa Central College of Education</option>
                             
             <option value="Yobe State College of Agriculture">Yobe State College of Agriculture</option>
                             
             <option value="Yobe State Polytechnic">Yobe State Polytechnic</option>
                             
             <option value="Yobe State University">Yobe State University</option>
                             
             <option value="Zamfara State College of Agriculture and Animal Science">Zamfara State College of Agriculture and Animal Science</option>
                             
             <option value="Zamfara State College of Education">Zamfara State College of Education</option>
             <option value="">Others</option>
 
                            </select>
                              @if($errors->has('institution'))
              <span class="help-block">{{$errors->first('institution')}}</span>
            @endif
                        </div>
                      
                    </div>
                    <hr>
                    <div id="institute" class="form-group  {{ $errors->has('institution') ?  ' has-error' : '' }}" >
                        <label class="col-sm-3 control-label text-success" for="institution">*Fill your Institution </label>
                        <div class="col-sm-9">
                            <input class="form-control" name="institution[]" id="faculty" placeholder="Specify Institution" type="text">
                            @if($errors->has('institution'))
              <span class="help-block">{{$errors->first('institution')}}</span>
            @endif
                        </div>
                        
                    </div>
                    <hr>
                    <div class="form-group undergraduate {{ $errors->has('faculty') ?  ' has-error' : '' }}" >
                        <label class="col-sm-3 control-label" for="faculty">Faculty (FOR UNDERGRADUATES ONLY)</label>
                        <div class="col-sm-9">
                            <input class="form-control" name="faculty" id="faculty" placeholder="Faculty" value="{{ Request::old('faculty') ?: ''}}" type="text">
                            @if($errors->has('faculty'))
              <span class="help-block">{{$errors->first('faculty')}}</span>
            @endif
                        </div>
                        
                    </div>
                    <hr>
                    <div class="form-group undergraduate {{ $errors->has('course') ?  ' has-error' : '' }}" >
                        <label class="col-sm-3 control-label" for="course">Course of study (FOR UNDERGRADUATES ONLY)</label>
                        <div class="col-sm-9">
                            <input class="form-control" name="course" id="course" placeholder="Course of study" value="{{ Request::old('course') ?: ''}}" type="text">
                             @if($errors->has('course'))
              <span class="help-block">{{$errors->first('course')}}</span>
            @endif
                        </div>
                       
                    </div>
                    <hr>
                   <div class="form-group undergraduate {{ $errors->has('level') ?  ' has-error' : '' }}" >
                        <label class="col-sm-3 control-label">Level (FOR UNDERGRADUATES ONLY)</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="level" >
                                 <option value=""> Select Level </option>
                                <option value="ND1/100L"> ND1/100L</option>
                                 <option value="ND2/200L">ND2/200L</option>
                                 <option value="HND1/300L">HND1/300L</option>
                                 <option value="HND2/400L">HND2/400L</option>
                                 <option value="500L">500L</option>
                            </select>
                            @if($errors->has('level'))
              <span class="help-block">{{$errors->first('level')}}</span>
            @endif
                        </div>
                        
                    </div>
                   
                    <hr>
                     
                    <div class="form-group graduate {{ $errors->has('status') ?  ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Choose the appropriate (For graduates) </label>
                        <div class="col-sm-9">
                            <select class="form-control"  name="status" >
                                <option value="">--Choose the appropriate--</option>
                                <option value="Am awaiting NYSC posting">Am awaiting NYSC posting</option>
                                 <option value="Am currently serving (NYSC)">Am currently serving (NYSC)</option>
                                 <option value="have completed my NYSC program but currently job hunting">have completed my NYSC program but currently job hunting</option>
                            
                            </select>
                             @if($errors->has('status'))
              <span class="help-block">{{$errors->first('status')}}</span>
            @endif
                        </div>
                        
                    </div>
                    <hr>
                    <div id="qualification" class="form-group graduate {{ $errors->has('qualification') ?  ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Qualification</label>
                        <div class="col-sm-9">
                            <select class="form-control"  name="qualification[]" >
                                <option value="">Select Qualification</option>
                                <option value="ND">ND</option>
                                 <option value="HND">HND</option>
                                 <option value="B.sc">B.sc</option>
                                 <option value="B.A">B.A</option>
                                 <option value="B.Tech">B.Tech</option>
                                 <option value="B.Eng">B.Eng</option>
                                 <option value="Masters">Masters</option>
                                 <option value="Phd">Phd</option>
                                 <option value="">Others</option>
                            </select>
                             @if($errors->has('qualification'))
              <span class="help-block">{{$errors->first('qualification')}}</span>
            @endif
                        </div>
                       
                    </div>
                    <hr>
                    <div id="qualify" class="form-group graduate {{ $errors->has('qualification') ?  ' has-error' : '' }}">
                        <label class="col-sm-3 control-label text-success">*Specify Qualification</label>
                        <div class="col-sm-9">
                            <input class="form-control" name="qualification[]" placeholder="Specify Qualification" type="text" >
                            @if($errors->has('qualification'))
              <span class="help-block">{{$errors->first('qualification')}}</span>
            @endif
                        </div>
                        
                        </div>
                    <hr>
                     
                    <div class="form-group graduate {{ $errors->has('discipline') ?  ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Discipline</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="{{ Request::old('discipline') ?: ''}}" name="discipline" placeholder="Discipline" type="text" >
                            @if($errors->has('discipline'))
              <span class="help-block">{{$errors->first('discipline')}}</span>
            @endif
                        </div>
                        
                        </div>
                        <hr>
                        <div id="business" class="form-group {{ $errors->has('business') ?  ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Do you operate a business enterprise?</label>
                        <div class="col-sm-9">
                            <select class="form-control"  name="business" id="business">
                                <option value="Yes">Yes</option>
                                 <option value="No">No</option>
                            </select>
                             @if($errors->has('business'))
              <span class="help-block">{{$errors->first('business')}}</span>
            @endif
                        </div>
                       
                    </div>
                        <hr>
                        <div id="specification" class="form-group {{ $errors->has('specify') ?  ' has-error' : '' }}" >
                        <label class="col-sm-3 control-label">Specify (max:150 words)</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="{{ Request::old('specify') ?: ''}}" name="specify" placeholder="" type="text" max="150" >
                            @if($errors->has('specify'))
              <span class="help-block">{{$errors->first('specify')}}</span>
            @endif
                        </div>
                        
                    </div>
                    <hr>
                     <div class="form-group {{ $errors->has('intention') ?  ' has-error' : '' }}">
                        <label class="col-sm-7 control-label">Will you like to start a business after the Youth Empowered Program?</label>
                        <div class="col-sm-5">
                            <select class="form-control"  name="intention" required>
                                <option value="Yes">Yes</option>
                                 <option value="No">No</option>
                            </select>
                             @if($errors->has('intention'))
              <span class="help-block">{{$errors->first('intention')}}</span>
            @endif
                        </div>
                       
                    </div>

                    {{-- edits --}}
                    <hr>

                    <div class="form-group {{ $errors->has('hear') ?  ' has-error' : '' }}">
                        <label class="col-sm-7 control-label">How did you hear about the Youth Empowered Nigeria workshop?</label>
                        <div class="col-sm-5">
                            <select class="form-control"  name="hear" required>
                                <option value="Nairaland">Nairaland</option>
                                 <option value="Twitter">Twitter</option>
                                 <option value="Instagram">Instagram</option>
                                 <option value="Facebook">Facebook</option>
                                 <option value="Opportunity for Africans">Opportunity for Africans</option>
                                 <option value="Opportunity desk">Opportunity desk</option>
                                 <option value="Friend">Friend</option>
                                 <option value="WhatsApp">WhatsApp</option>
                            </select>
                             @if($errors->has('hear'))
              <span class="help-block">{{$errors->first('hear')}}</span>
            @endif
                        </div>
                       
                    </div>


                    <hr>
                    <div class="form-group  {{ $errors->has('pursue') ?  ' has-error' : '' }}" id="question">
                        <label class="col-sm-6 control-label">Would you like to pursue a career in the private sector? </label>
                         <div class="col-sm-6" >
                             <div class="col-sm-4">
                                    <input value="Yes" name="pursue" class="radio-inline"  type="radio">
                                    <label for="checkbox-2" class="checkbox-custom-label">Yes</label>
                                </div>
 
 
                                <div class="col-sm-4">
                                    <input value="No" name="pursue" class="radio-inline"  type="radio">
                                    <label for="checkbox-2" class="checkbox-custom-label">No</label>
                                </div>
 
                                <div class="col-sm-4">
                                    <input value="unsure" name="pursue" class="radio-inline"  type="radio">
                                    <label for="checkbox-3" class="checkbox-custom-label">unsure</label>
                                </div>
                         </div>
 
                             @if($errors->has('pursue'))
              <span class="help-block">{{$errors->first('pursue')}}</span>
            @endif
                        </div>
                       
                    
                    <hr>
                    <div id="sector" style="display:none;">
                    <div id="sectordefined" class="form-group {{ $errors->has('sector') ?  ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">What sector?</label>
                        <div class="col-sm-9">
                            <select class="form-control"  name="sector[]" >
                                <option value="Banking">Banking</option>
                                 <option value="Agriculture">Agriculture</option>
                                 <option value="Social">Social</option>
                                 <option value="Economics">Economics</option>
                                 <option value="Maritime">Maritime</option>
                                 <option value="Youth">Youth</option>
                                 <option value="Entertainment">Entertainment</option>
                                 <option value="Energy and Power">Energy and Power</option>
                                 <option value="Creative Arts">Creative Arts</option>
                                 <option value="Manufacturing">Manufacturing</option>
                                 <option value="">Others</option>
                            </select>
                             @if($errors->has('sector'))
              <span class="help-block">{{$errors->first('sector')}}</span>
            @endif
                        </div>
                       
                    </div>
                    <hr>
                    <div id="sectorundefined"  class="form-group {{ $errors->has('sector') ?  ' has-error' : '' }}">
                        <label class="col-sm-3 control-label text-success">*Specify Sector</label>
                        <div class="col-sm-9">
                            <input class="form-control" name="sector[]" placeholder="Specify Sector" type="text" >
                            @if($errors->has('sector'))
              <span class="help-block">{{$errors->first('sector')}}</span>
            @endif
                        </div>
                        
                        </div>

                         <hr>
                    <div  class="form-group {{ $errors->has('requirement') ?  ' has-error' : '' }}">
                        <label class="col-sm-3 control-label text-success">What skills do you require to achieve this? (Tick all that apply)</label>
                        <div class="col-sm-9">
                            <label class="checkbox-inline">
                          <input type="checkbox" name="requirement[]"  value="Negotiation"> Negotiation
                        </label>
                        <label class="checkbox-inline">
                          <input type="checkbox" name="requirement[]"  value="Project management">Project management
                        </label>
                        <label class="checkbox-inline">
                          <input type="checkbox" name="requirement[]" value="Sales"> Sales
                        </label>
                        <label class="checkbox-inline">
                          <input type="checkbox" name="requirement[]"  value="Communication"> Communication
                        </label>
                        <label class="checkbox-inline">
                          <input type="checkbox" name="requirement[]"  value="IT"> IT
                        </label>
                       
                            @if($errors->has('requirement'))
              <span class="help-block">{{$errors->first('requirement')}}</span>
            @endif
                        </div>
                        
                        </div>
                        
</div>
                   {{-- end edits --}}
                    <hr>
                      <div class="form-group {{ $errors->has('aspiration') ?  ' has-error' : '' }}">
                        <label class="col-sm-12 control-label">What do you hope to gain from attending this workshop? (max:200 words)</label>
                        <div class="col-sm-12">
                            <textarea maxlength="200"  class="form-control" name="aspiration" cols="5" rows="5" placeholder="tell us about your view" type="number"  required>{{ Request::old('aspiration') ?: ''}}"</textarea>
                             @if($errors->has('aspiration'))
              <span class="help-block">{{$errors->first('aspiration')}}</span>
            @endif
                        </div>
                       
                    </div>
                    <hr>
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="col-sm-4 col-xs-12" style="float:right;">
                            <button type="submit" class="form-control"><i class="fa fa-plus"></i> Submit</button>
                        </div>
                    </div>
                    <hr>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$('#fillstate').hide()
$( "#state" )
  .change(function () {
   if ($("#state option:selected").text() == 'Others') {
        $('#fillstate').show();
   }
    if ($("#state option:selected").text() != 'Others') {
        $('#fillstate').hide();
   }
  })
  .change();

  


  $(function(){

$('#qualify').hide()
$( "#qualification" )
  .change(function () {
   if ($("#qualification option:selected").text() == 'Others') {
        $('#qualify').show();
   }
    if ($("#qualification option:selected").text() != 'Others') {
        $('#qualify').hide();
   }
  })
  .change();

  })

$(function(){
     var style = $('#business');
     style.on('change', function(){
        $('#specification').toggle();
     })
     
})
 
 
$(function(){
$( "#academic" )
  .change(function () {
   if ($("#academic option:selected").text() == 'Graduate') {
        $(".undergraduate").hide();
   }
   if ($("#academic option:selected").text() == 'Under-graduate') {
        $(".undergraduate").show();
   }
   if ($("#academic option:selected").text() == 'Graduate') {
        $(".graduate").show();
   }
   if ($("#academic option:selected").text() == 'Under-graduate') {
        $(".graduate").hide();
   }
    
  })
  .change();

 });


$(function(){

$('#institute').hide()

$( "#institution" )
  .change(function () {
   if ($("#institution option:selected").text() == 'Others') {
        $('#institute').show();
   }

   if ($("#institution option:selected").text() != 'Others') {
        $('#institute').hide();
   }
    
  })
  .change();

  })

$(function(){
$( "#sectordefined" )
  .change(function () {
   if ($("#sectordefined option:selected").text() == 'Others') {
        $("#sectorundefined").show();
   }

   if ($("#sectordefined option:selected").text() !== 'Others') {
        $("#sectorundefined").hide();
   }

   
})
  .change();

 });



$(function(){
$( "#question" )
  .change(function () {
   if ($("input[name='pursue']:checked").val() == "Yes") {
        $("#sector").show();
   }

   if ($("input[name='pursue']:checked").val() == "No") {
        $("#sector").hide();
   }

   if ($("input[name='pursue']:checked").val() == "unsure") {
        $("#sector").hide();
   }
   
})
  .change();

 });


</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-106122943-1', 'auto');
  ga('send', 'pageview');

</script>
    </body>
</html>
