# -*- coding: utf-8 -*-
# coding:utf8
from selenium import webdriver
from selenium.webdriver.common.by import By
import easygui
import time
import requests


import sys
import os

def resource_path(relative_path):
    try:
    # PyInstaller creates a temp folder and stores path in _MEIPASS
        base_path = sys._MEIPASS
    except Exception:
        base_path = os.path.abspath(".")

    return os.path.join(base_path, relative_path)



check = open("dll", "r")
if check.read() == "":
  
  key = input("Введите ключ: ")

  x = requests.post("https://webnet.kz/youtube.php", data={"key": key})
  if x.text == "Успешная активация":
    y = open("dll", "w")
    y.write("check")
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


filePath = easygui.fileopenbox() #filetypes=["*.txt"]
file = open(filePath, "r")

while True:
    line = file.readline()
    if not line:
        break
    x = create_driver(line)
    x.page_source
    time.sleep(20)
    playBtn = x.find_element_by_class_name("ytp-play-button")
    if playBtn.is_displayed():
      playBtn.click()
      time.sleep(40)
    x.quit()

file.close



