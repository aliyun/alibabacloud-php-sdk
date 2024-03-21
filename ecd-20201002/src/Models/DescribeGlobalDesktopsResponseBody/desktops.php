<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponseBody;

use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponseBody\desktops\clients;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponseBody\desktops\desktopTimers;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponseBody\desktops\disks;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponseBody\desktops\fotaUpdate;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponseBody\desktops\sessions;
use AlibabaCloud\Tea\Model;

class desktops extends Model
{
    /**
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description 支持的客户端信息
     *
     * @var clients[]
     */
    public $clients;

    /**
     * @example Disconnected
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @example 2020-11-06T08:28Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example dg-3uiojcc0j4kh7****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @example testDesktopName
     *
     * @var string
     */
    public $desktopName;

    /**
     * @example Running
     *
     * @var string
     */
    public $desktopStatus;

    /**
     * @var desktopTimers[]
     */
    public $desktopTimers;

    /**
     * @example ecd.basic.large
     *
     * @var string
     */
    public $desktopType;

    /**
     * @example cn-hangzhou+dir-jedbpr4sl9l37****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @var disks[]
     */
    public $disks;

    /**
     * @example User1
     *
     * @var string
     */
    public $endUserId;

    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @example 2021-12-31T15:59Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @var fotaUpdate
     */
    public $fotaUpdate;

    /**
     * @example 2048
     *
     * @var int
     */
    public $gpuMemory;

    /**
     * @var bool
     */
    public $hibernationBeta;

    /**
     * @example testName
     *
     * @var string
     */
    public $hostName;

    /**
     * @example m-4zfb6zj728hhr****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example 2021-07-13T15:59Z
     *
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
     * @example 4096
     *
     * @var int
     */
    public $memory;

    /**
     * @example 192.168.xx.xx
     *
     * @var string
     */
    public $networkInterfaceIp;

    /**
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $os;

    /**
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $platform;

    /**
     * @example pg-9cktlowtxfl6****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @example ecd-gx2x1dhsm****
     *
     * @var string
     */
    public $realDesktopId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sessionType;

    /**
     * @var sessions[]
     */
    public $sessions;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportHibernation;

    /**
     * @example testDesktop
     *
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
        'osType'             => 'OsType',
        'platform'           => 'Platform',
        'policyGroupId'      => 'PolicyGroupId',
        'protocolType'       => 'ProtocolType',
        'realDesktopId'      => 'RealDesktopId',
        'regionId'           => 'RegionId',
        'sessionType'        => 'SessionType',
        'sessions'           => 'Sessions',
        'supportHibernation' => 'SupportHibernation',
        'userCustomName'     => 'UserCustomName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clients) {
            $res['Clients'] = [];
            if (null !== $this->clients && \is_array($this->clients)) {
                $n = 0;
                foreach ($this->clients as $item) {
                    $res['Clients'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['DesktopTimers'] = [];
            if (null !== $this->desktopTimers && \is_array($this->desktopTimers)) {
                $n = 0;
                foreach ($this->desktopTimers as $item) {
                    $res['DesktopTimers'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Disks'] = [];
            if (null !== $this->disks && \is_array($this->disks)) {
                $n = 0;
                foreach ($this->disks as $item) {
                    $res['Disks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
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
            $res['ManagementFlags'] = $this->managementFlags;
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
        if (null !== $this->supportHibernation) {
            $res['SupportHibernation'] = $this->supportHibernation;
        }
        if (null !== $this->userCustomName) {
            $res['UserCustomName'] = $this->userCustomName;
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
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Clients'])) {
            if (!empty($map['Clients'])) {
                $model->clients = [];
                $n              = 0;
                foreach ($map['Clients'] as $item) {
                    $model->clients[$n++] = null !== $item ? clients::fromMap($item) : $item;
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
                $n                    = 0;
                foreach ($map['DesktopTimers'] as $item) {
                    $model->desktopTimers[$n++] = null !== $item ? desktopTimers::fromMap($item) : $item;
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
                $n            = 0;
                foreach ($map['Disks'] as $item) {
                    $model->disks[$n++] = null !== $item ? disks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
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
                $model->managementFlags = $map['ManagementFlags'];
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
        if (isset($map['SupportHibernation'])) {
            $model->supportHibernation = $map['SupportHibernation'];
        }
        if (isset($map['UserCustomName'])) {
            $model->userCustomName = $map['UserCustomName'];
        }

        return $model;
    }
}
