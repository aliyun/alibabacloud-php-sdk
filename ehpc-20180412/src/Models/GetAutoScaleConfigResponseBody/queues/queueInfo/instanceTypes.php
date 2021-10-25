<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo\instanceTypes\instanceTypeInfo;
use AlibabaCloud\Tea\Model;

class instanceTypes extends Model
{
    /**
     * @var instanceTypeInfo[]
     */
    public $instanceTypeInfo;
    protected $_name = [
        'instanceTypeInfo' => 'InstanceTypeInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeInfo) {
            $res['InstanceTypeInfo'] = [];
            if (null !== $this->instanceTypeInfo && \is_array($this->instanceTypeInfo)) {
                $n = 0;
                foreach ($this->instanceTypeInfo as $item) {
                    $res['InstanceTypeInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypeInfo'])) {
            if (!empty($map['InstanceTypeInfo'])) {
                $model->instanceTypeInfo = [];
                $n                       = 0;
                foreach ($map['InstanceTypeInfo'] as $item) {
                    $model->instanceTypeInfo[$n++] = null !== $item ? instanceTypeInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
