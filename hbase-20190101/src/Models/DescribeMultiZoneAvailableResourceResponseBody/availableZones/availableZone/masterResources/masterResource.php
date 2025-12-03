<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\masterResources;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\masterResources\masterResource\instanceTypeDetail;

class masterResource extends Model
{
    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var instanceTypeDetail
     */
    public $instanceTypeDetail;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'instanceTypeDetail' => 'InstanceTypeDetail',
    ];

    public function validate()
    {
        if (null !== $this->instanceTypeDetail) {
            $this->instanceTypeDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->instanceTypeDetail) {
            $res['InstanceTypeDetail'] = null !== $this->instanceTypeDetail ? $this->instanceTypeDetail->toArray($noStream) : $this->instanceTypeDetail;
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
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InstanceTypeDetail'])) {
            $model->instanceTypeDetail = instanceTypeDetail::fromMap($map['InstanceTypeDetail']);
        }

        return $model;
    }
}
