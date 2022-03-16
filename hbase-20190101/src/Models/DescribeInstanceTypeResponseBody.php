<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstanceTypeResponseBody\instanceTypeSpecList;
use AlibabaCloud\Tea\Model;

class DescribeInstanceTypeResponseBody extends Model
{
    /**
     * @var instanceTypeSpecList
     */
    public $instanceTypeSpecList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceTypeSpecList' => 'InstanceTypeSpecList',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeSpecList) {
            $res['InstanceTypeSpecList'] = null !== $this->instanceTypeSpecList ? $this->instanceTypeSpecList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceTypeSpecList'])) {
            $model->instanceTypeSpecList = instanceTypeSpecList::fromMap($map['InstanceTypeSpecList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
