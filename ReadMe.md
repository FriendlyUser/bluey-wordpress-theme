Shutdown and cleanup
The command `docker-compose down` removes the containers and default network, but preserves your WordPress database.

The command `docker-compose down --volumes` removes the containers, default network, and the WordPress database.

https://stackoverflow.com/questions/42273823/docker-compose-wordpress-mysql-cant-connect



Making files uploadable


```
chown -R www-data:www-data wp-content
```

For apache, changing ownership

Personal setup, styles compiled using node package, allow them to be ungitignored at the very end