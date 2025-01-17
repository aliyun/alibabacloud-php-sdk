<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptRefineResponseBody\payload;

use AlibabaCloud\Dara\Model;

class output extends Model
{
    /**
     * @var string[][]
     */
    public $content;
    /**
     * @var string
     */
    public $outline;
    /**
     * @var string
     */
    public $role;
    /**
     * @var string
     */
    public $scene;
    /**
     * @var string
     */
    public $summary;
    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'content' => 'content',
        'outline' => 'outline',
        'role'    => 'role',
        'scene'   => 'scene',
        'summary' => 'summary',
        'text'    => 'text',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['content'] = [];
                $n1             = 0;
                foreach ($this->content as $item1) {
                    if (\is_array($item1)) {
                        $res['content'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['content'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->outline) {
            $res['outline'] = $this->outline;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }

        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            if (!empty($map['content'])) {
                $model->content = [];
                $n1             = 0;
                foreach ($map['content'] as $item1) {
                    if (!empty($item1)) {
                        $model->content[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->content[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['outline'])) {
            $model->outline = $map['outline'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }

        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
