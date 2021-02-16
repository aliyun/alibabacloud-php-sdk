<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateDBClusterRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var string
     */
    public $clusterNetworkType;

    /**
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $usedTime;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $creationOption;

    /**
     * @var string
     */
    public $sourceResourceId;

    /**
     * @var string
     */
    public $cloneDataPoint;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var bool
     */
    public $TDEStatus;

    /**
     * @var string
     */
    public $GDNId;

    /**
     * @var string
     */
    public $creationCategory;

    /**
     * @var string
     */
    public $defaultTimeZone;

    /**
     * @var string
     */
    public $lowerCaseTableNames;

    /**
     * @var string
     */
    public $backupRetentionPolicyOnClusterDeletion;

    /**
     * @var string
     */
    public $DBMinorVersion;
    protected $_name = [
        'ownerId'                                => 'OwnerId',
        'resourceOwnerAccount'                   => 'ResourceOwnerAccount',
        'resourceOwnerId'                        => 'ResourceOwnerId',
        'ownerAccount'                           => 'OwnerAccount',
        'zoneId'                                 => 'ZoneId',
        'engine'                                 => 'Engine',
        'DBType'                                 => 'DBType',
        'DBVersion'                              => 'DBVersion',
        'DBNodeClass'                            => 'DBNodeClass',
        'clusterNetworkType'                     => 'ClusterNetworkType',
        'DBClusterDescription'                   => 'DBClusterDescription',
        'payType'                                => 'PayType',
        'autoRenew'                              => 'AutoRenew',
        'period'                                 => 'Period',
        'usedTime'                               => 'UsedTime',
        'VPCId'                                  => 'VPCId',
        'vSwitchId'                              => 'VSwitchId',
        'creationOption'                         => 'CreationOption',
        'sourceResourceId'                       => 'SourceResourceId',
        'cloneDataPoint'                         => 'CloneDataPoint',
        'clientToken'                            => 'ClientToken',
        'resourceGroupId'                        => 'ResourceGroupId',
        'securityIPList'                         => 'SecurityIPList',
        'TDEStatus'                              => 'TDEStatus',
        'GDNId'                                  => 'GDNId',
        'creationCategory'                       => 'CreationCategory',
        'defaultTimeZone'                        => 'DefaultTimeZone',
        'lowerCaseTableNames'                    => 'LowerCaseTableNames',
        'backupRetentionPolicyOnClusterDeletion' => 'BackupRetentionPolicyOnClusterDeletion',
        'DBMinorVersion'                         => 'DBMinorVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->clusterNetworkType) {
            $res['ClusterNetworkType'] = $this->clusterNetworkType;
        }
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
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
        if (null !== $this->creationOption) {
            $res['CreationOption'] = $this->creationOption;
        }
        if (null !== $this->sourceResourceId) {
            $res['SourceResourceId'] = $this->sourceResourceId;
        }
        if (null !== $this->cloneDataPoint) {
            $res['CloneDataPoint'] = $this->cloneDataPoint;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->TDEStatus) {
            $res['TDEStatus'] = $this->TDEStatus;
        }
        if (null !== $this->GDNId) {
            $res['GDNId'] = $this->GDNId;
        }
        if (null !== $this->creationCategory) {
            $res['CreationCategory'] = $this->creationCategory;
        }
        if (null !== $this->defaultTimeZone) {
            $res['DefaultTimeZone'] = $this->defaultTimeZone;
        }
        if (null !== $this->lowerCaseTableNames) {
            $res['LowerCaseTableNames'] = $this->lowerCaseTableNames;
        }
        if (null !== $this->backupRetentionPolicyOnClusterDeletion) {
            $res['BackupRetentionPolicyOnClusterDeletion'] = $this->backupRetentionPolicyOnClusterDeletion;
        }
        if (null !== $this->DBMinorVersion) {
            $res['DBMinorVersion'] = $this->DBMinorVersion;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['ClusterNetworkType'])) {
            $model->clusterNetworkType = $map['ClusterNetworkType'];
        }
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
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
        if (isset($map['CreationOption'])) {
            $model->creationOption = $map['CreationOption'];
        }
        if (isset($map['SourceResourceId'])) {
            $model->sourceResourceId = $map['SourceResourceId'];
        }
        if (isset($map['CloneDataPoint'])) {
            $model->cloneDataPoint = $map['CloneDataPoint'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['TDEStatus'])) {
            $model->TDEStatus = $map['TDEStatus'];
        }
        if (isset($map['GDNId'])) {
            $model->GDNId = $map['GDNId'];
        }
        if (isset($map['CreationCategory'])) {
            $model->creationCategory = $map['CreationCategory'];
        }
        if (isset($map['DefaultTimeZone'])) {
            $model->defaultTimeZone = $map['DefaultTimeZone'];
        }
        if (isset($map['LowerCaseTableNames'])) {
            $model->lowerCaseTableNames = $map['LowerCaseTableNames'];
        }
        if (isset($map['BackupRetentionPolicyOnClusterDeletion'])) {
            $model->backupRetentionPolicyOnClusterDeletion = $map['BackupRetentionPolicyOnClusterDeletion'];
        }
        if (isset($map['DBMinorVersion'])) {
            $model->DBMinorVersion = $map['DBMinorVersion'];
        }

        return $model;
    }
}
