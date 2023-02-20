const a = [10, 144, 488, 540, 12, 14, 16];

var max = [];

for (let i = 0; i < a.length; i++) {
  if (a[i] > max) {
    max = a[i];
  }
}

console.log(max);
