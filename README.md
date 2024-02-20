  

Template for a Laravel 10.x + SCSS + Boostrap 5.x
Template to generate a new standard and simple project using Laravel 10.x, Bootstrap 5.x and SCSS (SASS with SCSS Syntax).

Steps to build another template just like this one:
Remove POSTCSS from our application npm remove postcss

Execute npm i

Install SASS npm i --save-dev sass

Update both css file and folder to scss:

Rename resources/css into resources/scss
Rename app.css into app.scss
Edit vite.config.js file:

      export default defineConfig({
          plugins: [
              laravel({
                  input: [
                  'resources/scss/app.scss',
                  'resources/js/app.js',
              ],
              refresh: true
          }),
          ],

          resolve: {
              alias: {
                  '~resources' : '/resources/',
              }
          }
      });
Add import '~resources/scss/app.scss' to resources/app/js

Add @vite('resources/js/app.js') to the pages that want to implement it (layouts included, eventually)

Add to resources/app/js this block of code to allow the correct renderization of our images

  import.meta.glob([
      '../img/**'
  ])
Add package-lock.json to .gitignore file

Install and configure Bootstrap:

Install both bootstrap and popperjs packages npm i --save bootstrap @popperjs/core
Add bootstrap js via import import * as bootstrap from 'bootstrap'; to our resources/app.js
Add boostrap scss via @import @import "../../node_modules/bootstrap/scss/bootstrap"; to our resources/app.scss
Steps to use this project correctly:
Open this repository and click on Use this template ---> Create a new repository
Clone the repository wherever you want to develop, e.g. VS Code, VSCodium, ecc.
Open the cloned folder with a terminal
Copy and paste the .env.example file and rename it into .env without removing the env.example file
Run composer install to install all our composer packages
Run php artisan key:generate to generate our custom application key
Run npm i to install all our npm packages
Run on two separeted terminals:
run npm run dev to build iteratively our front-end packages and code
run php artisan serve to build iteratively our back-end packages and code
Start changing the world with your oustanding code!
