<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class GetFundAccountCanRecycleAmountRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example 122321223
     *
     * @var string
     */
    public $recycleFromFundAccountId;
    protected $_name = [
        'currency' => 'Currency',
        'recycleFromFundAccountId' => 'RecycleFromFundAccountId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetFundAccountCanRecycleAmountRequest
     */
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
