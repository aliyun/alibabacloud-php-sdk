<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCreatePrePaidInstanceResultResponseBody\instanceCreateResult;
use AlibabaCloud\Tea\Model;

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
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCreateResult) {
            $res['InstanceCreateResult'] = null !== $this->instanceCreateResult ? $this->instanceCreateResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCreatePrePaidInstanceResultResponseBody
     */
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
