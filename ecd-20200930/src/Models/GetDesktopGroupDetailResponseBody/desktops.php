<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponseBody\desktops\scaleTimerInfos;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponseBody\desktops\timerInfos;
use AlibabaCloud\Tea\Model;

class desktops extends Model
{
    /**
     * @description Indicates whether the auto scale-out feature is enabled for the desktop group.
     *
     * @example 1
     *
     * @var int
     */
    public $allowAutoSetup;

    /**
     * @description The number of reserved cloud desktops in the desktop group.
     *
     * @example 1
     *
     * @var int
     */
    public $allowBufferCount;

    /**
     * @description The number of sessions that are allowed for each cloud desktop in the multi-session desktop group.
     *
     * @example 1
     *
     * @var int
     */
    public $bindAmount;

    /**
     * @description The number of purchased cloud desktops. Valid values: 0 to 200.
     *
     * @example 5
     *
     * @var int
     */
    public $buyDesktopsCount;

    /**
     * @description The remarks on the desktop group.
     *
     * @example for students
     *
     * @var string
     */
    public $comments;

    /**
     * @description The maximum period of time for which a session is effective. Unit: milliseconds.
     *
     * @example 60000
     *
     * @var int
     */
    public $connectDuration;

    /**
     * @description The number of vCPUs.
     *
     * @example 4
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The time when the desktop group was created. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-11-06T08:28Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The user who creates the desktop group.
     *
     * @example 155177335370****
     *
     * @var string
     */
    public $creator;

    /**
     * @description The category of the data disk.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @description The size of the data disk.
     *
     * @example 80
     *
     * @var string
     */
    public $dataDiskSize;

    /**
     * @description The ID of the desktop group.
     *
     * @example dg-3uiojcc0j4kh7****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The name of the desktop group.
     *
     * @example DesktopGroupDemo
     *
     * @var string
     */
    public $desktopGroupName;

    /**
     * @description The ID of the directory, which is the same as the ID of the workspace.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The type of the directory.
     *
     * @example SIMPLE
     *
     * @var string
     */
    public $directoryType;

    /**
     * @description The time when the desktop group expires.
     *
     * @example 2021-12-31T15:59Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The number of vGPUs.
     *
     * @example 4
     *
     * @var float
     */
    public $gpuCount;

    /**
     * @description The GPU specifications.
     *
     * @example NVIDIA T4
     *
     * @var string
     */
    public $gpuSpec;

    /**
     * @description The maximum period of time for which a session remains idle. Unit: milliseconds.
     *
     * @example 900000
     *
     * @var int
     */
    public $idleDisconnectDuration;

    /**
     * @description The ID of the image.
     *
     * @example m-4zfb6zj728hhr****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The retention period of a cloud desktop in the desktop group after the cloud desktop is disconnected. Unit: milliseconds.
     *
     * @example 180000
     *
     * @var int
     */
    public $keepDuration;

    /**
     * @description The load balancing policy for the multi-session desktop group.
     *
     * Valid values:
     *
     *   0
     *
     * .
     *
     *   1
     *
     * .
     * @example 0
     *
     * @var int
     */
    public $loadPolicy;

    /**
     * @description The maximum number of cloud desktops that the desktop group can contain.
     *
     * @example 10
     *
     * @var int
     */
    public $maxDesktopsCount;

    /**
     * @description The memory size.
     *
     * @example 4096
     *
     * @var int
     */
    public $memory;

    /**
     * @description The minimum number of cloud desktops that the desktop group must retain.
     *
     * @example 1
     *
     * @var int
     */
    public $minDesktopsCount;

    /**
     * @description The ID of the Apsara File Storage NAS (NAS) file system.
     *
     * @example 0783b4****
     *
     * @var string
     */
    public $nasFileSystemID;

    /**
     * @description The name of the NAS file system.
     *
     * @example abcd
     *
     * @var string
     */
    public $nasFileSystemName;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-990541****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The name of the workspace.
     *
     * @example test
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The type of the workspace.
     *
     * @example SIMPLE
     *
     * @var string
     */
    public $officeSiteType;

    /**
     * @description The ID of the desktop template.
     *
     * @example b-1se9fb37r5tfq****
     *
     * @var string
     */
    public $ownBundleId;

    /**
     * @description The name of the desktop template.
     *
     * @example BundleDemo
     *
     * @var string
     */
    public $ownBundleName;

    /**
     * @description The type of the desktop group.
     *
     * Valid values:
     *
     *   0
     *
     * .
     *
     *   1
     *
     * .
     * @example 0
     *
     * @var int
     */
    public $ownType;

    /**
     * @description The billing method.
     *
     * Valid values:
     *
     *   PostPaid
     *
     * .
     *
     *   PrePaid
     *
     * .
     * @example PrePaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The ID of the security policy group.
     *
     * @example pg-9cktlowtxfl6****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The IDs of the policies with which the desktop group is associated.
     *
     * @var string[]
     */
    public $policyGroupIds;

