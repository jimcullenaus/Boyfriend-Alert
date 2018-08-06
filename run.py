#!/usr/bin/env python3

import RPi.GPIO as gpio
import time

gpio.setmode(gpio.BCM)
gpio.setwarnings(False)

gpio.setup(18,gpio.OUT)

for i in range(0,20):
    gpio.output(18,gpio.HIGH)
    time.sleep(0.3)
    gpio.output(18,gpio.LOW)
    time.sleep(0.3)
