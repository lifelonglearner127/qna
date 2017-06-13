<?php
require("config/env.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>QA Administration</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
    <link rel="stylesheet" href="assets/css/admin.css">
    <link href="assets/images/favicon.png" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h3>Question and Answer Generation</h3>
            <div id="tool-container">
            </div>
        </div>
        <footer>
            <a href="<?php echo $BASE_URL . '/leads.php'; ?>">Go to Leads Page</a>
        </footer>
    </div>

    <script id="wizards-list-template" type="text/x-handlebars-template">
        <!--<div class="panel panel-default">-->
            <div class="panel-heading">
                <h3>{{title}}</h3>
                <button class="btn btn-default pull-right new-wizard" id="new-wizard-button">New Wizard</button>
            </div>
            <div class="panel-body">
                {{> wizardsTable }}
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                        <button class="btn btn-default form-control">Prev</button>
                    </div>
                    <div class="col-lg-2 col-lg-offset-8 col-md-3 col-md-offset-6 col-sm-4 col-sm-offset-4 col-xs-6">
                        <button class="btn btn-primary form-control">Next</button>
                    </div>
                </div>
            </div>
        <!--</div>-->
    </script>

    <script id="wizards-table-template" type="text/x-handlebars-template">
        <table class="{{class}}" id="{{id}}">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{#each wizards}}
                <tr data-wizard-id='{{id}}'>
                    <td>{{@index}}</td>
                    <td>{{name}}</td>
                    <td>
                        <div class="col-xs-6">
                            <button class="btn btn-info form-control wizard-edit">Edit</button>
                        </div>
                        <div class="col-xs-6">
                            <button class="btn btn-danger form-control wizard-delete">Delete</button>
                        </div>
                    </td>
                </tr>
                {{/each}}
            </tbody>
        </table>
    </script>

    <script id="wizard-form-template" type="text/x-handlebars-template">

    </script>

    <script id="new-answer-option-template" type="text/x-handlebars-template">
        <!--<div class="form-group row answer-option">-->
            <div class="col-lg-3 col-md-3 col-sm-sm-3 col-xs-6">
                <input data-id="caption" placeholder="Caption" value="{{caption}}" class="form-control">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-sm-2 col-xs-6">
                <input data-id="value" placeholder="Value" class="form-control" value="{{value}}">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-sm-2 col-xs-4">
                <input type="number" placeholder="Weight" data-id="weight" class="form-control" value="{{weight}}">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-sm-3 col-xs-4">
                <select class="form-control" data-id="next">
                    <option value="">Select a next subject</option>
                    {{#each subjects}}
                    <option value="{{id}}">{{question}}</option>
                    {{/each}}
                </select>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-sm-2 col-xs-4">
                <button class="btn btn-danger form-control answer-option-delete">Remove</button>
            </div>
        <!--</div>-->
    </script>

    <script id="subjects-list-template" type="text/x-handlebars-template">
        <!--<div class="panel panel-default">-->
            <div class="panel-heading">
                <h3>{{title}}</h3>
                <button class="btn btn-default pull-right new-subject" id="new-subject-button">New Subject</button>
            </div>
            <div class="panel-body">
                {{> subjectsTable }}
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                        <button class="btn btn-default form-control">Back to Wizards</button>
                    </div>
                    <div class="col-lg-2 col-lg-offset-8 col-md-3 col-md-offset-6 col-sm-4 col-sm-offset-4 col-xs-6">
                        <button class="btn btn-primary form-control">Next</button>
                    </div>
                </div>
            </div>
        <!--</div>-->
    </script>

    <script id="subjects-table-template" type="text/x-handlebars-template">
        <table class="{{class}}" id="{{id}}">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Question</th>
                    <th>Answer Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{#each subjects}}
                <tr data-subject-id='{{id}}'>
                    <td>{{@index}}</td>
                    <td>{{question}}</td>
                    <td>{{type_name}}</td>
                    <td>
                        <div class="col-xs-6">
                            <button class="btn btn-info form-control subject-edit">Edit</button>
                        </div>
                        <div class="col-xs-6">
                            <button class="btn btn-danger form-control subject-delete">Delete</button>
                        </div>
                    </td>
                </tr>
                {{/each}}
            </tbody>
        </table>
    </script>
    
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/handlebars.js"></script>
    <script src="assets/js/env.js"></script>
    <script src="assets/js/storage.js"></script>
    <script src="assets/js/qna.js"></script>
    <script src="assets/js/admin.js"></script>
</body>
</html>