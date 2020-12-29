<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet\capacityReservationItem;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet\capacityReservationItem\allocatedResources\allocatedResource;
use AlibabaCloud\Tea\Model;

class allocatedResources extends Model
{
    /**
     * @var allocatedResource[]
     */
    public $allocatedResource;
    protected $_name = [
        'allocatedResource' => 'AllocatedResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocatedResource) {
            $res['AllocatedResource'] = [];
            if (null !== $this->allocatedResource && \is_array($this->allocatedResource)) {
                $n = 0;
                foreach ($this->allocatedResource as $item) {
                    $res['AllocatedResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allocatedResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocatedResource'])) {
            if (!empty($map['AllocatedResource'])) {
                $model->allocatedResource = [];
                $n                        = 0;
                foreach ($map['AllocatedResource'] as $item) {
                    $model->allocatedResource[$n++] = null !== $item ? allocatedResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
