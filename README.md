# PHP on Docker and Kubernetes

A small PHP web application packaged as a container and deployed with Kubernetes manifests, including an Amazon EKS practice workflow.

**Container image:** [kapalulz/k8sphp](https://hub.docker.com/repository/docker/kapalulz/k8sphp/general)

## Repository layout

```text
.
├── Dockerfile
├── index.php
├── deployments/
├── pods/
├── service/
├── cluster-public.yaml
└── mycluster.yaml
```

## Build locally

```bash
docker build -t k8sphp:local .
docker run --rm -p 8080:80 k8sphp:local
```

Open [http://localhost:8080](http://localhost:8080).

## Deploy to Kubernetes

Review namespaces, image references, ports, resource settings, and service exposure before applying the manifests.

```bash
kubectl apply -f deployments/
kubectl apply -f service/
kubectl get pods
kubectl get services
```

## Clean up

```bash
kubectl delete -f service/
kubectl delete -f deployments/
```

> The cluster configuration files are learning artifacts. Validate them against the Kubernetes and EKS versions used by your environment.
