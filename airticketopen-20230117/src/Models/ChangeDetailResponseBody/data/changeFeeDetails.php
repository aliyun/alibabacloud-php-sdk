<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailResponseBody\data;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailResponseBody\data\changeFeeDetails\changeFee;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeDetailResponseBody\data\changeFeeDetails\passenger;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeFee) {
            $res['change_fee'] = null !== $this->changeFee ? $this->changeFee->toMap() : null;
        }
        if (null !== $this->passenger) {
            $res['passenger'] = null !== $this->passenger ? $this->passenger->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeFeeDetails
     */
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
