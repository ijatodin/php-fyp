#include <ESP8266WiFi.h>
     
const char* ssid =  "takdapatunifiketu@unifi";     // Wifi 
const char* pass =  "12345679"; // password wifi
const char* host = "128.199.235.16";


const char* id ="a1b1";
float voltage =2.6;
const char* stat ="50";
void setup()
{
   Serial.begin(115200);     
   Serial.println("Connecting to ");
   Serial.println(ssid);
   WiFi.begin(ssid, pass);
 
      while (WiFi.status() != WL_CONNECTED) 
     {
            delay(100);
            Serial.print("*");
     }
      Serial.println("");
      Serial.println("WiFi connected");
}

void loop()
{     
       Serial.print("Voltage: ");
       Serial.println(voltage);
       Serial.print("Status: ");
       Serial.println(stat);
   
   Serial.print("connecting to ");
    Serial.println(host);

    // WifiClient buat TCP connections
    WiFiClient client;
    const int httpPort = 80;
    if (!client.connect(host, httpPort)) {
        Serial.println("connection failed");
        return;
    }

 


    // Hantar request ke server
 client.print(String("GET http://fyp.seedboxijat.xyz/connect.php?") + 
                          ("&voltage=") + voltage +
                          ("&status=") + stat +
                          " HTTP/1.1\r\n" +
                 "Host: " + host + "\r\n" +
                 "Connection: close\r\n\r\n");
    unsigned long timeout = millis();
    while (client.available() == 0) {
        if (millis() - timeout > 1000) {
            Serial.println(">>> Client Timeout !");
            client.stop();
            return;
        }
    }

    // Baca reply dari server and tunjuk ke Serial
    while(client.available()) {
        String line = client.readStringUntil('\r');
        Serial.print(line);
        
    }

    Serial.println();
    Serial.println("closing connection");
 }
