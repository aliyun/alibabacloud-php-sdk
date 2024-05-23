<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstancesForCloneRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCzxxxxxxxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The connection mode of the instance. Valid values:
     *
     *   **Standard**: standard mode
     *   **Safe**: database proxy mode
     *
     * By default, this operation queries the instances that use any of the supported connection modes.
     * @example Standard
     *
     * @var string
     */
    public $connectionMode;

    /**
     * @description The ID of the current instance.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $currentInstanceId;

    /**
     * @description The instance type of the instance. For more information, see [Instance types](https://help.aliyun.com/document_detail/26312.html).
     *
     * @example mysql.n1.micro.1
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The status of the instance. For more information, see [Instance state table](https://help.aliyun.com/document_detail/26315.html).
     *
     * @example Running
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description The role of the instance that you want to query. Valid values:
     *
     *   **Primary**: primary instance
     *   **Readonly**: read-only instance
     *   **Guard**: disaster recovery instance
     *   **Temp**: temporary instance
     *
     * By default, this operation queries the instances of all roles.
     * @example Primary
     *
     * @var string
     */
    public $DBInstanceType;

    /**
     * @description The database engine of the instance. Valid values:
     *
     *   MySQL
     *   SQLServer
     *   PostgreSQL
     *   PPAS
     *   MariaDB
     *
     * By default, this operation queries the instances that run any of the supported database engine types.
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version of the database engine.
     *
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description Specifies whether the instance expires. Valid values:
     *
     *   **True**: queries the instances that have expired.
     *   **False**: does not query instances that have expired.
     *
     * @example True
     *
     * @var string
     */
    public $expired;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **Classic**
     *   **VPC**
     *
     * @example Classic
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The type of the database node. Valid values:
     *
     *   **Master**: the primary node
     *   **Slave**: the secondary node
     *
     * @example Master
     *
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: **1 to 100**.
     *
     * Default value: **30**.
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *
     * By default, this operation queries the instances that use any of the supported billing methods.
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The region ID of the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The keyword that is used for the search. The keyword can be part of an instance ID or an instance description.
     *
     * @example rm-uf6w
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-j6csw46bgrgkxxxxxxxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-j6cjvqms29yxxxxxxxxxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The ID of the proxy mode.
     *
     * @example API
     *
     * @var string
     */
    public $proxyId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'connectionMode'       => 'ConnectionMode',
        'currentInstanceId'    => 'CurrentInstanceId',
        'DBInstanceClass'      => 'DBInstanceClass',
        'DBInstanceId'         => 'DBInstanceId',
        'DBInstanceStatus'     => 'DBInstanceStatus',
        'DBInstanceType'       => 'DBInstanceType',
        'engine'               => 'Engine',
        'engineVersion'        => 'EngineVersion',
        'expired'              => 'Expired',
        'instanceNetworkType'  => 'InstanceNetworkType',
        'nodeType'             => 'NodeType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'payType'              => 'PayType',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'searchKey'            => 'SearchKey',
        'vSwitchId'            => 'VSwitchId',
        'vpcId'                => 'VpcId',
        'zoneId'               => 'ZoneId',
        'proxyId'              => 'proxyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->currentInstanceId) {
            $res['CurrentInstanceId'] = $this->currentInstanceId;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
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
        if (null !== $this->proxyId) {
            $res['proxyId'] = $this->proxyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstancesForCloneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['CurrentInstanceId'])) {
            $model->currentInstanceId = $map['CurrentInstanceId'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
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
        if (isset($map['proxyId'])) {
            $model->proxyId = $map['proxyId'];
        }

        return $model;
    }
}
