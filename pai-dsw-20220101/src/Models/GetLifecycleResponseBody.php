<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class GetLifecycleResponseBody extends Model
{
    /**
     * @description The status code. Valid values:
     *
     *   InternalError: All errors, except for parameter validation errors, are internal errors.
     *   ValidationError: A parameter validation error.
     *
     * @example null
     *
     * @var string
     */
    public $code;

    /**
     * @description The lifecycle details.
     *
     * @example [[{"Status":"Creating","GmtCreateTime":"2022-09-19T22:38:00Z","Reason":"","ReasonCode":""}]]
     *
     * @var undefined[][]
     */
    public $lifecycle;

    /**
     * @description The returned message.
     *
     * @example "XXX"
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example E7D55162-4489-1619-AAF5-3F97D5FCA948
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

    /**
     * @description The total number of queried sessions.
     *
     * @example 35
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code' => 'Code',
        'lifecycle' => 'Lifecycle',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = $this->lifecycle;
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLifecycleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Lifecycle'])) {
            if (!empty($map['Lifecycle'])) {
                $model->lifecycle = $map['Lifecycle'];
            }
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
