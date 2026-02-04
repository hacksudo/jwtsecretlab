# JWT Weak Secret Lab 🔐

A simple educational PHP lab that demonstrates **JWT (JSON Web Token) weak secret vulnerability** and how attackers can forge admin tokens after cracking a weak secret key.

> ⚠️ This project is for **learning and ethical security training only**.

---

## 📌 Objective

Understand how insecure JWT implementations with **weak secrets** can allow attackers to:

- Crack the secret key using dictionary attacks
- Forge valid tokens
- Escalate privileges to **admin**
- Access hidden flags / restricted areas

---

## 🧠 Concept

The application:

- Generates JWT tokens using **HS256**
- Uses a weak secret key: `secret123`
- Verifies signature before granting admin access
- Displays a **FLAG** only if the token is correctly signed and role = admin

---
## 🗂 Project Structure

```
jwt-lab/
│
├── jwt.php        # JWT creation & verification logic
├── login.php      # Generates user token
├── admin.php      # Admin access & flag display
└── README.md
```

---

## ⚙️ How It Works

### Normal User
- Receives token with role = `user`
- Signature valid
- Access denied on admin page

### Attacker Without Secret
- Modifies payload to `admin`
- Signature invalid
- Access denied

### Attacker After Cracking Secret
- Re-signs token using `secret123`
- Signature valid
- Role = `admin`
- **FLAG SHOWS**

---

## 🔑 Weak Secret
secret123

This is intentionally weak to allow tools like:

- `jwt-hack`
- `hashcat`
- `john the ripper`
- custom scripts

---

## 🚀 Setup

### Requirements
- PHP 7+
- Apache / XAMPP / Nginx / Localhost

### Run
1. Copy files into `htdocs` or web root
2. Start server
3. Open `login.php`
4. Use generated token
5. Try accessing `admin.php`

---

## 🧪 Learning Outcomes

- JWT structure (Header.Payload.Signature)
- Base64URL encoding
- HMAC SHA256 signing
- Signature verification importance
- Privilege escalation attacks
- Weak secret exploitation

---

## ❗ Important Note

This lab is **intentionally vulnerable**.  
Do **NOT** use this code in production environments.

---

## 🛡 How to Fix in Real Applications

- Use **strong random secrets**
- Use **RS256 (public/private keys)**
- Rotate secrets periodically
- Validate expiration & issuer
- Use secure libraries instead of custom code

---

## 📚 References

- OWASP JWT Cheat Sheet  
- PortSwigger JWT Labs  
- RFC 7519 – JSON Web Token

---

## 🏁 Flag Example
FLAG{JWT_ADMIN_ACCESS}

---

## Developer

**Vishal Waghmare**  
Cyber Security Analyst Developer & Trainer 
**Amey Dubey**
Cyber Security Analyst & Developer

---

## License

For **Educational Use Only**


Cyber Security Researcher | Ethical Hacker | CTF & Lab Developer
Founder – **Hacksudo**

---

### 🌐 Connect with Me

* 📸 **Instagram:** [@realvilu](https://instagram.com/realvilu)
* 💼 **LinkedIn:** [linkedin.com/in/realvilu](https://www.linkedin.com/in/realvilu/)
* 📘 **Facebook:** [facebook.com/realvilu](https://www.facebook.com/realvilu)
* 🌍 **Website:** [https://www.hacksudo.com](https://www.hacksudo.com)

---

### 🧪 Labs & Platforms

* 🧠 **VulnHub Series:**
  👉 [Hacksudo on VulnHub](https://www.vulnhub.com/series/hacksudo,444)

---

### ✍️ Writing & Research

* ✒️ **Medium:** [hacksudo.medium.com](https://www.hacksudo.medium.com)
* 📝 **Blog:** [leetvilu.blogspot.com](https://www.leetvilu.blogspot.com)

## ⚠️ Disclaimer

This software is created **strictly for educational and research purposes.**
The author is **not responsible** for any misuse.
Run only in controlled environments.

---

## ⭐ Support & Credits

Made for the cybersecurity community by **Hacksudo**.
If you like the project, ⭐ star the repository on GitHub!

---


