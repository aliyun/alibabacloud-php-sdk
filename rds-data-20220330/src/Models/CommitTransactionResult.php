<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class CommitTransactionResult extends Model
{
    /**
     * @var string
     */
    public $transactionStatus;
    protected $_name = [
        'transactionStatus' => 'TransactionStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transactionStatus) {
            $res['TransactionStatus'] = $this->transactionStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CommitTransactionResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TransactionStatus'])) {
            $model->transactionStatus = $map['TransactionStatus'];
        }

        return $model;
    }
}
