# Json Web Tokens (JWT)

This folder I will try to cover the JWT, JWS, JWE, JWK, KWA in general and it's security in the attacker prespective as well as the developer prespective in the term of mitigation the vulnerability and will try to cover it in different programming language after explaining the mitigation logic. 

> All the refrences will be listed at the end of the aritcal for furter reading.

## Introduction to JWT

At first let's distinguish first between (JWT, JWS, JWE, JWK, JWA) and take a deep dive in each one to clarify it.

### Json Web Token:

Json Web Token is a URL safe compact cliams represented and encoded as Json objects that is used after that as payload to the JWS (Json Web Singnature) & JWE (Json Web Encryption) for enabling them to digitally sign it or integraty protect it using MAC (Message Authentication Code) and/or encypted. [`2`](#Refrences)


# Refrences
1. Introduction to JWT, JWS, JWE, JWA and JWK https://codecurated.com/blog/introduction-to-jwt-jws-jwe-jwa-jwk/
2. Abstract to JWT https://datatracker.ietf.org/doc/html/rfc7519?ref=codecurated.com