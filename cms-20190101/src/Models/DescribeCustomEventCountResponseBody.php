<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventCountResponseBody\customEventCounts;
use AlibabaCloud\Tea\Model;

class DescribeCustomEventCountResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The number of times that the custom event occurred in the specified time period.
     *
     * @var customEventCounts
     */
    public $customEventCounts;

    /**
     * @description Indicates whether the call was successful. The value true indicates a success. The value false indicates a failure.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The details of the custom event.
     *
     * @example 60912C8D-B340-4253-ADE7-61ACDFD25CFC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the custom event occurred.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'              => 'Code',
        'customEventCounts' => 'CustomEventCounts',
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
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
        if (null !== $this->customEventCounts) {
            $res['CustomEventCounts'] = null !== $this->customEventCounts ? $this->customEventCounts->toMap() : null;
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
     * @return DescribeCustomEventCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CustomEventCounts'])) {
            $model->customEventCounts = customEventCounts::fromMap($map['CustomEventCounts']);
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
