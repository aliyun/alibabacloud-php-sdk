<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class FieldRef extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $name;

    /**
     * @var FullDataType
     */
    public $type;
    protected $_name = [
        'index' => 'index',
        'name' => 'name',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->type) {
            $this->type->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['type'] = null !== $this->type ? $this->type->toArray($noStream) : $this->type;
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
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['type'])) {
            $model->type = FullDataType::fromMap($map['type']);
        }

        return $model;
    }
}
