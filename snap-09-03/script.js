let arr = ['Bob', 'Jim', 'Matt', 'Mary', 'Suzy', ' Sarah'];


//for(i=0; i < arr.length; i++){
//	setTextValue("element"+i, arr[i]);
//}

//function setTextValue (identifier, value){
//	let tag = document.getElementById(identifier);
//	tag.innerText = value;
//}

arr.map(name => {
	const newName = document.createElement(p);

	const newContent = document.createTextNode(name);
	newName.appendChild(newContent);
	document.getElementById("names").appendChild(newName)
});