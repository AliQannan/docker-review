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
docker stop -i <container-name/>
```