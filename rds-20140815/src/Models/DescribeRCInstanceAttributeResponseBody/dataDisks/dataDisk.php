<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\dataDisks;

use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @description The category of the data disk.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @description Indicates whether the data disk is released when the instance is released. Valid values:
     *
     *   **true**: The data disk is released when the instance is released.
     *   **false**: The data disk is reserved when the instance is released.
     *
     * @example true
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description Indicates whether the data disk is encrypted. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description The performance level of data disk. This parameter is available when the data disk is an Enterprise SSD (ESSD).
     *
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The size of the data disk. Unit: GiB.
     *
     * @example 40
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'category'           => 'Category',
        'deleteWithInstance' => 'DeleteWithInstance',
        'encrypted'          => 'Encrypted',
        'performanceLevel'   => 'PerformanceLevel',
        'size'               => 'Size',
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
        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
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
        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
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
