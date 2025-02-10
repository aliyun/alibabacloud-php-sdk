<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeServerRelatedGlobalAccelerationInstancesResponseBody\globalAccelerationInstances;

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
        if (null !== $this->globalAccelerationInstances) {
            $this->globalAccelerationInstances->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalAccelerationInstances) {
            $res['GlobalAccelerationInstances'] = null !== $this->globalAccelerationInstances ? $this->globalAccelerationInstances->toArray($noStream) : $this->globalAccelerationInstances;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['GlobalAccelerationInstances'])) {
            $model->globalAccelerationInstances = globalAccelerationInstances::fromMap($map['GlobalAccelerationInstances']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
