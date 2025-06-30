<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopConsultResponseBody\module\passengerJourneyGroupInfoList;

use AlibabaCloud\Dara\Model;

class passengerList extends Model
{
    /**
     * @var string
     */
    public $fullName;

    /**
     * @var int
     */
    public $passengerId;
    protected $_name = [
        'fullName' => 'full_name',
        'passengerId' => 'passenger_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fullName) {
            $res['full_name'] = $this->fullName;
        }

        if (null !== $this->passengerId) {
            $res['passenger_id'] = $this->passengerId;
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
        if (isset($map['full_name'])) {
            $model->fullName = $map['full_name'];
        }

        if (isset($map['passenger_id'])) {
            $model->passengerId = $map['passenger_id'];
        }

        return $model;
    }
}
