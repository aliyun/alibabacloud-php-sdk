<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource;

use AlibabaCloud\Tea\Model;

class diskSize extends Model
{
    /**
     * @var float
     */
    public $dataUsedSize;

    /**
     * @var string[]
     */
    public $maxDiskUsedObServer;

    /**
     * @var float
     */
    public $maxDiskUsedPercent;

    /**
     * @var int
     */
    public $totalDiskSize;

    /**
     * @var int
     */
    public $unitDiskSize;

    /**
     * @var int
     */
    public $usedDiskSize;
    protected $_name = [
        'dataUsedSize'        => 'DataUsedSize',
        'maxDiskUsedObServer' => 'MaxDiskUsedObServer',
        'maxDiskUsedPercent'  => 'MaxDiskUsedPercent',
        'totalDiskSize'       => 'TotalDiskSize',
        'unitDiskSize'        => 'UnitDiskSize',
        'usedDiskSize'        => 'UsedDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataUsedSize) {
            $res['DataUsedSize'] = $this->dataUsedSize;
        }
        if (null !== $this->maxDiskUsedObServer) {
            $res['MaxDiskUsedObServer'] = $this->maxDiskUsedObServer;
        }
        if (null !== $this->maxDiskUsedPercent) {
            $res['MaxDiskUsedPercent'] = $this->maxDiskUsedPercent;
        }
        if (null !== $this->totalDiskSize) {
            $res['TotalDiskSize'] = $this->totalDiskSize;
        }
        if (null !== $this->unitDiskSize) {
            $res['UnitDiskSize'] = $this->unitDiskSize;
        }
        if (null !== $this->usedDiskSize) {
            $res['UsedDiskSize'] = $this->usedDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskSize
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataUsedSize'])) {
            $model->dataUsedSize = $map['DataUsedSize'];
        }
        if (isset($map['MaxDiskUsedObServer'])) {
            if (!empty($map['MaxDiskUsedObServer'])) {
                $model->maxDiskUsedObServer = $map['MaxDiskUsedObServer'];
            }
        }
        if (isset($map['MaxDiskUsedPercent'])) {
            $model->maxDiskUsedPercent = $map['MaxDiskUsedPercent'];
        }
        if (isset($map['TotalDiskSize'])) {
            $model->totalDiskSize = $map['TotalDiskSize'];
        }
        if (isset($map['UnitDiskSize'])) {
            $model->unitDiskSize = $map['UnitDiskSize'];
        }
        if (isset($map['UsedDiskSize'])) {
            $model->usedDiskSize = $map['UsedDiskSize'];
        }

        return $model;
    }
}
