Buen d&iacute;a %user_buddyname%,
<?php echo $issue->getIssuetype()->getName(); ?> <?php echo $issue->getFormattedTitle(true); ?> ha sido actualizado por <?php echo $updated_by->getName(); ?>.

* La siguiente informaci&oacute;n ha sido modificada : *
<?php foreach ($comment_lines as $comment_line): ?>
    <?php echo $comment_line; ?>
<?php endforeach; ?>

---
Ver el  problema : <?php echo make_url('viewissue', array('project_key' => $issue->getProject()->getKey(), 'issue_no' => $issue->getFormattedIssueNo()), false); ?>
Ver el panel de control del proyecto <?php echo $issue->getProject()->getName(); ?> : <?php echo make_url('project_dashboard', array('project_key' => $issue->getProject()->getKey()), false); ?>
