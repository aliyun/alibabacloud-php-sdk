<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class SystemDisk extends Model
{
    /**
     * @description 磁盘类型。
     *
     * This parameter is required.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @description 每个节点系统盘数量，默认值为1。
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description 创建ESSD云盘作为系统盘使用时，设置云盘的性能等级。取值范围：
     * - PL0：单盘最高随机读写IOPS 1万。
     * - PL1（默认）：单盘最高随机读写IOPS 5万。
     * - PL2：单盘最高随机读写IOPS 10万。
     * - PL3：单盘最高随机读写IOPS 100万。
     *
     * 默认值：PL1。
     *
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description 单位GB。
     *
     * This parameter is required.
     *
     * @example 60
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
     * @return SystemDisk
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
