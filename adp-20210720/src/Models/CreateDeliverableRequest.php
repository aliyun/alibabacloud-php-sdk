<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\CreateDeliverableRequest\foundation;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateDeliverableRequest\products;
use AlibabaCloud\Tea\Model;

class CreateDeliverableRequest extends Model
{
    /**
     * @var foundation
     */
    public $foundation;

    /**
     * @var products[]
     */
    public $products;
    protected $_name = [
        'foundation' => 'foundation',
        'products'   => 'products',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->foundation) {
            $res['foundation'] = null !== $this->foundation ? $this->foundation->toMap() : null;
        }
        if (null !== $this->products) {
            $res['products'] = [];
            if (null !== $this->products && \is_array($this->products)) {
                $n = 0;
                foreach ($this->products as $item) {
                    $res['products'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeliverableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['foundation'])) {
            $model->foundation = foundation::fromMap($map['foundation']);
        }
        if (isset($map['products'])) {
            if (!empty($map['products'])) {
                $model->products = [];
                $n               = 0;
                foreach ($map['products'] as $item) {
                    $model->products[$n++] = null !== $item ? products::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
