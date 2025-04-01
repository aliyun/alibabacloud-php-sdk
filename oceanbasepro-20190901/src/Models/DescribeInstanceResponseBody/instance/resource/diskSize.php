<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource;

use AlibabaCloud\Dara\Model;

class diskSize extends Model
{
    /**
     * @var float
     */
    public $dataUsedSize;

    /**
     * @var float
     */
    public $maxDiskSize;

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
    public $originalTotalDiskSize;

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
        'dataUsedSize' => 'DataUsedSize',
        'maxDiskSize' => 'MaxDiskSize',
        'maxDiskUsedObServer' => 'MaxDiskUsedObServer',
        'maxDiskUsedPercent' => 'MaxDiskUsedPercent',
        'originalTotalDiskSize' => 'OriginalTotalDiskSize',
        'totalDiskSize' => 'TotalDiskSize',
        'unitDiskSize' => 'UnitDiskSize',
        'usedDiskSize' => 'UsedDiskSize',
    ];

    public function validate()
    {
        if (\is_array($this->maxDiskUsedObServer)) {
            Model::validateArray($this->maxDiskUsedObServer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataUsedSize) {
            $res['DataUsedSize'] = $this->dataUsedSize;
        }

        if (null !== $this->maxDiskSize) {
            $res['MaxDiskSize'] = $this->maxDiskSize;
        }

        if (null !== $this->maxDiskUsedObServer) {
            if (\is_array($this->maxDiskUsedObServer)) {
                $res['MaxDiskUsedObServer'] = [];
                $n1 = 0;
                foreach ($this->maxDiskUsedObServer as $item1) {
                    $res['MaxDiskUsedObServer'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->maxDiskUsedPercent) {
            $res['MaxDiskUsedPercent'] = $this->maxDiskUsedPercent;
        }

        if (null !== $this->originalTotalDiskSize) {
            $res['OriginalTotalDiskSize'] = $this->originalTotalDiskSize;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataUsedSize'])) {
            $model->dataUsedSize = $map['DataUsedSize'];
        }

        if (isset($map['MaxDiskSize'])) {
            $model->maxDiskSize = $map['MaxDiskSize'];
        }

        if (isset($map['MaxDiskUsedObServer'])) {
            if (!empty($map['MaxDiskUsedObServer'])) {
                $model->maxDiskUsedObServer = [];
                $n1 = 0;
                foreach ($map['MaxDiskUsedObServer'] as $item1) {
                    $model->maxDiskUsedObServer[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MaxDiskUsedPercent'])) {
            $model->maxDiskUsedPercent = $map['MaxDiskUsedPercent'];
        }

        if (isset($map['OriginalTotalDiskSize'])) {
            $model->originalTotalDiskSize = $map['OriginalTotalDiskSize'];
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
