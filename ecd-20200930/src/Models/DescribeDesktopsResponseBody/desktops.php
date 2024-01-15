<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\disks;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\fotaUpdate;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\sessions;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\tags;
use AlibabaCloud\Tea\Model;

class desktops extends Model
{
    /**
     * @description The number of sessions allowed for each cloud desktop in the multi-session desktop group.
     *
     * @example 10
     *
     * @var int
     */
    public $bindAmount;

    /**
     * @description The ID of the desktop template that is used to create the cloud desktop.
     *
     * @example b-2g65ljy4291vl****
     *
     * @var string
     */
    public $bundleId;

    /**
     * @description The name of the desktop template that is used to create the cloud desktop.
     *
     * @example Name
     *
     * @var string
     */
    public $bundleName;

    /**
     * @description The billing method of the cloud desktop.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The connection status of the end user.
     *
     * @example Disconnected
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @description The number of vCPUs.
     *
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The time when the cloud desktop was created.
     *
     * @example 2020-11-06T08:28Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @example null
     *
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @example null
     *
     * @var string
     */
    public $dataDiskSize;

    /**
     * @description The ID of the desktop group. Default value: null.
     *
     * > This parameter is in invitational preview and is unavailable.
     * @example null
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The ID of the cloud desktop.
     *
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The name of the cloud desktop.
     *
     * @example testDesktopName
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The status of the cloud desktop.
     *
     * @example Running
     *
     * @var string
     */
    public $desktopStatus;

    /**
     * @description The desktop type.
     *
     * @example ecd.basic.large
     *
     * @var string
     */
    public $desktopType;

    /**
     * @description The ID of the directory. The ID is the same as the workspace ID that is indicated by the OfficeSiteId parameter.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description This parameter is in invitational preview and is unavailable.
     *
     * @example SIMPLE
     *
     * @var string
     */
    public $directoryType;

    /**
     * @description Details of the disks.
     *
     * @var disks[]
     */
    public $disks;

    /**
     * @description The number of times for which the cloud desktop can be downgraded.
     *
     * @example 3
     *
     * @var int
     */
    public $downgradeQuota;

    /**
     * @description The number of times for which the cloud desktop has been downgraded.
     *
     * @example 0
     *
     * @var int
     */
    public $downgradedTimes;

    /**
     * @description The IDs of the end users that have the permissions to connect to the cloud desktops.
     *
     * @var string[]
     */
    public $endUserIds;

    /**
     * @description The time when the subscription cloud desktop expired.
     *
     * @example 2021-12-31T15:59Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The information about the image version that the cloud desktop uses.
     *
     * @var fotaUpdate
     */
    public $fotaUpdate;

    /**
     * @description Indicates whether the cloud desktop is of the GPU-accelerated type.
     *
     * @example 0
     *
     * @var int
     */
    public $gpuCategory;

    /**
     * @description The number of GPUs.
     *
     * @example 1
     *
     * @var float
     */
    public $gpuCount;

    /**
     * @description The version of the GPU driver with which the cloud desktop is equipped.
     *
     * @example null
     *
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @description The GPU specifications.
     *
     * @example NVIDIA T4
     *
     * @var string
     */
    public $gpuSpec;

    /**
     * @description > This parameter is in invitational preview and is not available for use.
     *
     * @example true
     *
     * @var bool
     */
    public $hibernationBeta;

    /**
     * @description > This parameter is in invitational preview and is not available for use.
     *
     * @example true
     *
     * @var bool
     */
    public $hibernationOptionsConfigured;

    /**
     * @description The hostname of the cloud desktop.
     *
     * @example testName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the image.
     *
     * @example m-4zfb6zj728hhr****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The flag that is used to manage the cloud desktops.
     *
     * @example NoFlag
     *
     * @var string
     */
    public $managementFlag;

    /**
     * @description The flag that is used to manage the cloud desktops.
     *
     * @var string[]
     */
    public $managementFlags;

    /**
     * @description The memory size. Unit: MiB.
     *
     * @example 4096
     *
     * @var int
     */
    public $memory;

    /**
     * @description The ID of the secondary network interface controller (NIC) created by the RAM user or Active Directory (AD) user in EDS. You do not have the permissions to modify this ID.
     *
     * @example 123456
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The IP address of the secondary NIC that is created by the RAM user or AD user in EDS.
     *
     * @example 192.168.74.165
     *
     * @var string
     */
    public $networkInterfaceIp;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-363353****
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
     * @description The account type of the workspace.
     *
     * @example SIMPLE
     *
     * @var string
     */
    public $officeSiteType;

