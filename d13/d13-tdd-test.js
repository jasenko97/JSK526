QUnit.test( 'mein erster Test', function(assert) {
  assert.ok( 1 == '1', 'automatische Typumwandlung' );
  assert.notOk( 1 === '1', 'keine Typumwandlung bei exakt gleich' );
});

QUnit.test( 'Rechenfunktionen', function(assert) {

  assert.equal( add(2,3), 5, 'Funktion Addieren' );
  assert.equal( add('2','3'), 5, 'Addieren inkl. Typumwandlung'  );
  assert.ok( isNaN( add('a', 1) ), 'Addieren mit nicht nummerischen Werten' );
  assert.equal( add(-1,2), 1, 'Addieren mit negativen Werten' );
  assert.equal( add( 1.5, 1 ), 2.5, 'Addieren mit Kommazahlen' );
  assert.equal( add( '1,5','0,2'), 1.7, 'Addieren mit Kommazahlen mit , ' );

});

QUnit.test( 'Zahlenobjekt', function(assert) {

  assert.deepEqual( createNumbers(1,2,3), {a:1,b:2,c:3}, 'Zahlenobjekt 3 Werte' );
  assert.deepEqual( createNumbers(1,2), {a:1,b:2}, 'Zahlenobjekt 2 Werte' );
  assert.deepEqual( createNumbers(1,2,3,4), {a:1,b:2,c:3,d:4}, 'Zahlenobjekt 2 Werte' );


});
