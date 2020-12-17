<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DataDisks extends Model
{
    /**
     * @description 数据盘类型。取值cloud,cloud-ssd等
     *
     * @var string
     */
    public $category;

    /**
     * @description 数据盘大小。最小值40，单位：GiB
     *
     * @var int
     */
    public $size;

    /**
     * @description 是否对数据盘加密。默认值：false。
     *
     * @var bool
     */
    public $encrypted;
    protected $_name = [
        'category'  => 'category',
        'size'      => 'size',
        'encrypted' => 'encrypted',
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
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->encrypted) {
            $res['encrypted'] = $this->encrypted;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataDisks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['encrypted'])) {
            $model->encrypted = $map['encrypted'];
        }

        return $model;
    }
}
