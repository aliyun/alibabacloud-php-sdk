<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponseBody\officeSites;

use AlibabaCloud\Dara\Model;

class resourceAmounts extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'amount' => 'amount',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
