<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateDeliverableRequest\foundation;
use AlibabaCloud\SDK\Adp\V20210720\Models\UpdateDeliverableRequest\products;
use AlibabaCloud\Tea\Model;

class UpdateDeliverableRequest extends Model
{
    /**
     * @var foundation
     */
    public $foundation;

    /**
     * @var products[]
     */
    public $products;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'foundation' => 'foundation',
        'products'   => 'products',
        'status'     => 'status',
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
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDeliverableRequest
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
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
