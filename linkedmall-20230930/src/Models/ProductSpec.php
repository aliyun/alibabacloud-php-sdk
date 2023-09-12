<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ProductSpec extends Model
{
    /**
     * @example 颜色分类
     *
     * @var string
     */
    public $key;

    /**
     * @example 1000
     *
     * @var int
     */
    public $keyId;

    /**
     * @var ProductSpecValue[]
     */
    public $values;
    protected $_name = [
        'key'    => 'key',
        'keyId'  => 'keyId',
        'values' => 'values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->keyId) {
            $res['keyId'] = $this->keyId;
        }
        if (null !== $this->values) {
            $res['values'] = [];
            if (null !== $this->values && \is_array($this->values)) {
                $n = 0;
                foreach ($this->values as $item) {
                    $res['values'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProductSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['keyId'])) {
            $model->keyId = $map['keyId'];
        }
        if (isset($map['values'])) {
            if (!empty($map['values'])) {
                $model->values = [];
                $n             = 0;
                foreach ($map['values'] as $item) {
                    $model->values[$n++] = null !== $item ? ProductSpecValue::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
