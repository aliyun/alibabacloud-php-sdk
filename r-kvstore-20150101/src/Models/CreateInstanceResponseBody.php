<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceResponseBody extends Model
{
    /**
     * @description The maximum bandwidth of the instance. Unit: MB/s.
     *
     * @example 32
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The storage capacity of the instance. Unit: MB.
     *
     * @example 16384
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid**: pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The configurations of the instance.
     *
     * @example {\\"EvictionPolicy\\":\\"volatile-lru\\",\\"hash-max-ziplist-entries\\":512,\\"zset-max-ziplist-entries\\":128,\\"zset-max-ziplist-value\\":64,\\"set-max-intset-entries\\":512,\\"hash-max-ziplist-value\\":64}
     *
     * @var string
     */
    public $config;

    /**
     * @description The internal endpoint of the instance.
     *
     * @example r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com
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
     * @description The time when the subscription expires. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-01-18T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The GUID of the instance.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example apitest
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The state of the instance. The return value is Creating.
     *
     * @example Creating
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **CLASSIC**: classic network
     *   **VPC**: VPC
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The node type. Valid values:
     *
     *   **STAND_ALONE**: standalone
     *   **MASTER_SLAVE**: master-replica
     *
     * @example MASTER_SLAVE
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The ID of the order.
     *
     * This parameter is required.
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
     * @description The private IP address of the instance.
     *
     * @example 172.16.0.10
     *
     * @var string
     */
    public $privateIpAddr;

    /**
     * @description The expected maximum queries per second (QPS).
     *
     * @example 100000
     *
     * @var int
     */
    public $QPS;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hongkong
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 5DEA3CC9-F81D-4387-8E97-CEA40F09****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The username that is used to connect to the instance. By default, ApsaraDB for Redis provides a username that is named after the instance ID.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $userName;

    /**
     * @description The ID of the vSwitch to which the instance is connected.
     *
     * @example vsw-bp1e7clcw529l773d****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-bp1nme44gek34slfc****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'bandwidth'        => 'Bandwidth',
        'capacity'         => 'Capacity',
        'chargeType'       => 'ChargeType',
        'config'           => 'Config',
        'connectionDomain' => 'ConnectionDomain',
        'connections'      => 'Connections',
        'endTime'          => 'EndTime',
        'instanceId'       => 'InstanceId',
        'instanceName'     => 'InstanceName',
        'instanceStatus'   => 'InstanceStatus',
        'networkType'      => 'NetworkType',
        'nodeType'         => 'NodeType',
        'orderId'          => 'OrderId',
        'port'             => 'Port',
        'privateIpAddr'    => 'PrivateIpAddr',
        'QPS'              => 'QPS',
        'regionId'         => 'RegionId',
        'requestId'        => 'RequestId',
        'userName'         => 'UserName',
        'vSwitchId'        => 'VSwitchId',
        'vpcId'            => 'VpcId',
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
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->privateIpAddr) {
            $res['PrivateIpAddr'] = $this->privateIpAddr;
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
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['PrivateIpAddr'])) {
            $model->privateIpAddr = $map['PrivateIpAddr'];
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
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
