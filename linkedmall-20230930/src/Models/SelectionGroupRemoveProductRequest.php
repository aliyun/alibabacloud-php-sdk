<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class SelectionGroupRemoveProductRequest extends Model
{
    /**
     * @var string[]
     */
    public $productIds;

    /**
     * @var string
     */
    public $purchaserId;
    protected $_name = [
        'productIds' => 'productIds',
        'purchaserId' => 'purchaserId',
    ];

    public function validate()
    {
        if (\is_array($this->productIds)) {
            Model::validateArray($this->productIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productIds) {
            if (\is_array($this->productIds)) {
                $res['productIds'] = [];
                $n1 = 0;
                foreach ($this->productIds as $item1) {
                    $res['productIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->purchaserId) {
            $res['purchaserId'] = $this->purchaserId;
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
        if (isset($map['productIds'])) {
            if (!empty($map['productIds'])) {
                $model->productIds = [];
                $n1 = 0;
                foreach ($map['productIds'] as $item1) {
                    $model->productIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['purchaserId'])) {
            $model->purchaserId = $map['purchaserId'];
        }

        return $model;
    }
}
