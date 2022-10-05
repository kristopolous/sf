#!/usr/bin/env python3
import json
import sys
import re


rec = {'min': [0], 'max': [0], 'diff': [0]}
fmt = ','.join(["{}"] * 4)

plot = [
    ('Paul Baran/RAND', r'( rand|baran)'),
    ('Bomb', r'(bomb|explosive|terrorism)'),
    ('Nuclear', r'(nuke|(nuclear|atomic) (exchange|war|attack)| war[\., ]|apocalypse|ww3)'),
    ('Decentralized', r'(central)'),
    ('Cost Reduction', r'(cheaper|affordable|lower cost|expensive)'),
    ('Research', r'(scien|for research|researchers|academic|at universit)'),
    ('Collaboration', r'(to share| contact| remote)')
]

print("<table><thead><tr><th>Year</th><th>Sample Size</th>", end='')
for m in plot:
  print("<th colspan=2>{}</th>".format(m[0]), end='')
print("</tr></thead><tbody>")


for year in range(2009, 2022): 
  with open("{}_all.txt".format(year)) as f:
    ttl_read = 0
    ttl_hit = 0
    ttl_point = [0] * 14
    for n in f:
      try:
        asjson = json.loads(n)
      except:
        print("Woooah! ({})".format(n))
        sys.exit(0)


      hit = False
      body = asjson.get('body')
      res = []

      ttl_read += 1
      negate = 0
      if len(body) < 3300 and re.search('(internet|arpanet)(,|. it|) (at|init|star|bega|orig|was|is)', body, re.IGNORECASE):
        ix = 0

        if re.search("((was|is) not|isn't|myth|false|incorrect)", body, re.IGNORECASE):
          negate = 1

        for m in plot:
          t = m[0] + str(negate)
          reg = m[1]
          if re.search(reg, body, re.IGNORECASE):
            hit = True
            ttl_point[ix * 2 + negate] += 1
            #res.append((t, True))
            #else:
            #res.append((t, False))

          ix += 1

        if hit:
          ttl_hit += 1
          #print(len(body), res)
          #print(fmt.format(*list(map(lambda x: asjson.get(x), ['ups','downs','author','body']))))
          #print("-----")
        else:
          pass
          #print("NOPE")
          #print(fmt.format(*list(map(lambda x: asjson.get(x), ['ups','downs','author','body']))))
          #print("-----")


    ttl_hit += 1
    print("<tr><td>{}</td><td>{}</td>".format(year,ttl_hit), end='')
    for x in ttl_point:
      per = min(400*x/ttl_hit,100)
      print("<td title={:d}% style='opacity:{:2.0f}%'></td>".format(int(per/4),per), end='')
    print("</tr>")

print("</tbody></table>")
