<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class GetFundAccountCanRecycleAmountRequest extends Model
{
    /**
     * @var string
     */
    public $currency;
    /**
     * @var string
     */
    public $recycleFromFundAccountId;
    protected $_name = [
        'currency'                 => 'Currency',
        'recycleFromFundAccountId' => 'RecycleFromFundAccountId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->recycleFromFundAccountId) {
            $res['RecycleFromFundAccountId'] = $this->recycleFromFundAccountId;
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
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['RecycleFromFundAccountId'])) {
            $model->recycleFromFundAccountId = $map['RecycleFromFundAccountId'];
        }

        return $model;
    }
}
