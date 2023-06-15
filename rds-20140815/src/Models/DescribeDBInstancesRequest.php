<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCzxxxxxxx
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
     * @description The endpoint of the instance. You must specify this parameter only when you want to query a single instance.
     *
     * @example rm-uf6wjk5xxxxxxx.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The instance type of the instance. For information, see [Primary ApsaraDB RDS instance types](~~26312~~).
     *
     * @example rds.mys2.small
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The ID of the instance. You can call the [DescribeDBInstances](~~26232~~) operation to query the ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The status of the instance. For more information, see [Instance states](~~26315~~).
     *
     * @example Running
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description The role of the instance. Valid values:
     *
     *   **Primary**: primary instance
     *   **Readonly**: read-only instance
     *   **Guard**: disaster recovery instance
     *   **Temp**: temporary instance
     *
     * By default, this operation returns the instances that assume any of the supported roles.
     * @example Primary
     *
     * @var string
     */
    public $DBInstanceType;

    /**
     * @description The ID of the dedicated cluster.
     *
     * @example dhg-7a9xxxxxxxx
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description The host ID of the instance in the dedicated cluster.
     *
     * @example i-bpxxxxxxx
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description The database engine of the instance. Valid values:
     *
     *   **MySQL**
     *   **SQLServer**
     *   **PostgreSQL**
     *   **MariaDB**
     *
     * By default, this operation returns the instances that run any of the supported database engines.
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version of the instance.
     *
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description Specifies whether to query instances that have expired. Valid values:
     *
     *   **True**: queries instances that have expired.
     *   **False**: does not query instances that have expired.
     *
     * @example True
     *
     * @var string
     */
    public $expired;

    /**
     * @description 实例过滤条件参数及其值的JSON串
     *
     * @example {"babelfishEnabled":"true"}
     *
     * @var string
     */
    public $filter;

    /**
     * @description Specifies whether to return the RDS edition of the instance by using the Category parameter. Valid values:
     *
     *   **0**: returns the RDS edition of the instance.
     *   **1**: does not return the RDS edition of the instance.
     *
     * @example 0
     *
     * @var int
     */
    public $instanceLevel;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **VPC**
     *   **Classic**
     *
     * By default, this operation returns the instances that reside in any of the supported network types.
     * @example Classic
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The number of entries to return per page. Valid values: **1 to 100**.
     *
     * Default value: **30**.
     *
     * > If you specify this parameter, **PageSize** and **PageNumber** are unavailable.
     * @example 30
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to display the next page. You must set this parameter to the value that is returned from the most recent call of the **DescribeDBInstances** operation for **NextToken**. If the returned entries are displayed on multiple pages, the next page can be displayed when you call this operation again with this parameter specified.
     *
     * @example o7PORW5o2TJg**********
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Valid values: any non-zero positive integer.
     *
     * Default value: **1**.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: **1** to **100**.
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
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmyxxxxx
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
     * @description The keyword that is used for fuzzy search. The keyword can be part of an instance ID or an instance description.
     *
     * @example rm-uf6w
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The tag that is added to the instance. Each tag is a key-value pair that consists of two fields: TagKey and TagValue. You can specify a maximum of five tags in the following format for each request: {"key1":"value1","key2":"value2"...}.
     *
     * @example {"key1":"value1"}
     *
     * @var string
     */
    public $tags;

    /**
     * @description The vSwitch ID of the instance.
     *
     * @example vsw-uf6adz52c2pxxxxxxxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The VPC ID of the instance.
     *
     * @example vpc-uf6f7l4fg90xxxxxxxxxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-a
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
        'category'             => 'Category',
        'clientToken'          => 'ClientToken',
        'connectionMode'       => 'ConnectionMode',
        'connectionString'     => 'ConnectionString',
        'DBInstanceClass'      => 'DBInstanceClass',
        'DBInstanceId'         => 'DBInstanceId',
        'DBInstanceStatus'     => 'DBInstanceStatus',
        'DBInstanceType'       => 'DBInstanceType',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'dedicatedHostId'      => 'DedicatedHostId',
        'engine'               => 'Engine',
        'engineVersion'        => 'EngineVersion',
        'expired'              => 'Expired',
        'filter'               => 'Filter',
        'instanceLevel'        => 'InstanceLevel',
        'instanceNetworkType'  => 'InstanceNetworkType',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
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
        'tags'                 => 'Tags',
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
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
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
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
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
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->instanceLevel) {
            $res['InstanceLevel'] = $this->instanceLevel;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
     * @return DescribeDBInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
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
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
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
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['InstanceLevel'])) {
            $model->instanceLevel = $map['InstanceLevel'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
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
