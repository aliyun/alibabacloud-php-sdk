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
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $managementFlag;

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
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $policyGroupName;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $protocolType;

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
    public $startTime;

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
        'bundleId'                => 'BundleId',
        'bundleName'              => 'BundleName',
        'chargeType'              => 'ChargeType',
        'connectionStatus'        => 'ConnectionStatus',
        'cpu'                     => 'Cpu',
        'creationTime'            => 'CreationTime',
        'dataDiskCategory'        => 'DataDiskCategory',
        'dataDiskSize'            => 'DataDiskSize',
        'desktopGroupId'          => 'DesktopGroupId',
        'desktopId'               => 'DesktopId',
        'desktopName'             => 'DesktopName',
        'desktopStatus'           => 'DesktopStatus',
        'desktopType'             => 'DesktopType',
        'directoryId'             => 'DirectoryId',
        'directoryType'           => 'DirectoryType',
        'disks'                   => 'Disks',
        'downgradeQuota'          => 'DowngradeQuota',
        'downgradedTimes'         => 'DowngradedTimes',
        'endUserIds'              => 'EndUserIds',
        'expiredTime'             => 'ExpiredTime',
        'fotaUpdate'              => 'FotaUpdate',
        'gpuCategory'             => 'GpuCategory',
        'gpuCount'                => 'GpuCount',
        'gpuDriverVersion'        => 'GpuDriverVersion',
        'gpuSpec'                 => 'GpuSpec',
        'hostName'                => 'HostName',
        'imageId'                 => 'ImageId',
        'managementFlag'          => 'ManagementFlag',
        'memory'                  => 'Memory',
        'networkInterfaceId'      => 'NetworkInterfaceId',
        'networkInterfaceIp'      => 'NetworkInterfaceIp',
        'officeSiteId'            => 'OfficeSiteId',
        'officeSiteName'          => 'OfficeSiteName',
        'officeSiteType'          => 'OfficeSiteType',
        'officeSiteVpcType'       => 'OfficeSiteVpcType',
        'osType'                  => 'OsType',
        'platform'                => 'Platform',
        'policyGroupId'           => 'PolicyGroupId',
        'policyGroupName'         => 'PolicyGroupName',
        'progress'                => 'Progress',
        'protocolType'            => 'ProtocolType',
        'sessionType'             => 'SessionType',
        'sessions'                => 'Sessions',
        'startTime'               => 'StartTime',
        'systemDiskCategory'      => 'SystemDiskCategory',
        'systemDiskSize'          => 'SystemDiskSize',
        'tags'                    => 'Tags',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
        'volumeEncryptionKey'     => 'VolumeEncryptionKey',
        'zoneType'                => 'ZoneType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->managementFlag) {
            $res['ManagementFlag'] = $this->managementFlag;
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
        if (null !== $this->policyGroupName) {
            $res['PolicyGroupName'] = $this->policyGroupName;
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ManagementFlag'])) {
            $model->managementFlag = $map['ManagementFlag'];
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
        if (isset($map['PolicyGroupName'])) {
            $model->policyGroupName = $map['PolicyGroupName'];
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
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
