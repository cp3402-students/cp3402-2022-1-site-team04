[//]: # (Describe your development and deployment workflow in enough detail that a)

[//]: # (new team member or someone taking over the project could follow to successfully develop theme)

[//]: # (updates locally, then test and deploy them to your staging and live sites. This should include aspects such as project)

[//]: # (management, version control, testing and automation. Do not provide private details like passwords.)

# Deployment
## Team members to contact for more information

* Footer, widget, hosting, Git - Daniel
* Database and theme migration, Git, CSS - Naoki
* Header - Liam
 
## Introduction
Jazz Club is a theme designed for sites focused around Jazz either as a hobby or passion. It is based on the starter theme Understrap and was developed by a small group of students.

## Production Deployments
* Bitnami WordPress for local hosting
* An IDE such as Visual Studio Code
* Git and GitHub for a cloud-based version control and repository hosting
* WP Sync DB and WP Sync DB Media Files addon for database migration
* WP Pusher for pulling theme updates from GitHub to the staging/production server

### Setup
* Clone GitHub repository https://github.com/cp3402-students/cp3402-2022-1-site-team04.git into you chosen IDE (see README for more details)
* (Optional) use mklink /j connect you IDE to your Local hosting
* Activate theme in you local hosting
* Install the necessary plugins for database and theme migration


## Staging Deployments
We suggest for most testing to be done on a local host (bitnami is recommended) and then push to GitHub where the code will be reviewed and if approved it will automatically be merged with the staging site theme (Google cloud platform WordPress site) for further testing until it is ready to be migrated to the production server (Azure wordPress site).


