<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponseBody\desktops\clients;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponseBody\desktops\desktopTimers;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponseBody\desktops\disks;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponseBody\desktops\fotaUpdate;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponseBody\desktops\sessions;

class desktops extends Model
{
    /**
     * @var string
     */
    public $chargeType;
    /**
     * @var clients[]
     */
    public $clients;
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
     * @var desktopTimers[]
     */
    public $desktopTimers;
    /**
     * @var string
     */
    public $desktopType;
    /**
     * @var string
     */
    public $directoryId;
    /**
     * @var disks[]
     */
    public $disks;
    /**
     * @var string
     */
    public $endUserId;
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
    public $gpuMemory;
    /**
     * @var bool
     */
    public $hibernationBeta;
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
    public $lastStartTime;
    /**
     * @var string
     */
    public $localName;
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
    public $networkInterfaceIp;
    /**
     * @var string
     */
    public $officeSiteId;
    /**
     * @var string
     */
    public $os;
    /**
     * @var string
     */
    public $osDescription;
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
    public $protocolType;
    /**
     * @var string
     */
    public $realDesktopId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $regionLocation;
    /**
     * @var string
     */
    public $sessionType;
    /**
     * @var sessions[]
     */
    public $sessions;
    /**
     * @var bool
     */
    public $supportHibernation;
    /**
     * @var string
     */
    public $userCustomName;
    protected $_name = [
        'chargeType'         => 'ChargeType',
        'clients'            => 'Clients',
        'connectionStatus'   => 'ConnectionStatus',
        'cpu'                => 'Cpu',
        'creationTime'       => 'CreationTime',
        'desktopGroupId'     => 'DesktopGroupId',
        'desktopId'          => 'DesktopId',
        'desktopName'        => 'DesktopName',
        'desktopStatus'      => 'DesktopStatus',
        'desktopTimers'      => 'DesktopTimers',
        'desktopType'        => 'DesktopType',
        'directoryId'        => 'DirectoryId',
        'disks'              => 'Disks',
        'endUserId'          => 'EndUserId',
        'endUserIds'         => 'EndUserIds',
        'expiredTime'        => 'ExpiredTime',
        'fotaUpdate'         => 'FotaUpdate',
        'gpuMemory'          => 'GpuMemory',
        'hibernationBeta'    => 'HibernationBeta',
        'hostName'           => 'HostName',
        'imageId'            => 'ImageId',
        'lastStartTime'      => 'LastStartTime',
        'localName'          => 'LocalName',
        'managementFlags'    => 'ManagementFlags',
        'memory'             => 'Memory',
        'networkInterfaceIp' => 'NetworkInterfaceIp',
        'officeSiteId'       => 'OfficeSiteId',
        'os'                 => 'Os',
        'osDescription'      => 'OsDescription',
        'osType'             => 'OsType',
        'platform'           => 'Platform',
        'policyGroupId'      => 'PolicyGroupId',
        'protocolType'       => 'ProtocolType',
        'realDesktopId'      => 'RealDesktopId',
        'regionId'           => 'RegionId',
        'regionLocation'     => 'RegionLocation',
        'sessionType'        => 'SessionType',
        'sessions'           => 'Sessions',
        'supportHibernation' => 'SupportHibernation',
        'userCustomName'     => 'UserCustomName',
    ];

