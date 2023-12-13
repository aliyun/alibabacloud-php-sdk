<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records\network\interfaces;
use AlibabaCloud\Tea\Model;

class network extends Model
{
    /**
     * @description The monitoring data of network interface controllers (NICs).
     *
     * @var interfaces[]
     */
    public $interfaces;
    protected $_name = [
        'interfaces' => 'Interfaces',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interfaces) {
            $res['Interfaces'] = [];
            if (null !== $this->interfaces && \is_array($this->interfaces)) {
                $n = 0;
                foreach ($this->interfaces as $item) {
                    $res['Interfaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return network
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Interfaces'])) {
            if (!empty($map['Interfaces'])) {
                $model->interfaces = [];
                $n                 = 0;
                foreach ($map['Interfaces'] as $item) {
                    $model->interfaces[$n++] = null !== $item ? interfaces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
