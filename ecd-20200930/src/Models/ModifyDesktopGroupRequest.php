<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyDesktopGroupRequest extends Model
{
    /**
     * @description Specifies whether cloud computers can be automatically created in the subscription cloud computer pool. This parameter takes effect and is required only if you set `ChargeType` to `PrePaid`.
     *
     * Valid values:
     *
     *   0: false
     *   1: true
     *
     * @example 1
     *
     * @var int
     */
    public $allowAutoSetup;

    /**
     * @description The number of cloud computers that can be reserved in the pay-as-you-go cloud computer pool. This parameter takes effect and is required only if you set `ChargeType` to `PostPaid`. Valid values:
     *
     *   0: does not allow the system to reserve cloud computers.
     *   N: allows the system to reserve N cloud computers (1≤ N ≤ 100).
     *
     * >  If you set this parameter to 0, the system must create and start cloud computers and then assign the cloud computers to end users when the end users request cloud computers. This process is time-consuming. To improve user experience, we recommend that you reserve a specific number of cloud computers.
     * @example 1
     *
     * @var int
     */
    public $allowBufferCount;

    /**
     * @description The number of concurrent sessions that is allowed for each cloud computer in a multi-session cloud computer pool.
     *
     * >  This parameter is unavailable.
     * @example 1
     *
     * @var int
     */
    public $bindAmount;

    /**
     * @description *   This parameter has different meanings based on the billing method of the cloud computer pool. For a subscription pool, this parameter specifies the number of cloud computers to purchase in the pool. Valid values: 0 to 200.
     *   For a pay-as-you-go pool, this parameter specifies the minimum number of cloud computers to create in the pool. Default value: 1. Valid values: 0 to `MaxDesktopsCount`.
     *
     * @example 5
     *
     * @var int
     */
    public $buyDesktopsCount;

    /**
     * @description The role that uses the cloud computer pool.
     *
     * Valid values:
     *
     *   teacher
     *
     * <!-- -->
     *
     *   student
     *
     * <!-- -->
     * @example teacher
     *
     * @var string
     */
    public $classify;

    /**
     * @description The remarks.
     *
     * @example test
     *
     * @var string
     */
    public $comments;

    /**
     * @description The maximum period of time during which the session is connected. When the specified maximum period of time is reached, the session is automatically disconnected. Unit: milliseconds. Valid values: 900000 to 345600000. That is, the session can be connected for 15 to 5,760 minutes (4 days).
     *
     * @example 600000
     *
     * @var int
     */
    public $connectDuration;

    /**
     * @description The ID of the cloud computer pool.
     *
     * This parameter is required.
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The name of the cloud computer pool.
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
     * @description The ID of the Apsara File Storage NAS (NAS) file system for the user data roaming feature.
     *
     * >  This parameter is unavailable.
     * @example 04f314****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description After an end user connects to a cloud computer, the session is established. If the system does not detect inputs from the keyboard or mouse within the specified period of time, the session is closed. Unit: milliseconds. Valid values: 360000 to 3600000 (6 minutes to 60 minutes)
     *
     * >  This parameter is suitable only for cloud computers whose image version is v1.0.2 or later.
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
     * @description The retention period of a session after it is disconnected. Unit: milliseconds. Valid values: 180000 to 345600000. That is, the session can be retained for 3 to 5,760 minutes (4 days) after it is disconnected. If you set this parameter to 0, the session is permanently retained after it is disconnected.
     *
     * When a session is disconnected, take note of the following situations: If an end user does not resume the session within the specified duration, the session is closed and all unsaved data is cleared. If the end user resumes the session within the specified duration, the end user can continue to access data of the session.
     * @example 1000
     *
     * @var int
     */
    public $keepDuration;

    /**
     * @description The load balancing policy of the multi-session cloud computer pool.
     *
     * Valid values:
     *
     *   0: depth-first
     *   1: breadth-first
     *
     * @example 0
     *
     * @var int
     */
    public $loadPolicy;

    /**
     * @description The maximum number of cloud computers that can be housed in the pay-as-you-go cloud computer pool. Valid values: 0 to 500.
     *
     * @example 10
     *
     * @var int
     */
    public $maxDesktopsCount;

    /**
     * @description The maximum number of cloud computers that can be automatically created in the subscription cloud computer pool. This parameter takes effect and is required only if you set `ChargeType` to `PrePaid`. Default value: 1. Valid values: 0 to `MaxDesktopsCount`.
     *
     * @example 1
     *
     * @var int
     */
    public $minDesktopsCount;

    /**
     * @description The ID of the cloud computer template.
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
     * @description Specifies whether to enable user data roaming.
     *
     * >  This parameter is unavailable.
     * @example false
     *
     * @var bool
     */
    public $profileFollowSwitch;

    /**
     * @description The threshold for the ratio of connected sessions. This parameter indicates the condition that triggers auto scaling in a multi-session cloud computer pool. The ratio of connected sessions IS calculated by using the following formula:
     *
     * >  This parameter is unavailable.
     * @example 0.5
     *
     * @var float
     */
    public $ratioThreshold;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the regions supported by Elastic Desktop Service.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The disk reset type of cloud computers.
     *
     * Valid values:
     *
     *   0: does not reset disks.
     *
     *   1: resets only the system disks.
     *
     *   2: resets only the user disks.
     *
     *   3: resets the system disks and user disks.
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
     * @description The period of time before the idle cloud computer enters the Stopped state. When the specified period of time is reached, the cloud computer is automatically stopped. If an end user connects to the stopped cloud computer, the cloud computer automatically starts. Unit: milliseconds.
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
