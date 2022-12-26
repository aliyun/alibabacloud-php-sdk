<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEventLevelCountResponseBody\eventLevels;
use AlibabaCloud\Tea\Model;

class DescribeEventLevelCountResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @var eventLevels
     */
    public $eventLevels;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example CE8CA5EA-24EF-5D41-B735-53ACE7XXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'        => 'Code',
        'eventLevels' => 'EventLevels',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
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
        if (null !== $this->eventLevels) {
            $res['EventLevels'] = null !== $this->eventLevels ? $this->eventLevels->toMap() : null;
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
     * @return DescribeEventLevelCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EventLevels'])) {
            $model->eventLevels = eventLevels::fromMap($map['EventLevels']);
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
