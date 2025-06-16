<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_\changeFeeDetails\changeFee;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailListOfOrderNumResponseBody\data\list_\changeFeeDetails\passenger;

class changeFeeDetails extends Model
{
    /**
     * @var changeFee
     */
    public $changeFee;

    /**
     * @var passenger
     */
    public $passenger;
    protected $_name = [
        'changeFee' => 'change_fee',
        'passenger' => 'passenger',
    ];

    public function validate()
    {
        if (null !== $this->changeFee) {
            $this->changeFee->validate();
        }
        if (null !== $this->passenger) {
            $this->passenger->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeFee) {
            $res['change_fee'] = null !== $this->changeFee ? $this->changeFee->toArray($noStream) : $this->changeFee;
        }

        if (null !== $this->passenger) {
            $res['passenger'] = null !== $this->passenger ? $this->passenger->toArray($noStream) : $this->passenger;
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
            $model->changeFee = changeFee::fromMap($map['change_fee']);
        }

        if (isset($map['passenger'])) {
            $model->passenger = passenger::fromMap($map['passenger']);
        }

        return $model;
    }
}
