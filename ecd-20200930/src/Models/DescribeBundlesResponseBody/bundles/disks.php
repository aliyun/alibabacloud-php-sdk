<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponseBody\bundles;

use AlibabaCloud\Tea\Model;

class disks extends Model
{
    /**
     * @description The PL of the disk.
     *
     * Valid values:
     *
     *   PL1
     *
     * <!-- -->
     *
     *   PL0
     *
     * <!-- -->
     *
     *   PL3
     *
     * <!-- -->
     *
     *   PL2
     *
     * <!-- -->
     * @example PL0
     *
     * @var string
     */
    public $diskPerformanceLevel;

    /**
     * @description The size of the disk. Unit: GiB.
     *
     * @example 150
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description The type of the disk.
     *
     * Valid values:
     *
     *   SYSTEM: system disk
     *
     * <!-- -->
     *
     *   DATA: data disk
     *
     * <!-- -->
     * @example SYSTEM
     *
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