    /**
     * @description The name of the security policy group.
     *
     * @example test
     *
     * @var string
     */
    public $policyGroupName;

    /**
     * @description The names of the policies.
     *
     * @var string[]
     */
    public $policyGroupNames;

    /**
     * @description Indicates whether data roaming is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $profileFollowSwitch;

    /**
     * @description The session usage threshold for the multi-session desktop group that has an auto scaling policy in effect.
     *
     * @example 0.6
     *
     * @var float
     */
    public $ratioThreshold;

    /**
     * @description The type of the resource. Only Elastic Compute Service (ECS) instances are supported.
     *
     * Valid values:
     *
     *   0
     *
     * .
     * @example 0
     *
     * @var int
     */
    public $resType;

    /**
     * @description Indicates which type of disk is reset for cloud desktops in the desktop group.
     *
     * Valid values:
     *
     *   0
     *
     * .
     *
     *   1
     *
     * .
     *
     *   2
     *
     * .
     *
     *   3
     *
     * .
     * @example 0
     *
     * @var int
     */
    public $resetType;

    /**
     * @description Details of the scheduled tasks.
     *
     * @var scaleTimerInfos[]
     */
    public $scaleTimerInfos;

    /**
     * @description The status of the desktop group.
     *
     * Valid values:
     *
     *   0
     *
     * .
     *
     *   1
     *
     * .
     *
     *   2
     *
     * .
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The period of time before an idle cloud desktop enters the Stopped state. When the specified period of time is reached, the idle cloud desktop automatically stops. If an end user connects to a stopped cloud desktop, the cloud desktop automatically starts. Unit: milliseconds.
     *
     * @example 180000
     *
     * @var int
     */
    public $stopDuration;

    /**
     * @description The category of the system disk.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description The size of the system disk.
     *
     * @example 80
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The list of scheduled points in time for desktop group tasks.
     *
     * @var timerInfos[]
     */
    public $timerInfos;

    /**
     * @description The information about the scheduling policy.
     *
     * @example abcd
     *
     * @var string
     */
    public $timingStrategyInfo;

