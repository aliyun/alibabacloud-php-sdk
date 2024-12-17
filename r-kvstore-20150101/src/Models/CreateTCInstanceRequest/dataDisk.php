<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateTCInstanceRequest;

use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @description This parameter is required.
     *
     * @example PL0
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description This parameter is required.
     *
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
