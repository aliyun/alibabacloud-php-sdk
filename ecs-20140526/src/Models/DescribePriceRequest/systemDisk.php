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
     *   cloud_essd: enhanced SSD (ESSD)
     *
     * Description of the default values:
     *
     *   When the InstanceType parameter is set to a retired instance type and the `IoOptimized` parameter is set to `none`, the default value of this parameter is `cloud`.
     *   In other cases, the default value of this parameter is `cloud_efficiency`.
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description The performance level of the system disk when it is an ESSD. This parameter is valid only when the `SystemDiskCategory` parameter is set to cloud_essd. Default value: PL1. Valid values:
     *
     *   PL0
     *   PL1
     *   PL2
     *   PL3
     *
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The size of the system disk. Unit: GiB. Valid values: 20 to 500.
     *
     * >  The value of this parameter must be at least 20 and greater than or equal to the image size.
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
