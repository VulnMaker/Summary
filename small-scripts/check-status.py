#!/usr/bin/env python
import requests,sys
import urllib3
urllib3.disable_warnings()
def requester(url):
	headers = {"User-Agent":"Mozilla/5.0 (X11; Linux x86_64; rv:68.0) Gecko/20100101 Firefox/68.0",
	"Accept":"text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
	"Accept-Language":"en-US,en;q=0.5",
	"Accept-Encoding":"gzip, deflate",
	"Connection":"keep-alive",
	"Cash-Control":"max-age=0",
	"Content-Type":"application/x-www-form-urlencoded",
	"Referer":"https://www.google.com"}
	try:
		request = requests.get(url,headers=headers, timeout=5)
	
		if request.status_code == (200 or 301 or 302):
			print (request.url)
	except Exception as e:
		pass

if __name__ == '__main__':
	print ("[*]starting.......")
	f=open(sys.argv[1]).readlines()
	for link in f:
		url=link.strip()
		requester(url)
