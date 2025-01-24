<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopGroupRequest\tag;

class CreateDesktopGroupRequest extends Model
{
    /**
     * @var bool
     */
    public $allClassifyUsers;
    /**
     * @var int
     */
    public $allowAutoSetup;
    /**
     * @var int
     */
    public $allowBufferCount;
    /**
     * @var bool
     */
    public $autoPay;
    /**
     * @var bool
     */
    public $autoRenew;
    /**
     * @var int
     */
    public $bindAmount;
    /**
     * @var string
     */
    public $bundleId;
    /**
     * @var int
     */
    public $buyDesktopsCount;
    /**
     * @var string
     */
    public $chargeType;
    /**
     * @var string
     */
    public $classify;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $comments;
    /**
     * @var int
     */
    public $connectDuration;
    /**
     * @var string
     */
    public $dataDiskCategory;
    /**
     * @var string
     */
    public $dataDiskPerLevel;
    /**
     * @var int
     */
    public $dataDiskSize;
    /**
     * @var int
     */
    public $defaultInitDesktopCount;
    /**
     * @var string
     */
    public $defaultLanguage;
    /**
     * @var string
     */
    public $desktopGroupName;
    /**
     * @var string
     */
    public $desktopType;
    /**
     * @var string
     */
    public $directoryId;
    /**
     * @var string[]
     */
    public $endUserIds;
    /**
     * @var string
     */
    public $exclusiveType;
    /**
     * @var string
     */
    public $fileSystemId;
    /**
     * @var int
     */
    public $groupAmount;
    /**
     * @var int
     */
    public $groupVersion;
    /**
     * @var string
     */
    public $hostname;
    /**
     * @var int
     */
    public $idleDisconnectDuration;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var int
     */
    public $keepDuration;
    /**
     * @var int
     */
    public $loadPolicy;
    /**
     * @var int
     */
    public $maxDesktopsCount;
    /**
     * @var int
     */
    public $minDesktopsCount;
    /**
     * @var bool
     */
    public $multiResource;
    /**
     * @var string
     */
    public $officeSiteId;
    /**
     * @var int
     */
    public $ownType;
    /**
     * @var int
     */
    public $period;
    /**
     * @var string
     */
    public $periodUnit;
    /**
     * @var string
     */
    public $policyGroupId;
    /**
     * @var bool
     */
    public $profileFollowSwitch;
    /**
     * @var string
     */
    public $promotionId;
    /**
     * @var float
     */
    public $ratioThreshold;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int
     */
    public $resetType;
    /**
     * @var string
     */
    public $scaleStrategyId;
    /**
     * @var string
     */
    public $sessionType;
    /**
     * @var string
     */
    public $snapshotPolicyId;
    /**
     * @var int
     */
    public $stopDuration;
    /**
     * @var string
     */
    public $systemDiskCategory;
    /**
     * @var string
     */
    public $systemDiskPerLevel;
    /**
     * @var int
     */
    public $systemDiskSize;
    /**
     * @var tag[]
     */
    public $tag;
    /**
     * @var string
     */
    public $timerGroupId;
    /**
     * @var bool
     */
    public $volumeEncryptionEnabled;
    /**
     * @var string
     */
    public $volumeEncryptionKey;
    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'allClassifyUsers'        => 'AllClassifyUsers',
        'allowAutoSetup'          => 'AllowAutoSetup',
        'allowBufferCount'        => 'AllowBufferCount',
        'autoPay'                 => 'AutoPay',
        'autoRenew'               => 'AutoRenew',
        'bindAmount'              => 'BindAmount',
        'bundleId'                => 'BundleId',
        'buyDesktopsCount'        => 'BuyDesktopsCount',
        'chargeType'              => 'ChargeType',
        'classify'                => 'Classify',
        'clientToken'             => 'ClientToken',
        'comments'                => 'Comments',
        'connectDuration'         => 'ConnectDuration',
        'dataDiskCategory'        => 'DataDiskCategory',
        'dataDiskPerLevel'        => 'DataDiskPerLevel',
        'dataDiskSize'            => 'DataDiskSize',
        'defaultInitDesktopCount' => 'DefaultInitDesktopCount',
        'defaultLanguage'         => 'DefaultLanguage',
        'desktopGroupName'        => 'DesktopGroupName',
        'desktopType'             => 'DesktopType',
        'directoryId'             => 'DirectoryId',
        'endUserIds'              => 'EndUserIds',
        'exclusiveType'           => 'ExclusiveType',
        'fileSystemId'            => 'FileSystemId',
        'groupAmount'             => 'GroupAmount',
        'groupVersion'            => 'GroupVersion',
        'hostname'                => 'Hostname',
        'idleDisconnectDuration'  => 'IdleDisconnectDuration',
        'imageId'                 => 'ImageId',
        'keepDuration'            => 'KeepDuration',
        'loadPolicy'              => 'LoadPolicy',
        'maxDesktopsCount'        => 'MaxDesktopsCount',
        'minDesktopsCount'        => 'MinDesktopsCount',
        'multiResource'           => 'MultiResource',
        'officeSiteId'            => 'OfficeSiteId',
        'ownType'                 => 'OwnType',
        'period'                  => 'Period',
        'periodUnit'              => 'PeriodUnit',
        'policyGroupId'           => 'PolicyGroupId',
        'profileFollowSwitch'     => 'ProfileFollowSwitch',
        'promotionId'             => 'PromotionId',
        'ratioThreshold'          => 'RatioThreshold',
        'regionId'                => 'RegionId',
        'resetType'               => 'ResetType',
        'scaleStrategyId'         => 'ScaleStrategyId',
        'sessionType'             => 'SessionType',
        'snapshotPolicyId'        => 'SnapshotPolicyId',
        'stopDuration'            => 'StopDuration',
        'systemDiskCategory'      => 'SystemDiskCategory',
        'systemDiskPerLevel'      => 'SystemDiskPerLevel',
        'systemDiskSize'          => 'SystemDiskSize',
        'tag'                     => 'Tag',
        'timerGroupId'            => 'TimerGroupId',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
        'volumeEncryptionKey'     => 'VolumeEncryptionKey',
        'vpcId'                   => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->endUserIds)) {
            Model::validateArray($this->endUserIds);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allClassifyUsers) {
            $res['AllClassifyUsers'] = $this->allClassifyUsers;
        }

        if (null !== $this->allowAutoSetup) {
            $res['AllowAutoSetup'] = $this->allowAutoSetup;
        }

        if (null !== $this->allowBufferCount) {
            $res['AllowBufferCount'] = $this->allowBufferCount;
        }

        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->bindAmount) {
            $res['BindAmount'] = $this->bindAmount;
        }

        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }

        if (null !== $this->buyDesktopsCount) {
            $res['BuyDesktopsCount'] = $this->buyDesktopsCount;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }

        if (null !== $this->connectDuration) {
            $res['ConnectDuration'] = $this->connectDuration;
        }

        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }

        if (null !== $this->dataDiskPerLevel) {
            $res['DataDiskPerLevel'] = $this->dataDiskPerLevel;
        }

        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }

        if (null !== $this->defaultInitDesktopCount) {
            $res['DefaultInitDesktopCount'] = $this->defaultInitDesktopCount;
        }

        if (null !== $this->defaultLanguage) {
            $res['DefaultLanguage'] = $this->defaultLanguage;
        }

        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
        }

        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->endUserIds) {
            if (\is_array($this->endUserIds)) {
                $res['EndUserIds'] = [];
                $n1                = 0;
                foreach ($this->endUserIds as $item1) {
                    $res['EndUserIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->exclusiveType) {
            $res['ExclusiveType'] = $this->exclusiveType;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->groupAmount) {
            $res['GroupAmount'] = $this->groupAmount;
        }

        if (null !== $this->groupVersion) {
            $res['GroupVersion'] = $this->groupVersion;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->idleDisconnectDuration) {
            $res['IdleDisconnectDuration'] = $this->idleDisconnectDuration;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->keepDuration) {
            $res['KeepDuration'] = $this->keepDuration;
        }

        if (null !== $this->loadPolicy) {
            $res['LoadPolicy'] = $this->loadPolicy;
        }

        if (null !== $this->maxDesktopsCount) {
            $res['MaxDesktopsCount'] = $this->maxDesktopsCount;
        }

        if (null !== $this->minDesktopsCount) {
            $res['MinDesktopsCount'] = $this->minDesktopsCount;
        }

        if (null !== $this->multiResource) {
            $res['MultiResource'] = $this->multiResource;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }

        if (null !== $this->profileFollowSwitch) {
            $res['ProfileFollowSwitch'] = $this->profileFollowSwitch;
        }

        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }

        if (null !== $this->ratioThreshold) {
            $res['RatioThreshold'] = $this->ratioThreshold;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }

        if (null !== $this->scaleStrategyId) {
            $res['ScaleStrategyId'] = $this->scaleStrategyId;
        }

        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
        }

        if (null !== $this->snapshotPolicyId) {
            $res['SnapshotPolicyId'] = $this->snapshotPolicyId;
        }

        if (null !== $this->stopDuration) {
            $res['StopDuration'] = $this->stopDuration;
        }

        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }

        if (null !== $this->systemDiskPerLevel) {
            $res['SystemDiskPerLevel'] = $this->systemDiskPerLevel;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->timerGroupId) {
            $res['TimerGroupId'] = $this->timerGroupId;
        }

        if (null !== $this->volumeEncryptionEnabled) {
            $res['VolumeEncryptionEnabled'] = $this->volumeEncryptionEnabled;
        }

        if (null !== $this->volumeEncryptionKey) {
            $res['VolumeEncryptionKey'] = $this->volumeEncryptionKey;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllClassifyUsers'])) {
            $model->allClassifyUsers = $map['AllClassifyUsers'];
        }

        if (isset($map['AllowAutoSetup'])) {
            $model->allowAutoSetup = $map['AllowAutoSetup'];
        }

        if (isset($map['AllowBufferCount'])) {
            $model->allowBufferCount = $map['AllowBufferCount'];
        }

        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['BindAmount'])) {
            $model->bindAmount = $map['BindAmount'];
        }

        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }

        if (isset($map['BuyDesktopsCount'])) {
            $model->buyDesktopsCount = $map['BuyDesktopsCount'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }

        if (isset($map['ConnectDuration'])) {
            $model->connectDuration = $map['ConnectDuration'];
        }

        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }

        if (isset($map['DataDiskPerLevel'])) {
            $model->dataDiskPerLevel = $map['DataDiskPerLevel'];
        }

        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        if (isset($map['DefaultInitDesktopCount'])) {
            $model->defaultInitDesktopCount = $map['DefaultInitDesktopCount'];
        }

        if (isset($map['DefaultLanguage'])) {
            $model->defaultLanguage = $map['DefaultLanguage'];
        }

        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
        }

        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = [];
                $n1                = 0;
                foreach ($map['EndUserIds'] as $item1) {
                    $model->endUserIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ExclusiveType'])) {
            $model->exclusiveType = $map['ExclusiveType'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['GroupAmount'])) {
            $model->groupAmount = $map['GroupAmount'];
        }

        if (isset($map['GroupVersion'])) {
            $model->groupVersion = $map['GroupVersion'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['IdleDisconnectDuration'])) {
            $model->idleDisconnectDuration = $map['IdleDisconnectDuration'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['KeepDuration'])) {
            $model->keepDuration = $map['KeepDuration'];
        }

        if (isset($map['LoadPolicy'])) {
            $model->loadPolicy = $map['LoadPolicy'];
        }

        if (isset($map['MaxDesktopsCount'])) {
            $model->maxDesktopsCount = $map['MaxDesktopsCount'];
        }

        if (isset($map['MinDesktopsCount'])) {
            $model->minDesktopsCount = $map['MinDesktopsCount'];
        }

        if (isset($map['MultiResource'])) {
            $model->multiResource = $map['MultiResource'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }

        if (isset($map['ProfileFollowSwitch'])) {
            $model->profileFollowSwitch = $map['ProfileFollowSwitch'];
        }

        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        if (isset($map['RatioThreshold'])) {
            $model->ratioThreshold = $map['RatioThreshold'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }

        if (isset($map['ScaleStrategyId'])) {
            $model->scaleStrategyId = $map['ScaleStrategyId'];
        }

        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }

        if (isset($map['SnapshotPolicyId'])) {
            $model->snapshotPolicyId = $map['SnapshotPolicyId'];
        }

        if (isset($map['StopDuration'])) {
            $model->stopDuration = $map['StopDuration'];
        }

        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }

        if (isset($map['SystemDiskPerLevel'])) {
            $model->systemDiskPerLevel = $map['SystemDiskPerLevel'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['TimerGroupId'])) {
            $model->timerGroupId = $map['TimerGroupId'];
        }

        if (isset($map['VolumeEncryptionEnabled'])) {
            $model->volumeEncryptionEnabled = $map['VolumeEncryptionEnabled'];
        }

        if (isset($map['VolumeEncryptionKey'])) {
            $model->volumeEncryptionKey = $map['VolumeEncryptionKey'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
