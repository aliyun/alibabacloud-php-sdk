<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ConfirmDisburseCmd extends Model
{
    /**
     * @var string
     */
    public $disputeId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $purchaseOrderId;
    protected $_name = [
        'disputeId' => 'disputeId',
        'orderId' => 'orderId',
        'purchaseOrderId' => 'purchaseOrderId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disputeId) {
            $res['disputeId'] = $this->disputeId;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }

        if (null !== $this->purchaseOrderId) {
            $res['purchaseOrderId'] = $this->purchaseOrderId;
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
        if (isset($map['disputeId'])) {
            $model->disputeId = $map['disputeId'];
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        if (isset($map['purchaseOrderId'])) {
            $model->purchaseOrderId = $map['purchaseOrderId'];
        }

        return $model;
    }
}