    /**
     * @description The version number of the desktop group.
     *
     * @example 1
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'allowAutoSetup'         => 'AllowAutoSetup',
        'allowBufferCount'       => 'AllowBufferCount',
        'bindAmount'             => 'BindAmount',
        'buyDesktopsCount'       => 'BuyDesktopsCount',
        'comments'               => 'Comments',
        'connectDuration'        => 'ConnectDuration',
        'cpu'                    => 'Cpu',
        'creationTime'           => 'CreationTime',
        'creator'                => 'Creator',
        'dataDiskCategory'       => 'DataDiskCategory',
        'dataDiskSize'           => 'DataDiskSize',
        'desktopGroupId'         => 'DesktopGroupId',
        'desktopGroupName'       => 'DesktopGroupName',
        'directoryId'            => 'DirectoryId',
        'directoryType'          => 'DirectoryType',
        'expiredTime'            => 'ExpiredTime',
        'gpuCount'               => 'GpuCount',
        'gpuSpec'                => 'GpuSpec',
        'idleDisconnectDuration' => 'IdleDisconnectDuration',
        'imageId'                => 'ImageId',
        'keepDuration'           => 'KeepDuration',
        'loadPolicy'             => 'LoadPolicy',
        'maxDesktopsCount'       => 'MaxDesktopsCount',
        'memory'                 => 'Memory',
        'minDesktopsCount'       => 'MinDesktopsCount',
        'nasFileSystemID'        => 'NasFileSystemID',
        'nasFileSystemName'      => 'NasFileSystemName',
        'officeSiteId'           => 'OfficeSiteId',
        'officeSiteName'         => 'OfficeSiteName',
        'officeSiteType'         => 'OfficeSiteType',
        'ownBundleId'            => 'OwnBundleId',
        'ownBundleName'          => 'OwnBundleName',
        'ownType'                => 'OwnType',
        'payType'                => 'PayType',
        'policyGroupId'          => 'PolicyGroupId',
        'policyGroupIds'         => 'PolicyGroupIds',
        'policyGroupName'        => 'PolicyGroupName',
        'policyGroupNames'       => 'PolicyGroupNames',
        'profileFollowSwitch'    => 'ProfileFollowSwitch',
        'ratioThreshold'         => 'RatioThreshold',
        'resType'                => 'ResType',
        'resetType'              => 'ResetType',
        'scaleTimerInfos'        => 'ScaleTimerInfos',
        'status'                 => 'Status',
        'stopDuration'           => 'StopDuration',
        'systemDiskCategory'     => 'SystemDiskCategory',
        'systemDiskSize'         => 'SystemDiskSize',
        'timerInfos'             => 'TimerInfos',
        'timingStrategyInfo'     => 'TimingStrategyInfo',
        'version'                => 'Version',
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
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->connectDuration) {
            $res['ConnectDuration'] = $this->connectDuration;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->directoryType) {
            $res['DirectoryType'] = $this->directoryType;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }
        if (null !== $this->gpuSpec) {
            $res['GpuSpec'] = $this->gpuSpec;
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
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->minDesktopsCount) {
            $res['MinDesktopsCount'] = $this->minDesktopsCount;
        }
        if (null !== $this->nasFileSystemID) {
            $res['NasFileSystemID'] = $this->nasFileSystemID;
        }
        if (null !== $this->nasFileSystemName) {
            $res['NasFileSystemName'] = $this->nasFileSystemName;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->officeSiteType) {
            $res['OfficeSiteType'] = $this->officeSiteType;
        }
        if (null !== $this->ownBundleId) {
            $res['OwnBundleId'] = $this->ownBundleId;
        }
        if (null !== $this->ownBundleName) {
            $res['OwnBundleName'] = $this->ownBundleName;
        }
        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->policyGroupIds) {
            $res['PolicyGroupIds'] = $this->policyGroupIds;
        }
        if (null !== $this->policyGroupName) {
            $res['PolicyGroupName'] = $this->policyGroupName;
        }
        if (null !== $this->policyGroupNames) {
            $res['PolicyGroupNames'] = $this->policyGroupNames;
        }
        if (null !== $this->profileFollowSwitch) {
            $res['ProfileFollowSwitch'] = $this->profileFollowSwitch;
        }
        if (null !== $this->ratioThreshold) {
            $res['RatioThreshold'] = $this->ratioThreshold;
        }
        if (null !== $this->resType) {
            $res['ResType'] = $this->resType;
        }
        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }
        if (null !== $this->scaleTimerInfos) {
            $res['ScaleTimerInfos'] = [];
            if (null !== $this->scaleTimerInfos && \is_array($this->scaleTimerInfos)) {
                $n = 0;
                foreach ($this->scaleTimerInfos as $item) {
                    $res['ScaleTimerInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stopDuration) {
            $res['StopDuration'] = $this->stopDuration;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->timerInfos) {
            $res['TimerInfos'] = [];
            if (null !== $this->timerInfos && \is_array($this->timerInfos)) {
                $n = 0;
                foreach ($this->timerInfos as $item) {
                    $res['TimerInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timingStrategyInfo) {
            $res['TimingStrategyInfo'] = $this->timingStrategyInfo;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desktops
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
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['ConnectDuration'])) {
            $model->connectDuration = $map['ConnectDuration'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DirectoryType'])) {
            $model->directoryType = $map['DirectoryType'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }
        if (isset($map['GpuSpec'])) {
            $model->gpuSpec = $map['GpuSpec'];
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
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['MinDesktopsCount'])) {
            $model->minDesktopsCount = $map['MinDesktopsCount'];
        }
        if (isset($map['NasFileSystemID'])) {
            $model->nasFileSystemID = $map['NasFileSystemID'];
        }
        if (isset($map['NasFileSystemName'])) {
            $model->nasFileSystemName = $map['NasFileSystemName'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['OfficeSiteType'])) {
            $model->officeSiteType = $map['OfficeSiteType'];
        }
        if (isset($map['OwnBundleId'])) {
            $model->ownBundleId = $map['OwnBundleId'];
        }
        if (isset($map['OwnBundleName'])) {
            $model->ownBundleName = $map['OwnBundleName'];
        }
        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['PolicyGroupIds'])) {
            if (!empty($map['PolicyGroupIds'])) {
                $model->policyGroupIds = $map['PolicyGroupIds'];
            }
        }
        if (isset($map['PolicyGroupName'])) {
            $model->policyGroupName = $map['PolicyGroupName'];
        }
        if (isset($map['PolicyGroupNames'])) {
            if (!empty($map['PolicyGroupNames'])) {
                $model->policyGroupNames = $map['PolicyGroupNames'];
            }
        }
        if (isset($map['ProfileFollowSwitch'])) {
            $model->profileFollowSwitch = $map['ProfileFollowSwitch'];
        }
        if (isset($map['RatioThreshold'])) {
            $model->ratioThreshold = $map['RatioThreshold'];
        }
        if (isset($map['ResType'])) {
            $model->resType = $map['ResType'];
        }
        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }
        if (isset($map['ScaleTimerInfos'])) {
            if (!empty($map['ScaleTimerInfos'])) {
                $model->scaleTimerInfos = [];
                $n                      = 0;
                foreach ($map['ScaleTimerInfos'] as $item) {
                    $model->scaleTimerInfos[$n++] = null !== $item ? scaleTimerInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StopDuration'])) {
            $model->stopDuration = $map['StopDuration'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['TimerInfos'])) {
            if (!empty($map['TimerInfos'])) {
                $model->timerInfos = [];
                $n                 = 0;
                foreach ($map['TimerInfos'] as $item) {
                    $model->timerInfos[$n++] = null !== $item ? timerInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TimingStrategyInfo'])) {
            $model->timingStrategyInfo = $map['TimingStrategyInfo'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
