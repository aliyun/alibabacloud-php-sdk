<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessageSubscribeResponseBody;

use AlibabaCloud\Tea\Model;

class messageTraceLists extends Model
{
    /**
     * @description The action on the message. Valid values:
     *
     *   **sub**: The ApsaraMQ for MQTT client subscribes to the message.
     *   **push_offline**: The ApsaraMQ for MQTT broker pushes the offline message to the ApsaraMQ for MQTT client.
     *
     * @example sub
     *
     * @var string
     */
    public $action;

    /**
     * @description The code returned for the action on the message. Valid values:
     *
     *   **mqtt.trace.action.msg.sub**: The value that is returned if the value of Action is **sub**.
     *   **mqtt.trace.action.msg.push.offline**: The value that is returned if the value of Action is **push_offline**.
     *
     * @example mqtt.trace.action.msg.sub
     *
     * @var string
     */
    public $actionCode;

    /**
     * @description The returned information for the action on the message. Valid values:
     *
     *   **Push To Mqtt Client**: The value that is returned if the value of Action is **sub**.
     *   **Push Offline Msg To Mqtt Client**: The value that is returned if the value of Action is **push_offline**.
     *
     * @example Push To Mqtt Client
     *
     * @var string
     */
    public $actionInfo;

    /**
     * @description The ID of the client that subscribes to the message.
     *
     * @example GID_test@@@consumer
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The message ID.
     *
     * @example AC1EC1B33D5978308DB17F3245E4****
     *
     * @var string
     */
    public $msgId;

    /**
     * @description The time when the message was delivered.
     *
     * @example 2021-05-25 16:46:41.274
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'action'     => 'Action',
        'actionCode' => 'ActionCode',
        'actionInfo' => 'ActionInfo',
        'clientId'   => 'ClientId',
        'msgId'      => 'MsgId',
        'time'       => 'Time',
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

    /**
     * @param array $map
     *
     * @return messageTraceLists
     */
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
