<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ChangeProductSpecsOrderRequest\order;
use AlibabaCloud\Tea\Model;

class ChangeProductSpecsOrderRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var order[]
     */
    public $order;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'productId'     => 'ProductId',
        'order'         => 'Order',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->order) {
            $res['Order'] = [];
            if (null !== $this->order && \is_array($this->order)) {
                $n = 0;
                foreach ($this->order as $item) {
                    $res['Order'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeProductSpecsOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Order'])) {
            if (!empty($map['Order'])) {
                $model->order = [];
                $n            = 0;
                foreach ($map['Order'] as $item) {
                    $model->order[$n++] = null !== $item ? order::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
