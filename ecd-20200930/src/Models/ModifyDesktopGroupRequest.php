<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyDesktopGroupRequest extends Model
{
    /**
     * @description Specifies whether to enable auto-creation of cloud computers for the subscription cloud computer share. You must specify this parameter when `ChargeType` is set to `PrePaid`.
     *
     * Valid values:
     *
     *   0: disable auto-creation of cloud computers.
     *   1: enables auto-creation of cloud computers.
     *
     * @example 1
     *
     * @var int
     */
    public $allowAutoSetup;

    /**
     * @description The maximum number of standby cloud computers that can be reserved within the pay-as-you-go cloud computer share. You must specify this property only when `ChargeType` is set to `PostPaid`. Valid values:
     *
     *   0: does not reserve any cloud computer.
     *   N: reserves N cloud computers (1≤ N ≤ 100).
     *
     * >  Setting this parameter to 0 means no cloud computers will be reserved within the cloud computer share. In this case, the system must create, start, and assign cloud computers to end users upon request, which can be time-consuming. To improve user experience, we recommend that you reserve a specific number of cloud computers.
     *
     * @example 1
     *
     * @var int
     */
    public $allowBufferCount;

    /**
     * @description The number of concurrent sessions allowed for each cloud computer within the multi-session many-to-many share.
     *
     * >  This parameter is not publicly available.
     *
     * @example 1
     *
     * @var int
     */
    public $bindAmount;

    /**
     * @description *   For subscription cloud computer shares, this parameter specifies the number of purchased cloud computers. Valid values: 0 to 200.
     *   For pay-as-you-go cloud computer shares, this parameter specifies the minimum number of cloud computers created in the initial batch. Default value: 1. Valid values: 0 to `MaxDesktopsCount`.
     *
     * @example 5
     *
     * @var int
     */
    public $buyDesktopsCount;

    /**
     * @description The type of the cloud computer share.
     *
     * >  This parameter is not publicly available.
     *
     * Valid values:
     *
     *   teacher: teacher-oriented.
     *   student: student-oriented.
     *
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
     * @var int
     */
    public $deleteDuration;

    /**
     * @description The ID of the cloud computer share.
     *
     * This parameter is required.
     *
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The name of the cloud computer share.
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
     * @description The ID of the File Storage NAS (NAS) file system for the user data roaming feature.
     *
     * >  This parameter is unavailable.
     *
     * @example 04f314****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description After an end user connects to a cloud computer, the session is established. If the system does not detect inputs from the keyboard or mouse within the specified period of time, the session is closed. Unit: milliseconds. Valid values: 360000 to 3600000 (6 minutes to 60 minutes)
     *
     * End users can receive a prompt to save data before sessions are disconnected. The system sends the prompt 30 seconds before the specified period of time is reached. To prevent data loss, end users must save the data of the sessions.
     *
     * >  This parameter is suitable only for cloud computers whose image version is v1.0.2 or later.
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
     * @description The retention period of a session after it is disconnected. Unit: milliseconds. Valid values: 180000 to 345600000. That is, the session can be retained for 3 to 5,760 minutes (4 days) after it is disconnected. If you set this parameter to 0, the session is permanently retained after it is disconnected.
     *
     * When a session is disconnected, take note of the following situations: If an end user does not resume the session within the specified duration, the session is closed and all unsaved data is cleared. If the end user resumes the session within the specified duration, the end user can continue to access data of the session.
     *
     * @example 1000
     *
     * @var int
     */
    public $keepDuration;

    /**
     * @description The load balancing policy for the multi-session many-to-many share.
     *
     * >  This parameter is not publicly available.
     *
     * Valid values:
     *
     *   0: depth first.
     *   1: breadth first.
     *
     * @example 0
     *
     * @var int
     */
    public $loadPolicy;

    /**
     * @description The maximum number of cloud computers allowed in the pay-as-you-go cloud computer share. Valid values: 0 to 500.
     *
     * @example 10
     *
     * @var int
     */
    public $maxDesktopsCount;

    /**
     * @description The maximum number of auto-created cloud computers allowed in the subscription cloud computer share. You must specify this parameter when `ChargeType` is set to `PrePaid`. Default value: 1. Valid values: 0 to `MaxDesktopsCount`.
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
     *
     * @example false
     *
     * @var bool
     */
    public $profileFollowSwitch;

    /**
     * @description The threshold for the ratio of connected sessions, which triggers automatic scaling of cloud computers within the multi-session many-to-many share. To calculate the ratio of connected sessions, use the following formula:
     *
     * `Ratio of connected sessions = Number of connected sessions/(Total number of cloud computers × Maximum number of sessions allowed for each cloud computer) × 100%`
     *
     * If the session ratio exceeds the threshold, new cloud computers are provisioned. If it falls below the threshold, additional cloud computers are removed.
     *
     * >  This parameter is not publicly available.
     *
     * @example 0.5
     *
     * @var float
     */
    public $ratioThreshold;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the regions supported by Elastic Desktop Service.
     *
     * This parameter is required.
     *
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
     *
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
        'allowAutoSetup' => 'AllowAutoSetup',
        'allowBufferCount' => 'AllowBufferCount',
        'bindAmount' => 'BindAmount',
        'buyDesktopsCount' => 'BuyDesktopsCount',
        'classify' => 'Classify',
        'comments' => 'Comments',
        'connectDuration' => 'ConnectDuration',
        'deleteDuration' => 'DeleteDuration',
        'desktopGroupId' => 'DesktopGroupId',
        'desktopGroupName' => 'DesktopGroupName',
        'disableSessionConfig' => 'DisableSessionConfig',
        'fileSystemId' => 'FileSystemId',
        'idleDisconnectDuration' => 'IdleDisconnectDuration',
        'imageId' => 'ImageId',
        'keepDuration' => 'KeepDuration',
        'loadPolicy' => 'LoadPolicy',
        'maxDesktopsCount' => 'MaxDesktopsCount',
        'minDesktopsCount' => 'MinDesktopsCount',
        'ownBundleId' => 'OwnBundleId',
        'policyGroupId' => 'PolicyGroupId',
        'policyGroupIds' => 'PolicyGroupIds',
        'profileFollowSwitch' => 'ProfileFollowSwitch',
        'ratioThreshold' => 'RatioThreshold',
        'regionId' => 'RegionId',
        'resetType' => 'ResetType',
        'scaleStrategyId' => 'ScaleStrategyId',
        'stopDuration' => 'StopDuration',
    ];

    public function validate() {}

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
        if (null !== $this->deleteDuration) {
            $res['DeleteDuration'] = $this->deleteDuration;
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
        if (isset($map['DeleteDuration'])) {
            $model->deleteDuration = $map['DeleteDuration'];
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
