<!DOCTYPE html>
<html>
<head>
<?php

    include 'baseconnect.php';
    $result= mysqli_query($conn, "SELECT * FROM `pricelist`");
    $result = mysqli_fetch_all($result);
?>
<title>M-EBEL</title>
<meta charset="utf-8">
<style>
  html, body {
    height: 100%;
  }
.content {
/* height: 80%;
margin-bottom: 50px;
padding-bottom: 50px; */
/* box-sizing: border-box; */
height: auto !important; 
min-height: 90%;
display: table;
/* overflow-x:hidden; */
/* height: 100%; */
/* padding-bottom: 100px; */
/* margin-bottom: -100px; */
}
h1.relative {
  position: relative;
  left: 30px;
bottom: 10px;
}
.footerline{
  height: 5px;
  background-color: black;
  border: none;
}
.push {
  height: 100px;
}
.footer {
  position: absolute;
  left: 0;
  bottom: -1;
/*   margin-top: -50px; */
  /* box-sizing: border-box; */
  display: inline-block;
  width: 100%;
  min-width: 900px;
  height: 100px;
  background-color: grey;
  color:black;
  overflow: hidden;
}
.footerinfo {
  display: flex;
  color:black;
   font-family:'Trebuchet MS', sans-serif; 
   margin-bottom: 10px;
   margin-left: 30px;
   margin-top: 25px;
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
  /* padding-top: 20px; */
  /* table-layout:auto; */
  table-layout:auto;
  width: 90%;
  max-width: 90%;
  min-width: 800px;
  margin-left: 2%;
  margin-bottom: 5%;
 /*  padding-bottom: 100px; */

}
  table{
  background-color: rgb(250, 250, 250);
/*   border-collapse: collapse; */
  border-collapse: separate;
  border-spacing: 5px 2px;
  border: 1px solid rgb(250, 250, 250);
  font-family: Arial, Helvetica, sans;
  text-align: left;
  /* padding: 12px; */
  color: rgb(49, 49, 49);
}
  tr {
  height: 50px;
/*   border-collapse: separate;
  border-spacing: 5px; */
  }
/* border-bottom: 1px solid rgb(132, 177, 243); */
  th {
    padding: 2px;
    border-bottom: 1px solid rgb(132, 177, 243); 
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    text-indent: 5px;
    /* border-radius: 8px; */
  }
  td {
    border-bottom: 1px solid rgb(199, 199, 199);
    /* outline: dashed rgb(197, 197, 197); */
    /* border: 2px dashed rgb(199, 199, 199); */
    /* box-shadow:inset 0px 0px 0px 1px rgb(155, 155, 155); */
    margin: 15px;
    text-indent: 5px;
    /* padding-top: 5px; */
    /* border: 1px groove rgb(165, 165, 165); */
    
    /* padding: 10px; */
     /* overflow: hidden; 
    text-overflow: ellipsis; 
    word-wrap: break-word; */
  }
  .thmain:hover {
    background-color: rgb(214, 214, 214) ;
    cursor: pointer;
  }
/*  button.auth {
    border: none;
    color: black;
    padding: auto;
    text-align: center;
    font-size: 25px;
    cursor: pointer;
  } */

