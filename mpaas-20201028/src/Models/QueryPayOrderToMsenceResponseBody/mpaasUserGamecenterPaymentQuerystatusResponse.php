<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryPayOrderToMsenceResponseBody;

use AlibabaCloud\Dara\Model;

class mpaasUserGamecenterPaymentQuerystatusResponse extends Model
{
    /**
     * @var string
     */
    public $orderStatus;
    protected $_name = [
        'orderStatus' => 'OrderStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
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
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }

        return $model;
    }
}
