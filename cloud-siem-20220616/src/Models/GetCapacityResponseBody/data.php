<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetCapacityResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $existLogStore;

    /**
     * @example 9000
     *
     * @var int
     */
    public $preservedCapacity;

    /**
     * @example 10
     *
     * @var float
     */
    public $usedCapacity;
    protected $_name = [
        'existLogStore'     => 'ExistLogStore',
        'preservedCapacity' => 'PreservedCapacity',
        'usedCapacity'      => 'UsedCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
