<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListReservedCapacitiesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var OpenReservedCapacity[]
     */
    public $reservedCapacities;
    protected $_name = [
        'nextToken'          => 'nextToken',
        'reservedCapacities' => 'reservedCapacities',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->reservedCapacities) {
            $res['reservedCapacities'] = [];
            if (null !== $this->reservedCapacities && \is_array($this->reservedCapacities)) {
                $n = 0;
                foreach ($this->reservedCapacities as $item) {
                    $res['reservedCapacities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListReservedCapacitiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['reservedCapacities'])) {
            if (!empty($map['reservedCapacities'])) {
                $model->reservedCapacities = [];
                $n                         = 0;
                foreach ($map['reservedCapacities'] as $item) {
                    $model->reservedCapacities[$n++] = null !== $item ? OpenReservedCapacity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
