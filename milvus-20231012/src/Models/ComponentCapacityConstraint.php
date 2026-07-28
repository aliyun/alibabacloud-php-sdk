<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Dara\Model;

class ComponentCapacityConstraint extends Model
{
    /**
     * @var string
     */
    public $componentType;

    /**
     * @var int
     */
    public $maxCapacity;

    /**
     * @var int
     */
    public $minCapacity;
    protected $_name = [
        'componentType' => 'componentType',
        'maxCapacity' => 'maxCapacity',
        'minCapacity' => 'minCapacity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentType) {
            $res['componentType'] = $this->componentType;
        }

        if (null !== $this->maxCapacity) {
            $res['maxCapacity'] = $this->maxCapacity;
        }

        if (null !== $this->minCapacity) {
            $res['minCapacity'] = $this->minCapacity;
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
        if (isset($map['componentType'])) {
            $model->componentType = $map['componentType'];
        }

        if (isset($map['maxCapacity'])) {
            $model->maxCapacity = $map['maxCapacity'];
        }

        if (isset($map['minCapacity'])) {
            $model->minCapacity = $map['minCapacity'];
        }

        return $model;
    }
}
