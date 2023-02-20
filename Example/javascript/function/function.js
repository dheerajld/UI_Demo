// function add(a, b) {
//   c = a + b;
//   console.log(c);
// }

// add(10, 20);
// function details(name, age) {
//   console.log(name, age);
// }
// details("mark", 24);

// arrow function
const a = ["Hydrogen", "Helium", "Lithium", "Beryllium"];
const reslut = a.map(function (s) {
  return s.length;
});
console.log("Normal Function", reslut);

const b = [10, 50, 41, 56, 78, 26, 45, 6, 36];

const reslut2 = b.map((s) => {
  return s;
});

console.log("Arrow function", reslut2);
