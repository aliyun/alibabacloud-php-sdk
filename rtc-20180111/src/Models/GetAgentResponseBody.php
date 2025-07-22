<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class GetAgentResponseBody extends Model
{
    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example 6159ba01-6687-4fb2-a831-f0cd8d188648
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1751513144838
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @example 1751513144838
     *
     * @var string
     */
    public $stopTime;
    protected $_name = [
        'message' => 'Message',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'stopTime' => 'StopTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAgentResponseBody
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }

        return $model;
    }
}
