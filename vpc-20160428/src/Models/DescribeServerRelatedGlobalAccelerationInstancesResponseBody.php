<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeServerRelatedGlobalAccelerationInstancesResponseBody\globalAccelerationInstances;
use AlibabaCloud\Tea\Model;

class DescribeServerRelatedGlobalAccelerationInstancesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var globalAccelerationInstances
     */
    public $globalAccelerationInstances;
    protected $_name = [
        'requestId'                   => 'RequestId',
        'globalAccelerationInstances' => 'GlobalAccelerationInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->globalAccelerationInstances) {
            $res['GlobalAccelerationInstances'] = null !== $this->globalAccelerationInstances ? $this->globalAccelerationInstances->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GlobalAccelerationInstances'])) {
            $model->globalAccelerationInstances = globalAccelerationInstances::fromMap($map['GlobalAccelerationInstances']);
        }

        return $model;
    }
}
