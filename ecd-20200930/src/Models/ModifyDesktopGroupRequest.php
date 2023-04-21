<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyDesktopGroupRequest extends Model
{
    /**
     * @description Specifies whether to automatically create cloud desktops in the desktop group if you set the billing method to subscription. If you set the ChargeType parameter to PrePaid, this parameter is required. Valid values:
     *
     *   0: does not create cloud desktops in the desktop group.
     *   1: creates cloud desktops in the desktop group.
     *
     * @example 1
     *
     * @var int
     */
    public $allowAutoSetup;

    /**
     * @description Specifies whether to reserve cloud desktops if you set the billing method to pay-as-you-go. If you set the ChargeType parameter to PostPaid, this parameter is required. Valid values: 0: does not reserve cloud desktops. N: reserves N cloud desktops. Valid values of N: 1 to the value of the MaxDesktopsCount parameter.
     *
     * @example 1
     *
     * @var int
     */
    public $allowBufferCount;

    /**
     * @description The maximum number of sessions per cloud desktop in the multi-session desktop group.
     *
     * @example 1
     *
     * @var int
     */
    public $bindAmount;

    /**
     * @description The number of cloud desktops to purchase. Valid values: 0 to 200.
     *
     * @example 5
     *
     * @var int
     */
    public $buyDesktopsCount;

    /**
     * @description The classification of the cloud desktop pool.
     *
     * @example teacher
     *
     * @var string
     */
    public $classify;

    /**
     * @description The remarks on the desktop group.
     *
     * @example test
     *
     * @var string
     */
    public $comments;

    /**
     * @description The maximum duration of the session. Unit: milliseconds.
     *
     * @example 600000
     *
     * @var int
     */
    public $connectDuration;

    /**
     * @description The ID of the desktop group.
     *
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The name of the desktop group.
     *
     * @example desktopGroupName1
     *
     * @var string
     */
    public $desktopGroupName;

    /**
     * @description Specifies whether to disable session management.
     *
     * @example true
     *
     * @var bool
     */
    public $disableSessionConfig;

    /**
     * @description The ID of the Apsara File Storage NAS (NAS) file system.
     *
     * @example 04f314****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The maximum duration of the idle session. Unit: milliseconds.
     *
     * @example 120000
     *
     * @var int
     */
    public $idleDisconnectDuration;

    /**
     * @description The IDs of the images.
     *
     * @example desktopimage-windows-server-2016-64-ch
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The retention period of cloud desktops in the desktop group after end users disconnect from the desktops. Unit: ms.
     *
     * @example 1000
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
     * @example 10
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
     * @description The ID of the cloud desktop template.
     *
     * @example b-7t275tpgjueeu****
     *
     * @var string
     */
    public $ownBundleId;

    /**
     * @description The ID of the security policy.
     *
     * @example pg-53iyi2aar0nd6****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The IDs of policy groups.
     *
     * @var string[]
     */
    public $policyGroupIds;

    /**
     * @description Specifies whether to enable data roaming.
     *
     * @example false
     *
     * @var bool
     */
    public $profileFollowSwitch;

    /**
     * @description The session usage threshold for the multi-session desktop group that has an auto scaling policy in effect.
     *
     * @example 0.5
     *
     * @var float
     */
    public $ratioThreshold;

    /**
     * @description The region ID of the desktop group.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies which type of disk to reset for cloud desktops in the desktop group.
     *
     * @example 0
     *
     * @var int
     */
    public $resetType;

    /**
     * @description The ID of the scaling policy group.
     *
     * >  This parameter is unavailable.
     * @example s-kakowkdl****
     *
     * @var string
     */
    public $scaleStrategyId;

    /**
     * @description The duration before an idle cloud desktop is stopped. Unit: milliseconds.
     *
     * @example 180000
     *
     * @var int
     */
    public $stopDuration;
    protected $_name = [
        'allowAutoSetup'         => 'AllowAutoSetup',
        'allowBufferCount'       => 'AllowBufferCount',
        'bindAmount'             => 'BindAmount',
        'buyDesktopsCount'       => 'BuyDesktopsCount',
        'classify'               => 'Classify',
        'comments'               => 'Comments',
        'connectDuration'        => 'ConnectDuration',
        'desktopGroupId'         => 'DesktopGroupId',
        'desktopGroupName'       => 'DesktopGroupName',
        'disableSessionConfig'   => 'DisableSessionConfig',
        'fileSystemId'           => 'FileSystemId',
        'idleDisconnectDuration' => 'IdleDisconnectDuration',
        'imageId'                => 'ImageId',
        'keepDuration'           => 'KeepDuration',
        'loadPolicy'             => 'LoadPolicy',
        'maxDesktopsCount'       => 'MaxDesktopsCount',
        'minDesktopsCount'       => 'MinDesktopsCount',
        'ownBundleId'            => 'OwnBundleId',
        'policyGroupId'          => 'PolicyGroupId',
        'policyGroupIds'         => 'PolicyGroupIds',
        'profileFollowSwitch'    => 'ProfileFollowSwitch',
        'ratioThreshold'         => 'RatioThreshold',
        'regionId'               => 'RegionId',
        'resetType'              => 'ResetType',
        'scaleStrategyId'        => 'ScaleStrategyId',
        'stopDuration'           => 'StopDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowAutoSetup) {
            $res['AllowAutoSetup'] = $this->allowAutoSetup;
        }
        if (null !== $this->allowBufferCount) {
            $res['AllowBufferCount'] = $this->allowBufferCount;
        }
        if (null !== $this->bindAmount) {
            $res['BindAmount'] = $this->bindAmount;
        }
        if (null !== $this->buyDesktopsCount) {
            $res['BuyDesktopsCount'] = $this->buyDesktopsCount;
        }
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->connectDuration) {
            $res['ConnectDuration'] = $this->connectDuration;
        }
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
        }
        if (null !== $this->disableSessionConfig) {
            $res['DisableSessionConfig'] = $this->disableSessionConfig;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
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
        if (null !== $this->ownBundleId) {
            $res['OwnBundleId'] = $this->ownBundleId;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->policyGroupIds) {
            $res['PolicyGroupIds'] = $this->policyGroupIds;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDesktopGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowAutoSetup'])) {
            $model->allowAutoSetup = $map['AllowAutoSetup'];
        }
        if (isset($map['AllowBufferCount'])) {
            $model->allowBufferCount = $map['AllowBufferCount'];
        }
        if (isset($map['BindAmount'])) {
            $model->bindAmount = $map['BindAmount'];
        }
        if (isset($map['BuyDesktopsCount'])) {
            $model->buyDesktopsCount = $map['BuyDesktopsCount'];
        }
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['ConnectDuration'])) {
            $model->connectDuration = $map['ConnectDuration'];
        }
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
        }
        if (isset($map['DisableSessionConfig'])) {
            $model->disableSessionConfig = $map['DisableSessionConfig'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
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
        if (isset($map['OwnBundleId'])) {
            $model->ownBundleId = $map['OwnBundleId'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['PolicyGroupIds'])) {
            if (!empty($map['PolicyGroupIds'])) {
                $model->policyGroupIds = $map['PolicyGroupIds'];
            }
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

        return $model;
    }
}
