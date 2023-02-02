<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource;

use AlibabaCloud\Tea\Model;

class diskSize extends Model
{
    /**
     * @description The size of the data disk, in GB.
     *
     * @example 200
     *
     * @var float
     */
    public $dataUsedSize;

    /**
     * @description The server with the highest disk usage.
     *
     * @var string[]
     */
    public $maxDiskUsedObServer;

    /**
     * @description The maximum disk usage, in percentage.
     *
     * @example 0.14
     *
     * @var float
     */
    public $maxDiskUsedPercent;

    /**
     * @description The total storage space of the cluster, in GB.
     *
     * @example 200
     *
     * @var int
     */
    public $totalDiskSize;

    /**
     * @description The storage space of each replica node in the cluster, in GB.
     *
     * @example 200
     *
     * @var int
     */
    public $unitDiskSize;

    /**
     * @description The size of used storage space of the cluster, in GB.
     *
     * @example 100
     *
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
