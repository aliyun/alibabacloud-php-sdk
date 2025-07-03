<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource;

use AlibabaCloud\Dara\Model;

class logDiskSize extends Model
{
    /**
     * @var string
     */
    public $logAssignedSize;

    /**
     * @var string[]
     */
    public $maxLogAssignedObServer;

    /**
     * @var string
     */
    public $maxLogAssignedPercent;

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
    protected $_name = [
        'logAssignedSize' => 'LogAssignedSize',
        'maxLogAssignedObServer' => 'MaxLogAssignedObServer',
        'maxLogAssignedPercent' => 'MaxLogAssignedPercent',
        'originalTotalDiskSize' => 'OriginalTotalDiskSize',
        'totalDiskSize' => 'TotalDiskSize',
        'unitDiskSize' => 'UnitDiskSize',
    ];

    public function validate()
    {
        if (\is_array($this->maxLogAssignedObServer)) {
            Model::validateArray($this->maxLogAssignedObServer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logAssignedSize) {
            $res['LogAssignedSize'] = $this->logAssignedSize;
        }

        if (null !== $this->maxLogAssignedObServer) {
            if (\is_array($this->maxLogAssignedObServer)) {
                $res['MaxLogAssignedObServer'] = [];
                $n1 = 0;
                foreach ($this->maxLogAssignedObServer as $item1) {
                    $res['MaxLogAssignedObServer'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxLogAssignedPercent) {
            $res['MaxLogAssignedPercent'] = $this->maxLogAssignedPercent;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogAssignedSize'])) {
            $model->logAssignedSize = $map['LogAssignedSize'];
        }

        if (isset($map['MaxLogAssignedObServer'])) {
            if (!empty($map['MaxLogAssignedObServer'])) {
                $model->maxLogAssignedObServer = [];
                $n1 = 0;
                foreach ($map['MaxLogAssignedObServer'] as $item1) {
                    $model->maxLogAssignedObServer[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxLogAssignedPercent'])) {
            $model->maxLogAssignedPercent = $map['MaxLogAssignedPercent'];
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

        return $model;
    }
}
