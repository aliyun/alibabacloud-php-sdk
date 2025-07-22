<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountAvailableAmountResponseBody;

use AlibabaCloud\Tea\Model;

class extendLedgerList extends Model
{
    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example 应付对冲账本
     *
     * @var string
     */
    public $ledgerName;

    /**
     * @example 50
     *
     * @var string
     */
    public $originalAmount;
    protected $_name = [
        'currency' => 'Currency',
        'ledgerName' => 'LedgerName',
        'originalAmount' => 'OriginalAmount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->ledgerName) {
            $res['LedgerName'] = $this->ledgerName;
        }
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendLedgerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['LedgerName'])) {
            $model->ledgerName = $map['LedgerName'];
        }
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }

        return $model;
    }
}
