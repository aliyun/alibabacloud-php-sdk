<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20150801\Models;

use AlibabaCloud\Tea\Model;

class CreateTransactionRequest extends Model
{
    /**
     * @var int
     */
    public $scriptId;

    /**
     * @var string
     */
    public $transactionName;
    protected $_name = [
        'scriptId'        => 'ScriptId',
        'transactionName' => 'TransactionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->transactionName) {
            $res['TransactionName'] = $this->transactionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTransactionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['TransactionName'])) {
            $model->transactionName = $map['TransactionName'];
        }

        return $model;
    }
}
