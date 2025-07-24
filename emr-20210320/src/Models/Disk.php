<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class Disk extends Model
{
    /**
     * @description 磁盘类型。
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @description 每个节点磁盘数量。
     *
     * @example 5
     *
     * @var int
     */
    public $count;

    /**
     * @description 性能级别。
     *
     * @example S0
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description 单位GB。
     *
     * @example 80
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'category' => 'Category',
        'count' => 'Count',
        'performanceLevel' => 'PerformanceLevel',
        'size' => 'Size',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
     * @return Disk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
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
