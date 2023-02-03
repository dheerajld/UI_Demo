const person = [
    {"name":"Suchit","age":25},
    {"name":"Sachin","age":91},
{"name":"Vishal","age":14},
{"name":"Charan","age":18},
{"name":"Nayan","age":65},
{"name":"Ashwin","age":10},
{"name":"Papu","age":12},
{"name":"Datta","age":35},
{"name":"Tukaram","age":85},
{"name":"Yuvraj","age":87},
{"name":"Dhiraj","age":25},
{"name":"Suraj","age":17},
];

var aualts = 0;

var chilern = 0;

var  job = [];

// console.log(person[11].name);
person.forEach(function (element, index, array){
    // console.log("name: " + person[index].name + "; age: "+ person[index].age);
    if(person[index].age >= 18){
        aualts++
        if(person[index].age >= 20 && person[index].age<=30){
           job.push(person[index])
        } 
    }else{
        chilern++
    }
    });

    console.log("Count of Aualts:",aualts);
    console.log("Count of Chilern:",chilern);
    job.map(x => console.log(x.name,x.age));

   


