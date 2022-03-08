<?php

class pluginHtmlSidebar extends Plugin {

    public function init()
    {
        $this->dbFields = array(
            'title'=>'',
            'content'=>''
        );
    }

    public function form()
    {
        global $L;

        $html = '<div>';
        $html .= '<label>'.$L->get('title').'</label>';
        $html .= '<input name="title" class="form-control" type="text" value="'.$this->getValue('title').'">';
        $html .= '</div>';

        $html .= '<div>';
        $html .= '<content>'.$L->get('content').'</content>';
        $html .= '<textarea name="content" class="form-control" height="500">'.$this->getValue('content').'</textarea>';
        $html .= '</div>';

        return $html;
    }

    public function siteSidebar()
    {
        $html  = '<div class="plugin plugin-pages">';
        if ($this->getValue('title')) {
            $html .= '<h2 class="plugin-label">'.$this->getValue('title').'</h2>';
        }
        $html .= '<div class="plugin-content">';
        $html .= html_entity_decode($this->getValue('content'));
        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }
}