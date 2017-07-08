//var malarkey = require('malarkey');
var elem = document.querySelector('.malarkey');
var elem2 = document.querySelector('.undertext')
var opts = {
  typeSpeed: 50,
  deleteSpeed: 50,
  pauseDelay: 2000,
  loop: false,
  postfix: ''
};
malarkey(elem, opts).type('Amrit.').pause(700).delete(100)
  .type(' a ETL Developer.').pause(700).delete(100)
  .type(' a Data Analyst.').pause(700).delete(100)
  .type(' a Coder/Programmer.').pause(700).delete(100)
  .type(' a Sports Fanatic.').pause(700).delete(100)
  .type(' a Foody.').pause(700).delete(100)
  .type(' Witty :)').pause(700).delete(100)
  .type(' a Traveler.').pause(700).delete(100)
  .type(' Competitive.').pause(700).delete(100)
  
  .type(' Amrit Raj. ');

malarkey(elem2, opts).pause(21000).type(' and I love building things with Code. ');
