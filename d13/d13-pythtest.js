QUnit.test( 'Spezielle Werte für Pythagoras mit Funktion', function(assert) {

  var start = Date.now();
  x = getPyth_faster();
  var duration = Date.now() - start;

  //a,b,c ganze positive Zahlen
  assert.ok( isFinite( x.a ) && x.a > 0 && x.a == Math.floor( x.a ), 'a ist OK' );
  assert.ok( isFinite( x.b ) && x.b > 0 && x.b % 1 == 0, 'b ist OK' );
  assert.ok( isFinite( x.c ) && x.c > 0 && x.c == Math.floor( x.c ), 'c ist OK' );

  // a + b + c = 1000
  assert.equal( x.a+x.b+x.c, 1000, 'a+b+c=1000' );

  //a² + b² = c²
  assert.equal( Math.pow( x.a, 2) + Math.pow( x.b, 2), Math.pow( x.c, 2), 'a² + b² = c²' );

  // Scriptdauer < 1s
  assert.ok( duration < 100, 'schneller als 100ms' );

});
