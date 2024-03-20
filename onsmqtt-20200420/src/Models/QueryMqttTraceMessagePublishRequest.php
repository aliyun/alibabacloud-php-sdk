<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class QueryMqttTraceMessagePublishRequest extends Model
{
    /**
     * @description The beginning of the time range to query. The value of this parameter is a UNIX timestamp in milliseconds.
     *
     * @example 1618646400000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description The end of the time range to query. The value of this parameter is a UNIX timestamp in milliseconds.
     *
     * @example 1621591200000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the ApsaraMQ for MQTT instance. The ID must be consistent with the ID of the instance that the ApsaraMQ for MQTT client uses. You can view the instance ID in the **Basic Information** section on the **Instance Details** page that corresponds to the instance in the ApsaraMQ for MQTT console.
     *
     * @example mqtt-cn-i7m26mf****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region where the ApsaraMQ for MQTT instance resides. For more information, see [Endpoints](~~181438~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $mqttRegionId;

    /**
     * @description The message ID.
     *
     * @example AC1EC0030EAB78308DB16A3EC773****
     *
     * @var string
     */
    public $msgId;
    protected $_name = [
        'beginTime'    => 'BeginTime',
        'endTime'      => 'EndTime',
        'instanceId'   => 'InstanceId',
        'mqttRegionId' => 'MqttRegionId',
        'msgId'        => 'MsgId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mqttRegionId) {
            $res['MqttRegionId'] = $this->mqttRegionId;
        }
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMqttTraceMessagePublishRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MqttRegionId'])) {
            $model->mqttRegionId = $map['MqttRegionId'];
        }
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }

        return $model;
    }
}
