<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\desktopDurationList;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\disks;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\fotaUpdate;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\osUpdate;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\resourceGroups;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\sessions;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\tags;
use AlibabaCloud\Tea\Model;

class desktops extends Model
{
    /**
     * @description The number of concurrent sessions of each cloud computer in a multi-session cloud computer pool.
     *
     * @example 10
     *
     * @var int
     */
    public $bindAmount;

    /**
     * @description The ID of the template used to create the cloud computer.
     *
     * @example b-2g65ljy4291vl****
     *
     * @var string
     */
    public $bundleId;

    /**
     * @description The name of the template used to create the cloud computer.
     *
     * @example Name
     *
     * @var string
     */
    public $bundleName;

    /**
     * @description The billing method of the cloud computer.
     *
     * Valid values:
     *
     *   Postpaid (default): pay-as-you-go
     *   PrePaid: subscription
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The connection status of the end user.
     *
     * Valid values:
     *
     *   Unknown
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Connected
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Disconnected
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
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
     * @description The time when the cloud computer was created.
     *
     * @example 2020-11-06T08:28Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $dataDiskSize;

    /**
     * @var desktopDurationList[]
     */
    public $desktopDurationList;

    /**
     * @description The ID of the cloud computer pool to which cloud computers belong. Default value: null.``
     *
     * @example null
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The cloud computer ID.
     *
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The cloud computer name.
     *
     * @example testDesktopName
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The cloud computer status.
     *
     * @example Running
     *
     * @var string
     */
    public $desktopStatus;

    /**
     * @description The cloud computer type.
     *
     * @example ecd.basic.large
     *
     * @var string
     */
    public $desktopType;

    /**
     * @description The directory ID, which is the same as the office network ID (OfficeSiteId).
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @example SIMPLE
     *
     * @var string
     */
    public $directoryType;

    /**
     * @description The information about the disks.
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
     * @description The end user IDs.
     *
     * @var string[]
     */
    public $endUserIds;

    /**
     * @description The time when a subscription cloud computer expired.
     *
     * @example 2021-12-31T15:59Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The information about the image version of the cloud computer.
     *
     * @var fotaUpdate
     */
    public $fotaUpdate;

    /**
     * @description Indicates whether the cloud computer uses GPUs.
     *
     * @example 0
     *
     * @var int
     */
    public $gpuCategory;

    /**
     * @description The number of GPU cores.
     *
     * @example 1
     *
     * @var float
     */
    public $gpuCount;

    /**
     * @description The GPU driver version used by the cloud computer.
     *
     * @example null
     *
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @description The GPU Specifications.
     *
     * @example NVIDIA T4
     *
     * @var string
     */
    public $gpuSpec;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @example true
     *
     * @var bool
     */
    public $hibernationBeta;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
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
     * @description The image ID.
     *
     * @example m-4zfb6zj728hhr****
     *
     * @var string
     */
    public $imageId;

    /**
     * @var bool
     */
    public $isLdap;

    /**
     * @description The flag that is used to manage the cloud computer.
     *
     * Valid values:
     *
     *   Migrating: The cloud computer is being migrated.
     *   Updating: The configurations of the cloud computer are being updated.
     *   NoFlag: No flags are available.
     *
     * @example NoFlag
     *
     * @var string
     */
    public $managementFlag;

    /**
     * @description The flags that are used to manage the cloud computers.
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
     * @description The ID of the supplementary network interface controller (NIC) created by EDS within an RAM user or Active Directory (AD) user. You cannot modify the ID.
     *
     * @example 123456
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The IP address of the supplementary NIC created by EDS within an RAM or AD user.
     *
     * @example 192.168.74.165
     *
     * @var string
     */
    public $networkInterfaceIp;

    /**
     * @description The office network ID.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The office network name.
     *
     * @example test
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The account type of the office network.
     *
     * Valid values:
     *
     *   SIMPLE: convenience account
     *   AD_CONNECTOR: enterprise AD account
     *
     * @example SIMPLE
     *
     * @var string
     */
    public $officeSiteType;

