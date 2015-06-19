<?php if (!defined('THINK_PATH')) exit(); $user = getUsername(); ?>

<head>comments information </head>
<h1> user </h1>
<table>
	<tr>
		<td>user:</td>
		<td><?php echo ($user); ?></td>
	</tr>
</table>


<h1> book information</h1>

<table>
 <tr>
    <td>id:</td>
    <td><?php echo ($bookInfo[id]); ?></td>
 </tr>
 <tr>
    <td>bookname:</td>
    <td><?php echo ($bookInfo[bookname]); ?></td>
 </tr>
 <tr>
    <td>ISBN:</td>
    <td><?php echo ($bookInfo[isbn]); ?></td>
 </tr>
 <tr>
    <td>press:</td>
    <td><?php echo ($bookInfo[press]); ?></td>
 </tr>
 <tr>
    <td>author:</td>
    <td><?php echo ($bookInfo[author]); ?></td>
 </tr>
 <tr>
    <td>summary:</td>
    <td><?php echo ($bookInfo[summary]); ?></td>
 </tr>
 <tr>
    <td>picture:</td>
    <td><?php echo ($bookInfo[picture]); ?></td>
 </tr>
 <tr>
    <td>bookzan:</td>
    <td><?php echo ($bookInfo[bookzan]); ?></td>
 </tr>
 </table>


 <h1>add comment</h1>
<FORM method="post" action="/app/new/index.php/Home/Shu/addComment">
<textarea name = 'comment' id = 'comment' cols="60" rows="10">添加新评论...</textarea>
<INPUT type="submit" value="提交">
</FORM>




<h1>comments list</h1>
<h2>commentCount:<?php echo ($commentsCount); ?></h2>
<h2>the first comment</h2>
<table>
	<tr>
		<td>id:</td>
		<td><?php echo ($commentsList[0][id]); ?></td>
	</tr>
	<tr>
		<td>bookid:</td>
		<td><?php echo ($commentsList[0][bookid]); ?></td>
	</tr>
	<tr>
		<td>username:</td>
		<td><?php echo ($commentsList[0][username]); ?></td>
	</tr>
	<tr>
		<td>parentid:</td>
		<td><?php echo ($commentsList[0][parentid]); ?></td>
	</tr>
	<tr>
		<td>comment:</td>
		<td><?php echo ($commentsList[0][comment]); ?></td>
	</tr>
	<tr>
		<td>create_tiem:</td>
		<td><?php echo ($commentsList[0][create_time]); ?></td>
	</tr>



</table>