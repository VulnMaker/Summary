# MAC (Message Authentication Code)

## What is MAC?

MAC is a process of ensureing the integraty of the message have not been tampered during the transfere between 2 parties. That done by useing symatric key encryption with shared key between the 2 parties that ensure no tampring happen to the data. 

## Purpose

The purpose of using MAC is to ensure the integraty and the Authenticity not confedintiality. In case you will add Encryption before or after conducting the MAC process that will result in adding the confidentiality to the process. 

> Conducting the Encryption before the the MAC process called (Interal error Code method). After the MAC process called (External Error Code method)

## MAC Elements

Message         : The message you want to send.
Key             : The Key that the MAC algorithm will use to create the MAC Value.
MAC Algorithm   : The Symatric algorism used in the process.
MAC Value       : The Ciphertext + Message

> The MAC Process require the shared key is established already in the both party before starting the process.

![MAC Process without encryption](![MAC Process without encryption](https://media.geeksforgeeks.org/wp-content/uploads/MAC-without-encryption.png))

## When we

# Refrences
1.  [Intro to MAC](https://www.geeksforgeeks.org/message-authentication-codes/)
2. [How MAC Work](https://www.geeksforgeeks.org/how-message-authentication-code-works/)
