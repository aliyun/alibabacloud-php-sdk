<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponseBody\zones\zone;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponseBody\zones\zone\instanceTypes\instanceType;
use AlibabaCloud\Tea\Model;

class instanceTypes extends Model
{
    /**
     * @var instanceType[]
     */
    public $instanceType;
    protected $_name = [
        'instanceType' => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = [];
            if (null !== $this->instanceType && \is_array($this->instanceType)) {
                $n = 0;
                foreach ($this->instanceType as $item) {
                    $res['InstanceType'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['InstanceType'])) {
            if (!empty($map['InstanceType'])) {
                $model->instanceType = [];
                $n                   = 0;
                foreach ($map['InstanceType'] as $item) {
                    $model->instanceType[$n++] = null !== $item ? instanceType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
