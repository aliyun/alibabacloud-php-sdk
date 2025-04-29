<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\offlineRefundDetails;

use AlibabaCloud\Dara\Model;

class offlineRefundInfos extends Model
{
    /**
     * @var string
     */
    public $passengerId;

    /**
     * @var int
     */
    public $refundPrice;
    protected $_name = [
        'passengerId' => 'passenger_id',
        'refundPrice' => 'refund_price',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passengerId) {
            $res['passenger_id'] = $this->passengerId;
        }

        if (null !== $this->refundPrice) {
            $res['refund_price'] = $this->refundPrice;
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
        if (isset($map['passenger_id'])) {
            $model->passengerId = $map['passenger_id'];
        }

        if (isset($map['refund_price'])) {
            $model->refundPrice = $map['refund_price'];
        }

        return $model;
    }
}
