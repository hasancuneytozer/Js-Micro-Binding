<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<style type="text/css">
/** HASAN CÜNEYT ÖZER **/
	body * 
	{
		font-family:arial;
		color:#333;
	}
	input
	{
		border: 2px solid #000;
		font-weight: bold;
		padding: 4px 4px 4px 4px;
	}
	span, customtag
	{
		position:relative;
		top:10px;
		border: 2px solid #000;
		margin: 4px 4px 4px 0px;
		padding: 4px 4px 4px 4px;
		background-color: #ccc;
		width:250px;
		height:25px;
		color:#000;
		font-weight:bold;
		display:inline-block;
	}
</style>
</head>
<body>

	<h1>HASAN CÜNEYT ÖZER</h1>
	<h2>FrontEndDeveloper</h2>
	<h3> ### Micro Binding Framework ### </h3>
	<h4>INPUT TO INPUT , INPUT TO TAG, INPUT TO TEXTAREA</h4>
	<h4>Checkbox, Radio Button, Selectbox and Multiple Selectbox</h4>
	<strong>mbdata="<strong style="color:red">randomAttVal-1</strong>" : </strong> 
	<input mbdata="randomAttVal-1" type="text" placeholder="Değer Giriniz"  value="asd"/> 
	<br>
	<br>
	
	<strong>mbshow="<strong style="color:red">randomAttVal-1</strong>" : </strong>
	<input  mbshow="randomAttVal-1" type="text"  readonly/>INPUT
	<br>
	<br>
	<hr>

	<strong>mbdata="<strong style="color:blue">randomAttVal-2</strong>" : </strong>
	<input mbdata="randomAttVal-2" type="text" placeholder="Değer Giriniz"/> 
	<br>
	<br>

	<strong>mbshow="<strong style="color:blue">randomAttVal-2</strong>" : </strong>
	<span mbshow="randomAttVal-2"  id="MicroRouteContent1"></span> TAG
	<br>
	<br>

	<strong>mbshow="<strong style="color:blue">randomAttVal-2</strong>" : </strong>
	<customtag mbshow="randomAttVal-2"  id="MicroRouteContent1"></customtag> CUSTOM TAG
	<br>
	<br>

	<strong>mbshow="<strong style="color:blue">randomAttVal-2</strong>" : </strong>
	<textarea mbshow="randomAttVal-2" readonly></textarea> TEXTAREA
	<br>
	<br>
	<hr>

	<strong>mbdata="<strong style="color:green">randomAttVal-3</strong>" : </strong>
	<input checked mbdata="randomAttVal-3" type="checkbox" placeholder="Değer Giriniz"/> 
	<br>
	<br>

	<strong>mbshow="<strong style="color:green">randomAttVal-3</strong>" : </strong>
	<span mbshow="randomAttVal-3"  id="MicroRouteContent1"></span> TAG
	<br>
	<br>

	<strong>mbshow="<strong style="color:green">randomAttVal-3</strong>" : </strong>
	<input  mbshow="randomAttVal-3" type="checkbox" placeholder="Değer Giriniz"/>  CHECKBOX
	<br>
	<br>
	<hr>

	<strong>mbdata="<strong style="color:gray">randomAttVal-4</strong>" : </strong>
	<select mbdata="randomAttVal-4">
		<option>opt1</option>
		<option selected>opt2</option>
		<option>opt3</option>
	</select>
	<br>
	<br>

	<strong>mbshow="<strong style="color:gray">randomAttVal-4</strong>" : </strong>
	<span mbshow="randomAttVal-4"  id="MicroRouteContent1"></span> TAG
	<br>
	<br>

	<strong>mbshow="<strong style="color:gray">randomAttVal-4</strong>" : </strong>
	<select mbshow="randomAttVal-4">
		<option>opt1</option>
		<option>opt2</option>
		<option>opt3</option>
	</select> SELECTBOX
	<br>
	<br>
	<hr>

	<strong>mbdata="<strong style="color:rgb(241, 8, 198)">randomAttVal-5</strong>" : </strong>
	<select mbdata="randomAttVal-5" multiple>
		<option>opt1</option>
		<option selected>opt2</option>
		<option selected>opt3</option>
	</select>
	<br>
	<br>

	<strong>mbshow="<strong style="color:rgb(241, 8, 198)">randomAttVal-5</strong>" : </strong>
	<span mbshow="randomAttVal-5"  id="MicroRouteContent1"></span> TAG
	<br>
	<br>

	<strong>mbshow="<strong style="color:rgb(241, 8, 198)">randomAttVal-5</strong>" : </strong>
	<input mbshow="randomAttVal-5" type="text" placeholder="Değer Giriniz"/> 
	<br>
	<br>

	<strong>mbshow="<strong style="color:rgb(241, 8, 198)">randomAttVal-5</strong>" : </strong>
	<select mbshow="randomAttVal-5" multiple>
		<option>opt1</option>
		<option>opt2</option>
		<option>opt3</option>
	</select> SELECTBOX
	<br>
	<br>
	<hr>

	<strong>mbdata="<strong style="color:orange">randomAttVal-6</strong>" : </strong>
	<input checked mbdata="randomAttVal-6" type="radio" name="data" value="One">One
	<input mbdata="randomAttVal-6" type="radio" name="data" value="Two">Two
	<input mbdata="randomAttVal-6" type="radio" name="data" value="Three">Three
	<br>
	<br>

	<strong>mbshow="<strong style="color:orange">randomAttVal-6</strong>" : </strong>
	<span mbshow="randomAttVal-6"  id="MicroRouteContent1"></span> TAG
	<br>
	<br>

	<strong>mbshow="<strong style="color:orange">randomAttVal-6</strong>" : </strong>
	<input mbshow="randomAttVal-6" type="text" placeholder="Değer Giriniz"/> 
	<br>
	<br>

	<strong>mbshow="<strong style="color:orange">randomAttVal-6</strong>" : </strong>
	<input checked mbshow="randomAttVal-6" type="radio" name="show" value="One">One
	<input mbshow="randomAttVal-6" type="radio" name="show" value="Two">Two
	<input mbshow="randomAttVal-6" type="radio" name="show" value="Three">Three
	<br> Radio
	<br>
	<br>
	 
	<script type="text/javascript">
		/** HASAN CÜNEYT ÖZER **/
		(function RunMb(){
				var _mbdata = document.querySelectorAll('[mbdata]');
				var _mbshow = document.querySelectorAll('[mbshow]')

				// Tüm Element İşlemleri
				function AllEl(baseElement){
					// Event içinde Elementti target veya srcelement'den okur. Event ve dışında kalan durumları Düzenlemek için if kullanacagız
					var eleValue;
					var eleInHtml;
					var eleAttrValue;

					function ThisElement(){

						//Event değilse
						if(typeof baseElement.target==="undefined")
						{
							eleValue = baseElement.value;
							eleInHtml = baseElement.innerHTML;
							eleAttrValue = baseElement.attributes["mbdata"].value;	
							eleCbValue = baseElement.checked;
						}

						//Event Başladığında
						if(typeof baseElement.target!="undefined")
						{
							eleValue = baseElement.target.value;
							eleInHtml = baseElement.target.innerHTML;
							eleAttrValue = baseElement.target.attributes["mbdata"].value;
							eleCbValue = baseElement.target.checked;	
						}

						// verilen _mbdata elementine bağlı _mbshow attrlerini işle
						for (var _i = 0; _i < _mbshow.length; _i++) {
							if(_mbshow[_i].attributes["mbshow"].value==eleAttrValue)
							{	
								if(_mbshow[_i].value!=baseElement.eleValue || _mbshow[_i].value!=eleInHtml)
								{
									//mbdata value veya text'i mbshow'a gönder
									function add()
									{
										//text
										if(baseElement.type=="text")
										{
											//String.FromChar Codelari Keyup dışındaki event kullanırım diye bırakmıştım. Char Kodlarının Harffe Dönüştürmek için kullanılıyor.
	 										_mbshow[_i].innerHTML = eleInHtml || eleValue; //+ String.fromCharCode(baseElement.keyCode || baseElement.charCode);
											_mbshow[_i].value = eleInHtml || eleValue; //+ String.fromCharCode(baseElement.keyCode || baseElement.charCode);
										}
										
										//Radio Button
										if(baseElement.type=="radio")
										{
											
											//Radio Checked Edilirse Atamaya başla
											if (baseElement.checked) 
											{
												_mbshow[_i].innerHTML = baseElement.value;

												//show edilen Text Inputsa
												if (_mbshow[_i].type=="text") 
												{
													_mbshow[_i].value = baseElement.value;
												};
											};

											//show edilecek radio ise
											if(_mbshow[_i].type=="radio")
											{
												if(_mbshow[_i].value == baseElement.value)
												{
													_mbshow[_i].checked = baseElement.checked;
												}
											}
											 
										}

										//Checkbox
										if(baseElement.type=="checkbox")
										{
											_mbshow[_i].innerHTML = eleCbValue; 
											_mbshow[_i].value = eleCbValue;
											_mbshow[_i].checked = eleCbValue;
										}

										//Selectbox One
										if (baseElement.type=="select-one")
										{
											//_mbshow type'e göre atama yap
											if(_mbshow[_i].type=="select-one")
											{
												_mbshow[_i].value = baseElement.selectedOptions[0].value;
											}
											else
											{
												_mbshow[_i].innerHTML = baseElement.selectedOptions[0].value;
												_mbshow[_i].value = baseElement.selectedOptions[0].value;
											}
										}

										//SelectBox Multiple
										if (baseElement.type=="select-multiple")
										{
											//Select Multiple İçin Array Oluştur 
											var valueArray = [];

											//Seçilen verileri Arrayye Pushla
											for (var _mi = 0; _mi < baseElement.selectedOptions.length; _mi++) {
												valueArray.push(baseElement.selectedOptions[_mi].value);
											}

											//_mbshow type'e göre atama yap
											if(_mbshow[_i].type=="select-multiple")
											{
												_mbshow[_i].selectedOptions = valueArray;
												for (var _moi = 0; _moi < baseElement.length; _moi++) {
													_mbshow[_i][_moi].selected = baseElement[_moi].selected;
												}
											}

											else
											{
												_mbshow[_i].innerHTML = valueArray;
												_mbshow[_i].value = valueArray;
											}
				
										}
									}
									add();
								}
							}
						};
					}

					//radio, checkbox, select elementleri için "change" Eventını kullan
					if(baseElement.type=="radio" || baseElement.type=="checkbox" || baseElement.type=="select-one" || baseElement.type=="select-multiple")
					{
						baseElement.addEventListener('change',function(){
							ThisElement();
						},false);
					}

					//Geriye Kalan Elementler İçin "keyup" Eventını Kullan 
					else
					{
						baseElement.addEventListener('keyup',function(){
							ThisElement();
						},false);
					}

					//Aktif Olarak Başla
					ThisElement();
					
				};

				//_mbdata Attr'leri Al ve AllEl Functionu İle İşle
				for (var i = 0; i < _mbdata.length; i++) {
						AllEl(_mbdata[i]);		
				};
				
		}())
		
	</script>
</body>
</html>

