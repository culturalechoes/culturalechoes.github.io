#!/usr/bin/env bash
FILEPATH=$1
if [ -z "$2" ]; then
        NAME=${FILEPATH##*/}
        NAME=${NAME%%.*}
else
NAME=$2
fi

cat <<EOF
        <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
          <div class="card d-block border-none">

            <div class="row">
              <div class ="col-lg-2 col-md-3 col-sm-2 col-2 display-text-docs">
                <img class="card-img-top " src="./img/doc - tmb/google-docs.png" alt="">
              </div>
              <div class ="col-lg-10 col-md-9 col-sm-10 display-text-docs">
                <a class ="white-text-button" href="${FILEPATH}" target="_blank">${NAME}</a>
              </div>
            </div>

          </div>
        </div>
EOF
#find  src/pdf/ -type f -mtime -1|sort -n -k 4 |xargs -I {} ./add_doc.sh {}|xclip
