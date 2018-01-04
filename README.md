this is a very basic example of how i use jtable.js with php.
i also created a js helper function inside of y_jtable_helper.js.
the example use of all of it is in index.php

to install edit config.php with your server details and run install.php

----------------------------------------------------------

action.php dose all the backend crud, can be used with diffrent tables.
the table must have a id primery key.

the class that handels all the crud is inside yapi/ycruc/jtable_actions.php
its depended on ycrud.php
it also uses my templating class (a very basic use).

--------------------------------

in the future ill create a detailed tutorial on how to use it.

-------------------------
the posts table js object is inside js/tables_objs

i created it using the softwere inside helper softwer. its cross platform.

the first field takes the colum names seperated by "," like "id,title,content"..etc.
click genrate this will genrate the js object jtable needs for fields attribute. 

---------------------------

if anything is unclear and you need help contact me:

https://programingstuff.wordpress.com/%D7%A6%D7%95%D7%A8-%D7%A7%D7%A9%D7%A8/