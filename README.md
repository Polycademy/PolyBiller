PolyBiller
==========

Helps with dealing with API usage billing. Includes API usage tracking, cron like billing, then generating PDF invoices.

1. Use Chronus as the job scheduler (better than Cron)
2. Expose RESTful API to charge customers and to create customers.
3. Be better than Licensario
4. Allow exponential regression formulas for pricing with asymptotes:  (this will require BC Math or precise math functions, horizontal asymptote can just be a (plus) or (minus) on the equation)
http://www.wolframalpha.com/examples/RegressionAnalysis.html
https://www.wolframalpha.com/input/?i=horizontal+asymptotes&lk=3
Actually just allow the choice of all regression parameters, and allow submission of the formula which will be calculated and used, using a MATH DSL.
It can also allow multiple regression allowing a 3 dimensional or multi dimensional pricing forumla.
5. Support different payment APIs
6. Support Free Usage capping on PAYG
7. Allow exporting invoices and keeping track of it
8. Allow custom invoice templates to be used via email templates and variable interpolation
9. Allow the swallowing of tax rate and setting tax inclusive or exclusive depending on various filters
10. Allow analysis!

It might be good to build this in Node.js (but you do lose on out PolyAuth, who cares? It can transfer to the PolyAuth service once that's ready.):

https://github.com/sjkaliski/numbers.js/
https://github.com/Tom-Alexander/regression-js
http://mathjs.org/
https://github.com/flurry/Lyric