    /**
     * @description The VPC type of the office network.
     *
     * Valid values:
     *
     *   standard
     *   customized
     *   basic
     *
     * @example basic
     *
     * @var string
     */
    public $officeSiteVpcType;

    /**
     * @description The OS that is defined in the desktop template.
     *
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @var osUpdate
     */
    public $osUpdate;

    /**
     * @description The information about the OS platform.
     *
     * Valid values:
     *
     *   Ubuntu
     *   Windows Server 2022
     *   UOS
     *   CentOS
     *   Windows Server 2019
     *   Windows Server 2016
     *
     * @example Ubuntu
     *
     * @var string
     */
    public $platform;

    /**
     * @description The policy ID.
     *
     * @example system-all-enabled-policy
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The IDs of the cloud computer policies.
     *
     * @var string[]
     */
    public $policyGroupIdList;

    /**
     * @description The policy name.
     *
     * @example test
     *
     * @var string
     */
    public $policyGroupName;

    /**
     * @description The names of the cloud computer policies.
     *
     * @var string[]
     */
    public $policyGroupNameList;

    /**
     * @description The progress of creating the cloud computer.
     *
     * @example 100%
     *
     * @var string
     */
    public $progress;

    /**
     * @description The protocol.
     *
     * Valid values:
     *
     *   HDX
     *   ASP
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The information about the enterprise resource groups.
     *
     * @var resourceGroups[]
     */
    public $resourceGroups;

    /**
     * @description The type of the session.
     *
     * Valid values:
     *
     *   SINGLE_SESSION
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   MULTIPLE_SESSION
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example SINGLE_SESSION
     *
     * @var string
     */
    public $sessionType;

    /**
     * @description The session information about cloud computers connected by end users.
     *
     * @var sessions[]
     */
    public $sessions;

    /**
     * @description The snapshot policy ID.
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
     * @description The standard start time.
     *
     * @example 2025-02-24T06:38:02Z
     *
     * @var string
     */
    public $standardStartTime;

