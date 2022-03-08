<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="w-75 h-100">

    </div>
    <div class="w-25 h-100">
        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                مدیریت سوالات
            </button>
        </p>
        <div style="min-height: 120px;">
            <div class="collapse collapse-horizontal" id="collapseWidthExample">
                <div class="card card-body" style="width: 300px;">
                    <button type="button" class="btn btn-primary">نمایش سوال ها</button>
                </div>
                <div class="card card-body" style="width: 300px;">
                    <button type="button" class="btn btn-success py-2" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                        <span class="material-icons">افزودن</span>
                    </button>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">سوال جدید</h5>
                <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="addQuestion.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">متن سوال</label>
                        <input type="text" name="questionText" class="form-control" >
                    </div>

                    <button onclick="addAnswer()" type="button" class="btn btn-success" >+</button>
                    <button onclick="removeAnswer()" type="button" class="btn btn-danger" >-</button>

                    <div class="mb-3">

                        <div id="answers">
                            <div>
                                <input type="text" name="answer[]" class="form-control" >
                                <label class="form-check-label" for="flexRadioDefault1">
                                    پاسخ 1
                                </label>
                            </div>
                            <div>
                                <input type="text" name="answer[]" class="form-control" >
                                <label class="form-check-label" for="flexRadioDefault1">
                                    پاسخ 2
                                </label>
                            </div>
                            <div>
                                <input type="number" name="true_answer" class="form-control" value="1" min="1" >
                                <label class="form-check-label" for="flexRadioDefault1">
                                   پاسخ درست
                                </label>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">افزودن</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function addAnswer(){
        var answers_div_tag=document.getElementById("answers");
        var lable_tag=document.createElement("lable");
        lable_tag.classList.add("form-label");
        lable_tag.innerHTML="پاسخ";

        var input_tag=document.createElement("INPUT");
        input_tag.classList.add("form-control");
        input_tag.setAttribute("type","text");
        input_tag.setAttribute("name","answer[]");

        var div_tag=document.createElement("div");
        input_tag.classList.add("mb-3");
        div_tag.appendChild(lable_tag);
        div_tag.appendChild(input_tag);
        answers_div_tag.appendChild(div_tag);

    }

    function removeAnswer(){

        var answers_div_tag=document.getElementById("answers");
        if(answers_div_tag.children.length>2){
            answers_div_tag.lastChild.remove();
        }
    }

</script>

<script src="js/bootstrap.js"></script>

</body>
</html>