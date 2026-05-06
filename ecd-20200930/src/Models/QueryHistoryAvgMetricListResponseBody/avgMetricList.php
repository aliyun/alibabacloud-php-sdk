<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\QueryHistoryAvgMetricListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\QueryHistoryAvgMetricListResponseBody\avgMetricList\sessions;

class avgMetricList extends Model
{
    /**
     * @var float
     */
    public $avgValue;

    /**
     * @var string
     */
    public $chargeType;

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
     * @var string[]
     */
    public $endUserIds;

    /**
     * @var string
     */
    public $gpuSpec;

    /**
     * @var string
     */
    public $managementFlag;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var bool
     */
    public $multiResource;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var sessions[]
     */
    public $sessions;

    /**
     * @var string
     */
    public $subPayType;
    protected $_name = [
        'avgValue' => 'AvgValue',
        'chargeType' => 'ChargeType',
        'cpu' => 'Cpu',
        'desktopGroupId' => 'DesktopGroupId',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'desktopStatus' => 'DesktopStatus',
        'desktopType' => 'DesktopType',
        'endUserIds' => 'EndUserIds',
        'gpuSpec' => 'GpuSpec',
        'managementFlag' => 'ManagementFlag',
        'memory' => 'Memory',
        'multiResource' => 'MultiResource',
        'platform' => 'Platform',
        'regionId' => 'RegionId',
        'sessions' => 'Sessions',
        'subPayType' => 'SubPayType',
    ];

    public function validate()
    {
        if (\is_array($this->endUserIds)) {
            Model::validateArray($this->endUserIds);
        }
        if (\is_array($this->sessions)) {
            Model::validateArray($this->sessions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgValue) {
            $res['AvgValue'] = $this->avgValue;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
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

        if (null !== $this->managementFlag) {
            $res['ManagementFlag'] = $this->managementFlag;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->multiResource) {
            $res['MultiResource'] = $this->multiResource;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (null !== $this->subPayType) {
            $res['SubPayType'] = $this->subPayType;
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
        if (isset($map['AvgValue'])) {
            $model->avgValue = $map['AvgValue'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
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

        if (isset($map['ManagementFlag'])) {
            $model->managementFlag = $map['ManagementFlag'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['MultiResource'])) {
            $model->multiResource = $map['MultiResource'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        if (isset($map['SubPayType'])) {
            $model->subPayType = $map['SubPayType'];
        }

        return $model;
    }
}
