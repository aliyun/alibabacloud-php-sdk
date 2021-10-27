<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeEvaluateTaskReportResponseBody\evaluateResult;
use AlibabaCloud\Tea\Model;

class DescribeEvaluateTaskReportResponseBody extends Model
{
    /**
     * @var evaluateResult
     */
    public $evaluateResult;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'evaluateResult' => 'EvaluateResult',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->evaluateResult) {
            $res['EvaluateResult'] = null !== $this->evaluateResult ? $this->evaluateResult->toMap() : null;
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
     * @return DescribeEvaluateTaskReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EvaluateResult'])) {
            $model->evaluateResult = evaluateResult::fromMap($map['EvaluateResult']);
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
