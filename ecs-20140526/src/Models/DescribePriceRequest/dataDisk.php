<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceRequest;

use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @description The category of data disk N. Valid values:
     *
     *   cloud: basic disk.
     *   cloud_efficiency: ultra disk.
     *   cloud_ssd: standard SSD.
     *   ephemeral_ssd: local SSD.
     *   cloud_essd: ESSD.
     *   cloud_auto: ESSD AutoPL disk.
     *
     * Valid values of N: 1 to 16.
     *
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
     *
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The size of data disk N. Unit: GiB. Valid values:
     *
     *   Valid values if DataDisk.N.Category is set to cloud: 5 to 2000.
     *
     *   Valid values if DataDisk.N.Category is set to cloud_efficiency: 20 to 32768.
     *
     *   Valid values if DataDisk.N.Category is set to cloud_ssd: 20 to 32768.
     *
     *   Valid values if DataDisk.N.Category is set to cloud_auto: 1 to 32768.
     *
     *   Valid values if DataDisk.N.Category is set to cloud_essd: vary based on the `DataDisk.N.PerformanceLevel` value.
     *
     *   Valid values if DataDisk.N.PerformanceLevel is set to PL0: 1 to 32768.
     *   Valid values if DataDisk.N.PerformanceLevel is set to PL1: 20 to 32768.
     *   Valid values if DataDisk.N.PerformanceLevel is set to PL2: 461 to 32768.
     *   Valid values if DataDisk.N.PerformanceLevel is set to PL3: 1261 to 32768.
     *
     *   Valid values if DataDisk.N.Category is set to ephemeral_ssd: 5 to 800.
     *
     * Valid values of N: 1 to 16.
     *
     * @example 2000
     *
     * @var int
     */
    public $size;

    /**
     * @description The provisioned read/write IOPS of the ESSD AutoPL disk to use as data disk N. Valid values: 0 to min{50,000, 1,000 × Capacity - Baseline IOPS}.
     *
     * Baseline IOPS = min{1,800 + 50 × Capacity, 50,000}.
     *
     * >  This parameter is available only if you set `DataDisk.N.Category` to `cloud_auto`. For more information, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     *
     * @example 40000
     *
     * @var int
     */
    public $provisionedIops;
    protected $_name = [
        'category' => 'Category',
        'performanceLevel' => 'PerformanceLevel',
        'size' => 'Size',
        'provisionedIops' => 'ProvisionedIops',
    ];

    public function validate() {}

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
        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
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
        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }

        return $model;
    }
}
