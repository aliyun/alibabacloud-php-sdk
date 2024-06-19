<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class CreateTairInstanceResponseBody extends Model
{
    /**
     * @description The maximum bandwidth of the instance. Unit: MB/s.
     *
     * @example 96
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid**: pay-as-you-go
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The detailed configurations of the instance. The value is a JSON string. For more information about the parameter description, see [Modify the parameters of an ApsaraDB for Redis instance](https://help.aliyun.com/document_detail/43885.html).
     *
     * @example {\\"EvictionPolicy\\":\\"volatile-lru\\",\\"hash-max-ziplist-entries\\":512,\\"zset-max-ziplist-entries\\":128,\\"list-max-ziplist-entries\\":512,\\"list-max-ziplist-value\\":64,\\"zset-max-ziplist-value\\":64,\\"set-max-intset-entries\\":512,\\"hash-max-ziplist-value\\":64}
     *
     * @var string
     */
    public $config;

    /**
     * @description The internal endpoint of the instance.
     *
     * @example r-bp13ac3d047b****.tairpena.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionDomain;

    /**
     * @description The maximum number of connections supported by the instance.
     *
     * @example 10000
     *
     * @var int
     */
    public $connections;

    /**
     * @description The ID of the instance.
     *
     * @example r-bp13ac3d047b****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     **
     *
     * This parameter is returned only if the **InstanceName** parameter is specified in the request.
     * @example redistest
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The state of the instance. The return value is **Creating**.
     *
     * @example Creating
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The order ID.
     *
     * @example 2084452111111
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The port number that is used to connect to the instance.
     *
     * @example 6379
     *
     * @var int
     */
    public $port;

    /**
     * @description The maximum number of read and write operations that can be processed by the instance per second. The value is a theoretical value.
     *
     * @example 100000
     *
     * @var int
     */
    public $QPS;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 12123216-4B00-4378-BE4B-08005BFC****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * @example 10****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'bandwidth'        => 'Bandwidth',
        'chargeType'       => 'ChargeType',
        'config'           => 'Config',
        'connectionDomain' => 'ConnectionDomain',
        'connections'      => 'Connections',
        'instanceId'       => 'InstanceId',
        'instanceName'     => 'InstanceName',
        'instanceStatus'   => 'InstanceStatus',
        'orderId'          => 'OrderId',
        'port'             => 'Port',
        'QPS'              => 'QPS',
        'regionId'         => 'RegionId',
        'requestId'        => 'RequestId',
        'taskId'           => 'TaskId',
        'zoneId'           => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->connectionDomain) {
            $res['ConnectionDomain'] = $this->connectionDomain;
        }
        if (null !== $this->connections) {
            $res['Connections'] = $this->connections;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->QPS) {
            $res['QPS'] = $this->QPS;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTairInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['ConnectionDomain'])) {
            $model->connectionDomain = $map['ConnectionDomain'];
        }
        if (isset($map['Connections'])) {
            $model->connections = $map['Connections'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['QPS'])) {
            $model->QPS = $map['QPS'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
