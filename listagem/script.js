fetch("http://127.0.0.1:8000/api/products").then((data)=>{
  // console.log(data); //Formato Data
  return data.json() //Convertido Json para objeto
}).then((objectData)=>{
  console.log(objectData[0].produto);
  let tableData = "";
  objectData.map((values)=>{
    tableData+=`<tr>
    <td>${values.id}</td>
    <td>${values.produto}</td>
    <td>${values.descricao}</td>
    <td>${values.preco}</td>
  </tr>`
  });
  document.getElementById("table_body").innerHTML=tableData;
}).catch((err)=>{
  console.log(err)
})