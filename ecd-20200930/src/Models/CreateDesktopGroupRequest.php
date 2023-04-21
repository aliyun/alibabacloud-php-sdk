<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateDesktopGroupRequest extends Model
{
    /**
     * @description The end users whom you want to add to all types of desktop groups.
     *
     * @example Alice
     *
     * @var bool
     */
    public $allClassifyUsers;

    /**
     * @description Specifies whether to automatically create cloud desktops in the desktop group if you set the billing method to subscription. If you set the ChargeType parameter to PrePaid, this parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $allowAutoSetup;

    /**
     * @description Specifies whether to reserve cloud desktops if you set the billing method to pay-as-you-go. If you set the ChargeType parameter to PostPaid, this parameter is required. Valid values: 0: does not allow the system to reserve cloud desktops. N: allows the system to reserve N cloud desktops. The variable N must be an integer that ranges from 1 to 100.
     *
     * @example 1
     *
     * @var int
     */
    public $allowBufferCount;

    /**
     * @description Specifies whether to enable automatic payment.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description 是否自动续费。
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The number of sessions that are allowed per cloud desktop in a multi-session desktop group.
     *
     * @example 1
     *
     * @var int
     */
    public $bindAmount;

    /**
     * @description The ID of the desktop template.
     *
     * @example b-je9hani001wfn****
     *
     * @var string
     */
    public $bundleId;

    /**
     * @description The number of cloud desktops that you want to purchase. Valid values: 0 to 200.
     *
     * @example 3
     *
     * @var int
     */
    public $buyDesktopsCount;

    /**
     * @description The billing method of the cloud desktops in the desktop group.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The type of the desktop group.
     *
     * @example teacher
     *
     * @var string
     */
    public $classify;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The remarks on the desktop group.
     *
     * @example test
     *
     * @var string
     */
    public $comments;

    /**
     * @description The maximum period of time during which the session is connected. When the specified maximum period of time is reached, the session automatically disconnects. Unit: milliseconds. This parameter is required only for cloud desktops in the same desktop group.
     *
     * @example 300000
     *
     * @var int
     */
    public $connectDuration;

    /**
     * @description The default number of cloud desktops to create when you create the desktop group. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $defaultInitDesktopCount;

    /**
     * @description The name of the desktop group.
     *
     * @example desktopGroupName1
     *
     * @var string
     */
    public $desktopGroupName;

    /**
     * @description The ID of the directory.
     *
     * @example hide
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The end users that can use the desktop group.
     *
     * @var string[]
     */
    public $endUserIds;

    /**
     * @description The Apsara File Storage NAS (NAS) file system that is used after data roaming is enabled.
     *
     * @example 04f314****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description 桌面组版本。
     *
     * @example 2
     *
     * @var int
     */
    public $groupVersion;

    /**
     * @description The maximum period of time for which a session remains idle. If an end user performs no operations on a cloud desktop by using keyboards or mouses during a session, the session becomes idle. When the specified maximum period of time is reached, the session automatically disconnects. Unit: milliseconds. This parameter is required only for cloud desktops in the same desktop group.
     *
     * @example 300000
     *
     * @var int
     */
    public $idleDisconnectDuration;

    /**
     * @description The retention period of the cloud desktop after the end user disconnects from the cloud desktop. Unit: milliseconds.
     *
     * @example 6000
     *
     * @var int
     */
    public $keepDuration;

    /**
     * @description The load balancing policy of the multi-session desktop group.
     *
     * @example 0
     *
     * @var int
     */
    public $loadPolicy;

    /**
     * @description The maximum number of cloud desktops that the desktop group can contain. Valid values: 0 to 200.
     *
     * @example 50
     *
     * @var int
     */
    public $maxDesktopsCount;

    /**
     * @description The minimum number of cloud desktops that must be contained in the desktop group if you set the billing method to subscription. If you set the ChargeType parameter to PrePaid, this parameter is required. Valid values: 0 to the value of MaxDesktopsCount. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $minDesktopsCount;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+os-c5cy7q578s8jc****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The type of the desktop group.
     *
     * @example 0
     *
     * @var int
     */
    public $ownType;

    /**
     * @description The subscription period of the cloud desktops in the desktop group. The unit is specified by the PeriodUnit parameter. The Period parameter takes effect only if you set the ChargeType parameter to PrePaid.
     *
     *   Valid values if you set the PeriodUnit parameter to Month:
     *
     *   1
     *   2
     *   3
     *   6
     *
     *   Valid values if you set the PeriodUnit parameter to Year:
     *
     *   1
     *   2
     *   3
     *   4
     *   5
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The ID of the policy.
     *
     * @example pg-9c2d6t2dwflqr****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description Specifies whether to enable data roaming.
     *
     * @example false
     *
     * @var bool
     */
    public $profileFollowSwitch;

    /**
     * @description The threshold for the ratio of connected sessions. This parameter is the condition that triggers auto scaling in a multi-session desktop group. `Ratio of connected sessions = Number of connected sessions/(Total number of cloud desktops × Maximum number of sessions allowed for each cloud desktop) × 100%`. When the specified threshold is reached, new cloud desktops are automatically created. When the specified threshold is not reached, idle cloud desktops are released.
     *
     * @example 0.5
     *
     * @var float
     */
    public $ratioThreshold;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies which type of the disk to reset for cloud desktops in the desktop group.
     *
     * @example 0
     *
     * @var int
     */
    public $resetType;

    /**
     * @description The ID of the scaling policy.
     *
     * > This parameter is unavailable.
     * @example hide
     *
     * @var string
     */
    public $scaleStrategyId;

    /**
     * @description The period of time before the idle cloud desktop is stopped. When the specified period of time is reached, the idle cloud desktop automatically stops. If an end user connects to a stopped cloud desktop, the cloud desktop automatically starts. Unit: milliseconds.
     *
     * @example 300000
     *
     * @var int
     */
    public $stopDuration;

    /**
     * @description Specifies whether to enable disk encryption.
     *
     * @example false
     *
     * @var bool
     */
    public $volumeEncryptionEnabled;

    /**
     * @description The ID of the Key Management Service (KMS) key that you want to use when disk encryption is enabled. You can call the [ListKeys](~~28951~~) operation to obtain a list of KMS keys.
     *
     * @example 08c33a6f-4e0a-4a1b-a3fa-7ddfa1d4****
     *
     * @var string
     */
    public $volumeEncryptionKey;

    /**
     * @description The ID of the virtual private cloud (VPC) in which you want to create the desktop group.
     *
     * @example hide
     *
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
        'defaultInitDesktopCount' => 'DefaultInitDesktopCount',
        'desktopGroupName'        => 'DesktopGroupName',
        'directoryId'             => 'DirectoryId',
        'endUserIds'              => 'EndUserIds',
        'fileSystemId'            => 'FileSystemId',
        'groupVersion'            => 'GroupVersion',
        'idleDisconnectDuration'  => 'IdleDisconnectDuration',
        'keepDuration'            => 'KeepDuration',
        'loadPolicy'              => 'LoadPolicy',
        'maxDesktopsCount'        => 'MaxDesktopsCount',
        'minDesktopsCount'        => 'MinDesktopsCount',
        'officeSiteId'            => 'OfficeSiteId',
        'ownType'                 => 'OwnType',
        'period'                  => 'Period',
        'periodUnit'              => 'PeriodUnit',
        'policyGroupId'           => 'PolicyGroupId',
        'profileFollowSwitch'     => 'ProfileFollowSwitch',
        'ratioThreshold'          => 'RatioThreshold',
        'regionId'                => 'RegionId',
        'resetType'               => 'ResetType',
        'scaleStrategyId'         => 'ScaleStrategyId',
        'stopDuration'            => 'StopDuration',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
        'volumeEncryptionKey'     => 'VolumeEncryptionKey',
        'vpcId'                   => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->defaultInitDesktopCount) {
            $res['DefaultInitDesktopCount'] = $this->defaultInitDesktopCount;
        }
        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->groupVersion) {
            $res['GroupVersion'] = $this->groupVersion;
        }
        if (null !== $this->idleDisconnectDuration) {
            $res['IdleDisconnectDuration'] = $this->idleDisconnectDuration;
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
        if (null !== $this->stopDuration) {
            $res['StopDuration'] = $this->stopDuration;
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

    /**
     * @param array $map
     *
     * @return CreateDesktopGroupRequest
     */
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
        if (isset($map['DefaultInitDesktopCount'])) {
            $model->defaultInitDesktopCount = $map['DefaultInitDesktopCount'];
        }
        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = $map['EndUserIds'];
            }
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['GroupVersion'])) {
            $model->groupVersion = $map['GroupVersion'];
        }
        if (isset($map['IdleDisconnectDuration'])) {
            $model->idleDisconnectDuration = $map['IdleDisconnectDuration'];
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
        if (isset($map['StopDuration'])) {
            $model->stopDuration = $map['StopDuration'];
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
