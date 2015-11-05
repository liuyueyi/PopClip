#!/usr/bin/python
# -*- coding:utf-8 -*-
# python 脚本用于添加插件
import os
import time
import datetime
import sys

ltime = os.getenv('POPCLIP_TEXT')
stime = time.localtime(float(ltime))
strtime = time.strftime('%Y-%m-%d %H:%M:%S', stime)
print strtime, #保证不换行
