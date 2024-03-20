<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessagePublishResponseBody;

use AlibabaCloud\Tea\Model;

class messageTraceLists extends Model
{
    /**
     * @description The action on the message. Valid values:
     *
     *   **pub_mqtt**: indicates that the message was sent by an ApsaraMQ for MQTT client.
     *   **pub_mq**: indicates that the message was sent by an ApsaraMQ for RocketMQ client.
     *
     * @example pub_mqtt
     *
     * @var string
     */
    public $action;

    /**
     * @description The returned code for the action on the message. Valid values:
     *
     *   **mqtt.trace.action.msg.pub.mqtt**: This value is returned if the value of Action is **pub_mqtt**.
     *   **mqtt.trace.action.msg.pub.mq**: This value is returned if the value of Action is **pub_mq**.
     *
     * @example mqtt.trace.action.msg.pub.mqtt
     *
     * @var string
     */
    public $actionCode;

    /**
     * @description The returned information for the action on the message. Valid values:
     *
     *   **Pub From Mqtt Client**: This value is returned if the value of Action is **pub_mqtt**.
     *   **Pub From MQ**: This value is returned if the value of Action is **pub_mq**.
     *
     * @example Pub From Mqtt Client
     *
     * @var string
     */
    public $actionInfo;

    /**
     * @description The ID of the client that sends the message.
     *
     * @example GID_test@@@producer
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The message ID.
     *
     * @example AC1EC0030EAB78308DB16A3EC773BD95
     *
     * @var string
     */
    public $msgId;

    /**
     * @description The time when the message was sent.
     *
     * @example 2021-05-21 15:08:19.210
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
