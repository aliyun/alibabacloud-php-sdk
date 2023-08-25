<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClustersResponseBody\items;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClustersResponseBody\items\DBCluster\tags;
use AlibabaCloud\Tea\Model;

class DBCluster extends Model
{
    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   **ads**: pay-as-you-go
     *   **ads_pre**: subscription
     *
     * @example ads_pre
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The specifications of the reserved computing resources. Each ACU is equivalent to 1 core and 4 GB memory. Computing resources serve compute operations. The amount of computing resources is proportional to the query speed of the cluster. You can scale computing resources based on your needs.
     *
     * @example 16ACU
     *
     * @var string
     */
    public $computeResource;

    /**
     * @description The public endpoint of the cluster.
     *
     * @example amv-bp163885f8q21****.ads.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The time when the cluster was created. The time follows the ISO 8601 standard in the *yyyy-mm-ddThh:mm:ssZ* format. The time is displayed in UTC.
     *
     * @example 2022-04-01T09:50:18Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the cluster.
     *
     * @example adb_test
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-bp163885f8q21****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The network type of the cluster. **VPC** is returned.
     *
     * @example VPC
     *
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @description The state of the cluster. Valid values:
     *
     *   **Preparing**: The cluster is being prepared.
     *   **Creating**: The cluster is being created.
     *   **Running**: The cluster is running.
     *   **Deleting**: The cluster is being deleted.
     *   **Restoring**: The cluster is being restored from a backup.
     *   **ClassChanging**: The cluster specifications are being changed.
     *   **NetAddressCreating**: A network connection is being created.
     *   **NetAddressDeleting**: A network connection is being deleted.
     *   **NetAddressModifying**: A network connection is being modified.
     *
     * @example Running
     *
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @description The type of the cluster. By default, **Common** is returned, which indicates a common cluster.
     *
     * @example Common
     *
     * @var string
     */
    public $DBClusterType;

    /**
     * @description The version of the AnalyticDB for MySQL Data Lakehouse Edition cluster. Only the version **5.0** is supported.
     *
     * @example 5.0
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description The engine of the cluster. **AnalyticDB** is returned.
     *
     * @example AnalyticDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The time when the cluster expired. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time is displayed in UTC.
     *
     * > *   The expiration time is returned for a subscription cluster.
     * > *   An empty string is returned for a pay-as-you-go cluster.
     * @example 2022-07-01T09:50:18Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Indicates whether the subscription cluster has expired. Valid values:
     *
     *   **true**: The cluster has expired.
     *   **false**: The cluster has not expired.
     *
     * > *   If the cluster has expired, the system locks or releases the cluster within a specific time period. We recommend that you renew expired clusters. For more information, see [Renewal policy](~~135246~~).
     * > *  This parameter is not returned for pay-as-you-go clusters.
     * @example false
     *
     * @var string
     */
    public $expired;

    /**
     * @description The lock state of the instance. Valid values:
     *
     *   **Unlock**: The cluster is not locked.
     *   **ManualLock**: The cluster is manually locked.
     *   **LockByExpiration**: The cluster is automatically locked due to cluster expiration.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The reason why the cluster is locked.
     *
     * >  This parameter is returned only when the cluster is locked. The value is **instance_expire**.
     * @example instance_expired
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The mode of the cluster. By default, **flexible** is returned, which indicates that the cluster is in elastic mode.
     *
     * @example flexible
     *
     * @var string
     */
    public $mode;

    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The port number that is used to connect to the cluster.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The region ID of the cluster.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The remaining reserved computing resources that are available in the cluster. Each ACU is equivalent to 1 core and 4 GB memory.
     *
     * @example 32ACU
     *
     * @var string
     */
    public $reservedACU;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmyiu4ekp****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The specifications of the reserved storage resources. Each AnalyticDB compute unit (ACU) is equivalent to 1 core and 4 GB memory. Storage resources serve read and write requests. The amount of storage resources is proportional to the read and write performance of the cluster.
     *
     * @example 24ACU
     *
     * @var string
     */
    public $storageResource;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-bp13h7uzhulpuxvnp****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the cluster.
     *
     * @example vsw-bp1syh8vvw8yech7n****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID of the cluster.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'commodityCode'        => 'CommodityCode',
        'computeResource'      => 'ComputeResource',
        'connectionString'     => 'ConnectionString',
        'createTime'           => 'CreateTime',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId'          => 'DBClusterId',
        'DBClusterNetworkType' => 'DBClusterNetworkType',
        'DBClusterStatus'      => 'DBClusterStatus',
        'DBClusterType'        => 'DBClusterType',
        'DBVersion'            => 'DBVersion',
        'engine'               => 'Engine',
        'expireTime'           => 'ExpireTime',
        'expired'              => 'Expired',
        'lockMode'             => 'LockMode',
        'lockReason'           => 'LockReason',
        'mode'                 => 'Mode',
        'payType'              => 'PayType',
        'port'                 => 'Port',
        'regionId'             => 'RegionId',
        'reservedACU'          => 'ReservedACU',
        'resourceGroupId'      => 'ResourceGroupId',
        'storageResource'      => 'StorageResource',
        'tags'                 => 'Tags',
        'VPCId'                => 'VPCId',
        'vSwitchId'            => 'VSwitchId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = $this->computeResource;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBClusterNetworkType) {
            $res['DBClusterNetworkType'] = $this->DBClusterNetworkType;
        }
        if (null !== $this->DBClusterStatus) {
            $res['DBClusterStatus'] = $this->DBClusterStatus;
        }
        if (null !== $this->DBClusterType) {
            $res['DBClusterType'] = $this->DBClusterType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reservedACU) {
            $res['ReservedACU'] = $this->reservedACU;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->storageResource) {
            $res['StorageResource'] = $this->storageResource;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ComputeResource'])) {
            $model->computeResource = $map['ComputeResource'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBClusterNetworkType'])) {
            $model->DBClusterNetworkType = $map['DBClusterNetworkType'];
        }
        if (isset($map['DBClusterStatus'])) {
            $model->DBClusterStatus = $map['DBClusterStatus'];
        }
        if (isset($map['DBClusterType'])) {
            $model->DBClusterType = $map['DBClusterType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReservedACU'])) {
            $model->reservedACU = $map['ReservedACU'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StorageResource'])) {
            $model->storageResource = $map['StorageResource'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
