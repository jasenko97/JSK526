var getPyth = function() {
  var o = {a:1,b:1,c:1};
  var i=0;
  for ( o.a = 1; o.a <= 1000; o.a++ ) {
    	for ( o.b = 1; o.b <= 1000; o.b++ )	{
        for ( o.c = 1; o.c <= 1000; o.c++ )	{
          i++;
    			if ( o.a + o.b + o.c == 1000 &&
              Math.pow( o.c,2 ) == Math.pow(o.a,2) + Math.pow(o.b,2) ) {
              console.log( 'Durchläufe: ' + i, o );
    	        return o;
    			}
        }
    	}
  	}
}









var getPyth_faster = function() {
  var o = {a:1,b:1,c:1};
  var i=0;
  for ( o.a = 1; o.a <= 998; o.a++ ) {
    	for ( o.b = 1; o.b <= 500; o.b++ )	{
          i++;
          o.c = Math.pow( (Math.pow(o.a,2) + Math.pow(o.b,2)), 0.5 );
    			if ( o.a + o.b + o.c == 1000 ) {
              console.log( 'Durchläufe: ' + i, o );
    	        return o;
    			}
    	}
  	}
}
