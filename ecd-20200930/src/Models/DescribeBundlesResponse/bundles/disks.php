<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponse\bundles;

use AlibabaCloud\Tea\Model;

class disks extends Model
{
    /**
     * @var string
     */
    public $diskPerformanceLevel;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $diskType;
    protected $_name = [
        'diskPerformanceLevel' => 'DiskPerformanceLevel',
        'diskSize'             => 'DiskSize',
        'diskType'             => 'DiskType',
    ];

    public function validate()
    {
        Model::validateRequired('diskPerformanceLevel', $this->diskPerformanceLevel, true);
        Model::validateRequired('diskSize', $this->diskSize, true);
        Model::validateRequired('diskType', $this->diskType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskPerformanceLevel) {
            $res['DiskPerformanceLevel'] = $this->diskPerformanceLevel;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return disks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskPerformanceLevel'])) {
            $model->diskPerformanceLevel = $map['DiskPerformanceLevel'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        return $model;
    }
}
