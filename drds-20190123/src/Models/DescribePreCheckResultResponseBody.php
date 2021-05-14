<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribePreCheckResultResponseBody\preCheckResult;
use AlibabaCloud\Tea\Model;

class DescribePreCheckResultResponseBody extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var preCheckResult
     */
    public $preCheckResult;
    protected $_name = [
        'success'        => 'Success',
        'requestId'      => 'RequestId',
        'preCheckResult' => 'PreCheckResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->preCheckResult) {
            $res['PreCheckResult'] = null !== $this->preCheckResult ? $this->preCheckResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePreCheckResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PreCheckResult'])) {
            $model->preCheckResult = preCheckResult::fromMap($map['PreCheckResult']);
        }

        return $model;
    }
}
