<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\desktopDurationList;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\disks;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\fotaUpdate;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\osUpdate;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\resourceGroups;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\sessions;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops\tags;

class desktops extends Model
{
    /**
     * @var int
     */
    public $bindAmount;

    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var string
     */
    public $bundleName;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @var string
     */
    public $dataDiskSize;

    /**
     * @var desktopDurationList[]
     */
    public $desktopDurationList;

    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $desktopStatus;

    /**
     * @var string
     */
    public $desktopType;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $directoryType;

    /**
     * @var disks[]
     */
    public $disks;

    /**
     * @var string
     */
    public $domainType;

    /**
     * @var int
     */
    public $downgradeQuota;

    /**
     * @var int
     */
    public $downgradedTimes;

    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var fotaUpdate
     */
    public $fotaUpdate;

    /**
     * @var int
     */
    public $gpuCategory;

    /**
     * @var float
     */
    public $gpuCount;

    /**
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @var string
     */
    public $gpuSpec;

    /**
     * @var bool
     */
    public $hibernationBeta;

    /**
     * @var bool
     */
    public $hibernationOptionsConfigured;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var bool
     */
    public $isLdap;

    /**
     * @var string
     */
    public $managementFlag;

    /**
     * @var string[]
     */
    public $managementFlags;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $networkInterfaceIp;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string
     */
    public $officeSiteType;

    /**
     * @var string
     */
    public $officeSiteVpcType;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var osUpdate
     */
    public $osUpdate;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string[]
     */
    public $policyGroupIdList;

    /**
     * @var string
     */
    public $policyGroupName;

    /**
     * @var string[]
     */
    public $policyGroupNameList;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var resourceGroups[]
     */
    public $resourceGroups;

    /**
     * @var string
     */
    public $sessionType;

    /**
     * @var sessions[]
     */
    public $sessions;

    /**
     * @var string
     */
    public $snapshotPolicyId;

    /**
     * @var string
     */
    public $snapshotPolicyName;

    /**
     * @var string
     */
    public $standardStartTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var bool
     */
    public $supportHibernation;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var tags[]
     */
    public $tags;

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
        'domainType' => 'DomainType',
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

    public function validate()
    {
        if (\is_array($this->desktopDurationList)) {
            Model::validateArray($this->desktopDurationList);
        }
        if (\is_array($this->disks)) {
            Model::validateArray($this->disks);
        }
        if (\is_array($this->endUserIds)) {
            Model::validateArray($this->endUserIds);
        }
        if (null !== $this->fotaUpdate) {
            $this->fotaUpdate->validate();
        }
        if (\is_array($this->managementFlags)) {
            Model::validateArray($this->managementFlags);
        }
        if (null !== $this->osUpdate) {
            $this->osUpdate->validate();
        }
        if (\is_array($this->policyGroupIdList)) {
            Model::validateArray($this->policyGroupIdList);
        }
        if (\is_array($this->policyGroupNameList)) {
            Model::validateArray($this->policyGroupNameList);
        }
        if (\is_array($this->resourceGroups)) {
            Model::validateArray($this->resourceGroups);
        }
        if (\is_array($this->sessions)) {
            Model::validateArray($this->sessions);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->desktopDurationList)) {
                $res['DesktopDurationList'] = [];
                $n1 = 0;
                foreach ($this->desktopDurationList as $item1) {
                    $res['DesktopDurationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->disks)) {
                $res['Disks'] = [];
                $n1 = 0;
                foreach ($this->disks as $item1) {
                    $res['Disks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }

        if (null !== $this->downgradeQuota) {
            $res['DowngradeQuota'] = $this->downgradeQuota;
        }

        if (null !== $this->downgradedTimes) {
            $res['DowngradedTimes'] = $this->downgradedTimes;
        }

        if (null !== $this->endUserIds) {
            if (\is_array($this->endUserIds)) {
                $res['EndUserIds'] = [];
                $n1 = 0;
                foreach ($this->endUserIds as $item1) {
                    $res['EndUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->fotaUpdate) {
            $res['FotaUpdate'] = null !== $this->fotaUpdate ? $this->fotaUpdate->toArray($noStream) : $this->fotaUpdate;
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
            if (\is_array($this->managementFlags)) {
                $res['ManagementFlags'] = [];
                $n1 = 0;
                foreach ($this->managementFlags as $item1) {
                    $res['ManagementFlags'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            $res['OsUpdate'] = null !== $this->osUpdate ? $this->osUpdate->toArray($noStream) : $this->osUpdate;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }

        if (null !== $this->policyGroupIdList) {
            if (\is_array($this->policyGroupIdList)) {
                $res['PolicyGroupIdList'] = [];
                $n1 = 0;
                foreach ($this->policyGroupIdList as $item1) {
                    $res['PolicyGroupIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->policyGroupName) {
            $res['PolicyGroupName'] = $this->policyGroupName;
        }

        if (null !== $this->policyGroupNameList) {
            if (\is_array($this->policyGroupNameList)) {
                $res['PolicyGroupNameList'] = [];
                $n1 = 0;
                foreach ($this->policyGroupNameList as $item1) {
                    $res['PolicyGroupNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->resourceGroups) {
            if (\is_array($this->resourceGroups)) {
                $res['ResourceGroups'] = [];
                $n1 = 0;
                foreach ($this->resourceGroups as $item1) {
                    $res['ResourceGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
        }

        if (null !== $this->sessions) {
            if (\is_array($this->sessions)) {
                $res['Sessions'] = [];
                $n1 = 0;
                foreach ($this->sessions as $item1) {
                    $res['Sessions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['DesktopDurationList'] as $item1) {
                    $model->desktopDurationList[$n1] = desktopDurationList::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Disks'] as $item1) {
                    $model->disks[$n1] = disks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }

        if (isset($map['DowngradeQuota'])) {
            $model->downgradeQuota = $map['DowngradeQuota'];
        }

        if (isset($map['DowngradedTimes'])) {
            $model->downgradedTimes = $map['DowngradedTimes'];
        }

        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = [];
                $n1 = 0;
                foreach ($map['EndUserIds'] as $item1) {
                    $model->endUserIds[$n1] = $item1;
                    ++$n1;
                }
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
                $model->managementFlags = [];
                $n1 = 0;
                foreach ($map['ManagementFlags'] as $item1) {
                    $model->managementFlags[$n1] = $item1;
                    ++$n1;
                }
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
                $model->policyGroupIdList = [];
                $n1 = 0;
                foreach ($map['PolicyGroupIdList'] as $item1) {
                    $model->policyGroupIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PolicyGroupName'])) {
            $model->policyGroupName = $map['PolicyGroupName'];
        }

        if (isset($map['PolicyGroupNameList'])) {
            if (!empty($map['PolicyGroupNameList'])) {
                $model->policyGroupNameList = [];
                $n1 = 0;
                foreach ($map['PolicyGroupNameList'] as $item1) {
                    $model->policyGroupNameList[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['ResourceGroups'] as $item1) {
                    $model->resourceGroups[$n1] = resourceGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }

        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = [];
                $n1 = 0;
                foreach ($map['Sessions'] as $item1) {
                    $model->sessions[$n1] = sessions::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
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
