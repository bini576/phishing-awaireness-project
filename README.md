<div align="center">

# 🎣 Phishing Awareness Educational Demo
### Interactive Security Training Simulation & Credential Harvesting Demonstration

[![JavaScript](https://img.shields.io/badge/JavaScript-ES6+-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Glossary/HTML5)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![Security: Educational](https://img.shields.io/badge/Category-Educational%20Awareness-blueviolet?style=for-the-badge&logo=shield)](https://github.com/bini576)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge)](https://opensource.org/licenses/MIT)

</div>

---

> [!CAUTION]
> ### ⚠️ STRICT ETHICS & LEGAL DISCLAIMER
> **THIS PROJECT IS FOR EDUCATIONAL, TRAINING, AND DEFENSIVE PURPOSES ONLY.**  
> This demonstration was developed solely to educate students, end-users, and enterprise personnel about social engineering vectors, credential theft mechanics, and how to spot deceptive digital indicators.  
> 
> **Never** host this application on public unauthenticated domains, **never** target individuals without explicit, signed authorization, and **never** collect, store, or monetize real user credentials. Unauthorized phishing activities violate national computer misuse acts and international cybersecurity legislation.

---

## 📌 Project Overview

Social engineering remains the number one attack vector leveraged in modern cyber breaches. Technical perimeter defenses frequently fail when human trust is exploited. 

The **Phishing Awareness Educational Demo** simulates a realistic login gateway to demonstrate the anatomical phases of a credential harvesting attack. Upon submitting credentials in this controlled sandbox, the simulated portal **does not store sensitive passwords**; instead, it immediately redirects the user to an **Interactive Post-Simulation Educational Debrief**. This debrief highlights exactly which red flags were present in the URL, SSL certificate, layout, and domain parameters, turning a simulated failure into an immediate learning opportunity.

---

## 🎯 Key Educational Features

- **Realistic Portal Simulation:** Demonstrates authentic login UI components, error states, and responsive styling mirroring typical corporate or academic portals.
- **Deception Indicator Showcase:**
  - Subtly altered domain patterns (typosquatting simulation).
  - Unverified HTTPS badges and fake security verification popups.
  - Urgency prompts ("Your account will be suspended within 24 hours!").
- **Zero-Storage Credential Handling:** Educational sandbox logic inspects form submission, sanitizes input in volatile memory without logging real plaintext passwords, and prevents data retention.
- **Immediate Educational Debrief:** Redirects the user to an awareness breakdown explaining:
  - 🔍 How to inspect URL headers and domain syntax.
  - 🔒 Why padlocks don't guarantee legitimacy (TLS certificates on malicious domains).
  - 🛡️ The critical importance of Multi-Factor Authentication (MFA / 2FA).
  - 🚨 Proper enterprise reporting procedures to internal SOC / Helpdesk.

---

## 🔄 How It Works (Simulation Flow)

```
[ User Clicks Link in Training Email ]
                 │
                 ▼
     [ Simulated Login Page ] 
    (Displays Deceptive Clues)
                 │
   [ User Enters Test Credentials ]
                 │
                 ▼
      [ Sanitized Request Handler ]
    (Zero-Storage / Educational Log)
                 │
                 ▼
  [ 💡 Interactive Learning Landing Page ]
- "You Fell for a Simulated Phishing Attack!"
- Detailed inspection of missed red flags
- Practical mitigation checklist (MFA, URL Check)
```

---

## 💻 Tech Stack

- **Frontend:** Vanilla JavaScript (ES6+), HTML5 Semantic Elements, Modern CSS3 (Flexbox/Grid, Responsive Design)
- **Local Server (Optional for hosting demo):** Node.js / Express or Python standard `http.server`

---

## 🚀 Installation & Local Execution

To run this awareness demonstration on a local, isolated environment:

### Option A: Using Python Built-in Server (Fastest)
```bash
# Clone the repository
git clone https://github.com/bini576/phishing-awaireness-project.git
cd phishing-awaireness-project

# Start a local HTTP server on port 8000
python3 -m http.server 8000
```
Open your browser and navigate to:
```
http://localhost:8000
```

### Option B: Using Node.js / NPX
```bash
npx serve .
```

### Option C: Direct Browser Opening
Simply double-click `index.html` or open it with your preferred web browser.

---

## 📸 Demo Walkthrough

<div align="center">

| 1. Simulated Login Interface | 2. Immediate Training Debrief |
|:---:|:---:|
| *(Realistic styling with simulated red flags)* | *(Interactive feedback highlighting user error)* |
| `![Simulated Login](docs/images/login_demo.png)` | `![Debrief](docs/images/debrief_demo.png)` |

</div>

---

## 🛡️ Core Security Lessons Taught

This demonstration forms the foundation for hands-on cybersecurity training modules:

1. **URL & Domain Anatomy:** Always inspect the Fully Qualified Domain Name (FQDN) rather than relying on page title or logo.
2. **Beware of False Urgency:** Phishers weaponize psychological triggers—fear, urgency, and authority.
3. **MFA Neutralization Defense:** Phishing resistance requires hardware security keys (FIDO2 / WebAuthn) or time-based OTP rather than simple SMS codes.
4. **Report, Don't Ignore:** Quick reporting allows enterprise SOC teams to null-route malicious domains campus-wide.

---

## 📄 License & Author

Distributed under the **MIT License**. Created by [Biniyam Ademasu Afework](https://github.com/bini576) for cyber security education and awareness advocacy.

- **Author:** Biniyam Ademasu Afework
- **Degree:** B.Sc. Cyber Security, Bahir Dar University
- **LinkedIn:** [linkedin.com/in/biniyam-ademasu](https://linkedin.com/in/biniyam-ademasu)
- **Email:** [admasubiniyam96@gmail.com](mailto:admasubiniyam96@gmail.com)
