<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventCountResponseBody\systemEventCounts;
use AlibabaCloud\Tea\Model;

class DescribeSystemEventCountResponseBody extends Model
{
    /**
     * @description The HTTP status codes.
     *
     * >  The status code 200 indicates that the request was successful.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The returned message.
     *
     * If the request was successful, a success message is returned. If the request failed, an error message is returned.
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example C7A7B776-0ACE-5A93-9B07-DE8008D9CCDF
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
     * @var string
     */
    public $success;

    /**
     * @description The details of the system event.
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
