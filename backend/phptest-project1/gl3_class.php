
<?
class Form
{
var $fields=array();                // содержит имя поля
var $processor;                    // имя программы обработки данных формы
var $submit = "Отправить данные"; // имя кнопки Submit
var $Nfields =0 ;                // количество полей формы
                                // Конструктор: передается имя сценария обработки данных
                               // ($processor) и имя кнопки.
      /* функция присваивания введенных переменных */          
function __construct($processor, $submit)
{
$this->processor = $processor;
$this->submit = $submit;
}
/* Функция отображения формы.
*/
function displayForm()
{
echo "<form action='{$this->processor}' method='post'>";
echo "<table width='100%'>";
for($j=1;$j<=sizeof($this->fields);$j++)
{
echo "<tr><td align=\"right\">
{$this->fields[$j-1]['label']}: </td>\n";
echo "<td>
<input type='text'
name='{$this->fields[$j-1]['name']}'>
</td></tr>\n";
}

echo "<tr><td colspan=2 align='center'>
<input type='submit'
value= '{$this->submit}'></td></tr>\n" ;
echo "</table>";
/* Функция для добавления поля формы. Ее параметрами
   являются имя и метка поля.
*/
 }
function addField($name, $label)
{
$this->fields[$this->Nfields]['name'] = $name;
$this->fields[$this->Nfields] ['label'] = $label;
$this->Nfields = $this->Nfields + 1;
}
}
?> 
