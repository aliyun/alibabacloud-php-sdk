<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class RollbackTransactionRequest extends Model
{
    /**
     * @var string
     */
    public $resourceArn;

    /**
     * @example acs:rds-api:cn-hangzhou:1266348003******:rds-db-credenti***\/mySecret-Uy****
     *
     * @var string
     */
    public $secretArn;

    /**
     * @example 8609****-94e1-45ce-8e25-354e3dd8****
     *
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'resourceArn'   => 'ResourceArn',
        'secretArn'     => 'SecretArn',
        'transactionId' => 'TransactionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }
        if (null !== $this->secretArn) {
            $res['SecretArn'] = $this->secretArn;
        }
        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RollbackTransactionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }
        if (isset($map['SecretArn'])) {
            $model->secretArn = $map['SecretArn'];
        }
        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }

        return $model;
    }
}
