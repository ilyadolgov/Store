async function AdddelOnLoad()
{
	let response = await fetch("/adddel");
	let products = await response.json();
	
	//let mproducts = products.map(f);
	let s = "";
	for (let product of products)
	{
		addRow(product.name, product.price);
	}
}

function addRow(c1, c2)
{
	var tableRef = document.getElementById("spaceid");
	
	var newRow = tableRef.insertRow(-1);
	newRow.id = "product";
	
	var newCell1 = newRow.insertCell(0);
	var newCell2 = newRow.insertCell(1);
	var newCell3 = newRow.insertCell(2);
	
	newCell1.appendChild(document.createTextNode(c1));
	newCell2.appendChild(document.createTextNode(c2));
	
	var button = document.createElement("input");
    button.type = "button";
	button.class = "btn"
	button.id = c1;
    button.value = "Удалить";
    button.onclick = del;
	
	newCell3.appendChild(button);
}

function del()
{
	fetch("/del?name="+this.id, 
	{
		method: "GET"
	});
}