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