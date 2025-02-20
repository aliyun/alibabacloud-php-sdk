<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class CreateFlowTagRequest extends Model
{
    /**
     * @var string
     */
    public $color;
    /**
     * @var int
     */
    public $flowTagGroupId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
