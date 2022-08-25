$url = "https://api.twilio.com/2010-04-01/Accounts/AC705c4a96adfbec3eeb75cc31caad3ff9/Messages.json"
$params = @{ To = "+541132551226"; From = "+19133585260"; Body = "Hello from Twilio" }
$secret = "a8f0c340e46b5140d44d70705f896b41" | ConvertTo-SecureString -asPlainText -Force
$credential = New-Object System.Management.Automation.PSCredential(AC705c4a96adfbec3eeb75cc31caad3ff9, $secret)
Invoke-WebRequest $url -Method Post -Credential $credential -Body $params -UseBasicParsing | ConvertFrom-Json | Select sid, body