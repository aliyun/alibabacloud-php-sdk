<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class SkuSpec extends Model
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
     * @example 天蓝色
     *
     * @var string
     */
    public $value;

    /**
     * @example 1000
     *
     * @var int
     */
    public $valueId;
    protected $_name = [
        'key'     => 'key',
        'keyId'   => 'keyId',
        'value'   => 'value',
        'valueId' => 'valueId',
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
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->valueId) {
            $res['valueId'] = $this->valueId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SkuSpec
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
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['valueId'])) {
            $model->valueId = $map['valueId'];
        }

        return $model;
    }
}
