<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeServerRelatedGlobalAccelerationInstancesResponseBody\globalAccelerationInstances;
use AlibabaCloud\Tea\Model;

class DescribeServerRelatedGlobalAccelerationInstancesResponseBody extends Model
{
    /**
     * @var globalAccelerationInstances
     */
    public $globalAccelerationInstances;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'globalAccelerationInstances' => 'GlobalAccelerationInstances',
        'requestId'                   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalAccelerationInstances) {
            $res['GlobalAccelerationInstances'] = null !== $this->globalAccelerationInstances ? $this->globalAccelerationInstances->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServerRelatedGlobalAccelerationInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalAccelerationInstances'])) {
            $model->globalAccelerationInstances = globalAccelerationInstances::fromMap($map['GlobalAccelerationInstances']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
