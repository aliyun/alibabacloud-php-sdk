<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetCapacityResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $existLogStore;

    /**
     * @var int
     */
    public $preservedCapacity;

    /**
     * @var float
     */
    public $usedCapacity;
    protected $_name = [
        'existLogStore' => 'ExistLogStore',
        'preservedCapacity' => 'PreservedCapacity',
        'usedCapacity' => 'UsedCapacity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->existLogStore) {
            $res['ExistLogStore'] = $this->existLogStore;
        }

        if (null !== $this->preservedCapacity) {
            $res['PreservedCapacity'] = $this->preservedCapacity;
        }

        if (null !== $this->usedCapacity) {
            $res['UsedCapacity'] = $this->usedCapacity;
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
        if (isset($map['ExistLogStore'])) {
            $model->existLogStore = $map['ExistLogStore'];
        }

        if (isset($map['PreservedCapacity'])) {
            $model->preservedCapacity = $map['PreservedCapacity'];
        }

        if (isset($map['UsedCapacity'])) {
            $model->usedCapacity = $map['UsedCapacity'];
        }

        return $model;
    }
}
