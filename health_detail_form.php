<?php
$conn = new mysqli("localhost", "root", "", "infits");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits | Health Details</title>

   
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.content {
    display: flex;
    align-items: center;
    flex-direction: column;
    padding: 40px 16px;
    font-family: "NATS";
    order:2;
}

.content .heading-box {
    width: 94%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
}

.content .heading-box h1 {
    font-size: 2.5rem;
}

.content .heading-box button {
    background-color: #6883FB;
    color: #ffffff;
    width: 173px;
    height: 50px;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 1.6rem;
    border: none;
    border-radius: 10px;
    letter-spacing: 2px;
}

.content .heading-box button a {
    color: #FFFFFF;
    text-decoration: none;
}

/* .content #addDocumentPopup{
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    display: none;
    height: 100vh;
    width: 100%;
    background-color: #f2f2f294;
    backdrop-filter: blur(2px);
    z-index: 1;
}
.content #addDocumentPopup.active{
    display: flex;
    align-items: center;
    justify-content: center;
}
.content #addDocumentPopup .popup{
    position: fixed;
    top: 50%;
    background-color: #FFFFFF;
    height: 200px;
    width: 350px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.25);
    border-radius: 20px;
}
.content #addDocumentPopup .popup h2{
    font-size: 1.5rem;
}
.content #addDocumentPopup .popup button#fileUpload{
    border: 1px solid #6883FB;
    background-color: #FFFFFF;
    height: 42px;
    width: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
}
.content #addDocumentPopup .popup button#fileUpload span{
     margin-right: 15px;
}
.content #addDocumentPopup .popup .option-box{
    display: flex;
    justify-content: space-evenly;
    width: 80%;
}
.content #addDocumentPopup .popup .option-box button{
     height: 42px;
     width: 115px;
     border-radius: 10px;
     -webkit-border-radius: 10px;
     -moz-border-radius: 10px;
     -ms-border-radius: 10px;
     -o-border-radius: 10px;
}
.content #addDocumentPopup .popup .option-box #cancel{
     background-color: #FFFFFF;
     border: 1px solid #6883FB;
}
.content #addDocumentPopup .popup .option-box #save{
     background-color: #6883FB;
     border: 1px solid #FFFFFF;
     color: #FFFFFF;
} */


/* .content #addDocumentPopup{
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    display: none;
    height: 100vh;
    width: 100%;
    background-color: #f2f2f294;
    backdrop-filter: blur(2px);
    z-index: 1;
} */
 #addDocumentPopup.active {
    display: flex;
}

 #addDocumentPopup {
    position:fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #FFFFFF;
    height: 200px;
    width: 350px;
    display: none;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.25);
    border-radius: 20px;
    z-index:999;
}

 #addDocumentPopup h2 {
    font-size: 2rem;
}

 #addDocumentPopup button#fileUpload {
    border: 1px solid #6883FB;
    background-color: #FFFFFF;
    height: 42px;
    width: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
}

 #addDocumentPopup button#fileUpload span {
    margin-right: 15px;
}

 #addDocumentPopup .option-box {
    display: flex;
    justify-content: space-evenly;
    width: 80%;
}
 #addDocumentPopup .option-box button {
    height: 42px;
    width: 115px;
    font-size: 1.3rem;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
}

#addDocumentPopup .option-box #cancel {
    background-color: #FFFFFF;
    border: 1px solid #6883FB;
}

 #addDocumentPopup .option-box #save {
    background-color: #6883FB;
    border: 1px solid #FFFFFF;
    color: #FFFFFF;
}

.content .health-form-container {
    width: 95%;
    display: flex;
    align-items: center;
    flex-direction: column;
}

.content .health-form-container .title-options-container {
    position: relative;
    width: 550px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0px;
    margin-bottom: 50px;
}

.content .health-form-container .title-options-container .border-bottom {
    position: absolute;
    background-color: #1FB688;
    height: 4px;
    width: 200px;
    transition: all 0.3s ease;
}

