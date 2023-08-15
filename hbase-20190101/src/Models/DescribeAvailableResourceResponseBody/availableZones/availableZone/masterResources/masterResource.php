<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\masterResources;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\masterResources\masterResource\instanceTypeDetail;
use AlibabaCloud\Tea\Model;

class masterResource extends Model
{
    /**
     * @example hbase.sn1.medium
     *
     * @var string
     */
    public $instanceType;

    /**
     * @var instanceTypeDetail
     */
    public $instanceTypeDetail;
    protected $_name = [
        'instanceType'       => 'InstanceType',
        'instanceTypeDetail' => 'InstanceTypeDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeDetail) {
            $res['InstanceTypeDetail'] = null !== $this->instanceTypeDetail ? $this->instanceTypeDetail->toMap() : null;
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
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeDetail'])) {
            $model->instanceTypeDetail = instanceTypeDetail::fromMap($map['InstanceTypeDetail']);
        }

        return $model;
    }
}
