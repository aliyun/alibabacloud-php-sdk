<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\capacity;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\capacity\socketCapacities\socketCapacity;

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
        if (\is_array($this->socketCapacity)) {
            Model::validateArray($this->socketCapacity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->socketCapacity) {
            if (\is_array($this->socketCapacity)) {
                $res['SocketCapacity'] = [];
                $n1                    = 0;
                foreach ($this->socketCapacity as $item1) {
                    $res['SocketCapacity'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['SocketCapacity'])) {
            if (!empty($map['SocketCapacity'])) {
                $model->socketCapacity = [];
                $n1                    = 0;
                foreach ($map['SocketCapacity'] as $item1) {
                    $model->socketCapacity[$n1++] = socketCapacity::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
