<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## About
To-Do application that consists of very basic To-Do, very simple with just two Model which are Task and User. Generate model factory and then perform PHP unit testing for CRUD. 

## Testing
A user can read all the tasks [READ]

Run `vendor/bin/phpunit --filter a_user_can_read_all_the_tasks`

A user can read a single task [READ]

Run `vendor/bin/phpunit --filter a_user_can_read_single_task`

An authenticated user can create new task [CREATE]

Run `vendor/bin/phpunit --filter authenticated_users_can_create_a_new_task`

An unauthenticated user cannot create new task [CREATE]

Run `vendor/bin/phpunit --filter unauthenticated_users_cannot_create_a_new_task`

A task requires a title [VALIDATION]

Run `vendor/bin/phpunit --filter a_task_requires_a_title`

A task requires a description [VALIDATION]

Run `vendor/bin/phpunit --filter a_task_requires_a_description`

Authorized user can update the task [UPDATE]

Run `vendor/bin/phpunit --filter authorized_user_can_update_the_task`

Unauthorized user cannot update the task [UPDATE]

Run `vendor/bin/phpunit --filter unauthorized_user_cannot_update_the_task`

Authorized user can delete the task [DELETE]

Run `vendor/bin/phpunit --filter authorized_user_can_delete_the_task`

Unauthorized user cannot delete the task [DELETE]

Run `vendor/bin/phpunit --filter unauthorized_user_cannot_delete_the_task`

Finally, run full test suite. Everything should pass.

Run `vendor/bin/phpunit`