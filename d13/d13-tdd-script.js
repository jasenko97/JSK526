var add = function(a,b) {
  // , in . umwandeln
  a = a.toString().replace( ',', '.' );
  b = b.toString().replace( ',', '.' );

  // wandle String in Number
  a = a * 1;
  b = b * 1;

  // Addieren
  var sum = a + b;
  return sum;
};

var createNumbers = function() {
  var obj = {};
  var indexes = ['a','b','c','d','e','f','g'];
  for ( var i in arguments )  {
      obj[ indexes[i] ] = arguments[i];
  }
  return obj;
}