.content .health-form-container .title-options-container .border-bottom.left {
    transform: translateY(20px);
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
}

.content .health-form-container .title-options-container .border-bottom.right {
    transform: translate(300px, 20px);
    width: 250px;
    -webkit-transform: translate(300px, 20px);
    -moz-transform: translate(300px, 20px);
    -ms-transform: translate(300px, 20px);
    -o-transform: translate(300px, 20px);
}

.content .health-form-container .title-options-container h3 {
    font-size: 1.7rem;
    cursor: pointer;
}

.content .health-form-container #form-details,
.content .health-form-container #form-documents {
    position: relative;
    overflow-y: auto;
    height: 400px;
    width: 100%;
    /* padding: 10px 0px; */
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* width */
.content .health-form-container #form-details::-webkit-scrollbar,
.content .health-form-container #form-documents::-webkit-scrollbar {
    width: 8px;
}

/* Track */
.content .health-form-container #form-details::-webkit-scrollbar-track,
.content .health-form-container #form-documents::-webkit-scrollbar-track {
    background-color: #EFEFEF;
    border-radius: 10px;
}

/* Handle */
.content .health-form-container #form-details::-webkit-scrollbar-thumb,
.content .health-form-container #form-documents::-webkit-scrollbar-thumb {
    background: #C8C8C8;
    border-radius: 10px;
}

/* Handle on hover */
.content .health-form-container #form-details::-webkit-scrollbar-thumb:hover,
.content .health-form-container #form-documents::-webkit-scrollbar-thumb:hover {
    background: #a8a8a8;
}

.content .health-form-container #form-details .details {
    /* border: 1px solid red; */
    height: 115px;
    width: 85%;
    padding: 3px 33px;
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    background: #FFFFFF;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    border-radius: 15px;
    margin-bottom: 19px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
}

.content .health-form-container #form-details .details p {
    position: relative;
}

.content .health-form-container #form-details .details p#question {
    font-size: 1.6rem;
    font-weight: 500;
    /* padding-top: 5px; */
}

.content .health-form-container #form-details .details p#question::after {
    content: "";
    position: absolute;
    background-color: #808080;
    height: 1.5px;
    width: 100%;
    bottom: -9px;
    left: 0px;
}

.content .health-form-container #form-details .details p#answer {
    font-size: 1.3rem;
    /* margin-top: 5px; */
    font-weight: 500;
    /* padding-top: 5px; */
}

.content .health-form-container #form-documents .details {
    border: 1px solid #f2f2f2;
    height: 80px;
    width: 90%;
    padding: 15px 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #FFFFFF;
    border-radius: 15px;
    margin-bottom: 20px;
}

.content .health-form-container #form-documents .details .title {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 260px;
}

.content .health-form-container #form-documents .details .title .info-box {
    width: 200px;
    margin-top: 12px;
}

.content .health-form-container #form-documents .details .title .info-box p {
    font-size: 1.5rem;
    font-weight: 500;
    line-height: 0px;
}

.content .health-form-container #form-documents .details .title .info-box .minor-details {
    color: #8D8D8D;
    display: flex;
    justify-content: space-between;
    font-size: 1.2rem;
    font-weight: 500;
}

