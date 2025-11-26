<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCreatePrePaidInstanceResultResponseBody\instanceCreateResult;

class DescribeCreatePrePaidInstanceResultResponseBody extends Model
{
    /**
     * @var instanceCreateResult
     */
    public $instanceCreateResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceCreateResult' => 'InstanceCreateResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceCreateResult) {
            $this->instanceCreateResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceCreateResult) {
            $res['InstanceCreateResult'] = null !== $this->instanceCreateResult ? $this->instanceCreateResult->toArray($noStream) : $this->instanceCreateResult;
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
        if (isset($map['InstanceCreateResult'])) {
            $model->instanceCreateResult = instanceCreateResult::fromMap($map['InstanceCreateResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
