var sideBarIsOpen = true;

toggleBtn.addEventListener( 'click', (event) => {
	event.preventDefault();

	if(sideBarIsOpen){
		dashboard_sidebar.style.width = '15%';
		dashboard_sidebar.style.transition = '0.2s all';
		dashboard_logo.style.fontSize = '30px';
		image.style.width = '40px';
		image.style.transition = '0.5s all';
		dashboard_sidebar_users.style.textAlign = 'left';

		menuIcons = document.getElementsByClassName('menuText');
		for(var i=0; i < menuIcons.length;i++){
			menuIcons[i].style.display = 'none';
		}
		document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';
		sideBarIsOpen = false;
	}else {
		dashboard_sidebar.style.width = '30%';
		dashboard_logo.style.fontSize = '60px';
		image.style.width = '80px';
		dashboard_sidebar_users.style.textAlign = 'center';

		menuIcons = document.getElementsByClassName('menuText');
		for(var i=0; i < menuIcons.length;i++){
			menuIcons[i].style.display = 'inline-block';
		}
		document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'left';
		sideBarIsOpen = true;
	}
	
});