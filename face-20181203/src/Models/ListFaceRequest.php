<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Face\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListFaceRequest extends Model
{
    /**
     * @var string
     */
    public $group;

    /**
     * @var int
     */
    public $mark;
    protected $_name = [
        'group' => 'Group',
        'mark'  => 'Mark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->mark) {
            $res['Mark'] = $this->mark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Mark'])) {
            $model->mark = $map['Mark'];
        }

        return $model;
    }
}
