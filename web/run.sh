#!/bin/bash
docker run --name web -i -t -p 80:80 -v /Volumes/Storage/Workspace/coinshot/web/htdocs:/var/www/htdocs web