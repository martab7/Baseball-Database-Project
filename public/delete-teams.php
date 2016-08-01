<?php
require __DIR__ . '/../src/Input.php';

function pageController()
{
    $teams = Input::get('teams');  // You'll get an array with team IDs
    // You can var_dump the values if you're curious
    var_dump($teams);
    $allTeamsToBeDeleted = implode(', ', $teams);
    "DELETE from teams where id IN ({$allTeamsToBeDeleted})";

    // foreach ($teams as $teamId) {
    //     // Generate the DELETE statement for each team_id
    //     $delete = "DELETE FROM teams WHERE id={$teamId}";
    //     // Copy and paste the statements in SQL PRO and verify they're correct.
    //     var_dump($delete);
    // }

    // In a real scenario you would normally redirect to the list of teams.
    // header('Location: teams.php');
    $query = implode('_', $teams);
    header("Location: teams.php?deleted_team={$query}");
    exit;
}
pageController();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>teST</title>
  </head>
  <body>
    <h1>HELLO</h1>
  </body>
</html>
