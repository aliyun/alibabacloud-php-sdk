<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservationDemandCommittedAmountResponseBody;

use AlibabaCloud\Tea\Model;

class committedAmountInfo extends Model
{
    /**
     * @var float
     */
    public $committedAmount;

    /**
     * @var string
     */
    public $currency;
    protected $_name = [
        'committedAmount' => 'CommittedAmount',
        'currency'        => 'Currency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->committedAmount) {
            $res['CommittedAmount'] = $this->committedAmount;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return committedAmountInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommittedAmount'])) {
            $model->committedAmount = $map['CommittedAmount'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        return $model;
    }
}
