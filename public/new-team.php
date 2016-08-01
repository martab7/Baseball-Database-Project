<?php
require __DIR__ . '/../src/Input.php';

function pageController()
{
    if (Input::isPost()) {
        $name = Input::get('name');
        $stadium = Input::get('stadium');
        $league = Input::get('league');
        // Write the INSERT statement to insert a team
        // Either interpolate or concatenate the PHP variables
        $insert = "INSERT INTO teams (name, stadium, league) Value('{$name}', '{$stadium}', '{$league}')";
        // Copy the resulting query and verify that it runs using the terminal
        var_dump($insert);
    } else {
      $name = '';
      $stadium = '';
    }
    return [
        'title' => 'New Team',
        'name' => $name,
        'stadium' => $stadium
    ];
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
    <?php include '../partials/head.phtml' ?>
</head>
<body>
<div class="container">
    <div class="Row">
        <div class="page-header"><h1>New Team</h1></div>
        <form method="post" class="form-horizontal">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">
                    Name
                </label>
                <div class="col-sm-10">
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name"
                        value=<?= $name ?>
                    >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">
                    League
                </label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="league" value="american" checked>
                            American
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="league" value="national">
                            National
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="stadium" class="col-sm-2 control-label">
                    Stadium
                </label>
                <div class="col-sm-10">
                    <input
                        type="text"
                        class="form-control"
                        name="stadium"
                        id="stadium"
                        value=<?= $stadium ?>
                    >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">
                        </span>
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
