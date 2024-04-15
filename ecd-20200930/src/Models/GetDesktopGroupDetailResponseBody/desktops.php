<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponseBody\desktops\scaleTimerInfos;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponseBody\desktops\timerInfos;
use AlibabaCloud\Tea\Model;

class desktops extends Model
{
    /**
     * @description Indicates whether cloud computers can be automatically created in the subscription cloud computer pool.
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
     * @description The number of cloud computers that is allowed to be reserved in the pay-as-you-go cloud computer pool. Valid values:
     *
     *   0: does not allow the system to reserve cloud computers.
     *   N: allows the system to reserve N cloud computers. (1≤ N ≤ 100)
     *
     * @example 1
     *
     * @var int
     */
    public $allowBufferCount;

    /**
     * @description The number of concurrent sessions that is allowed for each cloud computer in a multi-session cloud computer pool.
     *
     * @example 1
     *
     * @var int
     */
    public $bindAmount;

    /**
     * @description *   This parameter has different meanings based on the billing method of the cloud computer pool. For a subscription pool, this parameter indicates the number of cloud computers that you purchase in the pool. Valid values: 0 to 200.
     *   For a pay-as-you-go pool, this parameter indicates the minimum number of cloud computers that you can create in the pool. Default value: 1. Valid values: 0 to `MaxDesktopsCount`.
     *
     * @example 5
     *
     * @var int
     */
    public $buyDesktopsCount;

    /**
     * @description The remarks.
     *
     * @example for students
     *
     * @var string
     */
    public $comments;

    /**
     * @description The maximum period of time during which the session is connected. When the specified maximum period of time is reached, the session is automatically disconnected. Unit: milliseconds.
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
     * @description The Alibaba Cloud account that creates the cloud computer pool.
     *
     * @example 155177335370****
     *
     * @var string
     */
    public $creator;

    /**
     * @description The category of the user disk.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @description The user disk capacity. Unit: GiB.
     *
     * @example 80
     *
     * @var string
     */
    public $dataDiskSize;

    /**
     * @description The ID of the cloud computer pool.
     *
     * @example dg-3uiojcc0j4kh7****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The name of the cloud computer pool that is queried.
     *
     * @example DesktopGroupDemo
     *
     * @var string
     */
    public $desktopGroupName;

    /**
     * @description The ID of the directory or office network.
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
     * @description The time when the subscription cloud computer pool expires.
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
     * @description After an end user connects to a cloud computer, the session is established. If the system does not detect any inputs from the keyboard or mouse within the specified period of time, the session is closed. Unit: milliseconds.
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
     * @description The amount of time to retain a session after it is disconnected. Unit: milliseconds. Valid values: 180000 to 345600000. That is, the session can be retained for 3 to 5760 minutes (4 days). If you specify the value to 0, the session is permanently retained.
     *
     * When a session is disconnected, take note of the following situations: If an end user does not resume the session within the specified duration, the session is closed and all unsaved data is cleared. If the end user resumes the session within the specified duration, the end user can still access data of the session.
     * @example 180000
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
     * @description The maximum number of cloud computers that can be housed in the pay-as-you-go cloud computer pool.
     *
     * @example 10
     *
     * @var int
     */
    public $maxDesktopsCount;

    /**
     * @description The memory size. Unit: MiB.
     *
     * @example 4096
     *
     * @var int
     */
    public $memory;

    /**
     * @description The maximum number of cloud computers that can be automatically created in the subscription cloud computer pool.
     *
     * @example 1
     *
     * @var int
     */
    public $minDesktopsCount;

    /**
     * @description The ID of the Apsara File Storage NAS (NAS) file system for the user data roaming feature.
     *
     * @example 0783b4****
     *
     * @var string
     */
    public $nasFileSystemID;

    /**
     * @description The name of the NAS file system for the user data roaming feature.
     *
     * @example abcd
     *
     * @var string
     */
    public $nasFileSystemName;

    /**
     * @description The ID of the office network.
     *
     * @example cn-hangzhou+dir-990541****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The name of the office network in which the cloud computer pool resides.
     *
     * @example test
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The office network type.
     *
     * Valid values:
     *
     *   PERSONAL: individual office network
     *   SIMPLE: convenience office network
     *   AD_CONNECTOR: enterprise Active Directory (AD) office network
     *   RAM: Resource Access Management (RAM)-based office network
     *
     * @example SIMPLE
     *
     * @var string
     */
    public $officeSiteType;

    /**
     * @description The ID of the cloud computer template.
     *
     * @example b-1se9fb37r5tfq****
     *
     * @var string
     */
    public $ownBundleId;

    /**
     * @description The name of the cloud computer template.
     *
     * @example BundleDemo
     *
     * @var string
     */
    public $ownBundleName;

    /**
     * @description The type of the cloud computer pool.
     *
     * Valid values:
     *
     *   0: individual (single session)
     *   1: shared (multiple sessions)
     *
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
     *   PostPaid: pay-as-you-go.
     *
     *   PrePaid: subscription.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The ID of the policy that is associated with the cloud computer pool.
     *
     * @example pg-9cktlowtxfl6****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The IDs of policies that are associated with the cloud computer pool.
     *
     * @var string[]
     */
    public $policyGroupIds;

    /**
     * @description The name of the policy that is associated with the cloud computer pool.
     *
     * @example test
     *
     * @var string
     */
    public $policyGroupName;

    /**
     * @description The names of policies that are associated with the cloud computer pool.
     *
     * @var string[]
     */
    public $policyGroupNames;

    /**
     * @description Indicates whether user data roaming is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $profileFollowSwitch;

    /**
     * @description The threshold for the ratio of connected sessions. This parameter is the condition that triggers auto scaling in a multi-session cloud computer pool. To calculate the ratio of connected sessions, use the following formula:
     *
     * If the ratio of connected sessions is greater than the specified value, new cloud computers are created. If the ratio of connected sessions is smaller than the specified value, idle cloud computers are deleted.
     * @example 0.6
     *
     * @var float
     */
    public $ratioThreshold;

    /**
     * @description The type of the resource. Only Elastic Compute Service (ECS) instances are supported.
     *
     * Valid value:
     *
     *   0: ECS
     *
     * @example 0
     *
     * @var int
     */
    public $resType;

    /**
     * @description The disk reset type of the cloud computer.
     *
     * Valid values:
     *
     *   0: does not reset disks.
     *   1: resets only the system disk.
     *   2: resets only the user disk.
     *   3: resets the system disk and the user disk.
     *
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
     * @description The payment status of the cloud computer pool.
     *
     * Valid values:
     *
     *   0: unpaid
     *   1: paid
     *   2: overdue or expired
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The period of time before the idle cloud computer enters the Stopped state. If the specified value is reached, the cloud computer is automatically stopped. If an end user connects to the stopped cloud computer, the cloud computer automatically starts. Unit: milliseconds.
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
     * @description The system disk capacity. Unit: GiB.
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
     * @description The version number of the cloud computer pool.
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
