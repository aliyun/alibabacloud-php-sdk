<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesResponseBody\failedListResult;
use AlibabaCloud\Tea\Model;

class PutResourceMetricRulesResponseBody extends Model
{
    /**
     * @description The callback URL to which a POST request is sent when an alert is triggered based on the alert rule.
     *
     * Valid values of N: 1 to 500.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the request.
     *
     * @var failedListResult
     */
    public $failedListResult;

    /**
     * @description The ID of the alert rule.
     *
     * >  If you specify a new ID, you create a threshold-triggered alert rule.
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $message;

    /**
     * @description The alert rule that failed to be created.
     *
     * @example 15D1440E-BF24-5A41-93E4-36864635179E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The key of the tag.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'             => 'Code',
        'failedListResult' => 'FailedListResult',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->failedListResult) {
            $res['FailedListResult'] = null !== $this->failedListResult ? $this->failedListResult->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
     * @return PutResourceMetricRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['FailedListResult'])) {
            $model->failedListResult = failedListResult::fromMap($map['FailedListResult']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
