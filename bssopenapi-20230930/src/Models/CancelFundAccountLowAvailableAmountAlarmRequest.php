<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CancelFundAccountLowAvailableAmountAlarmRequest extends Model
{
    /**
     * @example 123321123
     *
     * @var int
     */
    public $fundAccountId;
    protected $_name = [
        'fundAccountId' => 'FundAccountId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fundAccountId) {
            $res['FundAccountId'] = $this->fundAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelFundAccountLowAvailableAmountAlarmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FundAccountId'])) {
            $model->fundAccountId = $map['FundAccountId'];
        }

        return $model;
    }
}
