<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceRequest\commodities;

use AlibabaCloud\Tea\Model;

class dataDisks extends Model
{
    /**
     * @description The type of the data disk. Valid values:
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: SSD
     *   cloud_essd: ESSD
     *   cloud: basic disk
     *
     * Valid values of N: 0 to 4
     * @example cloud_efficiency
     *
     * @var string
     */
    public $category;

    /**
     * @description Specifies whether the data disk is released when the node is released. Valid values:
     *
     *   true
     *   false
     *
     * Valid values of N: 0 to 4
     * @example true
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description Specifies whether to encrypt the data disk. Valid values:
     *
     *   true
     *   false
     *
     * Valid values of N: 0 to 4
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description The performance level of the ESSD used as the data disk. This parameter takes effect only when the Commodities.N.DataDisks.N.category parameter is set to cloud_essd. Default value: PL1. Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * Valid values of N: 0 to 4
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The size of the data disk. Unit: GB.
     *
     * Valid values of N: 0 to 4
     * @example 40
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'category'           => 'category',
        'deleteWithInstance' => 'deleteWithInstance',
        'encrypted'          => 'encrypted',
        'performanceLevel'   => 'performanceLevel',
        'size'               => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->deleteWithInstance) {
            $res['deleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->encrypted) {
            $res['encrypted'] = $this->encrypted;
        }
        if (null !== $this->performanceLevel) {
            $res['performanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDisks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['deleteWithInstance'])) {
            $model->deleteWithInstance = $map['deleteWithInstance'];
        }
        if (isset($map['encrypted'])) {
            $model->encrypted = $map['encrypted'];
        }
        if (isset($map['performanceLevel'])) {
            $model->performanceLevel = $map['performanceLevel'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
