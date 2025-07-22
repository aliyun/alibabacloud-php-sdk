<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class SetFundAccountLowAvailableAmountAlarmRequest extends Model
{
    /**
     * @example 12321213
     *
     * @var int
     */
    public $fundAccountId;

    /**
     * @example 100
     *
     * @var string
     */
    public $thresholdAmount;
    protected $_name = [
        'fundAccountId' => 'FundAccountId',
        'thresholdAmount' => 'ThresholdAmount',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SetFundAccountLowAvailableAmountAlarmRequest
     */
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
