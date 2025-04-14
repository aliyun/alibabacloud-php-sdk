<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoRemainResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoRemainResponseBody\secretRemainDTO\remainDTOList;

class secretRemainDTO extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $city;

    /**
     * @var remainDTOList
     */
    public $remainDTOList;
    protected $_name = [
        'amount' => 'Amount',
        'city' => 'City',
        'remainDTOList' => 'RemainDTOList',
    ];

    public function validate()
    {
        if (null !== $this->remainDTOList) {
            $this->remainDTOList->validate();
        }
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

        if (null !== $this->remainDTOList) {
            $res['RemainDTOList'] = null !== $this->remainDTOList ? $this->remainDTOList->toArray($noStream) : $this->remainDTOList;
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

        if (isset($map['RemainDTOList'])) {
            $model->remainDTOList = remainDTOList::fromMap($map['RemainDTOList']);
        }

        return $model;
    }
}
