<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class deviceInfoList extends Model
{
    /**
     * @description The action on the device. Valid values:
     *
     *   **connect**: The ApsaraMQ for MQTT client requests a connection to the ApsaraMQ for MQTT broker.
     *   **close**: The TCP connection is closed.
     *   **disconnect**: The ApsaraMQ for MQTT client requests a disconnection from the ApsaraMQ for MQTT broker.
     *
     * @example connect
     *
     * @var string
     */
    public $action;

    /**
     * @description The returned code for the action on the device. Valid values:
     *
     *   **mqtt.trace.action.connect**: This value is returned if the value of Action is **connect**.
     *   **mqtt.trace.action.close**: This value is returned if the value of Action is **close**.
     *   **mqtt.trace.action.disconnect**: This value is returned if the value of Action is **disconnect**.
     *
     * @example mqtt.trace.action.connect
     *
     * @var string
     */
    public $actionCode;

    /**
     * @description The returned information for the action on the device. Valid values:
     *
     *   **accepted**: The ApsaraMQ for MQTT broker accepts the connection request from the ApsaraMQ for MQTT client.
     *   **not authorized**: The TCP connection is closed because the permission verification of the client to access the instance fails.
     *   **clientId conflict**: The TCP connection is closed due to a conflict in the ID of the ApsaraMQ for MQTT client.
     *   **resource auth failed**: The TCP connection is closed because the permission verification for the ApsaraMQ for MQTT client to access the topic or group fails.
     *   **no heart**: The TCP connection is closed because no heartbeat is detected on the client.
     *   **closed by client**: The TCP connection is closed because an exception occurs on the client.
     *   **disconnected by client**: The client requests a disconnection.
     *   **invalid param**: The TCP connection is closed due to invalid request parameters.
     *   **Socket IOException**: The TCP connection is closed due to network jitter or packet loss.
     *
     * @example accept
     *
     * @var string
     */
    public $actionInfo;

    /**
     * @description The connection ID.
     *
     * @example c69fe839209547fa9d073781b9cd****
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The time when the action occurred on the device.
     *
     * @example 2021-05-21 15:51:54.867
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'action'     => 'Action',
        'actionCode' => 'ActionCode',
        'actionInfo' => 'ActionInfo',
        'channelId'  => 'ChannelId',
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
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceInfoList
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
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
