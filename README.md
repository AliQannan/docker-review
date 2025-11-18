# docker-review
## To  pull image for docker repo 
```sh 
docker image pull  <image-name/> 
```

## To create container form image and interact with terminal bash
```sh 
docker create  -it <image-name/>  <command/>

```

### To run container 
```sh
docker start -i <container-name/>
```
### To stop container 
```sh
docker stop  <container-name/>
```
## To remove container 
```sh 
docker rm <container-id/>
```

### To  PULL  IMAGE ---> CREATE CONTAINER ---> RUN CONTAINER 
```sh
docker run <image-name/>
```
### To  PULL  IMAGE ---> CREATE CONTAINER ---> RUN CONTAINER ---> EXCUTE COMMAND
```sh
 docker run -it <image-name/> <command/> 
```
