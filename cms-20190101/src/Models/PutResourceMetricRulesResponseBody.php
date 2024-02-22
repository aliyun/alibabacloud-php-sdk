<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesResponseBody\failedListResult;
use AlibabaCloud\Tea\Model;

class PutResourceMetricRulesResponseBody extends Model
{
    /**
     * @description The response code.
     *
     * >  The status code 200 indicates that the request was successful.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The alert rules that failed to be created for the resource.
     *
     * @var failedListResult
     */
    public $failedListResult;

    /**
     * @description The error message returned.
     *
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 15D1440E-BF24-5A41-93E4-36864635179E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true
     *   false
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
