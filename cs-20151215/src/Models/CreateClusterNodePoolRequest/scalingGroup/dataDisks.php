<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\scalingGroup;

use AlibabaCloud\Tea\Model;

class dataDisks extends Model
{
    /**
     * @description 数据盘类型。
     *
     * @var string
     */
    public $category;

    /**
     * @description 数据盘是否加密。
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description 数据盘大小。
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'category'  => 'category',
        'encrypted' => 'encrypted',
        'size'      => 'size',
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
        if (isset($map['encrypted'])) {
            $model->encrypted = $map['encrypted'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
