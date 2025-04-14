<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoRemainResponseBody\secretRemainDTO\remainDTOList;

use AlibabaCloud\Dara\Model;

class remainDTO extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $city;
    protected $_name = [
        'amount' => 'Amount',
        'city' => 'City',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        return $model;
    }
}
