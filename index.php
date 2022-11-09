<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Гибкое и жесткое сравнение в PHP</title>
  </head>
  <body>
    <main>
      <table>
        <caption class = "tableCaption">Гибкое сравнение в PHP</caption>
        <tr class = tableHead>
        <th></th>
          <th>true</th>
          <th>false</th>
          <th>1</th>
          <th>0</th>
          <th>-1</th>
          <th>"1"</th>
          <th>"null"</th>
          <th>"php"</th>
        </tr>
        <?php 
          $operands = [true, false, 1, 0, -1, "1", null, 'php'];
          for ($i = 0; $i < count($operands); $i++) {
            // вывод первого операнда в 1-м столбце таблицы
            $nameOperand1 = "";
            switch (gettype($operands[$i])) {
              case "boolean":
                  $nameOperand1 = $operands[$i] ? "true" : "false";
                  break;
              case "NULL":
                  $nameOperand1 = "null";
                  break;
              case "integer":
                  $nameOperand1 = (string)$operands[$i];
                  break;
              case "string":
                  $nameOperand1 = '"'.$operands[$i].'"';
                  break;
            }
            // формируем очередную строку таблицы
            $curStr = "<tr><th class = \"tableHead\">$nameOperand1</th>";  // значение операнда1 крупным шрифтом
            for ($j = 0; $j < count($operands); $j++) {
              $result = ($operands[$i] == $operands[$j]) ? "true" : "false";
              $curStr .= "<td>$result</td>"; 
            }
            $curStr .= "</tr>"; 
            echo $curStr;
          } 
        ?>
      </table>
      <table>
        <caption class = "tableCaption">Жесткое сравнение в PHP</caption>
        <tr class = tableHead>
        <th></th>
          <th>true</th>
          <th>false</th>
          <th>1</th>
          <th>0</th>
          <th>-1</th>
          <th>"1"</th>
          <th>"null"</th>
          <th>"php"</th>
        </tr>
        <?php 
          $operands = [true, false, 1, 0, -1, "1", null, 'php'];
          for ($i = 0; $i < count($operands); $i++) {
            // вывод первого операнда в 1-м столбце таблицы
            $nameOperand1 = "";
            switch (gettype($operands[$i])) {
              case "boolean":
                  $nameOperand1 = $operands[$i] ? "true" : "false";
                  break;
              case "NULL":
                  $nameOperand1 = "null";
                  break;
              case "integer":
                  $nameOperand1 = (string)$operands[$i];
                  break;
              case "string":
                  $nameOperand1 = '"'.$operands[$i].'"';
                  break;
            }
            // формируем очередную строку таблицы
            $curStr = "<tr><th class = \"tableHead\">$nameOperand1</th>";  // значение операнда1 крупным шрифтом
            for ($j = 0; $j < count($operands); $j++) {
              $result = ($operands[$i] === $operands[$j]) ? "true" : "false";
              $curStr .= "<td>$result</td>"; 
            }
            $curStr .= "</tr>"; 
            echo $curStr;
          } 
        ?>
      </table>
      <br>
      <div class="task_box">
        <p class="res_text"><span style="bold"><strong>Выводы</strong></span><br>Как мы видим в нижней таблице, при 
        жестком сравнении двух величин сравниваются не только их значения, но и типы, что обеспечивает значительно 
        большую точность. При гибком сравнении сравниваются только значения (нередко - полученные при приведении 
        типов). Использование гибкого сравнения может в некоторых случаях сократить программный код, но применять 
        этот оператор нужно очень осторожно и внимательно (особенно при сравнении величин разных типов), отслеживая 
        результат для всех вариантов. </p>
        </div>   
      <footer>
      <br>
      <div class="copyright">Copyright @ PetrenkoE</div>   
    </footer>
    </main>
  </body>
</html>
