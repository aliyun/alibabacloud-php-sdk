<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponseBody\unhealthyList;
use AlibabaCloud\Tea\Model;

class DescribeUnhealthyHostAvailabilityResponseBody extends Model
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
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var unhealthyList
     */
    public $unhealthyList;
    protected $_name = [
        'message'       => 'Message',
        'requestId'     => 'RequestId',
        'code'          => 'Code',
        'success'       => 'Success',
        'unhealthyList' => 'UnhealthyList',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->unhealthyList) {
            $res['UnhealthyList'] = null !== $this->unhealthyList ? $this->unhealthyList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUnhealthyHostAvailabilityResponseBody
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['UnhealthyList'])) {
            $model->unhealthyList = unhealthyList::fromMap($map['UnhealthyList']);
        }

        return $model;
    }
}
