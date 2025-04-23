<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo\instanceTypes\instanceTypeInfo;

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
        if (\is_array($this->instanceTypeInfo)) {
            Model::validateArray($this->instanceTypeInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceTypeInfo) {
            if (\is_array($this->instanceTypeInfo)) {
                $res['InstanceTypeInfo'] = [];
                $n1 = 0;
                foreach ($this->instanceTypeInfo as $item1) {
                    $res['InstanceTypeInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceTypeInfo'])) {
            if (!empty($map['InstanceTypeInfo'])) {
                $model->instanceTypeInfo = [];
                $n1 = 0;
                foreach ($map['InstanceTypeInfo'] as $item1) {
                    $model->instanceTypeInfo[$n1++] = instanceTypeInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
