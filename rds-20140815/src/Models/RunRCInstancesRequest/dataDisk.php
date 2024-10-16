<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\RunRCInstancesRequest;

use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @description The type of the data disk. Set the value to **cloud_essd**, which indicates Enterprise SSDs (ESSDs).
     *
     * @example local_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description The reserved parameter. This parameter is not supported.
     *
     * @example null
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description Specifies whether to encrypt the cloud disk. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description The reserved parameter. This parameter is not supported.
     *
     * @example null
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The size of the data disk. Unit: GiB.
     *
     * @example 10
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
