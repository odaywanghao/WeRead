<?php if (!defined('THINK_PATH')) exit(); $user = getUsername(); ?>

<head>notes information </head>
<h1> user </h1>
<table>
	<tr>
		<td>user:</td>
		<td><?php echo ($user); ?></td>
	</tr>
</table>


<h1> notes list </h1>

<table>
 <tr>
    <td>id:</td>
    <td><?php echo ($notesList[0][id]); ?></td>
 </tr>
 <tr>
    <td>bookname:</td>
    <td><?php echo ($notesList[0][bookname]); ?></td>
 </tr>

<tr>
    <td>author:</td>
    <td><?php echo ($notesList[0][author]); ?></td>
 </tr>


 <tr>
    <td>note:</td>
    <td><?php echo ($notesList[0][note]); ?></td>
 </tr>
 </table>
 <h2>notesCount:<?php echo ($notesCount); ?></h2>