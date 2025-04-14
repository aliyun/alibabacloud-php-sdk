<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class SetFundAccountLowAvailableAmountAlarmRequest extends Model
{
    /**
     * @var int
     */
    public $fundAccountId;

    /**
     * @var string
     */
    public $thresholdAmount;
    protected $_name = [
        'fundAccountId' => 'FundAccountId',
        'thresholdAmount' => 'ThresholdAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fundAccountId) {
            $res['FundAccountId'] = $this->fundAccountId;
        }

        if (null !== $this->thresholdAmount) {
            $res['ThresholdAmount'] = $this->thresholdAmount;
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
        if (isset($map['FundAccountId'])) {
            $model->fundAccountId = $map['FundAccountId'];
        }

        if (isset($map['ThresholdAmount'])) {
            $model->thresholdAmount = $map['ThresholdAmount'];
        }

        return $model;
    }
}
