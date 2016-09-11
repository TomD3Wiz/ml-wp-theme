#!/bin/bash

set -e
set -x

if [ ! -d "dist" ]; then
mkdir dist
fi

if [ -e "dist/zerif-lite.zip" ]; then
rm -f dist/zerif-lite.zip
fi

(
	cd ..
	zip -r zerif-lite.zip zerif-lite
	mv zerif-lite.zip zerif-lite/dist
)