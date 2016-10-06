function openMenu(){
	var body = document.querySelector('body');

	if(body.className == ''){
		body.className += ' menu-open';
	} else {
		body.className = '';
	}
}