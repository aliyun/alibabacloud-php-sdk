<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\resource;

use AlibabaCloud\Dara\Model;

class diskSize extends Model
{
    /**
     * @var float
     */
    public $originalTotalDiskSize;

    /**
     * @var float
     */
    public $totalDiskSize;

    /**
     * @var float
     */
    public $unitDiskSize;

    /**
     * @var int
     */
    public $usedDiskSize;
    protected $_name = [
        'originalTotalDiskSize' => 'OriginalTotalDiskSize',
        'totalDiskSize' => 'TotalDiskSize',
        'unitDiskSize' => 'UnitDiskSize',
        'usedDiskSize' => 'UsedDiskSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
