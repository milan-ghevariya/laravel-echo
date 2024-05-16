
## Broadcast with Socket

I was created this project for testing purpose. in this i was demonstrated to laravel echo, 
broadcast event, also use socket.io for receive event on frontend side.

## How to use

if you want to create like this type of project, then you can get idea from this projects.

1. Clone repository
2. ```composer install``` run this command.
3. you can check with successfully setup using this command ```php artisan serve```.
4. now run ```npm install``` command for install node module and package, make sure node.js
was installed in your machine.
5. you can change ```laravel-echo-server.json``` file as per your configuration requirement.
if you want to generate new file then delete this file and run this command  
```laravel-echo-server init```.
6. after created laravel echo server then after start this server using  this  command     ```laravel-echo-server start```.
7. if you run this project on local pc then install and run ```redis``` server or if you have 
   dedicated or vps server then install in it and start.
8. now run the ```npm run dev``` command.

now you can run your project on browser and send event using run this url
```/send```, and you can see on received or not this event in this url ```/receive```

if you have more query or any doubt then  you  can  contact  me  on  my  ```skypee :: milanghevariya1996```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
