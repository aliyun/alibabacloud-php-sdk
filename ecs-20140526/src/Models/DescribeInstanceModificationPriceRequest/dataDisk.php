<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceModificationPriceRequest;

use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @description The category of data disk N. You can specify this parameter if you want to query the pricing information about newly attached subscription data disks. Valid values of N: 1 to 16. Valid values:
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: ESSD
     *   cloud: basic disk
     *
     * This parameter is empty by default.
     *
     * > When you call the DescribeInstanceModificationPrice operation, you must specify at least one of the following parameters: `InstanceType` and `DataDisk.N.*`.
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @description The performance level of data disk N that is an enhanced SSD (ESSD). The value of N must be the same as that in `DataDisk.N.Category` when DataDisk.N.Category is set to cloud_essd. Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * For more information about ESSD performance levels, see [ESSDs](~~122389~~).
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The capacity of data disk N. Valid values of N: 1 to 16. Unit: GiB. Valid values:
     *
     *   Valid values when DataDisk.N.Category is set to cloud_efficiency: 20 to 32768.
     *
     *   Valid values when DataDisk.N.Category is set to cloud_ssd: 20 to 32768.
     *
     *   Valid values when DataDisk.N.Category is set to cloud_essd: depends on the value of `DataDisk.N.PerformanceLevel`.
     *
     *   Valid values when DataDisk.N.PerformanceLevel is set to PL0: 40 to 32768.
     *   Valid values when DataDisk.N.PerformanceLevel is set to PL1: 20 to 32768.
     *   Valid values when DataDisk.N.PerformanceLevel is set to PL2: 461 to 32768.
     *   Valid values when DataDisk.N.PerformanceLevel is set to PL3: 1261 to 32768.
     *
     *   Valid values when DataDisk.N.Category is set to cloud: 5 to 2000.
     *
     * The default value is the minimum capacity allowed for the specified data disk category.
     * @example 100
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'category'         => 'Category',
        'performanceLevel' => 'PerformanceLevel',
        'size'             => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
