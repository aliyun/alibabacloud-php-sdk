<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ConfirmDisburseCmd extends Model
{
    /**
     * @example 6692****5457
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 6692****5696
     *
     * @var string
     */
    public $purchaseOrderId;
    protected $_name = [
        'orderId'         => 'orderId',
        'purchaseOrderId' => 'purchaseOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }
        if (null !== $this->purchaseOrderId) {
            $res['purchaseOrderId'] = $this->purchaseOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfirmDisburseCmd
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }
        if (isset($map['purchaseOrderId'])) {
            $model->purchaseOrderId = $map['purchaseOrderId'];
        }

        return $model;
    }
}