    public function validate()
    {
        if (\is_array($this->clients)) {
            Model::validateArray($this->clients);
        }
        if (\is_array($this->desktopTimers)) {
            Model::validateArray($this->desktopTimers);
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
        if (\is_array($this->sessions)) {
            Model::validateArray($this->sessions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->clients) {
            if (\is_array($this->clients)) {
                $res['Clients'] = [];
                $n1             = 0;
                foreach ($this->clients as $item1) {
                    $res['Clients'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->desktopTimers) {
            if (\is_array($this->desktopTimers)) {
                $res['DesktopTimers'] = [];
                $n1                   = 0;
                foreach ($this->desktopTimers as $item1) {
                    $res['DesktopTimers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->disks) {
            if (\is_array($this->disks)) {
                $res['Disks'] = [];
                $n1           = 0;
                foreach ($this->disks as $item1) {
                    $res['Disks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->endUserIds) {
            if (\is_array($this->endUserIds)) {
                $res['EndUserIds'] = [];
                $n1                = 0;
                foreach ($this->endUserIds as $item1) {
                    $res['EndUserIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->fotaUpdate) {
            $res['FotaUpdate'] = null !== $this->fotaUpdate ? $this->fotaUpdate->toArray($noStream) : $this->fotaUpdate;
        }

        if (null !== $this->gpuMemory) {
            $res['GpuMemory'] = $this->gpuMemory;
        }

        if (null !== $this->hibernationBeta) {
            $res['HibernationBeta'] = $this->hibernationBeta;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->lastStartTime) {
            $res['LastStartTime'] = $this->lastStartTime;
        }

        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }

        if (null !== $this->managementFlags) {
            if (\is_array($this->managementFlags)) {
                $res['ManagementFlags'] = [];
                $n1                     = 0;
                foreach ($this->managementFlags as $item1) {
                    $res['ManagementFlags'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->networkInterfaceIp) {
            $res['NetworkInterfaceIp'] = $this->networkInterfaceIp;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->osDescription) {
            $res['OsDescription'] = $this->osDescription;
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

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->realDesktopId) {
            $res['RealDesktopId'] = $this->realDesktopId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->regionLocation) {
            $res['RegionLocation'] = $this->regionLocation;
        }

        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
        }

        if (null !== $this->sessions) {
            if (\is_array($this->sessions)) {
                $res['Sessions'] = [];
                $n1              = 0;
                foreach ($this->sessions as $item1) {
                    $res['Sessions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->supportHibernation) {
            $res['SupportHibernation'] = $this->supportHibernation;
        }

        if (null !== $this->userCustomName) {
            $res['UserCustomName'] = $this->userCustomName;
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
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Clients'])) {
            if (!empty($map['Clients'])) {
                $model->clients = [];
                $n1             = 0;
                foreach ($map['Clients'] as $item1) {
                    $model->clients[$n1++] = clients::fromMap($item1);
                }
            }
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

        if (isset($map['DesktopTimers'])) {
            if (!empty($map['DesktopTimers'])) {
                $model->desktopTimers = [];
                $n1                   = 0;
                foreach ($map['DesktopTimers'] as $item1) {
                    $model->desktopTimers[$n1++] = desktopTimers::fromMap($item1);
                }
            }
        }

        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['Disks'])) {
            if (!empty($map['Disks'])) {
                $model->disks = [];
                $n1           = 0;
                foreach ($map['Disks'] as $item1) {
                    $model->disks[$n1++] = disks::fromMap($item1);
                }
            }
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = [];
                $n1                = 0;
                foreach ($map['EndUserIds'] as $item1) {
                    $model->endUserIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['FotaUpdate'])) {
            $model->fotaUpdate = fotaUpdate::fromMap($map['FotaUpdate']);
        }

        if (isset($map['GpuMemory'])) {
            $model->gpuMemory = $map['GpuMemory'];
        }

        if (isset($map['HibernationBeta'])) {
            $model->hibernationBeta = $map['HibernationBeta'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['LastStartTime'])) {
            $model->lastStartTime = $map['LastStartTime'];
        }

        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }

        if (isset($map['ManagementFlags'])) {
            if (!empty($map['ManagementFlags'])) {
                $model->managementFlags = [];
                $n1                     = 0;
                foreach ($map['ManagementFlags'] as $item1) {
                    $model->managementFlags[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['NetworkInterfaceIp'])) {
            $model->networkInterfaceIp = $map['NetworkInterfaceIp'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['OsDescription'])) {
            $model->osDescription = $map['OsDescription'];
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

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['RealDesktopId'])) {
            $model->realDesktopId = $map['RealDesktopId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RegionLocation'])) {
            $model->regionLocation = $map['RegionLocation'];
        }

        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }

        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = [];
                $n1              = 0;
                foreach ($map['Sessions'] as $item1) {
                    $model->sessions[$n1++] = sessions::fromMap($item1);
                }
            }
        }

        if (isset($map['SupportHibernation'])) {
            $model->supportHibernation = $map['SupportHibernation'];
        }

        if (isset($map['UserCustomName'])) {
            $model->userCustomName = $map['UserCustomName'];
        }

        return $model;
    }
}
