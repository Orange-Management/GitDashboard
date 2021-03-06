<?php if(!defined('ROOT_PATH')) return; ?>
<header>
    <div id="logo">
        <img width="100px" src="img/template/logo.png">
    </div>
    <h1>GitDashboard</h1>
    <table>
        <tbody>
        <tr><th><i class="fa fa-cubes"></i>Repositories<td><?= count($repositories); ?>
            <th><i class="fa fa-users"></i>Contributers<td><?= count($committerRanking); ?>
            <th><i class="fa fa-code"></i>Commits<td><?= array_sum($commits); ?>
        <tr><th><i class="fa fa-calendar"></i>Last Commit<td><?= current($lastCommits)->getDate()->format('Y-m-d'); ?>
            <th><i class="fa fa-tags"></i>Tags<td><?= $tagsCount; ?>
            <th><i class="fa fa-share-alt"></i>Branches<td><?= $branchesCount; ?>
        <tr><th><i class="fa fa-files-o"></i>Files<td><?= number_format(array_sum($fileCount), 0, '.', ','); ?>
            <th><i class="fa fa-file-text-o"></i>LOC<td><?= number_format(array_sum($loc), 0, '.', ','); ?>
    </table>
</header>
