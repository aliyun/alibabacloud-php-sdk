<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceRequest;

use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @description The category of data disk N. Valid values:
     *
     *   cloud: basic disk
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   ephemeral_ssd: local SSD
     *   cloud_essd: ESSD
     *   cloud_auto: ESSD AutoPL disk
     *
     * Valid values of N: 1 to 16.
     * @example cloud_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description The performance level of data disk N when the disk is an ESSD. This parameter takes effect only when `DataDisk.N.Category` is set to cloud_essd. Valid values:
     *
     *   PL0
     *   PL1 (default)
     *   PL2
     *   PL3
     *
     * Valid values of N: 1 to 16.
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The size of data disk N. Unit: GiB. Valid values:
     *
     *   Valid values when DataDisk.N.Category is set to cloud: 5 to 2000.
     *
     *   Valid values when DataDisk.N.Category is set to cloud_efficiency: 20 to 32768.
     *
     *   Valid values when DataDisk.N.Category is set to cloud_ssd: 20 to 32768.
     *
     *   Valid values when DataDisk.N.Category is set to cloud_auto: 1 to 32768.
     *
     *   Valid values when DataDisk.N.Category is set to cloud_essd: vary based on the value of `DataDisk.N.PerformanceLevel`.
     *
     *   Valid values when DataDisk.N.PerformanceLevel is set to PL0: 1 to 32768.
     *   Valid values when DataDisk.N.PerformanceLevel is set to PL1: 20 to 32768.
     *   Valid values when DataDisk.N.PerformanceLevel is set to PL2: 461 to 32768.
     *   Valid values when DataDisk.N.PerformanceLevel is set to PL3: 1261 to 32768.
     *
     *   Valid values when DataDisk.N.Category is set to ephemeral_ssd: 5 to 800.
     *
     * Valid values of N: 1 to 16.
     * @example 2000
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
