<?php
/**
 * Created by PhpStorm.
 * User: tsmith
 * Created 2014-11-23 23:23 EST
 */

class ContentGrabber
{
    public function fetchStory($contentId)
    {
        // Validate the contentId.
        if (!preg_match('/^[A-Za-z0-9_\-]+$/', $contentId))
        {
            return null;
        }

        $filename = realpath(PROJECT_ROOT . "/content/$contentId.html");
        if (!is_readable($filename))
        {
            return null;
        }

        return file_get_contents($filename);
    }
}
