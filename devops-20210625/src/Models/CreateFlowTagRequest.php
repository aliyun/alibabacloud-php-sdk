<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateFlowTagRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example #1F9AEF
     *
     * @var string
     */
    public $color;

    /**
     * @description This parameter is required.
     *
     * @example 111
     *
     * @var int
     */
    public $flowTagGroupId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'color'          => 'color',
        'flowTagGroupId' => 'flowTagGroupId',
        'name'           => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->color) {
            $res['color'] = $this->color;
        }
        if (null !== $this->flowTagGroupId) {
            $res['flowTagGroupId'] = $this->flowTagGroupId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlowTagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['color'])) {
            $model->color = $map['color'];
        }
        if (isset($map['flowTagGroupId'])) {
            $model->flowTagGroupId = $map['flowTagGroupId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
