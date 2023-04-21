<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops;

use AlibabaCloud\Tea\Model;

class disks extends Model
{
    /**
     * @description The ID of the disk.
     *
     * @example d-jedbpr4sl9l37****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The size of the disk. Unit: GiB.
     *
     * @example 80
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description The type of the disk.
     *
     * @example SYSTEM
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The performance level (PL) of the disk that is an enhanced SSD (ESSD). Valid values:
     *
     *   PL0
     *   PL1
     *   PL2
     *   PL3
     *
     * For more information about the differences between disks of different PLs, see [Enhanced SSDs](~~122389~~).
     * @example PL0
     *
     * @var string
     */
    public $performanceLevel;
    protected $_name = [
        'diskId'           => 'DiskId',
        'diskSize'         => 'DiskSize',
        'diskType'         => 'DiskType',
        'performanceLevel' => 'PerformanceLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
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
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }

        return $model;
    }
}