.content .health-form-container #form-documents .details .options {
    display: flex;
    justify-content: space-between;
    width: 100px;
}
 .share-popup.show {
    display: flex;
}
.share-popup {
    position:relative;
    background-color: #FFFFFF;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
    height: 149px;
    width: 330px;
    box-shadow: 0px 2px 5px 0px rgb(0 0 0 / 25%);
    border-radius: 15px;
    padding-top:1.5rem;
}
.share-popup p{
    font-size: 1.4rem;
    text-align:center;
    display:flex;
    justify-content:space-between;
    padding-left:20px;
    padding-right:20px;
}
.share-popup p img{
    margin-left: 15px;
}
.share-popup .share-icon-container{
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    width: 100%;
}
.share-popup .share-icon-container .share-icon{
    cursor:pointer;
}
.modal{
        position: fixed;
        width:100%;
        height:100%;
        background: rgba(0, 0, 0, 0.6);
        transition: opacity 500ms;
        align-items:center;
  
    }
    .cont{
        display: flex;
  flex-direction: column;
    }
    @media screen and (max-width: 400px){
        .content .health-form-container .title-options-container{
            width:100px;
        }

    }
    @media screen and (max-width: 720px){
       
        .content .health-form-container .title-options-container{
            width:350px;
        }
        .content .health-form-container .title-options-container .border-bottom{
            width:100px;
        }
        .content .health-form-container .title-options-container .border-bottom.right {
    transform: translate(220px, 20px);
    width: 100px;
    -webkit-transform: translate(220px, 20px);
    -moz-transform: translate(220px, 20px);
    -ms-transform: translate(220px, 20px);
    -o-transform: translate(220px, 20px);
}
.content .health-form-container .title-options-container h3 {
    font-size: 100%;
    
}
        
    }
        </style>
</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="cont">
    <div id="addDocumentPopup">

<h2>Add Document</h2>

<button id="fileUpload"><span><svg width="17" height="17" viewBox="0 0 17 17" fill="none">
            <path
                d="M1.0625 11.3333H5.3125V17H11.6875V11.3333H15.9375L8.5 3.77778L1.0625 11.3333ZM17 1.88889L0 1.88889V0L17 0V1.88889Z"
                fill="#9A5EF5" />
        </svg></span> Upload File</button>

<div class="option-box">
    <button id="cancel">Cancel</button>
    <button id="save">Save</button>
</div>

