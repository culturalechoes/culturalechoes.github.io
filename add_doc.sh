#!/bin/bash
FILEPATH=$1
NAME=$2
cat <<EOF
        <div class="col-lg-4 col-md-4 col-sm-4 portfolio-item">
          <div class="card d-block border-none">

            <div class="row">
              <div class ="col-lg-4 col-md-4 col-sm-4 col-4 display-text-docs">
                <img class="card-img-top " src="./img/doc - tmb/google-docs.png" alt="">
              </div>
              <div class ="col-lg-10 col-md-9 col-sm-10 display-text-docs">
                <a class ="white-text-button" href="${FILEPATH}" target="_blank">${NAME}</a>
              </div>
            </div>

          </div>
        </div>
EOF
