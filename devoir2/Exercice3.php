/*
OUSAYD Lahcen
AIT OUALI Es-saadia
*/
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<h1>Choisir une date</h1>
<form method="post" action="valideDate.php">
<table>
	<tr>
		<td><label>Jour</label></td>
		<td><label>Mois</label></td>
		<td><label>Annee</label></td>
	</tr>
	<tr>
		<td><select name="jour">
			<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
		</select></td>
	
		<td><select name="mois">
			<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
		</select></td>

		<td><select name="annee">
			<option>2020</option><option>2019</option><option>2018</option><option>2017</option><option>2016</option><option>2015</option><option>2014</option><option>2013</option><option>2012</option><option>2011</option><option>2010</option><option>2009</option><option>2008</option><option>2007</option><option>2006</option><option>2005</option><option>2004</option><option>2003</option><option>2002</option><option>2001</option><option>1999</option><option>1998</option><option>1997</option><option>1996</option><option>1995</option><option>1994</option><option>1993</option><option>1992</option><option>1991</option>
		</select></td>
</tr>
</table>
<input type="submit" name="valide" value="Envoyer">
</form>
</body>
</html>
