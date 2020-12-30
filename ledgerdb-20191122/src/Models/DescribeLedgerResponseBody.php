<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DescribeLedgerResponseBody\ledger;
use AlibabaCloud\Tea\Model;

class DescribeLedgerResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ledger
     */
    public $ledger;
    protected $_name = [
        'requestId' => 'RequestId',
        'ledger'    => 'Ledger',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ledger) {
            $res['Ledger'] = null !== $this->ledger ? $this->ledger->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLedgerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Ledger'])) {
            $model->ledger = ledger::fromMap($map['Ledger']);
        }

        return $model;
    }
}
