<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGlobalDesktopRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGlobalDesktopRecordsResponseBody\sessions\resourceGroups;

class sessions extends Model
{
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
    public $desktopGroupId;

    /**
     * @var string
     */
    public $desktopGroupName;

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
    public $endUserId;

    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @var string
     */
    public $gpuSpec;

    /**
     * @var int
     */
    public $latestConnectionTime;

    /**
     * @var int
     */
    public $memory;

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
    public $osType;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var resourceGroups[]
     */
    public $resourceGroups;

    /**
     * @var int
     */
    public $sessionIdleTime;

    /**
     * @var sessions\sessions[]
     */
    public $sessions;

    /**
     * @var int
     */
    public $statusChangeTime;

    /**
     * @var string
     */
    public $subPayType;

    /**
     * @var int
     */
    public $totalConnectionTime;

    /**
     * @var int
     */
    public $upTime;
    protected $_name = [
        'connectionStatus' => 'ConnectionStatus',
        'cpu' => 'Cpu',
        'desktopGroupId' => 'DesktopGroupId',
        'desktopGroupName' => 'DesktopGroupName',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'desktopStatus' => 'DesktopStatus',
        'endUserId' => 'EndUserId',
        'endUserIds' => 'EndUserIds',
        'gpuSpec' => 'GpuSpec',
        'latestConnectionTime' => 'LatestConnectionTime',
        'memory' => 'Memory',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
        'osType' => 'OsType',
        'platform' => 'Platform',
        'protocolType' => 'ProtocolType',
        'regionId' => 'RegionId',
        'resourceGroups' => 'ResourceGroups',
        'sessionIdleTime' => 'SessionIdleTime',
        'sessions' => 'Sessions',
        'statusChangeTime' => 'StatusChangeTime',
        'subPayType' => 'SubPayType',
        'totalConnectionTime' => 'TotalConnectionTime',
        'upTime' => 'UpTime',
    ];

    public function validate()
    {
        if (\is_array($this->endUserIds)) {
            Model::validateArray($this->endUserIds);
        }
        if (\is_array($this->resourceGroups)) {
            Model::validateArray($this->resourceGroups);
        }
        if (\is_array($this->sessions)) {
            Model::validateArray($this->sessions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }

        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
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

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
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

        if (null !== $this->gpuSpec) {
            $res['GpuSpec'] = $this->gpuSpec;
        }

        if (null !== $this->latestConnectionTime) {
            $res['LatestConnectionTime'] = $this->latestConnectionTime;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (null !== $this->sessionIdleTime) {
            $res['SessionIdleTime'] = $this->sessionIdleTime;
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

        if (null !== $this->statusChangeTime) {
            $res['StatusChangeTime'] = $this->statusChangeTime;
        }

        if (null !== $this->subPayType) {
            $res['SubPayType'] = $this->subPayType;
        }

        if (null !== $this->totalConnectionTime) {
            $res['TotalConnectionTime'] = $this->totalConnectionTime;
        }

        if (null !== $this->upTime) {
            $res['UpTime'] = $this->upTime;
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
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }

        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
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

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
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

        if (isset($map['GpuSpec'])) {
            $model->gpuSpec = $map['GpuSpec'];
        }

        if (isset($map['LatestConnectionTime'])) {
            $model->latestConnectionTime = $map['LatestConnectionTime'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        if (isset($map['SessionIdleTime'])) {
            $model->sessionIdleTime = $map['SessionIdleTime'];
        }

        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = [];
                $n1 = 0;
                foreach ($map['Sessions'] as $item1) {
                    $model->sessions[$n1] = sessions\sessions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StatusChangeTime'])) {
            $model->statusChangeTime = $map['StatusChangeTime'];
        }

        if (isset($map['SubPayType'])) {
            $model->subPayType = $map['SubPayType'];
        }

        if (isset($map['TotalConnectionTime'])) {
            $model->totalConnectionTime = $map['TotalConnectionTime'];
        }

        if (isset($map['UpTime'])) {
            $model->upTime = $map['UpTime'];
        }

        return $model;
    }
}
