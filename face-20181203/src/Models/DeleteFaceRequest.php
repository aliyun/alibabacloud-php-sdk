<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Face\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteFaceRequest extends Model
{
    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $person;

    /**
     * @var string
     */
    public $image;
    protected $_name = [
        'group'  => 'Group',
        'person' => 'Person',
        'image'  => 'Image',
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
        if (null !== $this->person) {
            $res['Person'] = $this->person;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Person'])) {
            $model->person = $map['Person'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        return $model;
    }
}