/* td:nth-child(even){
  background-color: #e1f1f1;
}
th:nth-child(odd){
  background-color: rgb(187, 221, 221);
} */
.actioncell {
  display: none;
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
/* .mom {
    width: 100%; 
    display: table;
    border: 1px solid #444444;
}
.child {
    display: table-cell;
}
.childinner {
    margin-left: 25px;
    background-color: #cccccc;
    min-height: 40px;
}
.child:first-child .childinner {
    margin-left: 0;
} */
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
/* .topelement {
  display: flex;
} */
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
</style>
<script>
  var stackRow = [];
  var stackRowNum = [];
  var adminSwitch = false;
  var editAlreadyUsed = false;
  function adminAccess()
  {
    var table, tr, i, cell;
    adminSwitch = !adminSwitch;
    table = document.getElementById("priceList");
    tr = table.getElementsByTagName("tr");
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
/*     for (i = 0; i < tr.length; i++)
    {
      cell = tr[i].cells[0];
      if (adminSwitch) 
      {
        cell.style.display = "";
      }
      else
      {
        cell.style.display = "none";
      }
    }   */
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
  function addRow()
  { 
    if (!adminSwitch) return;
     var input, filter, tr, td, i, txt;
     var table = document.getElementById("priceList");
     var newRow = table.insertRow(1);
    for (var i = 0; i < 7;i++)
    {
      var cell = newRow.insertCell(i);
      if (i == 0) {
/*         var edButton = document.createElement('button');
        var delButton = document.createElement('button');
        edButton.className = "editbutton";
        delButton.className = "deletebutton";
        edButton.onclick = function() {editRowF()};
        delButton.onclick = function() {deleteRowF()};
        cell.append.edButton;
        cell.append.delButton; */
        cell.innerHTML = '<button class="editbutton" onclick="editRowF(this)">';
          /* + '\n <button class="deletebutton" onclick="deleteRowF(this)">'; */
        cell.innerHTML += '\n <button class="deletebutton" onclick="deleteRowF(this)">';
        /* cell.style.display = "none"; */
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
    /* td[0].contentEditable = true; */
/*     td[0].chilren[0].button.className = "checkmarkbutton";
    td[0].children[0].onclick = function() {saveRowF(this)}; */
    /* td[0].contentEditable = false; */
    for (var i = 1; i < 7; i++)
    {
      /* td[i].style.boxShadow = "inset 0px 0px 0px 1px rgb(155, 155, 155)"; */
      td[i].style.border = "2px dashed rgb(199, 199, 199)";
      /* td[i].style.outline = "dashed rgb(197, 197, 197)"; */
      td[i].contentEditable = true;
    }
  }
  function deleteRowF(element)
  {
    var rowNumber = element.parentNode.parentNode.rowIndex;
    var row = element.parentNode.parentNode;
    stackRowNum.push(rowNumber);
    stackRow.push(row);
    var table = document.getElementById("priceList");
    table.deleteRow(rowNumber);
  }
  function saveRowF(element)
  {
    var row = element.parentNode.parentNode;
    var td = row.getElementsByTagName("td");
    var adminCell = td[0];
    adminCell.children[0].className = "editbutton";
    adminCell.children[0].setAttribute('onclick', 'editRowF(this)')
/*     td[0].children[0].onclick.onclick = function() {editRowF(this)};
    td[0].children[0].className = "editbutton";
    td[0].style.border = "" */
    for (var i = 1; i < 7; i++)
    {
      /* td[i].style.boxShadow = ""; */
      td[i].style.border = ""
      td[i].contentEditable = false;
    }
    editAlreadyUsed = false;
  }
/*   function cancelOp() 
  {
    var rowNumber = stackRowNum.pop();
    var row = stackRow.pop();
    var table = document.getElementById("priceList");
    var newRow = table.insertRow(rowNumber);
    newRow = row;
  } */
</script>
</head>
<!-- <body>
<h2> Poshol nakhoj:</h2>
<form action="biba.php" method="POST">
<p>: <input type="text" name="firstname" /></p>
<p>: <input type="text" name="lastname" /></p>
<table></table>
<input type="submit" value="die">
</form>
</body> -->
<body style="background-color: rgb(250, 250, 250); display: table;">
<div class="content">
<div class="paneltop">
  <div class="topelementmbl" style="user-select: none;">
    M-EBEL
  </div>
  <div class="topelement-right" style="margin-left: 40px">
    <button class="topelementbutton">
      регистрация
    </button>
    <button class="topelementbutton">
      авторизация
    </button>
    <button class="topelementbutton" id="tempEdit" onclick="adminAccess()">
      ыстамбек
    </button>
  </div>
</div>
  
<!-- <div style="background-color:rgb(202, 183, 72);color:#000000;padding-top:1px;">
  <h1 class="relative" style="color:black; font-family:'Trebuchet MS', sans-serif; 
   margin-bottom: 10px;">
    M-EBEL 
  </h1>
</div> -->
<input id="filterInput" type="text" class="searchBar" 
placeholder="Поиск по названию" onkeyup="barFilter()"> 
<button id="addButton" style="display: none" onclick="addRow()">Добавить строку</button>
<!-- <button onclick="cancelOp()">biba :)</button> -->
<table class="main" align="center" id="priceList">
<!--   <colgroup>
    <col>
    <col style="width: 200px;">
    <col>
    <col>
    <col>
    <col>
    <col>
  </colgroup> -->
  <tr>
    <!-- <th class="actioncell"">Действия</th> -->
    <th id="forAdmin" style="display: none; width: 100px;">Действия</th>
  <!--   <th ">Действия</th> -->
    <th style="width: 200px;" class="thmain">Код товара</i></th>
    <th style="width: 350px;" class="thmain">Наименование товара</th>
    <th style="width: 250px;" class="thmain">Вид товара</th>
    <th style="width: 150px;" class="thmain">Материал</th>
    <th style="width: 150px;" class="thmain">Цвет</th>
    <th style="width: 100px;" class="thmain">Цена</th>
  </tr>
  <tr>
    <td id="forAdmin"style="display: none;" >
      <button class="editbutton" onclick="editRowF(this)"></button>
      <button class="deletebutton" onclick="deleteRowF(this)"></button>
    </td>
    <td>
    <?php echo ($result[0][1]); ?>
    </td>
    <td><?php echo ($result[0][2]); ?></td>
    <td><?php echo ($result[0][3]); ?></td>
    <td><?php echo ($result[0][4]); ?></td>
    <td><?php echo ($result[0][5]); ?></td>
    <td><?php echo ($result[0][6]); ?></td>
    addRow();
    
  </tr>
  <tr>
    <td id="forAdmin"style="display: none;" >
      <!-- <button class="editbutton"></button><button class="deletebutton"></button> -->
      <button class="editbutton" onclick="editRowF(this)"></button>
      <button class="deletebutton" onclick="deleteRowF(this)"></button>
    </td>
    <td>1337</td>
    <td>стипуха после 3 семестра</td>
    <td>влажные мечты</td>
    <td>бабло</td>
    <td>приятный</td>
    <td>3 копейки</td>
  </tr>
  <tr>
    <td id="forAdmin" style="display: none;">
      <button class="editbutton" onclick="editRowF(this)"></button>
      <button class="deletebutton" onclick="deleteRowF(this)"></button>
    </td>
    <td>1488</td>
    <td>оценка отлично за лабы и курсач</td>
    <td>прикол</td>
    <td>незнаю</td>
    <td>чёрный</td>
    <td>угадай))))))))))))))))))))))</td>
  </tr>
  <tr>
    <td id="forAdmin" style="display: none;">
      <button class="editbutton" onclick="editRowF(this)"></button>
      <button class="deletebutton" onclick="deleteRowF(this)"></button>
    </td>
    <td>322</td>
    <td>дошик с грибами</td>
    <td>строительный материал</td>
    <td>селёдка</td>
    <td>есть</td>
    <td>да</td>
  </tr>
  <!-- <tr>
    <td>а</td>
  </tr>
  <tr>
    <td>у</td>
  </tr>
  <tr>
    <td>е</td>
  </tr>
  <tr>
    <td>у</td>
  </tr>
  <tr>
    <td>а</td>
  </tr>
  <tr>
    <td>у</td>
  </tr>
  <tr>
    <td>е</td>
  </tr>
  <tr>
    <td>у</td>
  </tr>
  <tr>
    <td>а</td>
  </tr>
  <tr>
    <td>у</td>
  </tr>
  <tr>
    <td>е</td>
  </tr> -->
</table>
 <!--  <hr class="footerline"> -->
<!-- <footer style="background-color: grey; position: relative; bottom: 0;" > -->
  <!-- <div class="push"></div> -->
</div> 
<div class="footer">
  <div style="display: flex; justify-content: space-between; margin-right: 40px;">
    <div class="footerinfo">
    бибабуба 228
    <br>
    почта: ага чё ещё захотел
    </div>
    <div class="footerinfo">
    адрес: не скажу))0)
    <br>
    насчёт рекламы:*ссылка на вирус*
    </div>
  </div>
</div>
<!-- <div class="footer">

  <div style="display: flex; justify-content: space-between; margin-right: 40px;">
    <div class="footerinfo">
    228
    <br>
    почта: чё ещё захотел
    </div>
    <div class="footerinfo">
    адрес: 
    <br>
    насчёт рекламы:*ссылка на вирус*
    </div>
  </div>
</div> -->
<?php
    mysqli_close($conn);
?>
</body>
</html>