<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gigaplanning | API reference</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-dark">

    <main class="container pb-5">
        
        <h1 class="text-light text-center display-6 fs-2 mt-3">api reference</h1>



        <div class="accordion" id="getTasksById">
            <div class="accordion-item w-50 mx-auto mt-5">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGetTaskById" aria-expanded="true" aria-controls="collapseOne">
                    <p class="text-dark">/api/tasks/{id} <span class="badge bg-primary">GET</span></p>
                </button>
            </h2>
            <div id="collapseGetTaskById" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#getTasksById">
                <div class="accordion-body">
                    <pre>
                        <span class="badge bg-dark"> response</span>
                        {
                            "id" : 2,
                            "author" : "zé dos veneno",
                            "task" : "do something",
                            "description" : "some description",
                            "created_at" : "xx/xx/xxxx",
                            "updated_at" : "xx/xx/xxxx"
                        }
                    </pre>
                </div>
            </div>
            </div>
        </div>




        <div class="accordion" id="postTask">
            <div class="accordion-item w-50 mx-auto mt-5">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePostTask" aria-expanded="true" aria-controls="collapseOne">
                    <p class="text-dark">/api/tasks/{id} <span class="badge bg-success">POST</span></p>
                </button>
            </h2>
            <div id="collapsePostTask" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#PostTask">
                <div class="accordion-body">
                    <pre>
                        <span class="badge bg-dark"> request</span>
                        {
                            "author" : "zé dos veneno",
                            "task" : "do something",
                            "description" : "some description"
                        }
                    </pre>
                </div>
            </div>
            </div>
        </div>



        <div class="accordion" id="putTasksById">
            <div class="accordion-item w-50 mx-auto mt-5">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePutTask" aria-expanded="true" aria-controls="collapseOne">
                    <p class="text-dark">/api/tasks/{id} <span class="badge bg-warning">PUT</span></p>
                </button>
            </h2>
            <div id="collapsePutTask" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#putTasksById">
                <div class="accordion-body">
                    <pre>
                        <span class="badge bg-dark"> request</span>
                        {
                            "task" : "new task name",
                            "description" : "new description"
                        }
                    </pre>
                </div>
            </div>
            </div>
        </div>




        <div class="accordion" id="deleteTasksById">
            <div class="accordion-item w-50 mx-auto mt-5">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDeleteTask" aria-expanded="true" aria-controls="collapseOne">
                    <p class="text-dark">/api/tasks/{id} <span class="badge bg-danger">DELETE</span></p>
                </button>
            </h2>
            <div id="collapseDeleteTask" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#deleteTasksById">
                <div class="accordion-body">
                    <pre>
                        <span class="badge bg-dark"> response</span>
                        {
                            "message" : "task deleted"
                        }
                    </pre>
                </div>
            </div>
            </div>
        </div>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>