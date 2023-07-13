<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventCountResponseBody\systemEventCounts;
use AlibabaCloud\Tea\Model;

class DescribeSystemEventCountResponseBody extends Model
{
    /**
     * @description Indicates whether the call was successful. Valid values:
     *
     *   true: The call was successful.
     *   false: The call failed.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The details of the system event.
     *
     * @example C7A7B776-0ACE-5A93-9B07-DE8008D9CCDF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the system event.
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description The timestamp when the system event occurred. Unit: milliseconds.
     *
     * @var systemEventCounts
     */
    public $systemEventCounts;
    protected $_name = [
        'code'              => 'Code',
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
        'systemEventCounts' => 'SystemEventCounts',
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
        if (null !== $this->systemEventCounts) {
            $res['SystemEventCounts'] = null !== $this->systemEventCounts ? $this->systemEventCounts->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSystemEventCountResponseBody
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
        if (isset($map['SystemEventCounts'])) {
            $model->systemEventCounts = systemEventCounts::fromMap($map['SystemEventCounts']);
        }

        return $model;
    }
}