    /**
     * @description The virtual private cloud (VPC) type of the workspace.
     *
     * @example basic
     *
     * @var string
     */
    public $officeSiteVpcType;

    /**
     * @description The type of the OS.
     *
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The information about the OS platform. Valid values:
     *
     *   CentOS
     *   Ubuntu
     *   Windows Server 2016
     *   Windows Server 2019
     *   UOS
     *
     * @example Ubuntu
     *
     * @var string
     */
    public $platform;

    /**
     * @description The ID of the policy.
     *
     * @example system-all-enabled-policy
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The policies IDs.
     *
     * @var string[]
     */
    public $policyGroupIdList;

    /**
     * @description The name of the policy.
     *
     * @example test
     *
     * @var string
     */
    public $policyGroupName;

    /**
     * @description The policy names.
     *
     * @var string[]
     */
    public $policyGroupNameList;

    /**
     * @description The progress when the cloud desktop was created.
     *
     * @example 100%
     *
     * @var string
     */
    public $progress;

    /**
     * @description The type of the protocol.
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The session type.
     *
     * Valid values:
     *
     * **SINGLE_SESSION**
     *
     * **MULTIPLE_SESSION**
     *
     * @example SINGLE_SESSION
     *
     * @var string
     */
    public $sessionType;

    /**
     * @description Details of the desktop sessions that end users hold.
     *
     * @var sessions[]
     */
    public $sessions;

    /**
     * @description The ID of the snapshot policy.
     *
     * @example sp-gi007jgyc3kcey2bb
     *
     * @var string
     */
    public $snapshotPolicyId;

    /**
     * @description The name of the snapshot policy.
     *
     * @example testSnapshotName
     *
     * @var string
     */
    public $snapshotPolicyName;

    /**
     * @description The first time when the cloud desktop was started.
     *
     * @example 2020-11-06T08:31Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Indicates whether hibernation is supported for the cloud desktop.
     *
     * @example true
     *
     * @var bool
     */
    public $supportHibernation;

    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @example null
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @example 0
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description Details of the tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description Indicates whether disk encryption is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $volumeEncryptionEnabled;

    /**
     * @description The ID of the Key Management Service (KMS) key that is used when disk encryption is enabled. You can call the [ListKeys](~~28951~~) operation to obtain a list of KMS keys.
     *
     * @example 08c33a6f-4e0a-4a1b-a3fa-7ddfa1d4****
     *
     * @var string
     */
    public $volumeEncryptionKey;

