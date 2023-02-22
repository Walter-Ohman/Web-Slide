#!/usr/bin/env python3

import os
import pdf2image
import glob
import time

base_dir = os.path.abspath(os.path.dirname(__file__))

imglist = []

old = glob.glob(os.path.join(base_dir,"imgs","*"))

imgs = pdf2image.convert_from_path(os.path.join(base_dir,"uploads","test.pdf"))

for f in old:
	os.remove(f)

for i in range(len(imgs)):
    imgs[i].save(os.path.join(base_dir,"imgs",'page'+str(i)+'.jpg'), 'JPEG')

filelist = [f for f in os.listdir(os.path.join(base_dir,"imgs")) if os.path.isfile(os.path.join(os.path.join(base_dir,"imgs", f)))]

filelist.sort()

print(filelist)
