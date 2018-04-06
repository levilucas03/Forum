# Some elements I have picked up from researching

## Model Factories 
You can use this file to produe fake content, very simular to seeder but you can run below some functions to populate your data 

Create 50 Threads in the fucntion it also creates the user for these two
```
$threads = factory('App\Thread', 50)->create();
```
Create some threads 
```
$threads->each(function ($thead) { factory('App\Reply', 10)->create(['thread_id' => $thread->id]); });
```