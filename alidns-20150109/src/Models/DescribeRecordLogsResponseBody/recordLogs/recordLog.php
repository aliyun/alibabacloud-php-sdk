<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordLogsResponseBody\recordLogs;

use AlibabaCloud\Tea\Model;

class recordLog extends Model
{
    /**
     * @description The operation that you performed.
     *
     * @var string
     */
    public $action;

    /**
     * @description The time when you performed the operation.
     *
     * @example 2015-12-12T09:23Z
     *
     * @var string
     */
    public $actionTime;

    /**
     * @description The time when you performed the operation. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 134514540000
     *
     * @var int
     */
    public $actionTimestamp;

    /**
     * @description The IP address of the operator.
     *
     * @example 182.92.253.XX
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The operation message.
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'action'          => 'Action',
        'actionTime'      => 'ActionTime',
        'actionTimestamp' => 'ActionTimestamp',
        'clientIp'        => 'ClientIp',
        'message'         => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->actionTime) {
            $res['ActionTime'] = $this->actionTime;
        }
        if (null !== $this->actionTimestamp) {
            $res['ActionTimestamp'] = $this->actionTimestamp;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ActionTime'])) {
            $model->actionTime = $map['ActionTime'];
        }
        if (isset($map['ActionTimestamp'])) {
            $model->actionTimestamp = $map['ActionTimestamp'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
