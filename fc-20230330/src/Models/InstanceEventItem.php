<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class InstanceEventItem extends Model
{
    /**
     * @var InstanceEventItem[]
     */
    public $children;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'children' => 'children',
        'level' => 'level',
        'message' => 'message',
        'time' => 'time',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['children'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['children'])) {
            if (!empty($map['children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['children'] as $item1) {
                    $model->children[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
