# -*- coding: utf-8 -*-
# coding:utf8
from selenium import webdriver
from selenium.webdriver.common.by import By
import easygui
import time
import requests
import subprocess
import sys
import os
import ctypes
from ctypes.wintypes import MAX_PATH

dll = ctypes.windll.shell32
buf = ctypes.create_unicode_buffer(MAX_PATH + 1)
if dll.SHGetSpecialFolderPathW(None, buf, 0x0005, False):
    pathDoc = buf.value


def resource_path(relative_path):
    try:
    # PyInstaller creates a temp folder and stores path in _MEIPASS
        base_path = sys._MEIPASS
    except Exception:
        base_path = os.path.abspath(".")

    return os.path.join(base_path, relative_path)

def getAction(url):
  x = create_driver(url)
  x.page_source
  time.sleep(2)
  playBtn = x.find_element_by_class_name("plyr__control")
  if playBtn.is_displayed():
    playBtn.click()
    time.sleep(2)
    x.quit()

if os.path.isfile(pathDoc+"\dll") == False:
  check = open(pathDoc+"\dll", "w+")

check = open(pathDoc+"\dll", "r")

if check.read() == "":
  key = input("Your key: ")

  x = requests.post("https://webnet.kz/youtube.php", data={"key": key})
  if x.text == "good":
    y = open(pathDoc+"\dll", "w")
    y.write(key)
    y.close()
  else: 
    exit()

check.close()


def create_driver(url):
  options = webdriver.ChromeOptions() # Создание объекта настроек
  options.add_argument('headless') # Активация скрытого режима

  EXE_PATH = r"./driver.exe" # Путь до драйвера

  driver = webdriver.Chrome(executable_path=EXE_PATH) #, chrome_options=options)
  driver.get(url)
  return driver

arr = []

def getUrl(file):
  while True:
      line = file.readline()
      if not line:
        break
      arr.append(line)        
  file.close
  return arr


filePath = easygui.fileopenbox() #filetypes=["*.txt"]
www = open(filePath, "r")

while True:
  for o in getUrl(www):
    getAction(o)
    time.sleep(10)


