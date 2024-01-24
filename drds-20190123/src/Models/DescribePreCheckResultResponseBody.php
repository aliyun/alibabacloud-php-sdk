<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribePreCheckResultResponseBody\preCheckResult;
use AlibabaCloud\Tea\Model;

class DescribePreCheckResultResponseBody extends Model
{
    /**
     * @description Indicates the result of the precheck task.
     *
     * @var preCheckResult
     */
    public $preCheckResult;

    /**
     * @description The ID of the request.
     *
     * @example EED1A59A-CFEA-5CF8-BB4A-090E75B3D05E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'preCheckResult' => 'PreCheckResult',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preCheckResult) {
            $res['PreCheckResult'] = null !== $this->preCheckResult ? $this->preCheckResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['PreCheckResult'])) {
            $model->preCheckResult = preCheckResult::fromMap($map['PreCheckResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
