<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest;

use AlibabaCloud\Tea\Model;

class workerDataDisks extends Model
{
    /**
     * @description 集群Worker节点数据盘类型
     *
     * @var string
     */
    public $category;

    /**
     * @description 集群Worker节点数据盘是否加密
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description 集群Worker节点数据盘磁盘性能等级，仅对ESSD磁盘生效
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description 集群Worker节点数据盘大小
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
