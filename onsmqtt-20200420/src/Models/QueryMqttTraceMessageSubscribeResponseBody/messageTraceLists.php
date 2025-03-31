<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessageSubscribeResponseBody;

use AlibabaCloud\Dara\Model;

class messageTraceLists extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $actionCode;

    /**
     * @var string
     */
    public $actionInfo;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $msgId;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'action' => 'Action',
        'actionCode' => 'ActionCode',
        'actionInfo' => 'ActionInfo',
        'clientId' => 'ClientId',
        'msgId' => 'MsgId',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->actionCode) {
            $res['ActionCode'] = $this->actionCode;
        }

        if (null !== $this->actionInfo) {
            $res['ActionInfo'] = $this->actionInfo;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['ActionCode'])) {
            $model->actionCode = $map['ActionCode'];
        }

        if (isset($map['ActionInfo'])) {
            $model->actionInfo = $map['ActionInfo'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
