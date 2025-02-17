<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ProductSpec extends Model
{
    /**
     * @var string
     */
    public $key;
    /**
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
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->keyId) {
            $res['keyId'] = $this->keyId;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['values'] = [];
                $n1            = 0;
                foreach ($this->values as $item1) {
                    $res['values'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1            = 0;
                foreach ($map['values'] as $item1) {
                    $model->values[$n1++] = ProductSpecValue::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
