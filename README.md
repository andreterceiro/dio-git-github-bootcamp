# DIO - Github Certification


## Introduction

As I have some knowledge in Git, I will register here only some notes. As you can see [here](https://www.terceiro.com.br/git.html?nocache=1), I am teacher of a Git course in Udemy.


### git remote set url command

Teacher used a command doing the same thing that I know to do, but in a different way. To me is normal or:

- Clone the SSH address of the repository
- If the `HTTPS` address of the repository was cloned, is normal to me remove the `HTTPS` address and set the `SSH` address with the commands:

```
git remote rm origin
git remote add origin <ssh address>
```

I am considering that the person wanna register the addresses with the keyword `origin But the person, if want, can register with a different keyword. Example:

```
git remote add batatinha <ssh address>
```

But if the person do that, he/she will need to push using this keyword, like:

```
git push batatinha main
```

Supposing that the person wanna push to the branch main.

You can see here the command teacher used:

![Git remote set url command](images/git-remote-set-url.png)

```
git remote set url <ssh-address>
```

After this command is only needed a simple `git push`.


### comparing "git branch -m" to "git branch -M"

I made [this video](https://youtu.be/luh0hxxJWoY) to explain the difference.


### git push -u origin master ("origin master" - both examples)

I made [this video](https://youtu.be/Qic96PMxTw4) talking about `git push` with the parameter `-u`.


### gi branch batatinha ("batatinha" is an example)

I used to create a branch and checkout it with the command ("batatinha" is an example of branch name):

```
git checkout -b batatinha
```

But is possible to only create a branch without passing to use it. This previous command creates a branch (as the following command) **and checkouts it** (the next command don't do it). The command to only create a branch is:

```
git branch batatinha
```

Remember, "batatinha" is only an example of a branch name.

The point in the tree of commits is the same in both cases, ok?


### Releases in Github

I explain in [this video](https://youtu.be/OWwOx51X8EM).


### Gists in Github

I created [this video](https://youtu.be/5FhYrjc4_EQ) to explain the concept.


### Issues in Github

I created [this video](https://youtu.be/r3ta36dhz8A) to explain the concept.


### Wiki in Github

I created [this video](https://youtu.be/Kh14BV8y4Vw) to explain the concept.


### A little comments about Markdown

> This way, with a ">" symbol, I can cite something.


### Github Emojis

Please see [this page](https://gist.github.com/roachhd/1f029bd4b50b8a524f3c).

Trying: :smile: (please see in Github)


### Adjusting the size of an image

Teacher explained how to adjust the size of an image. Instead using the Makdown syntax to add an image (`![]()`), you can insert with the HTML tag `img`, set the source of the image (normal, with the parameter `src`) and set the parameters `width` or `height` of the image (inside the tag img).


### Github stats

Teacher recomended [this link](https://github.com/anuraghazra/github-readme-stats).

There I got this code (with smal adjusts) to generate a stats card:

`![Andre's GitHub stats](https://github-readme-stats.vercel.app/api?username=andreterceiro&show_icons=true&theme=radical)`


![Andre's GitHub stats](https://github-readme-stats.vercel.app/api?username=andreterceiro&show_icons=true&theme=radical)

I made [this video](https://youtu.be/VU5lpIVE1Zc) about this question.


## Github accounts

There is three types of Github accounts:

- Personal;
- Organization;
- Enterprise.