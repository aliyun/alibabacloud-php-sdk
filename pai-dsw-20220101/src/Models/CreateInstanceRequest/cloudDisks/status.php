<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\cloudDisks;

use AlibabaCloud\Tea\Model;

class status extends Model
{
    /**
     * @description The available capacity. Unit: bytes.
     *
     * @example 31841058816
     *
     * @var int
     */
    public $available;

    /**
     * @description The capacity. Unit: bytes.
     *
     * @example 32212254720
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The used capacity. Unit: bytes.
     *
     * @example 371195904
     *
     * @var int
     */
    public $usage;
    protected $_name = [
        'available' => 'Available',
        'capacity' => 'Capacity',
        'usage' => 'Usage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return status
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
