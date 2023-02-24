<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoRemainResponseBody;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoRemainResponseBody\secretRemainDTO\remainDTOList;
use AlibabaCloud\Tea\Model;

class secretRemainDTO extends Model
{
    /**
     * @example 0
     *
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
        'amount'        => 'Amount',
        'city'          => 'City',
        'remainDTOList' => 'RemainDTOList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->remainDTOList) {
            $res['RemainDTOList'] = null !== $this->remainDTOList ? $this->remainDTOList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secretRemainDTO
     */
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
