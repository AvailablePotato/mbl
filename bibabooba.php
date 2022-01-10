<?php
include 'baseconnect.php';
$result= mysqli_query($conn, "SELECT * FROM `pricelist`");
$result = mysqli_fetch_all($result);
?>
<!DOCTYPE html>
<html>
<head>
    <script src=
"https://code.jquery.com/jquery-3.6.0.min.js">
    </script>
<title>M-EBEL</title>
<meta charset="utf-8">
<style>
  html, body {
    height: 100%;
  }
  .content {
  height: auto !important; 
  min-height: 90%;
  display: table;
  }
  .footer {
    position: absolute;
    left: 0;
    bottom: -1;
    display: inline-block;
    width: 100%;
    min-width: 900px;
    height: 100px;
    background-color: grey;
    color:black;
    overflow: hidden;
  }
  .footerinfo {
    color:black;
    font-family:'Trebuchet MS', sans-serif; 
    margin-left: 30px;
    margin-top: 10px;
    font-size: 16px;
  }
  .searchBar {
    background-image: url('search.png');
    background-repeat: no-repeat;
    background-position: 8px 10px;
    background-size: 24px;
    font-size: 16px;
    width: 50vw;
    padding: 12px 30px 12px 40px;
    border:  1px solid rgb(124, 124, 124);
    margin-bottom: 30px;
    margin-top: 90px;
    margin-left: 40px;
  }

  table.main {
    text-align: left;
    table-layout:auto;
    width: 90%;
    max-width: 90%;
    min-width: 800px;
    margin-left: 2%;
    margin-bottom: 5%;
  }
    table{
    background-color: rgb(250, 250, 250);
    border-collapse: separate;
    border-spacing: 5px 2px;
    border: 1px solid rgb(250, 250, 250);
    font-family: Arial, Helvetica, sans;
    text-align: left;
    color: rgb(49, 49, 49);
  }
    tr {
    height: 50px;
    }
    th {
      padding: 2px;
      border-bottom: 1px solid rgb(132, 177, 243); 
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      padding-left: 7px;
      user-select: none;
    }
    td {
      border-bottom: 1px solid rgb(199, 199, 199);
      padding-left: 7px;
    }
    .thmain:hover {
      background-color: rgb(214, 214, 214) ;
      cursor: pointer;
    }
  .editbutton {
    background: none;
    border: none;
    background-image: url('edit.png');
    background-repeat: no-repeat;
    background-size: 24px;
    padding: 12px 12px;
    margin-left: 4px;
    margin-right: 20px;
    margin-bottom: 4px;
    cursor: pointer;
  }
  .editbutton:hover 
  {
    background: rgb(214, 214, 214);
    background-image: url('edit.png');
    background-repeat: no-repeat;
    background-size: 24px;
    border-radius: 5px;
  }
  .deletebutton {
    background: none;
    border: none;
    background-image: url('delete.png');
    background-repeat: no-repeat;
    background-size: 24px;
    margin-bottom: 4px;
    padding: 12px 12px;
    cursor: pointer;
  }
  .deletebutton:hover 
  {
    background: rgb(214, 214, 214);
    background-image: url('delete.png');
    background-repeat: no-repeat;
    background-size: 24px;
    border-radius: 5px;
  }
  .checkmarkbutton {
    background: none;
    border: none;
    background-image: url('done.svg');
    background-repeat: no-repeat;
    background-size: 24px;
    padding: 12px 12px;
    margin-left: 4px;
    margin-right: 20px;
    margin-bottom: 4px;
    cursor: pointer;
  }
  .checkmarkbutton:hover
  {
    background: rgb(214, 214, 214);
    background-image: url('done.svg');
    background-repeat: no-repeat;
    background-size: 24px;
    border-radius: 5px;
  }
  .sorterIcon {
    background: none;
    border: none;
    background-image: url('arrow.svg');
    background-repeat: no-repeat;
    background-size: 18px;
    padding: 12px 12px;
    margin-left: 4px;
    margin-right: 20px;
    margin-bottom: 4px;
  }
  #addButton{
    border: none;
    border-radius: 10px;
    background: none;
    /* font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
    font-family: system-ui;
    font-size: 18px;
    font-weight: 600;
    padding: 8px 8px 12px;
    margin-left: 20px;
    color: rgb(49, 49, 49);
  }
  #addButton:hover {
    background-color: rgb(214, 214, 214) ;
    cursor: pointer;
  }

  .paneltop {
    background-color: rgb(150, 186, 240);
    width: 100%; 
    min-width: 900px;
    position: absolute;
    margin-right: 0%;
    left: 0;
    right: 50;
    top: 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    height: 50px;
    white-space: nowrap;
  }
  .topelement-right {
    display: flex;
    margin-right: 30px;
    justify-content: center;
  }
  .topelementmbl{
    color:black;
    font-family:'Trebuchet MS', sans-serif; 
    font-style: normal;
    margin-bottom: 10px;
    margin-left: 30px;
    margin-top: 5px;
    font-size: 36px;
  }
  .topelementbutton {
    background: none;
    border: none;
    color: black;
    padding: 10px;
    text-align: center;
    font-size: 26px;
    cursor: pointer;
    margin-left: 20px;
  }
  .topelementbutton:hover {
    background-color: rgb(131, 162, 209);
  }
    .topelementmblMini{
      color:black;
      font-family:'Trebuchet MS', sans-serif; 
      font-style: normal;
      font-size: 36px;
    }
    .modal {
    display: none; 
    position: fixed;
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto; 
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4); 
    padding-top: 60px;
  }

  .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 30%; 
  }
  .cancelbtn {
    width: auto;
    border-radius: 5px;
    border: none;
    padding: 10px 18px;
    font-size: 16px;
    font-weight: 700;
    color: black;
    background: none;
  }
  .enterbtn {
    width: 100%;
    border-radius: 5px;
    border: none;
    padding: 10px 18px;
    font-size: 16px;
    font-weight: 700;
    color: rgb(34, 34, 34);
    background-color: rgb(132, 177, 243);
  }
  .enterbtn:hover,
  .enterbtn:focus {
    background-color: rgb(131, 162, 209);
    cursor: pointer;
  }
  .cancelbtn:hover,
  .cancelbtn:focus {
    background-color: rgb(131, 162, 209);
    cursor: pointer;
  }
  .label {
    font-size: 20px;
    font-family:'Trebuchet MS', sans-serif; 
  }
  .animate {
    -webkit-animation: animatezoom 0.3s;
    animation: animatezoom 0.3s
  }
    
  @keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
  }
</style>
<script>
    var dlinna;
    var db_id;
    var adminSwitch = false;
    var editAlreadyUsed = false;
    var result;
  function ajaxPoisk(){
    return Promise.resolve($.ajax({
      url:'sendbase.php',
      data: "function=add",
      dataType:"json",
      }));
  }
    function adminAccess()
    {
      var table, tr, i, j, cell;
      adminSwitch = !adminSwitch;
      table = document.getElementById("priceList");
      tr = table.getElementsByTagName("tr");
      var footer = document.getElementsByClassName("footerinfo");
      if (adminSwitch)
      {
        document.getElementById("addButton").style.display = "";
        for (i = 0; i < tr.length; i++) {
          tr[i].cells[0].style.display = "";
        }
      }
      else 
      {
        document.getElementById("addButton").style.display = "none";
        for (i = 0; i < tr.length; i++) {
          if (tr[i].children[0].children[0]) {
          if (tr[i].children[0].children[0].className == "checkmarkbutton") 
            saveRowF(tr[i].children[0].children[0]);
        }
        tr[i].cells[0].style.display = "none";
        }
      }
    }
    function barFilter() 
    {
      var input, filter, table, tr, td, i, txt;
      input = document.getElementById("filterInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("priceList");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++)
      {
        td = tr[i].getElementsByTagName("td")[2];
        if (td)
        {
          txt = td.textContent;
          if (txt.toUpperCase().indexOf(filter) > -1)
          {
            tr[i].style.display = "";
          }
          else 
          {
            tr[i].style.display = "none";
          }
        }
      }
    }
    function sortColumn(element)
    {
      const getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;
      const comparer = (idx, asc) => (a, b) => ((v1, v2) => 
        v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2))
        (getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));
      var table = document.getElementById("priceList");
      var tr = Array.from(table.getElementsByTagName("tr"));
      tr.shift();
      tr.sort(comparer(element.cellIndex, this.asc = !this.asc)).forEach(tr => table.appendChild(tr)); 
    }
    function addRow()
    { 
      if (!adminSwitch) return;
      var input, filter, tr, td, i;
      var table = document.getElementById("priceList");
      var newRow = table.insertRow(1);
      var idpoisk = ajaxPoisk();
      idpoisk.then(function (data){
        idpoisk = data;
        db_id = idpoisk[idpoisk.length-1][6];
      for (var i = 0; i < 8;i++)
      {
        var cell = newRow.insertCell(i);
        if (i == 0) {
          cell.innerHTML = '<button class="editbutton" onclick="editRowF(this)">';
          cell.innerHTML += '\n <button class="deletebutton" onclick="deleteRowF(this)">';

        }
        if (i == 7){
          cell.style.display ="none";
          cell.innerHTML = db_id;
        }
      }
      }); 
    }
    function Snus()
    { 
      var input, filter, tr, td, i, txt;
      var table = document.getElementById("priceList");
      var passedArray =  <?php echo json_encode($result); ?>;
      for (var j = 0; j < passedArray.length; j++){
      var newRow = table.insertRow(1);
      for (var i = 0; i < 8;i++)
      {
        var cell = newRow.insertCell(i);
        cell.innerHTML = passedArray[j][i-1];
        if (i == 0) {
          cell.innerHTML = '<button class="editbutton" onclick="editRowF(this)">';
          cell.innerHTML += '\n <button class="deletebutton" onclick="deleteRowF(this)">';
          cell.style.display ="none";
        }
        if (i==7){
          cell.style.display ="none";
          db_id = passedArray[j][i-1];
        }
      }
    }
    }
    function editRowF(element)
    {
      if (editAlreadyUsed) return;
      editAlreadyUsed = true;
      var row = element.parentNode.parentNode;
      var td = row.getElementsByTagName("td");
      var adminCell = td[0];
      adminCell.children[0].className = "checkmarkbutton";
      adminCell.children[0].setAttribute('onclick', 'saveRowF(this)')
      for (var i = 1; i < 7; i++)
      {
        td[i].style.border = "2px dashed rgb(199, 199, 199)";
        td[i].contentEditable = true;
      }
    }
    function deleteRowF(element)
    {
      var rowNumber = element.parentNode.parentNode.rowIndex;
      var row = element.parentNode.parentNode;
      var table = document.getElementById("priceList");
      var tr = table.getElementsByTagName("tr");
      var delid = tr[rowNumber].children[7].innerText;

      $.ajax({
      url:'sendbase.php',
      data:   
        {
          function: 'del',
          id: delid, 
        },
      });
      table.deleteRow(rowNumber);
    }
    function saveRowF(element)
    {
      var row = element.parentNode.parentNode;
      var td = row.getElementsByTagName("td");
      var adminCell = td[0];
      adminCell.children[0].className = "editbutton";
      adminCell.children[0].setAttribute('onclick', 'editRowF(this)');
      var editid = row.children[7].innerText;
      var massive = [];
      for (var i = 1; i < 7; i++)
      {
        massive[i-1]= td[i].innerText;
        td[i].style.border = ""
        td[i].contentEditable = false;
      }
      $.ajax({
      url:'sendbase.php',
      data:   
        {
          function: 'edit',
          eid: editid, 
          row: massive,
        },
      success: (function(data){
        alert(data);
      }),
      });
      editAlreadyUsed = false;
    }
    var modal = document.getElementById('form');
  function closeForm()
  {
    var modal = document.getElementById('form');
    var inpPass = document.getElementById('pass');
    var inpUname = document.getElementById('usern');
    if (inpPass)
      inpPass.value = '';
    if (inpUname)
      inpUname.value = '';  
    if (modal)
      modal.style.display = "none";
  }
  function enterPressed(e)
  {
    e.preventDefault();
    var inpPass = document.getElementById('pass');
    var inpUname = document.getElementById('usern');
    $.ajax({
      url:'sendbase.php',
      data:   
        {
          function: 'login',
          inpPass: inpPass.value, 
          inpUname: inpUname.value,
        },
        success: (function(data){
          if(data == 1){
          document.getElementById('Edit').style.display='';
          document.getElementById('Login').style.display='none';
        }
        else{
          alert("Данные введены неправильно!");
        } 
      }),
      });
    closeForm();
  }
  </script>
</head>
<body style="background-color: rgb(250, 250, 250); display: table;"onload="Snus()">
<div class="content">
  <div id="form" class="modal">
  <form class="modal-content animate"onsubmit="return enterPressed(event)">
    <div style="margin-bottom: 0px; padding: 10px 0 5px 20px; background-color: rgb(150, 186, 240);">
      <div style="display: flex; flex-direction: row; justify-content: space-between;">
        <div class="topelementmblMini" style="user-select: none; white-space: nowrap;">
          MBL-Price
        </div>
        <div style="margin-right:20px;">
          <button type="button" onclick="closeForm()" class="cancelbtn">Отмена</button>
        </div>
      </div>
    </div>
    <div style="padding: 20px; margin-top: 20px">
      <label for="uname" style="padding-bottom: 20px;;"><b class="label">Имя пользователя</b></label>
      <input id="usern" type="text" placeholder="Имя пользователя" name="uname" required style="width: 93%; font-size: 16px; padding: 10px; margin: 5px 0 15px 0; ">
      <label for="psw" style="padding-bottom: 15px; "><b class="label">Пароль</b></label>
      <input id="pass" type="password" placeholder="Пароль" name="psw" required style="width: 93%; font-size: 16px; padding: 10px; margin-top: 5px;">
      <div style="padding: 20px 15px 15px 15px;">
        <button type="submit" class="enterbtn">Войти</button>
      </div>
    </div>
  </form>
  </div>

<div class="paneltop">
  <div class="topelementmbl" style="user-select: none;">
    MBL-Price
  </div>
  <div class="topelement-right" style="margin-left: 40px">
    <button class="topelementbutton"id="Login" onclick="document.getElementById('form').style.display='block'">
      Авторизация
    </button>
    <button class="topelementbutton" id="Edit" onclick="adminAccess()" style ="display:none">
      Редактирование
    </button>
  </div>
</div>

<input id="filterInput" type="text" class="searchBar" 
placeholder="Поиск по названию" onkeyup="barFilter()"> 
<button id="addButton" style="display: none" onclick="addRow()">Добавить строку</button>
<table class="main" align="center" id="priceList">
  <tr>
    <th id="forAdmin" style="display: none; width: 100px;">Действия</th>
    <th style="width: 20vw;" class="thmain" onclick="sortColumn(this)">Код товара</i></th>
    <th style="width: 20vw;" class="thmain" onclick="sortColumn(this)">Наименование товара</th>
    <th style="width: 20vw;" class="thmain" onclick="sortColumn(this)">Вид товара</th>
    <th style="width: 20vw;" class="thmain" onclick="sortColumn(this)">Материал</th>
    <th style="width: 20vw;" class="thmain" onclick="sortColumn(this)">Цвет</th>
    <th style="width: 20vw;" class="thmain" onclick="sortColumn(this)">Цена</th>
    <th id="dbIndex" style="display: none;"></th>
  </tr>
</table>
</div> 
<div class="footer">
  <div style="display: flex; justify-content: space-between; margin-right: 40px;">
    <div class="footerinfo">
      <p style="padding-left: 5px; user-select: none;">MBL-Price</p>
      <p style="padding-left: 5px; user-select: none;">Почта: MBL-Price@yandex.ru</p>
    </div>
    <div class="footerinfo">
      <p style="padding-left: 5px; user-select: none;">Адрес: Ижевск, Кирова 234</p>
      <p style="padding-left: 5px; user-select: none;">Обращаться по поводу проектов: MBL-Price@yandex.ru</p>
    </div>
  </div>
</div>
</body>
</html>