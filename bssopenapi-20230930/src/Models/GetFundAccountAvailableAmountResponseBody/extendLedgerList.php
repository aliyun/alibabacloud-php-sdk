<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountAvailableAmountResponseBody;

use AlibabaCloud\Dara\Model;

class extendLedgerList extends Model
{
    /**
     * @var string
     */
    public $currency;
    /**
     * @var string
     */
    public $ledgerName;
    /**
     * @var string
     */
    public $originalAmount;
    protected $_name = [
        'currency'       => 'Currency',
        'ledgerName'     => 'LedgerName',
        'originalAmount' => 'OriginalAmount',
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

        if (null !== $this->ledgerName) {
            $res['LedgerName'] = $this->ledgerName;
        }

        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
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

        if (isset($map['LedgerName'])) {
            $model->ledgerName = $map['LedgerName'];
        }

        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }

        return $model;
    }
}
