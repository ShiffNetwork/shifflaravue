# Projet Laravel Vue.js/Inertia

Bienvenue à ShiffLaravue qui utilise le projet Laravel Vue.js/Inertia ! Ce dépôt contient le code source d'une application web qui combine la puissance de Laravel, Vue.js, et Inertia.

## Prérequis

Avant de pouvoir exécuter ce projet, assurez-vous que les logiciels suivants sont installés sur votre système :

1. **Docker:** Vous pouvez télécharger Docker depuis [le site officiel de Docker] (https://www.docker.com/get-started).

## Démarrage

Suivez les étapes suivantes pour configurer et exécuter le projet :

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/ShiffNetwork/shifflaravue.git
   cd shifflaravue

2. **Démarrer les conteneurs Docker**
    ``bash
    docker-compose up

3. **Migrer et ensemencer la base de données**
    ``bash
    php artisan migrate --seed

4. **Démarrer le serveur Laravel**
    ``bash
    php artisan serve

5. **Installer les dépendances JavaScript et compiler les actifs du frontend**
    ``bash
    npm install
    npm run dev


## YOU DID IT ! !!
Vous pouvez maintenant accéder à votre application en visitant http://localhost:8000 dans votre navigateur web.

Traduit avec www.DeepL.com/Translator (version gratuite)