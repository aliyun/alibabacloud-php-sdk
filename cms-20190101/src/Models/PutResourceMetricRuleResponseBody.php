<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class PutResourceMetricRuleResponseBody extends Model
{
    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call is successful.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message.
     *
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 65D50468-ECEF-48F1-A6E1-D952E89D9436
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call is successful. Valid values:
     *
     *   true: The call is successful.
     *   false: The call fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
     * @return PutResourceMetricRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
