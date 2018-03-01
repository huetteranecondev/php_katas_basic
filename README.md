# Temperature Controller - PHP Unit Testing Kata 
Unit Testing &amp; TDD Training Project for PHP Developers

## Introduction
This training consists of two parts:
1. Understanding and applying test doubles
2. Understanding and applying Test Driven Development

The task is to implement a temperature controller that adjusts the temperature of an air condition based the temperature read by a sensor.

## Practice 1 - The production code
Create a temperature controller that provides the following functionality:
- Read the temperature from a temperature Sensor
- Adjust the air condition depending on the temperature read from the sensor and defined minimum and maximum threshold values

### General Conditions and Restrictions
- There shall be a sensor that delivers the current temperature as double based on random values
- There is an air condition that either keeps the temperature or increases or decreases the temperature by one degree based on a given action
- The air condition accepts the actions increase, decrease and keep
- The sensor must NOT provide options to set the temperature from the application, it's a senor and only measures the temperature :-)

## Practice 2 - Implement unit tests
- Implement unit tests for the Air Condition and TemperatureController logic
- Discuss potential problems with the current design and try to overcome them with corresponding refactoring and/or testing

### Practice 3 - Test driven development
- See [practice_03_tdd.md](https://github.com/huetteranecondev/temperaturecontroller/blob/master/practice_03_tdd.md)

## Setup
The basic skeleton includes the empty TemperatureController and the empty TemperatureControllerTest class.
The composer dependencies are set up and ready to write production and unit test code
