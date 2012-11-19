<?php

/**
 * Description of page
 *
 * @author steffen
 */
class page {

    private $pageArr;
    private $pageCount;
    private $page;

    public function __construct() {
        $this->pageArr = array();
        $this->pageCount = 0;
        $error = new errorReporting();
    }

    public static function getPages() {
        if (!is_null($this->pageArr)) {
            return $this->pagesArr;
        } else {
            $error->setError('error', 'No pages set!');
            return $this->page;
        }
    }

    public static function setPages($pages) {
        if (is_array($pages)) {
            foreach ($pages as $page) {
                if ($this->doesPageExcist($page)) {
                    $newPageArr[] = $page;
                }
            }
            $this->pageArr = $newPageArr;
        } elseif (!empty($pages)) {
            if ($this->doesPageExcist($page)) {
                $this->page = $page;
            } else {
                $error->setError('error', 'Page doesn\'t excist!');
            }
        } else {
            $error->setError('error', 'No pages set!');
        }
    }

    private function doesPageExcist($page) {
        $file = "/pages/$file.php";
        if(file_exists($file)){
            return true;
        } else {
            return false;
        }
    }

}

?>