</div> 


    <div class="content">
        <!-- <div id="addDocumentPopup">

            <div class="popup">
                <h2>Add Document</h2>

                <button id="fileUpload"><span><svg width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <path
                                d="M1.0625 11.3333H5.3125V17H11.6875V11.3333H15.9375L8.5 3.77778L1.0625 11.3333ZM17 1.88889L0 1.88889V0L17 0V1.88889Z"
                                fill="#9A5EF5" />
                        </svg></span> Upload File</button>

                <div class="option-box">
                    <button id="cancel">Cancel</button>
                    <button id="save">Save</button>
                </div>
            </div>

        </div> -->

        
     
                    
                    

        <div class="heading-box">
            <h1>Health Details Form and Documents</h1>
            <button data-btn="edit" id="edit_btn">Edit</button>
        </div>

        <div class="health-form-container">
            <div class="title-options-container">
                <h3 id="healthFormDetails" onclick="formContent(1)">Health Details Form</h3>
                <h3 id="healthDocument" onclick="formContent(2)">Health Details Documents</h3>
                <div class="border-bottom left"></div>
            </div>

            <div id="form-details">

            <?php
            $QueAns = "SELECT `question`, `answers` FROM `clientcon`";
            $result = $conn->query($QueAns);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    if ($row["question"] == "Biochemical dataReport image") {
                        continue ;
                    }
                ?>
                <div class="details">
                    <p id="question"><?php echo $row["question"]; ?></p>
                    <p id="answer"><?php echo $row["answers"]; ?></p>
                </div>
                <?php
                  }
            }
            ?>

            </div>

            <div id="form-documents">

                <?php
                for ($i = 0; $i < 6; $i++) {

                    ?>
                    <div class="details">
                        <div class="title">
                            <img src="icons/pdf.svg" alt="PDF">
                            <div class="info-box">
                                <p class="name">Diabetes Report</p>
                                <div class="minor-details">
                                    <span>11 Aug,2022</span>
                                    <span>2.6MB</span>
                                </div>
                            </div>
                        </div>
                        <div class="options">
                            <img src="icons/download.svg" alt="Download" title="Download">
                            <button id="popup_btn" style="background-color:white;border:none"><img src="icons/share.svg" alt="Share" title="Share" class="shareBtn"></button>
                            <img src="icons/delete.svg" alt="Delete" title="Delete">
                        </div>
                    </div>
                <?php
                }

                ?>
                <div id="myModal" class="modal">
                <div class="share-popup " >
                    <p><span>Share via <img src="icons/share2.svg" alt="Share" title="Share"></span> <span class="close" style="font-size:30px;cursor:pointer">&times;</span></p>
                    <div class="share-icon-container">
                        <div class="share-icon"><img src="icons/whatsapp.svg" alt="whatsapp"></div>
                        <div class="share-icon"><img src="icons/twitter.svg" alt="twitter"></div>
                        <div class="share-icon"><img src="icons/facebook.svg" alt="facebook"></div>
                        <div class="share-icon"><img src="icons/linkedIn.svg" alt="linkedin"></div>
                        <div class="share-icon"><img src="icons/instagram.svg" alt="instagram"></div>
                    </div>
                </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <script>
                    // Get the modal
                    var modal = document.getElementById("myModal");

                    // Get the button that opens the modal
                    var button = document.getElementById("popup_btn");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks the button, open the modal 
                    button.onclick = function() {
                        
                        modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                    </script>

    <script>
        const formDetails = document.querySelector("#form-details");
        const formDocuments = document.querySelector("#form-documents");
        const borderBottom = document.querySelector(".border-bottom");
        const editbtn = document.querySelector("#edit_btn");
        const btn = document.querySelector("[data-btn");
        let popup = document.querySelector("#addDocumentPopup");
        let shareBtn = document.querySelectorAll(".shareBtn");
        let sharePopup = document.querySelector("#sharePopup");

        // formDocuments.style.display = "none";
        <?php
        $url = "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

        $escaped_url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');

        $url_components = parse_url($url);
        parse_str($url_components['query'], $params);

        if ($params['form'] === 'show') {
            ?>
            formDocuments.style.display = "none";
        <?php
        } elseif ($params['documents'] === 'show') {
            ?>
            formDetails.style.display = "none";
            borderBottom.classList.add("right");
            borderBottom.classList.remove("left");

        <?php
        }
        ?>

        function formContent(content) {
            if (content === 1) {
                //For Border-Bottom Animation
                borderBottom.classList.add("left");
                borderBottom.classList.remove("right");

                //For showing the content
                formDetails.style.display = "flex";
                formDocuments.style.display = "none";

                //For showing The btn According to Content
                btn.innerHTML = "Edit";
                btn.setAttribute("data-btn", "edit");
                btn.addEventListener("click", () => {
            document.location.href = 'health_detail_form_create.php';
        });
                
            } else if (content === 2) {
                //For Border-Bottom Animation
                borderBottom.classList.add("right");
                borderBottom.classList.remove("left");

                //For showing the content
                formDetails.style.display = "none";
                formDocuments.style.display = "flex";

                //For showing The btn According to Content
                btn.innerHTML = "Add";
                btn.setAttribute("data-btn", "add");

                if (btn.getAttribute("data-btn") === "add") {

                    btn.addEventListener("click", () => {
                        popup.classList.toggle("active");

                        if (popup.classList.contains("active")) {

                            popup.addEventListener("click", () => {
                                popup.classList.remove("active");
                            });
                        }
                    });
                }
            }

            console.log(`================== ${content} ======================`);
            // console.log(formDetails.parentElement);
        }

        // shareBtn.addEventListener("click", () => {
        //     sharePopup.classList.toggle("show");

        //     if (popup.classList.contains("show")) {

        //         popup.addEventListener("click", () => {
        //             popup.classList.remove("show");
        //         });
        //     }
        // });
        // console.log(sharePopup);
        // console.log(shareBtn);
        // for (const index of shareBtn) {
        //     index.addEventListener("click", () => {
        //         sharePopup.classList.add("show");
        //         console.log("Clicked");
        //     });
        // }
    </script>

</body>

</html>