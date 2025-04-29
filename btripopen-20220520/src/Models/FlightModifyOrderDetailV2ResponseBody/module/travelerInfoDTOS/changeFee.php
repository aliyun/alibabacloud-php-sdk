<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOrderDetailV2ResponseBody\module\travelerInfoDTOS;

use AlibabaCloud\Dara\Model;

class changeFee extends Model
{
    /**
     * @var int
     */
    public $changeFee;

    /**
     * @var int
     */
    public $serviceFee;

    /**
     * @var int
     */
    public $upgradePrice;
    protected $_name = [
        'changeFee' => 'change_fee',
        'serviceFee' => 'service_fee',
        'upgradePrice' => 'upgrade_price',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeFee) {
            $res['change_fee'] = $this->changeFee;
        }

        if (null !== $this->serviceFee) {
            $res['service_fee'] = $this->serviceFee;
        }

        if (null !== $this->upgradePrice) {
            $res['upgrade_price'] = $this->upgradePrice;
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
        if (isset($map['change_fee'])) {
            $model->changeFee = $map['change_fee'];
        }

        if (isset($map['service_fee'])) {
            $model->serviceFee = $map['service_fee'];
        }

        if (isset($map['upgrade_price'])) {
            $model->upgradePrice = $map['upgrade_price'];
        }

        return $model;
    }
}
