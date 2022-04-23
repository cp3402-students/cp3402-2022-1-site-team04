# cp3402-2022-1-site-team04
cp3402-2022-1-site-team04 created by GitHub Classroom
## Group Members 
- Daniel Mackenzie
- Naoki Da Costa
- Sandeep Kaur
- Liam Williams


## Guide to committing changes (Video tutorial)
(Part 1) How to setup git - https://www.youtube.com/watch?v=by774kRYcvs

### Steps from here on need to be done every time you wish to work on the repo

(Part 2) When you are ready to start work on the repo - https://www.youtube.com/watch?v=JZKnW9Ii6xs

"git pull origin main" just means to grab the latest files from Github. You need to do this EVERY time you 
start working on the project or you could be working on an old copy of the files.

"git checkout -b naoki" just means create a new branch called "naoki" and make sure all my changes are made in 
that branch. You should only need to only need to type this once. If you type it twice you might receive an 
error saying this branch already exists which you can just ignore.

(Part 3) How to push your changes to your Github branch - https://www.youtube.com/watch?v=aifZUT0rC6A

(Part 4) How to merge your branch with the main branch - https://www.youtube.com/watch?v=xs2dVjYEmgs


## Guide to committing changes (Text version)

There may be some situations where issues happen, but I believe this should be the way for us to all work on the same repository.

### Create your local repo

If you haven't yet, create a folder to store the local repository. You can do this manually in your file explorer or run the following in the console:

```shell
cd your/project/parent/directory
mkdir cp3402-2022-1-site-team04
cd cp3402-2022-1-site-team04
```

Once you have the folder created, setup the repository.

```shell
git init
git remote add origin https://github.com/cp3402-students/cp3402-2022-1-site-team04.git
```

### Pushing changes to the shared repo

Steps from here on need to be done every time you wish to work on the repo. Once you have completed your merge you restart from here to ensure you are pushing to the correct place.

```shell
git pull origin main
git checkout -b naoki # Replace with your name
```

From here you are working on your local personal branch. Make changes and commits as you normally would (I recommend just using the VSCode source control GUI for this stuff). Once you've finished with your work, press the button "Publish Branch" that shows there. This button pushes the branch to Github, so it is visible to everyone online.

Go to [the repo branches page](https://github.com/cp3402-students/cp3402-2022-1-site-team04/branches) and press "New pull request" next to your branch. Assuming there are no conflicts, you should be able to then just merge the branch. If there are any conflicts, please let me know and I will have a look and try sort them out.

## Guide to committing changes to the database
Use wp-db-migrate.
### Note: Before making any changes to the database make sure you pull the database from the staging server using wp-db-migrate or you risk overwriting someone else's work.
