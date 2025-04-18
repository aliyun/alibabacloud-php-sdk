<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceRequest;

use AlibabaCloud\Dara\Model;

class cloudDisks extends Model
{
    /**
     * @var string
     */
    public $capacity;

    /**
     * @var string
     */
    public $subType;
    protected $_name = [
        'capacity' => 'Capacity',
        'subType' => 'SubType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
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
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        return $model;
    }
}
