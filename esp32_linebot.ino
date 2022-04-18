//Design by Nur Ahmad Dwi Wibowo
//search my repo on github @wiwidnadw

#include <WiFiClientSecure.h>
#include <HTTPClient.h>
WiFiClientSecure client;

//set WiFi Connection
const char* ssid     = "Wiwid"; 
const char* password = "Wiwid1230";
String url = "https://digitalneeringserver.000webhostapp.com/command.txt"; //your hosting address

//set output pin
int ledpin1 = 26;
int ledpin2 = 27; //<sign your pin>

String command;
HTTPClient http;
String get = "command.txt";


void setup() {
  
  Serial.begin(115200);
  delay(100);

  //init pin as output
  pinMode(ledpin1,OUTPUT);
  pinMode(ledpin2,OUTPUT);
  
 //init WiFi Connection
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    Serial.println("Generate connection, please wait");
    delay(400);
  }
  Serial.print("conected to ");
  Serial.println(ssid); 
}
 



void loop() {
  http.begin(url);
  
  int httpCode = http.GET();
  if (httpCode == 200) {
    command = http.getString();
    Serial.println(command);
  }
 if (command == "led1 on") {
  digitalWrite(ledpin1, HIGH);
  delay(100);
  
 }
 if (command == "led1 off") {
  digitalWrite(ledpin1, LOW);
  
 }
 if (command == "led2 on") {
  digitalWrite(ledpin2, HIGH);
  delay(100);
  
 }
 if (command == "led2 off") {
  digitalWrite(ledpin2, LOW);
  
 } 
delay (600);
}
