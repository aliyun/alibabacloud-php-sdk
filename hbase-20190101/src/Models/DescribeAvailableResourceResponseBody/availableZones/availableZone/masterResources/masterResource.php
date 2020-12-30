<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\masterResources;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\masterResources\masterResource\instanceTypeDetail;
use AlibabaCloud\Tea\Model;

class masterResource extends Model
{
    /**
     * @var instanceTypeDetail
     */
    public $instanceTypeDetail;

    /**
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'instanceTypeDetail' => 'InstanceTypeDetail',
        'instanceType'       => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeDetail) {
            $res['InstanceTypeDetail'] = null !== $this->instanceTypeDetail ? $this->instanceTypeDetail->toMap() : null;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return masterResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypeDetail'])) {
            $model->instanceTypeDetail = instanceTypeDetail::fromMap($map['InstanceTypeDetail']);
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
