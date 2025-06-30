<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderPayResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $actualPayPrice;

    /**
     * @var int
     */
    public $payStatus;
    protected $_name = [
        'actualPayPrice' => 'actual_pay_price',
        'payStatus' => 'pay_status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualPayPrice) {
            $res['actual_pay_price'] = $this->actualPayPrice;
        }

        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
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
        if (isset($map['actual_pay_price'])) {
            $model->actualPayPrice = $map['actual_pay_price'];
        }

        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }

        return $model;
    }
}
