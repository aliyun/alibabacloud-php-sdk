<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class QueryMqttTraceMessageSubscribeRequest extends Model
{
    /**
     * @description The beginning of the time range to query. The value of this parameter is a UNIX timestamp in milliseconds.
     *
     * @example 1621936800000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description The ID of the client that subscribes to the message. If you do not specify this parameter, the IDs of all clients that subscribe to the message are returned.
     *
     * @example GID_test@@@consumer
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The number of the page to return. Pages start from page 1. If the input parameter value is greater than the total number of pages, the returned result is empty.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The end of the time range to query. The value of this parameter is a UNIX timestamp in milliseconds.
     *
     * @example 1618646400000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the ApsaraMQ for MQTT instance. The ID must be consistent with the ID of the instance that the ApsaraMQ for MQTT client uses. You can view the instance ID in the **Basic Information** section of the **Instance Details** page that corresponds to the instance in the ApsaraMQ for MQTT console.
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
     * @example AC1EC1B33D5978308DB17F3245E4****
     *
     * @var string
     */
    public $msgId;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 100.
     *
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether the returned results are displayed in reverse chronological order. Valid values:
     *
     *   **true**: The returned results are displayed in reverse order of the time when messages are delivered. This means that the latest consumed message is displayed as the first entry and the earliest consumed message is displayed as the last entry.
     *   **false**: The returned results are displayed in order of the time when messages are delivered. This means that the earliest consumed message is displayed as the first entry and the latest consumed message is displayed as the last entry.
     *
     * If you do not specify this parameter, the returned results are displayed in order of time when messages are delivered.
     * @example false
     *
     * @var bool
     */
    public $reverse;
    protected $_name = [
        'beginTime'    => 'BeginTime',
        'clientId'     => 'ClientId',
        'currentPage'  => 'CurrentPage',
        'endTime'      => 'EndTime',
        'instanceId'   => 'InstanceId',
        'mqttRegionId' => 'MqttRegionId',
        'msgId'        => 'MsgId',
        'pageSize'     => 'PageSize',
        'reverse'      => 'Reverse',
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
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMqttTraceMessageSubscribeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }

        return $model;
    }
}
