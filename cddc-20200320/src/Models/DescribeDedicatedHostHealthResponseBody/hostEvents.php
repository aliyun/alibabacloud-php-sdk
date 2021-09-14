<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostHealthResponseBody;

use AlibabaCloud\Tea\Model;

class hostEvents extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostHealthResponseBody\hostEvents\hostEvents[]
     */
    public $hostEvents;
    protected $_name = [
        'hostEvents' => 'HostEvents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostEvents) {
            $res['HostEvents'] = [];
            if (null !== $this->hostEvents && \is_array($this->hostEvents)) {
                $n = 0;
                foreach ($this->hostEvents as $item) {
                    $res['HostEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostEvents'])) {
            if (!empty($map['HostEvents'])) {
                $model->hostEvents = [];
                $n                 = 0;
                foreach ($map['HostEvents'] as $item) {
                    $model->hostEvents[$n++] = null !== $item ? \AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostHealthResponseBody\hostEvents\hostEvents::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
