#!/usr/bin/env python
import sys
file_name = sys.argv[1]

lines = open(file_name,'r').readlines()
for line in lines:
    fo = open('urls.txt','a')
    fo.write('https://'+line)