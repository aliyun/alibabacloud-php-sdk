<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\readOnlyResource;

use AlibabaCloud\Tea\Model;

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
     * @example 400
     *
     * @var int
     */
    public $totalDiskSize;

    /**
     * @example 200
     *
     * @var int
     */
    public $unitDiskSize;
    protected $_name = [
        'logAssignedSize'        => 'LogAssignedSize',
        'maxLogAssignedObServer' => 'MaxLogAssignedObServer',
        'maxLogAssignedPercent'  => 'MaxLogAssignedPercent',
        'totalDiskSize'          => 'TotalDiskSize',
        'unitDiskSize'           => 'UnitDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logAssignedSize) {
            $res['LogAssignedSize'] = $this->logAssignedSize;
        }
        if (null !== $this->maxLogAssignedObServer) {
            $res['MaxLogAssignedObServer'] = $this->maxLogAssignedObServer;
        }
        if (null !== $this->maxLogAssignedPercent) {
            $res['MaxLogAssignedPercent'] = $this->maxLogAssignedPercent;
        }
        if (null !== $this->totalDiskSize) {
            $res['TotalDiskSize'] = $this->totalDiskSize;
        }
        if (null !== $this->unitDiskSize) {
            $res['UnitDiskSize'] = $this->unitDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logDiskSize
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogAssignedSize'])) {
            $model->logAssignedSize = $map['LogAssignedSize'];
        }
        if (isset($map['MaxLogAssignedObServer'])) {
            if (!empty($map['MaxLogAssignedObServer'])) {
                $model->maxLogAssignedObServer = $map['MaxLogAssignedObServer'];
            }
        }
        if (isset($map['MaxLogAssignedPercent'])) {
            $model->maxLogAssignedPercent = $map['MaxLogAssignedPercent'];
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
