# Drupal8 Kube deployment example


This is a work-in-progress and a demo only. Not intended for use by anyone but
the creator aware of the flawed baby she created.

## Getting Started

` kubectl create namespace`

## Usage

1. build the thing:
`docker build -t gcr.io/$GOOGLE_PROJECT/drupal8-kube:$NUM .`

2. push the thing to the gcloud registry:
`gcloud docker -- push gcr.io/$GOOGLE_PROJECT/drupal8-kube:$NUM`

3. Update the `deployment.yml` with the new image (the num should change).

4. Apply changes:
`kubectl apply --namespace=NAMESPACE -f deployment.yml --record`
`kubectl apply --namespace=NAMESPACE -f service.yml --record`
