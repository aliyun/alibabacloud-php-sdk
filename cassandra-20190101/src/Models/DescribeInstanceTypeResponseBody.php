<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeInstanceTypeResponseBody\instanceTypeSpecList;
use AlibabaCloud\Tea\Model;

class DescribeInstanceTypeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceTypeSpecList
     */
    public $instanceTypeSpecList;
    protected $_name = [
        'requestId'            => 'RequestId',
        'instanceTypeSpecList' => 'InstanceTypeSpecList',
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
        if (null !== $this->instanceTypeSpecList) {
            $res['InstanceTypeSpecList'] = null !== $this->instanceTypeSpecList ? $this->instanceTypeSpecList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceTypeSpecList'])) {
            $model->instanceTypeSpecList = instanceTypeSpecList::fromMap($map['InstanceTypeSpecList']);
        }

        return $model;
    }
}
