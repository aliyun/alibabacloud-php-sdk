<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsdg\V20230914\Models\GetUserDatabasesResponseBody\dbInstanceList;

use AlibabaCloud\Tea\Model;

class dbInstance extends Model
{
    /**
     * @description 连接使用的主机
     *
     * @example 10.0.0.0
     *
     * @var string
     */
    public $connectHost;

    /**
     * @example 10001
     *
     * @var int
     */
    public $connectPort;

    /**
     * @description 备注信息
     *
     * @var string
     */
    public $dbDescription;

    /**
     * @description 数据库类型。
     *
     * @example MYSQL
     *
     * @var string
     */
    public $dbType;

    /**
     * @description 数据库所在网关ID。
     *
     * This parameter is required.
     * @example dg-pil582nbfe6p****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description 网关名称
     *
     * @var string
     */
    public $gatewayName;

    /**
     * @description 创建时间
     *
     * @example 2023-05-03 00:00:00
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description 通过网关所在宿主机去访问数据库的地址。
     *
     * This parameter is required.
     * @example 127.0.XX.XX
     *
     * @var string
     */
    public $host;

    /**
     * @description 数据库实例ID
     *
     * @example db-22h1qa9d452f****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 当前实例的状态
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description 网络类型
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description 节点的ID
     *
     * @example dg-node-xxxxx
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description 归属主账号ID
     *
     * @example 100XXXXX
     *
     * @var string
     */
    public $parentId;

    /**
     * @description 通过网关所在宿主机去访问数据库的端口。
     *
     * This parameter is required.
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description 所在的地域编号
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 服务类型
     *
     * @example ECS
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description 用户ID
     *
     * @example 100XXXXX
     *
     * @var string
     */
    public $userId;

    /**
     * @description VpcId
     *
     * @example vpc-bp1alpkpdb8fh3avx****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description VpcInstanceId
     *
     * @example i-xxxxxxxxxx
     *
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'connectHost'    => 'ConnectHost',
        'connectPort'    => 'ConnectPort',
        'dbDescription'  => 'DbDescription',
        'dbType'         => 'DbType',
        'gatewayId'      => 'GatewayId',
        'gatewayName'    => 'GatewayName',
        'gmtCreate'      => 'GmtCreate',
        'host'           => 'Host',
        'instanceId'     => 'InstanceId',
        'instanceStatus' => 'InstanceStatus',
        'networkType'    => 'NetworkType',
        'nodeId'         => 'NodeId',
        'parentId'       => 'ParentId',
        'port'           => 'Port',
        'regionId'       => 'RegionId',
        'serviceType'    => 'ServiceType',
        'userId'         => 'UserId',
        'vpcId'          => 'VpcId',
        'vpcInstanceId'  => 'VpcInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectHost) {
            $res['ConnectHost'] = $this->connectHost;
        }
        if (null !== $this->connectPort) {
            $res['ConnectPort'] = $this->connectPort;
        }
        if (null !== $this->dbDescription) {
            $res['DbDescription'] = $this->dbDescription;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayName) {
            $res['GatewayName'] = $this->gatewayName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectHost'])) {
            $model->connectHost = $map['ConnectHost'];
        }
        if (isset($map['ConnectPort'])) {
            $model->connectPort = $map['ConnectPort'];
        }
        if (isset($map['DbDescription'])) {
            $model->dbDescription = $map['DbDescription'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayName'])) {
            $model->gatewayName = $map['GatewayName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }

        return $model;
    }
}
