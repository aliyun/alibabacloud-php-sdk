<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstanceTypeResponseBody\instanceTypeSpecList;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceTypeSpecList) {
            $this->instanceTypeSpecList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceTypeSpecList) {
            $res['InstanceTypeSpecList'] = null !== $this->instanceTypeSpecList ? $this->instanceTypeSpecList->toArray($noStream) : $this->instanceTypeSpecList;
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
        if (isset($map['InstanceTypeSpecList'])) {
            $model->instanceTypeSpecList = instanceTypeSpecList::fromMap($map['InstanceTypeSpecList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
