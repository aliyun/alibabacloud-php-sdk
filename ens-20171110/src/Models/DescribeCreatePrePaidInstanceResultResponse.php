<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCreatePrePaidInstanceResultResponse\instanceCreateResult;
use AlibabaCloud\Tea\Model;

class DescribeCreatePrePaidInstanceResultResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceCreateResult
     */
    public $instanceCreateResult;
    protected $_name = [
        'requestId'            => 'RequestId',
        'instanceCreateResult' => 'InstanceCreateResult',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('instanceCreateResult', $this->instanceCreateResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceCreateResult) {
            $res['InstanceCreateResult'] = null !== $this->instanceCreateResult ? $this->instanceCreateResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCreatePrePaidInstanceResultResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceCreateResult'])) {
            $model->instanceCreateResult = instanceCreateResult::fromMap($map['InstanceCreateResult']);
        }

        return $model;
    }
}
