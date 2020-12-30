<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeHighPriorityIpsResponseBody;

use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeHighPriorityIpsResponseBody\highPriorityIps\highPriorityIp;
use AlibabaCloud\Tea\Model;

class highPriorityIps extends Model
{
    /**
     * @var highPriorityIp[]
     */
    public $highPriorityIp;
    protected $_name = [
        'highPriorityIp' => 'HighPriorityIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->highPriorityIp) {
            $res['HighPriorityIp'] = [];
            if (null !== $this->highPriorityIp && \is_array($this->highPriorityIp)) {
                $n = 0;
                foreach ($this->highPriorityIp as $item) {
                    $res['HighPriorityIp'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return highPriorityIps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HighPriorityIp'])) {
            if (!empty($map['HighPriorityIp'])) {
                $model->highPriorityIp = [];
                $n                     = 0;
                foreach ($map['HighPriorityIp'] as $item) {
                    $model->highPriorityIp[$n++] = null !== $item ? highPriorityIp::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
