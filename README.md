This website is built using a static web page generator.
It is generated on Netlify and hosted there as static web page.

This is a community website, you are welcome to contribute.
[Learn how to contribute](https://github.com/CodeDesignInitiative/campy-web/blob/master/CONTRIBUTING.md).

## Tools used:

- Static Site Generator: [Jigsaw (PHP, Laravel)](https://jigsaw.tighten.co)
- Hosting: [Netlify](https://netlify.com)
- Git: [Github](https://github.com)
- CSS Framework: [Tailwind CSS (Utility-First)](https://tailwindcss.com)
- Media Player: [Plyr (JavaScript)](https://plyr.io/)

To run the site locally, you need the following tools:

- `Git`
- `Composer`
- `Browser of your choice`

## How to run site locally?

If you want to develop a feature or fix a bug, you need to run a local copy of the page.
Here is how to do that.

```bash    
git clone git@github.com:CodeDesignInitiative/campy-web.git
cd campy-web
composer install && npm install
npm run watch
```


# Docs

## Coaches
A list of the coaches helping at the CodeDesignCamps is placed on the [coaches page](https://code.design/coaches). Every coach can add his or her contact information, website and social media information aswell as his or her name.

### How to add yourself as a coach
Here is how to add yourself (or an other person) as a coach to the website.

1. Fork this repository and clone it to your local device and create a new branch for your addition
```bash
# using git
git clone https://github.com/YOUR_USERNAME/campy-web # replace YOUR_USERNAME with your username
git checkout -b add-coach-muster # replace muster with your name
```
2. Make sure that you (or the person you want to add) are/is allready known as a coach.
3. Get your personal information together and think about what you want to publish
	- [ ] Firstname and lastname
	- [ ] What are you doing in your job? (code,design,product)
	- [ ] One line about yourself
	- [ ] Github/Twitter account
	- [ ] Website
	- [ ] Profile image
4. Format your data in markdown like so using your favorite editor:
```markdown
---
firstname: Max
lastname: Mustermann
section: code design product
bio: Works at startup, loves to program and design. Webdev(PHP,HTML,CSS)
github: maxmuster
twitter: mustermax
website: https://example.com
image: https://github.com/example.png
---
```
5. Save the file to the coaches collection under `cdweb1801/source/_coaches/YOUR_LASTNAME.md`
6. Add, commit and push your changes
```bash
git status # shows you what has changed
git commit -am "Add: coach MUSTER"  # adds and commits your changes, also change MUSTER to your name
git push # sends your commit to github
```
7. On the website you can now start a pull request
8. Wait for an admin to review your PR
