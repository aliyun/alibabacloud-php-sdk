<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventCountResponseBody\systemEventCounts;
use AlibabaCloud\Tea\Model;

class DescribeSystemEventCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var systemEventCounts
     */
    public $systemEventCounts;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'systemEventCounts' => 'SystemEventCounts',
        'code'              => 'Code',
        'success'           => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->systemEventCounts) {
            $res['SystemEventCounts'] = null !== $this->systemEventCounts ? $this->systemEventCounts->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemEventCounts'])) {
            $model->systemEventCounts = systemEventCounts::fromMap($map['SystemEventCounts']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
