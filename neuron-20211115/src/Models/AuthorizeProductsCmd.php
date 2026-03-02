<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class AuthorizeProductsCmd extends Model
{
    /**
     * @var int
     */
    public $companyId;

    /**
     * @var int[]
     */
    public $productIds;
    protected $_name = [
        'companyId' => 'companyId',
        'productIds' => 'productIds',
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
        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->productIds) {
            if (\is_array($this->productIds)) {
                $res['productIds'] = [];
                $n1 = 0;
                foreach ($this->productIds as $item1) {
                    $res['productIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['productIds'])) {
            if (!empty($map['productIds'])) {
                $model->productIds = [];
                $n1 = 0;
                foreach ($map['productIds'] as $item1) {
                    $model->productIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
