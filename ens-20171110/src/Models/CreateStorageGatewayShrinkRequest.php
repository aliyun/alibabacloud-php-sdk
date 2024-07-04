<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateStorageGatewayShrinkRequest extends Model
{
    /**
     * @description The array of orders.
     *
     * This parameter is required.
     * @var string
     */
    public $orderDetailsShrink;
    protected $_name = [
        'orderDetailsShrink' => 'OrderDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderDetailsShrink) {
            $res['OrderDetails'] = $this->orderDetailsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStorageGatewayShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderDetails'])) {
            $model->orderDetailsShrink = $map['OrderDetails'];
        }

        return $model;
    }
}
