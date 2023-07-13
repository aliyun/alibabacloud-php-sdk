<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventAttributeResponseBody\customEvents;
use AlibabaCloud\Tea\Model;

class DescribeCustomEventAttributeResponseBody extends Model
{
    /**
     * @description The returned message.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The time when the custom event occurred.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @var customEvents
     */
    public $customEvents;

    /**
     * @description The ID of the request.
     *
     * @example userId:173651113438**** and name:"BABEL_CHECK"
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the call was successful. Valid values:
     *
     *   true: The call was successful.
     *   false: The call failed.
     *
     * @example 60912C8D-B340-4253-ADE7-61ACDFD25CFC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the custom event.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'         => 'Code',
        'customEvents' => 'CustomEvents',
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
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
        if (null !== $this->customEvents) {
            $res['CustomEvents'] = null !== $this->customEvents ? $this->customEvents->toMap() : null;
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
     * @return DescribeCustomEventAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CustomEvents'])) {
            $model->customEvents = customEvents::fromMap($map['CustomEvents']);
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
