<?php


function show_menu()
{
	$conn=connect();
	$menus='';
	$menus.=generate_menus($conn);
	return $menus;
	
}

function generate_menus($conn,$parent_id=0)
{	

 $menu= '';
 $sql='';

if($parent_id==0)
{
	$sql = " SELECT * FROM menus WHERE parent_id=0";
}
else
{
	$sql = " SELECT * FROM menus WHERE parent_id=$parent_id";
}

$result=$conn->query($sql);

while($row = $result->fetch_assoc())
{
	if($row['page'])
	{
		$menu .= '<li ><a href="'.$row['page'].'">'.$row['name'].'</a>';
	}
	else
	{
		$menu .= '<li ><a href="#">'.$row['name'].'</a>';
	}
	$menu .= '<ul class="dropdown">'.generate_menus($conn,$row['id']).'</ul>';

	$menu.='</li>';
	
}
return $menu;
}



?>