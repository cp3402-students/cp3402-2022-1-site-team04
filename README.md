# cp3402-2022-1-site-team04
cp3402-2022-1-site-team04 created by GitHub Classroom
## Group Members 
- Daniel Mackenzie
- Naoki Da Costa
- Sandeep Kaur

Guide to committing changes
There may be some situations where issues happen, but I believe this should be the way for us to all work on the same repository.

Create your local repo
If you haven't yet, create a folder to store the local repository. You can do this manually in your file explorer or run the following in the console:

cd your/project/parent/directory
mkdir cp3402-2022-1-site-team04
cd cp3402-2022-1-site-team04
Once you have the folder created, setup the repository.

git init
git remote add origin https://github.com/cp3402-students/cp3402-2022-1-site-team04.git
Pushing changes to the shared repo
Steps from here on need to be done every time you wish to work on the repo. Once you have completed your merge you restart from here to ensure you are pushing to the correct place.

git pull origin main
git checkout -b naoki # Replace with your name

# If you're working with VSCode and are running these commands from a separate terminal, you can use below to open it in the program
code .
From here you are working on your local personal branch. Make changes and commits as you normally would (I recommend just using the VSCode source control GUI for this stuff). Once you've finished with your work, press the button "Publish Branch" that shows there. This button pushes the branch to Github, so it is visible to everyone online.

Go to the repo branches page and press "New pull request" next to your branch. Assuming there are no conflicts, you should be able to then just merge the branch. If there are any conflicts, please let me know and I will have a look and try sort them out.

Once the branch has been merged, you can then delete the branch from that same branches page, since all updates are now in the main branch. To remove the branch from your local repo, run this:

git checkout main
git branch -d naoki # Replace with your name
If you want to then do more work on it another time, simply start again from the start of this section (Pushing changes to the shared repo) and repeat the steps.
