steps to create git hub 
1) create one account
2) download git for windows
3) create one project in git hub copy that code and open github cmd
4) cmds
------> Clone the project

C:\xampp\htdocs>git clone https://github.com/Sindhu-Chinnaswamy31/ciproject.git
Cloning into 'ciproject'...
remote: Enumerating objects: 3, done.
remote: Counting objects: 100% (3/3), done.
remote: Compressing objects: 100% (2/2), done.
remote: Total 3 (delta 0), reused 0 (delta 0), pack-reused 0
Receiving objects: 100% (3/3), 983.71 KiB | 4.05 MiB/s, done.

---------> add to git
C:\xampp\htdocs>cd ciproject
C:\xampp\htdocs\ciproject>git add .

------------------------->like below message it wil display

warning: in the working copy of 'LICENSE', LF will be replaced by CRLF the next time Git touches it
warning: in the working copy of 'README.md', LF will be replaced by CRLF the next time Git touches it

------------------------> commit cmd
C:\xampp\htdocs\ciproject>git commit -m "Empty code pushed"

------>it will throw error so first set user

C:\xampp\htdocs\ciproject>git config --global user.email "sindhucswamy@gmail.com"

C:\xampp\htdocs\ciproject>git config --global user.name "sindhu"

C:\xampp\htdocs\ciproject>git commit -m "Empty code pushed"
[main 10ceb75] Empty code pushed

------>check your branch main/master

C:\xampp\htdocs\ciproject>git commit -m "Empty code pushed"
On branch main
Your branch is ahead of 'origin/main' by 1 commit.
  (use "git push" to publish your local commits)

nothing to commit, working tree clean

------>check your branch main/master
C:\xampp\htdocs\ciproject>git branch
* main

---------------->checkout

C:\xampp\htdocs\ciproject>git checkout main
Already on 'main'
Your branch is ahead of 'origin/main' by 1 commit.
  (use "git push" to publish your local commits)

---------------------> push changes 

C:\xampp\htdocs\ciproject>git push origin main
info: please complete authentication in your browser...
Enumerating objects: 786, done.
Counting objects: 100% (786/786), done.
Delta compression using up to 4 threads
Compressing objects: 100% (751/751), done.
Writing objects: 100% (785/785), 877.37 KiB | 1.24 MiB/s, done.
Total 785 (delta 194), reused 0 (delta 0), pack-reused 0
remote: Resolving deltas: 100% (194/194), done.
To https://github.com/Sindhu-Chinnaswamy31/ciproject.git
   d59027b..10ceb75  main -> main

C:\xampp\htdocs\ciproject>git clone https://github.com/Sindhu-Chinnaswamy31/ciproject.git
Cloning into 'ciproject'...
remote: Enumerating objects: 791, done.
remote: Counting objects: 100% (791/791), done.
remote: Compressing objects: 100% (561/561), done.Receiving objects:   6% (48/791)
remote: Total 791 (delta 195), reused 784 (delta 194), pack-reused 0
Receiving objects: 100% (791/791), 1.82 MiB | 3.72 MiB/s, done.
Resolving deltas: 100% (195/195), done.
Updating files: 100% (662/662), done.

-----> pull from github

C:\xampp\htdocs\ciproject>git pull origin main
remote: Enumerating objects: 4, done.
remote: Counting objects: 100% (4/4), done.
remote: Compressing objects: 100% (2/2), done.
remote: Total 3 (delta 1), reused 0 (delta 0), pack-reused 0
Unpacking objects: 100% (3/3), 959 bytes | 59.00 KiB/s, done.
From https://github.com/Sindhu-Chinnaswamy31/ciproject
 * branch            main       -> FETCH_HEAD
   10ceb75..5c9cb64  main       -> origin/main
Updating 10ceb75..5c9cb64
Fast-forward
 pushfile.php | 1 +
 1 file changed, 1 insertion(+)
 create mode 100644 pushfile.php

C:\xampp\htdocs\ciproject>git pull origin main
From https://github.com/Sindhu-Chinnaswamy31/ciproject
 * branch            main       -> FETCH_HEAD
Already up to date.

C:\xampp\htdocs\ciproject>git push origin main
Everything up-to-date

-------------------> push single file 
C:\xampp\htdocs\ciproject>git add sindhutestadd.txt

C:\xampp\htdocs\ciproject>git commit -m "Add sindhutestadd.txt"
[main efbb63f] Add sindhutestadd.txt
 1 file changed, 0 insertions(+), 0 deletions(-)
 create mode 100644 sindhutestadd.txt

C:\xampp\htdocs\ciproject>git push origin main
Enumerating objects: 4, done.
Counting objects: 100% (4/4), done.
Delta compression using up to 4 threads
Compressing objects: 100% (2/2), done.
Writing objects: 100% (3/3), 280 bytes | 93.00 KiB/s, done.
Total 3 (delta 1), reused 0 (delta 0), pack-reused 0
remote: Resolving deltas: 100% (1/1), completed with 1 local object.
To https://github.com/Sindhu-Chinnaswamy31/ciproject.git
   5c9cb64..efbb63f  main -> main
