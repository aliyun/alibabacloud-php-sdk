<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAutoProvisioningGroupCapacitiesResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAutoProvisioningGroupCapacitiesResponseBody\capacities\capacity;
use AlibabaCloud\Tea\Model;

class capacities extends Model
{
    /**
     * @var capacity[]
     */
    public $capacity;
    protected $_name = [
        'capacity' => 'Capacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = [];
            if (null !== $this->capacity && \is_array($this->capacity)) {
                $n = 0;
                foreach ($this->capacity as $item) {
                    $res['Capacity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacity'])) {
            if (!empty($map['Capacity'])) {
                $model->capacity = [];
                $n               = 0;
                foreach ($map['Capacity'] as $item) {
                    $model->capacity[$n++] = null !== $item ? capacity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
