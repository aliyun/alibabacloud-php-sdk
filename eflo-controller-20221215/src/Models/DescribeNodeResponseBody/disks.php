<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNodeResponseBody;

use AlibabaCloud\Tea\Model;

class disks extends Model
{
    /**
     * @description The disk type. Valid values:
     *
     *   cloud_essd
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @description The disk ID.
     *
     * @example d-bp1fi88ryk4yah8a6yos
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The performance level of the ESSD that is used as the system disk. Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 random read/write IOPS.
     *
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The disk size. Unit: GiB.
     *
     * @example 100
     *
     * @var int
     */
    public $size;

    /**
     * @description The disk type. Valid values:
     *
     *   system: system disk
     *   data: data disk
     *
     * @example system
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'category' => 'Category',
        'diskId' => 'DiskId',
        'performanceLevel' => 'PerformanceLevel',
        'size' => 'Size',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
