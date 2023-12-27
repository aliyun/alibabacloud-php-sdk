<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\CreateDBClusterRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDBClusterRequest extends Model
{
    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $backupSetID;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The value is case-sensitive and can contain a maximum of 64 ASCII characters in length.
     *
     * @example 123e4567-e89b-12d3-a456-t7241****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The computing resources of the cluster. This parameter is required if the Mode parameter is set to **Flexible**.
     *
     * >  You can call the [DescribeAvailableResource](~~190632~~) operation to query the computing resources that are available within a specific region.
     * @example 32Core128GB
     *
     * @var string
     */
    public $computeResource;

    /**
     * @description The edition of the cluster. Valid values:
     *
     *   **Cluster**: reserved mode for Cluster Edition
     *
     * <!---->
     *
     *   **MixedStorage**: elastic mode for Cluster Edition
     *
     * >  If the DBClusterCategory parameter is set to Cluster, you must set the Mode parameter to Reserver. If the DBClusterCategory parameter is set to MixedStorage, you must set the Mode parameter to Flexible. Otherwise, the cluster fails to be created.
     * @example Cluster
     *
     * @var string
     */
    public $DBClusterCategory;

    /**
     * @description The specification of the cluster. Valid values:
     *
     *   **C8**
     *   **C32**
     *
     * >  This parameter is required if the Mode parameter is set to Reserver.
     * @example C8
     *
     * @var string
     */
    public $DBClusterClass;

    /**
     * @description The description of the cluster.
     *
     *   The description cannot start with `http://` or `https`.
     *   The description must be 2 to 256 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description The network type of the cluster. Set the value to **VPC**.
     *
     * @example VPC
     *
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @description The version of the cluster. Set the value to **3.0**.
     *
     * @example 3.0
     *
     * @var string
     */
    public $DBClusterVersion;

    /**
     * @description The number of node groups. Valid values: 1 to 200 (integer).
     *
     * >  This parameter is required if the Mode parameter is set to Reserver.
     * @example 2
     *
     * @var string
     */
    public $DBNodeGroupCount;

    /**
     * @description The storage capacity of the cluster. Unit: GB.
     *
     *   Valid values when DBClusterClass is set to C8: 100 to 1000
     *   Valid values when DBClusterClass is set to C32: 100 to 8000
     *
     * > * This parameter is required if the Mode parameter is set to Reserver.
     * > * 1000 The storage capacity less than 1,000 GB increases in 100 GB increments. The storage capacity greater than 1,000 GB increases in 1,000 GB increments.
     * @example 200
     *
     * @var string
     */
    public $DBNodeStorage;

    /**
     * @description Specifies whether to enable disk encryption.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var string
     */
    public $diskEncryption;

    /**
     * @description The number of elastic I/O units (EIUs). For more information, see [Use EIUs to scale up storage resources](~~189505~~).
     *
     * @example 0
     *
     * @var string
     */
    public $elasticIOResource;

    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $executorCount;

    /**
     * @description The Key Management Service (KMS) ID that is used for disk encryption. This parameter is valid only when DiskEncryption is set to true.
     *
     * @example xxxxxxxx-xxxx-xxxx-xxxx-xxxx
     *
     * @var string
     */
    public $kmsId;

    /**
     * @description The mode of the cluster. Valid values:
     *
     *   **Reserver**: the reserved mode.
     *   **Flexible**: the elastic mode.
     *
     * @example Reserver
     *
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The billing method of the cluster. Valid values:
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
     * @description The subscription type of the subscription cluster. Valid values:
     *
     *   **Year**: subscription on a yearly basis
     *   **Month**: subscription on a monthly basis
     *
     * >  This parameter is required if the PayType parameter is set to Prepaid.
     * @example Year
     *
     * @var string
     */
    public $period;

    /**
     * @description The region ID of the cluster.
     *
     * >  You can call the [DescribeRegions](~~143074~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the cluster belongs.
     *
     * @example rg-4690g37929****
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
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $restoreType;

    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $sourceDBInstanceName;

    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $storageResource;

    /**
     * @description A reserved parameter.
     *
     * @example N/A
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The tags to add to the cluster.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The subscription period of the subscription cluster.
     *
     *   Valid values when Period is set to Year: 1, 2, 3, and 5 (integer)
     *   Valid values when Period is set to Month: 1 to 11 (integer)
     *
     * > * This parameter is required if the PayType parameter is set to Prepaid.
     * > * Longer subscription periods offer more savings. Purchasing a cluster for one year is more cost-effective than purchasing the cluster for 10 or 11 months.
     * @example 1
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description The virtual private cloud (VPC) ID of the cluster.
     *
     * @example vpc-bp1at5ze0t5u3xtqn****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the cluster.
     *
     * @example vsw-bp1aadw9k19x6cis9****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID of the cluster.
     *
     * >  You can call the [DescribeRegions](~~143074~~) operation to query the most recent zone list.
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'backupSetID'          => 'BackupSetID',
        'clientToken'          => 'ClientToken',
        'computeResource'      => 'ComputeResource',
        'DBClusterCategory'    => 'DBClusterCategory',
        'DBClusterClass'       => 'DBClusterClass',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterNetworkType' => 'DBClusterNetworkType',
        'DBClusterVersion'     => 'DBClusterVersion',
        'DBNodeGroupCount'     => 'DBNodeGroupCount',
        'DBNodeStorage'        => 'DBNodeStorage',
        'diskEncryption'       => 'DiskEncryption',
        'elasticIOResource'    => 'ElasticIOResource',
        'executorCount'        => 'ExecutorCount',
        'kmsId'                => 'KmsId',
        'mode'                 => 'Mode',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'payType'              => 'PayType',
        'period'               => 'Period',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'restoreTime'          => 'RestoreTime',
        'restoreType'          => 'RestoreType',
        'sourceDBInstanceName' => 'SourceDBInstanceName',
        'storageResource'      => 'StorageResource',
        'storageType'          => 'StorageType',
        'tag'                  => 'Tag',
        'usedTime'             => 'UsedTime',
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
        if (null !== $this->backupSetID) {
            $res['BackupSetID'] = $this->backupSetID;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = $this->computeResource;
        }
        if (null !== $this->DBClusterCategory) {
            $res['DBClusterCategory'] = $this->DBClusterCategory;
        }
        if (null !== $this->DBClusterClass) {
            $res['DBClusterClass'] = $this->DBClusterClass;
        }
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->DBClusterNetworkType) {
            $res['DBClusterNetworkType'] = $this->DBClusterNetworkType;
        }
        if (null !== $this->DBClusterVersion) {
            $res['DBClusterVersion'] = $this->DBClusterVersion;
        }
        if (null !== $this->DBNodeGroupCount) {
            $res['DBNodeGroupCount'] = $this->DBNodeGroupCount;
        }
        if (null !== $this->DBNodeStorage) {
            $res['DBNodeStorage'] = $this->DBNodeStorage;
        }
        if (null !== $this->diskEncryption) {
            $res['DiskEncryption'] = $this->diskEncryption;
        }
        if (null !== $this->elasticIOResource) {
            $res['ElasticIOResource'] = $this->elasticIOResource;
        }
        if (null !== $this->executorCount) {
            $res['ExecutorCount'] = $this->executorCount;
        }
        if (null !== $this->kmsId) {
            $res['KmsId'] = $this->kmsId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
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
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
        }
        if (null !== $this->sourceDBInstanceName) {
            $res['SourceDBInstanceName'] = $this->sourceDBInstanceName;
        }
        if (null !== $this->storageResource) {
            $res['StorageResource'] = $this->storageResource;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
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
     * @return CreateDBClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetID'])) {
            $model->backupSetID = $map['BackupSetID'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ComputeResource'])) {
            $model->computeResource = $map['ComputeResource'];
        }
        if (isset($map['DBClusterCategory'])) {
            $model->DBClusterCategory = $map['DBClusterCategory'];
        }
        if (isset($map['DBClusterClass'])) {
            $model->DBClusterClass = $map['DBClusterClass'];
        }
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['DBClusterNetworkType'])) {
            $model->DBClusterNetworkType = $map['DBClusterNetworkType'];
        }
        if (isset($map['DBClusterVersion'])) {
            $model->DBClusterVersion = $map['DBClusterVersion'];
        }
        if (isset($map['DBNodeGroupCount'])) {
            $model->DBNodeGroupCount = $map['DBNodeGroupCount'];
        }
        if (isset($map['DBNodeStorage'])) {
            $model->DBNodeStorage = $map['DBNodeStorage'];
        }
        if (isset($map['DiskEncryption'])) {
            $model->diskEncryption = $map['DiskEncryption'];
        }
        if (isset($map['ElasticIOResource'])) {
            $model->elasticIOResource = $map['ElasticIOResource'];
        }
        if (isset($map['ExecutorCount'])) {
            $model->executorCount = $map['ExecutorCount'];
        }
        if (isset($map['KmsId'])) {
            $model->kmsId = $map['KmsId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
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
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }
        if (isset($map['SourceDBInstanceName'])) {
            $model->sourceDBInstanceName = $map['SourceDBInstanceName'];
        }
        if (isset($map['StorageResource'])) {
            $model->storageResource = $map['StorageResource'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
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