    /**
     * @description The type of the zone. Default value: **AvailabilityZone**. This value indicates Alibaba Cloud zones.
     *
     * @example AvailabilityZone
     *
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'bindAmount'                   => 'BindAmount',
        'bundleId'                     => 'BundleId',
        'bundleName'                   => 'BundleName',
        'chargeType'                   => 'ChargeType',
        'connectionStatus'             => 'ConnectionStatus',
        'cpu'                          => 'Cpu',
        'creationTime'                 => 'CreationTime',
        'dataDiskCategory'             => 'DataDiskCategory',
        'dataDiskSize'                 => 'DataDiskSize',
        'desktopGroupId'               => 'DesktopGroupId',
        'desktopId'                    => 'DesktopId',
        'desktopName'                  => 'DesktopName',
        'desktopStatus'                => 'DesktopStatus',
        'desktopType'                  => 'DesktopType',
        'directoryId'                  => 'DirectoryId',
        'directoryType'                => 'DirectoryType',
        'disks'                        => 'Disks',
        'downgradeQuota'               => 'DowngradeQuota',
        'downgradedTimes'              => 'DowngradedTimes',
        'endUserIds'                   => 'EndUserIds',
        'expiredTime'                  => 'ExpiredTime',
        'fotaUpdate'                   => 'FotaUpdate',
        'gpuCategory'                  => 'GpuCategory',
        'gpuCount'                     => 'GpuCount',
        'gpuDriverVersion'             => 'GpuDriverVersion',
        'gpuSpec'                      => 'GpuSpec',
        'hibernationBeta'              => 'HibernationBeta',
        'hibernationOptionsConfigured' => 'HibernationOptionsConfigured',
        'hostName'                     => 'HostName',
        'imageId'                      => 'ImageId',
        'managementFlag'               => 'ManagementFlag',
        'managementFlags'              => 'ManagementFlags',
        'memory'                       => 'Memory',
        'networkInterfaceId'           => 'NetworkInterfaceId',
        'networkInterfaceIp'           => 'NetworkInterfaceIp',
        'officeSiteId'                 => 'OfficeSiteId',
        'officeSiteName'               => 'OfficeSiteName',
        'officeSiteType'               => 'OfficeSiteType',
        'officeSiteVpcType'            => 'OfficeSiteVpcType',
        'osType'                       => 'OsType',
        'platform'                     => 'Platform',
        'policyGroupId'                => 'PolicyGroupId',
        'policyGroupIdList'            => 'PolicyGroupIdList',
        'policyGroupName'              => 'PolicyGroupName',
        'policyGroupNameList'          => 'PolicyGroupNameList',
        'progress'                     => 'Progress',
        'protocolType'                 => 'ProtocolType',
        'sessionType'                  => 'SessionType',
        'sessions'                     => 'Sessions',
        'snapshotPolicyId'             => 'SnapshotPolicyId',
        'snapshotPolicyName'           => 'SnapshotPolicyName',
        'startTime'                    => 'StartTime',
        'supportHibernation'           => 'SupportHibernation',
        'systemDiskCategory'           => 'SystemDiskCategory',
        'systemDiskSize'               => 'SystemDiskSize',
        'tags'                         => 'Tags',
        'volumeEncryptionEnabled'      => 'VolumeEncryptionEnabled',
        'volumeEncryptionKey'          => 'VolumeEncryptionKey',
        'zoneType'                     => 'ZoneType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindAmount) {
            $res['BindAmount'] = $this->bindAmount;
        }
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->bundleName) {
            $res['BundleName'] = $this->bundleName;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
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
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->desktopStatus) {
            $res['DesktopStatus'] = $this->desktopStatus;
        }
        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->directoryType) {
            $res['DirectoryType'] = $this->directoryType;
        }
        if (null !== $this->disks) {
            $res['Disks'] = [];
            if (null !== $this->disks && \is_array($this->disks)) {
                $n = 0;
                foreach ($this->disks as $item) {
                    $res['Disks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->downgradeQuota) {
            $res['DowngradeQuota'] = $this->downgradeQuota;
        }
        if (null !== $this->downgradedTimes) {
            $res['DowngradedTimes'] = $this->downgradedTimes;
        }
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->fotaUpdate) {
            $res['FotaUpdate'] = null !== $this->fotaUpdate ? $this->fotaUpdate->toMap() : null;
        }
        if (null !== $this->gpuCategory) {
            $res['GpuCategory'] = $this->gpuCategory;
        }
        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }
        if (null !== $this->gpuDriverVersion) {
            $res['GpuDriverVersion'] = $this->gpuDriverVersion;
        }
        if (null !== $this->gpuSpec) {
            $res['GpuSpec'] = $this->gpuSpec;
        }
        if (null !== $this->hibernationBeta) {
            $res['HibernationBeta'] = $this->hibernationBeta;
        }
        if (null !== $this->hibernationOptionsConfigured) {
            $res['HibernationOptionsConfigured'] = $this->hibernationOptionsConfigured;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->managementFlag) {
            $res['ManagementFlag'] = $this->managementFlag;
        }
        if (null !== $this->managementFlags) {
            $res['ManagementFlags'] = $this->managementFlags;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->networkInterfaceIp) {
            $res['NetworkInterfaceIp'] = $this->networkInterfaceIp;
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
        if (null !== $this->officeSiteVpcType) {
            $res['OfficeSiteVpcType'] = $this->officeSiteVpcType;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->policyGroupIdList) {
            $res['PolicyGroupIdList'] = $this->policyGroupIdList;
        }
        if (null !== $this->policyGroupName) {
            $res['PolicyGroupName'] = $this->policyGroupName;
        }
        if (null !== $this->policyGroupNameList) {
            $res['PolicyGroupNameList'] = $this->policyGroupNameList;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
        }
        if (null !== $this->sessions) {
            $res['Sessions'] = [];
            if (null !== $this->sessions && \is_array($this->sessions)) {
                $n = 0;
                foreach ($this->sessions as $item) {
                    $res['Sessions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->snapshotPolicyId) {
            $res['SnapshotPolicyId'] = $this->snapshotPolicyId;
        }
        if (null !== $this->snapshotPolicyName) {
            $res['SnapshotPolicyName'] = $this->snapshotPolicyName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->supportHibernation) {
            $res['SupportHibernation'] = $this->supportHibernation;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->volumeEncryptionEnabled) {
            $res['VolumeEncryptionEnabled'] = $this->volumeEncryptionEnabled;
        }
        if (null !== $this->volumeEncryptionKey) {
            $res['VolumeEncryptionKey'] = $this->volumeEncryptionKey;
        }
        if (null !== $this->zoneType) {
            $res['ZoneType'] = $this->zoneType;
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
        if (isset($map['BindAmount'])) {
            $model->bindAmount = $map['BindAmount'];
        }
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['BundleName'])) {
            $model->bundleName = $map['BundleName'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
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
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['DesktopStatus'])) {
            $model->desktopStatus = $map['DesktopStatus'];
        }
        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DirectoryType'])) {
            $model->directoryType = $map['DirectoryType'];
        }
        if (isset($map['Disks'])) {
            if (!empty($map['Disks'])) {
                $model->disks = [];
                $n            = 0;
                foreach ($map['Disks'] as $item) {
                    $model->disks[$n++] = null !== $item ? disks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DowngradeQuota'])) {
            $model->downgradeQuota = $map['DowngradeQuota'];
        }
        if (isset($map['DowngradedTimes'])) {
            $model->downgradedTimes = $map['DowngradedTimes'];
        }
        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = $map['EndUserIds'];
            }
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['FotaUpdate'])) {
            $model->fotaUpdate = fotaUpdate::fromMap($map['FotaUpdate']);
        }
        if (isset($map['GpuCategory'])) {
            $model->gpuCategory = $map['GpuCategory'];
        }
        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }
        if (isset($map['GpuDriverVersion'])) {
            $model->gpuDriverVersion = $map['GpuDriverVersion'];
        }
        if (isset($map['GpuSpec'])) {
            $model->gpuSpec = $map['GpuSpec'];
        }
        if (isset($map['HibernationBeta'])) {
            $model->hibernationBeta = $map['HibernationBeta'];
        }
        if (isset($map['HibernationOptionsConfigured'])) {
            $model->hibernationOptionsConfigured = $map['HibernationOptionsConfigured'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ManagementFlag'])) {
            $model->managementFlag = $map['ManagementFlag'];
        }
        if (isset($map['ManagementFlags'])) {
            if (!empty($map['ManagementFlags'])) {
                $model->managementFlags = $map['ManagementFlags'];
            }
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['NetworkInterfaceIp'])) {
            $model->networkInterfaceIp = $map['NetworkInterfaceIp'];
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
        if (isset($map['OfficeSiteVpcType'])) {
            $model->officeSiteVpcType = $map['OfficeSiteVpcType'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['PolicyGroupIdList'])) {
            if (!empty($map['PolicyGroupIdList'])) {
                $model->policyGroupIdList = $map['PolicyGroupIdList'];
            }
        }
        if (isset($map['PolicyGroupName'])) {
            $model->policyGroupName = $map['PolicyGroupName'];
        }
        if (isset($map['PolicyGroupNameList'])) {
            if (!empty($map['PolicyGroupNameList'])) {
                $model->policyGroupNameList = $map['PolicyGroupNameList'];
            }
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }
        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = [];
                $n               = 0;
                foreach ($map['Sessions'] as $item) {
                    $model->sessions[$n++] = null !== $item ? sessions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SnapshotPolicyId'])) {
            $model->snapshotPolicyId = $map['SnapshotPolicyId'];
        }
        if (isset($map['SnapshotPolicyName'])) {
            $model->snapshotPolicyName = $map['SnapshotPolicyName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SupportHibernation'])) {
            $model->supportHibernation = $map['SupportHibernation'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VolumeEncryptionEnabled'])) {
            $model->volumeEncryptionEnabled = $map['VolumeEncryptionEnabled'];
        }
        if (isset($map['VolumeEncryptionKey'])) {
            $model->volumeEncryptionKey = $map['VolumeEncryptionKey'];
        }
        if (isset($map['ZoneType'])) {
            $model->zoneType = $map['ZoneType'];
        }

        return $model;
    }
}
