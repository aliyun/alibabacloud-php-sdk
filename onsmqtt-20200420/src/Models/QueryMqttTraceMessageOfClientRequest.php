<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class QueryMqttTraceMessageOfClientRequest extends Model
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
     * @description The client ID of the device whose messages you want to query.
     *
     * @example GID_test@@@producer
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
     * @example 1621591200000
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
     *   **true**: The returned results are displayed in reverse order of the time when messages are sent or received. This means that the latest sent or received message is displayed as the first entry and the earliest sent or received message is displayed as the last entry.
     *   **false**: The returned results are displayed in order of the time when messages are sent or received. This means that the earliest sent or received message is displayed as the first entry and the latest sent or received message is displayed as the last entry.
     *
     * If this parameter is not specified, the returned results are displayed in order of the time when messages are sent or received.
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
     * @return QueryMqttTraceMessageOfClientRequest
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }

        return $model;
    }
}
