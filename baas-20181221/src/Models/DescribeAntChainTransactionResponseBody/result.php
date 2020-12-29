<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionResponseBody;

use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionResponseBody\result\transaction;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $hash;

    /**
     * @var string
     */
    public $blockVersion;

    /**
     * @var int
     */
    public $blockHeight;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $blockHash;

    /**
     * @var transaction
     */
    public $transaction;
    protected $_name = [
        'hash'         => 'Hash',
        'blockVersion' => 'BlockVersion',
        'blockHeight'  => 'BlockHeight',
        'createTime'   => 'CreateTime',
        'blockHash'    => 'BlockHash',
        'transaction'  => 'Transaction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hash) {
            $res['Hash'] = $this->hash;
        }
        if (null !== $this->blockVersion) {
            $res['BlockVersion'] = $this->blockVersion;
        }
        if (null !== $this->blockHeight) {
            $res['BlockHeight'] = $this->blockHeight;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->blockHash) {
            $res['BlockHash'] = $this->blockHash;
        }
        if (null !== $this->transaction) {
            $res['Transaction'] = null !== $this->transaction ? $this->transaction->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hash'])) {
            $model->hash = $map['Hash'];
        }
        if (isset($map['BlockVersion'])) {
            $model->blockVersion = $map['BlockVersion'];
        }
        if (isset($map['BlockHeight'])) {
            $model->blockHeight = $map['BlockHeight'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['BlockHash'])) {
            $model->blockHash = $map['BlockHash'];
        }
        if (isset($map['Transaction'])) {
            $model->transaction = transaction::fromMap($map['Transaction']);
        }

        return $model;
    }
}
