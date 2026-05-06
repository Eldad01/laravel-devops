# Architecture DevOps

## Infrastructure Globale

Utilisateur
↓
GitHub Repository
↓
GitHub Actions (CI/CD)
↓
Docker Build
↓
Docker Hub
↓
VPS Ubuntu Contabo
↓
Container Docker Laravel
↓
Internet

---

## Description des composants

### GitHub

Stockage du code source.

---

### GitHub Actions

Pipeline CI/CD automatique :

- tests
- build Docker
- push image
- déploiement

---

### Docker

Containerisation de l’application Laravel.

---

### Docker Hub

Stockage des images Docker.

---

### VPS Contabo

Serveur Linux Ubuntu public hébergeant l’application.

---

### Laravel

Application web PHP déployée dans un conteneur Docker.

---

## Ports utilisés

| Port | Usage |
|---|---|
| 22 | SSH |
| 80 | HTTP |

---

## Sécurité

- Firewall UFW
- Utilisateur non-root
- Déploiement automatisé
- SSH sécurisé

---

## Déploiement

Chaque git push déclenche automatiquement :

1. Build
2. Tests
3. Push Docker
4. Déploiement VPS

---

## Objectif

Automatiser totalement le cycle de déploiement d’une application web.
