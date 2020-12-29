<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordLogsResponseBody;

use AlibabaCloud\Tea\Model;

class recordLogs extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var int
     */
    public $actionTimestamp;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $actionTime;
    protected $_name = [
        'action'          => 'Action',
        'actionTimestamp' => 'ActionTimestamp',
        'clientIp'        => 'ClientIp',
        'message'         => 'Message',
        'actionTime'      => 'ActionTime',
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
        if (null !== $this->actionTimestamp) {
            $res['ActionTimestamp'] = $this->actionTimestamp;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->actionTime) {
            $res['ActionTime'] = $this->actionTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
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
        if (isset($map['ActionTime'])) {
            $model->actionTime = $map['ActionTime'];
        }

        return $model;
    }
}
