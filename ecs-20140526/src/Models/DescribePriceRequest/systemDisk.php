<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceRequest;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @description The category of the system disk. Valid values:
     *
     *   cloud: basic disk
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   ephemeral_ssd: local SSD
     *   cloud_essd: Enterprise SSD (ESSD)
     *   cloud_auto: ESSD AutoPL disk
     *
     * Default value:
     *
     *   When InstanceType is set to a retired instance type and `IoOptimized` is set to `none`, the default value is `cloud`.
     *   In other cases, the default value is `cloud_efficiency`.
     *
     * >  If you want to query the price of a system disk, you must also specify `ImageId`.
     * @example cloud_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description The performance level of the system disk when the disk is an ESSD. This parameter is valid only when `SystemDiskCategory` is set to cloud_essd. Valid values:
     *
     * PL0, PL1 (default), PL2, PL3.
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The size of the system disk. Unit: GiB. Valid values:
     *
     *   Basic disk (cloud): 20 to 500.
     *
     *   ESSD (cloud_essd): Valid values vary based on the SystemDisk.PerformanceLevel value.
     *
     *   Valid values when SystemDisk.PerformanceLevel is set to PL0: 1 to 2048.
     *   Valid values when SystemDisk.PerformanceLevel is set to PL1: 20 to 2048.
     *   Valid values when SystemDisk.PerformanceLevel is set to PL2: 461 to 2048.
     *   Valid values when SystemDisk.PerformanceLevel is set to PL3: 1261 to 2048.
     *
     *   ESSD AutoPL disk (cloud_auto): 1 to 2048.
     *
     *   Other disk categories: 20 to 2048.
     *
     * Default value: 20 or the size of the image specified by ImageId, whichever is greater.
     * @example 80
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
     * @return systemDisk
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
