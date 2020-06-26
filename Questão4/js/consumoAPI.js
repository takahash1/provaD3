window.onload = function(e) {
	fetch(
		'https://jsonplaceholder.typicode.com/comments', {		
		}).then(response => response.json())				
	.then(data => { 
		console.log(data);
		data.forEach(pessoa => {  
			var table = document.getElementById("table");
			var row = table.insertRow(-1);
			var nome = row.insertCell(0); 
			var email = row.insertCell(1); 
			nome.innerHTML = pessoa.name;
			email.innerHTML = pessoa.email;
		})
	}).catch(error => console.error(error))
}

function submeterFormulario() {

	fetch('https://jsonplaceholder.typicode.com/comments', {
		method: 'POST',       
		body: JSON.stringify(data)
	})
	.then((response) => {
		if (response.ok) {
			return response.json() 
		} else {
			return Promise.reject({ status: res.status, statusText: res.statusText });
		}   

	})
	.then((data) => console.log(data))
	.catch(err => console.log('Error message:', err.statusText));
}