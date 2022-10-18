#!/bin/bash
regex='(paul bar[iae]n|vint(en|on|) [sc][eu]rf|bob tayl[oe]r|kl(ei|ie)nr[oi]ck|first internet|illiac (iv|4)|d?arpanet|ucla in 1969|(to|for) (operate|live through|withstand|for|surviv(e|ing)) (a? ?nuclear|a?n? ?atomic|world war (3|III)|ww3)|(web|internet|www) (initially|started|began)|(web|www|internet) (was|was not|wasn.?t|is|isn.?t|is not) (invented|created|built|for|started|designed|initially|made))'

regtest() {
  echo $regex
  grep -Ei "$regex" << ENDL
Paul baran
Vint Cerf
Bob Taylor
arpanet
to withstand a nuclear attack
for surviving ww3
the internet was started for
the web was not invented to survive
www was for nuclear war
ENDL

}

real() {
  for i in 20*/*.zst; do
    p=$(basename $i)
    if [[ ! -e res/$p ]]; then
      echo $i :: $(date) 
      zstdcat --long=31 $i | pv -l | grep -iE "$regex" > res/$p
      #xzcat $i | pv -l | grep -iE "$regex" > res/$p
      #bzcat $i | pv -l | grep -iE "$regex" > res/$p
    else
      echo res/$p :: found
    fi
  done
}
real

