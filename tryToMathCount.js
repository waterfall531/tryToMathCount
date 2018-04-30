/*
P = n! / m!

C = n! / m! * (n-m)!
*/




var mathcount = function (n, m, type = "P") {
    var sum = 1;
    if (n > 1) {
        if (type == 'H') {
            return sum * n * mathcount(n - 1, 1, 'H');
        } else if (type == 'M') {
            if (m == n) return 1;
            return sum * n * mathcount(n - 1, m, 'M');
        } else if (type == 'P') {
            return sum * mathcount(n, m, 'M');
        } else if (type == 'C') {
            return sum * mathcount(n, m, 'M') / mathcount(n - m, 1, "H");
        }
    } else {
        return 1;
    }
};
console.log(mathcount(5, 1, "H"));
console.log(mathcount(5, 2));
console.log(mathcount(5, 2, "C"));