    /**
     * @description The time when the cloud computer was first started.
     *
     * @example 2020-11-06T08:31Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Indicates whether the cloud desktop supports hibernation.
     *
     * @example true
     *
     * @var bool
     */
    public $supportHibernation;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @example 0
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description Details about the tags.
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
     * @description The ID of the Key Management Service (KMS) key that is used when disk encryption is enabled. You can call the [ListKeys](https://help.aliyun.com/document_detail/28951.html) operation to query the list of KMS keys.
     *
     * @example 08c33a6f-4e0a-4a1b-a3fa-7ddfa1d4****
     *
     * @var string
     */
    public $volumeEncryptionKey;

    /**
     * @description The zone type. Default value: `AvailabilityZone`. This value indicates Alibaba Cloud zones.
     *
     * @example AvailabilityZone
     *
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'bindAmount' => 'BindAmount',
        'bundleId' => 'BundleId',
        'bundleName' => 'BundleName',
        'chargeType' => 'ChargeType',
        'connectionStatus' => 'ConnectionStatus',
        'cpu' => 'Cpu',
        'creationTime' => 'CreationTime',
        'dataDiskCategory' => 'DataDiskCategory',
        'dataDiskSize' => 'DataDiskSize',
        'desktopDurationList' => 'DesktopDurationList',
        'desktopGroupId' => 'DesktopGroupId',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'desktopStatus' => 'DesktopStatus',
        'desktopType' => 'DesktopType',
        'directoryId' => 'DirectoryId',
        'directoryType' => 'DirectoryType',
        'disks' => 'Disks',
        'downgradeQuota' => 'DowngradeQuota',
        'downgradedTimes' => 'DowngradedTimes',
        'endUserIds' => 'EndUserIds',
        'expiredTime' => 'ExpiredTime',
        'fotaUpdate' => 'FotaUpdate',
        'gpuCategory' => 'GpuCategory',
        'gpuCount' => 'GpuCount',
        'gpuDriverVersion' => 'GpuDriverVersion',
        'gpuSpec' => 'GpuSpec',
        'hibernationBeta' => 'HibernationBeta',
        'hibernationOptionsConfigured' => 'HibernationOptionsConfigured',
        'hostName' => 'HostName',
        'imageId' => 'ImageId',
        'isLdap' => 'IsLdap',
        'managementFlag' => 'ManagementFlag',
        'managementFlags' => 'ManagementFlags',
        'memory' => 'Memory',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'networkInterfaceIp' => 'NetworkInterfaceIp',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
        'officeSiteType' => 'OfficeSiteType',
        'officeSiteVpcType' => 'OfficeSiteVpcType',
        'osType' => 'OsType',
        'osUpdate' => 'OsUpdate',
        'platform' => 'Platform',
        'policyGroupId' => 'PolicyGroupId',
        'policyGroupIdList' => 'PolicyGroupIdList',
        'policyGroupName' => 'PolicyGroupName',
        'policyGroupNameList' => 'PolicyGroupNameList',
        'progress' => 'Progress',
        'protocolType' => 'ProtocolType',
        'resourceGroups' => 'ResourceGroups',
        'sessionType' => 'SessionType',
        'sessions' => 'Sessions',
        'snapshotPolicyId' => 'SnapshotPolicyId',
        'snapshotPolicyName' => 'SnapshotPolicyName',
        'standardStartTime' => 'StandardStartTime',
        'startTime' => 'StartTime',
        'supportHibernation' => 'SupportHibernation',
        'systemDiskCategory' => 'SystemDiskCategory',
        'systemDiskSize' => 'SystemDiskSize',
        'tags' => 'Tags',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
        'volumeEncryptionKey' => 'VolumeEncryptionKey',
        'zoneType' => 'ZoneType',
    ];

    public function validate() {}

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
        if (null !== $this->desktopDurationList) {
            $res['DesktopDurationList'] = [];
            if (null !== $this->desktopDurationList && \is_array($this->desktopDurationList)) {
                $n = 0;
                foreach ($this->desktopDurationList as $item) {
                    $res['DesktopDurationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->isLdap) {
            $res['IsLdap'] = $this->isLdap;
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
        if (null !== $this->osUpdate) {
            $res['OsUpdate'] = null !== $this->osUpdate ? $this->osUpdate->toMap() : null;
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
        if (null !== $this->resourceGroups) {
            $res['ResourceGroups'] = [];
            if (null !== $this->resourceGroups && \is_array($this->resourceGroups)) {
                $n = 0;
                foreach ($this->resourceGroups as $item) {
                    $res['ResourceGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->standardStartTime) {
            $res['StandardStartTime'] = $this->standardStartTime;
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
        if (isset($map['DesktopDurationList'])) {
            if (!empty($map['DesktopDurationList'])) {
                $model->desktopDurationList = [];
                $n = 0;
                foreach ($map['DesktopDurationList'] as $item) {
                    $model->desktopDurationList[$n++] = null !== $item ? desktopDurationList::fromMap($item) : $item;
                }
            }
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
                $n = 0;
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
        if (isset($map['IsLdap'])) {
            $model->isLdap = $map['IsLdap'];
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
        if (isset($map['OsUpdate'])) {
            $model->osUpdate = osUpdate::fromMap($map['OsUpdate']);
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
        if (isset($map['ResourceGroups'])) {
            if (!empty($map['ResourceGroups'])) {
                $model->resourceGroups = [];
                $n = 0;
                foreach ($map['ResourceGroups'] as $item) {
                    $model->resourceGroups[$n++] = null !== $item ? resourceGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }
        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = [];
                $n = 0;
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
        if (isset($map['StandardStartTime'])) {
            $model->standardStartTime = $map['StandardStartTime'];
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
                $n = 0;
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
