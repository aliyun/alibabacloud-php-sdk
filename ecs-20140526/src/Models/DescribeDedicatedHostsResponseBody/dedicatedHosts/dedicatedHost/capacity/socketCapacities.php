<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\capacity;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\capacity\socketCapacities\socketCapacity;
use AlibabaCloud\Tea\Model;

class socketCapacities extends Model
{
    /**
     * @var socketCapacity[]
     */
    public $socketCapacity;
    protected $_name = [
        'socketCapacity' => 'SocketCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->socketCapacity) {
            $res['SocketCapacity'] = [];
            if (null !== $this->socketCapacity && \is_array($this->socketCapacity)) {
                $n = 0;
                foreach ($this->socketCapacity as $item) {
                    $res['SocketCapacity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return socketCapacities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SocketCapacity'])) {
            if (!empty($map['SocketCapacity'])) {
                $model->socketCapacity = [];
                $n                     = 0;
                foreach ($map['SocketCapacity'] as $item) {
                    $model->socketCapacity[$n++] = null !== $item ? socketCapacity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
