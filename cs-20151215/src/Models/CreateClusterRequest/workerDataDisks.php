<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest;

use AlibabaCloud\Tea\Model;

class workerDataDisks extends Model
{
    /**
     * @description The data disk type.
     *
     * This parameter is required.
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @description Specifies whether to encrypt the data disks. Valid values:
     *
     *   `true`: encrypts the data disk.
     *   `false`: does not encrypt the data disk.
     *
     * Default value: `false`
     * @example true
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description The PL of the data disk. This parameter takes effect only for ESSDs. You can specify a higher PL if you increase the size of a data disk. For more information, see [Enterprise SSDs](https://help.aliyun.com/document_detail/122389.html).
     *
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description The data disk size. Valid values: 40 to 32767. Unit: GiB.
     *
     * This parameter is required.
     * @example 120
     *
     * @var string
     */
    public $size;
    protected $_name = [
        'category'         => 'category',
        'encrypted'        => 'encrypted',
        'performanceLevel' => 'performance_level',
        'size'             => 'size',
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
        if (null !== $this->encrypted) {
            $res['encrypted'] = $this->encrypted;
        }
        if (null !== $this->performanceLevel) {
            $res['performance_level'] = $this->performanceLevel;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workerDataDisks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['encrypted'])) {
            $model->encrypted = $map['encrypted'];
        }
        if (isset($map['performance_level'])) {
            $model->performanceLevel = $map['performance_level'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
