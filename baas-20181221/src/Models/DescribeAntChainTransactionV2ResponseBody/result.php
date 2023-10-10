<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionV2ResponseBody;

use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionV2ResponseBody\result\transaction;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1168bc5dd0b78d15446b15ea5a7f7822a7d07c007dd3a50becf98da220fc08f6
     *
     * @var string
     */
    public $blockHash;

    /**
     * @example 100
     *
     * @var int
     */
    public $blockHeight;

    /**
     * @example 10
     *
     * @var string
     */
    public $blockVersion;

    /**
     * @example 1563954336850
     *
     * @var int
     */
    public $createTime;

    /**
     * @example b3b0d2db83d3e670449d1e2a39d1d13b7e0e6080b0f9c6945f79eca68d1dd2ca
     *
     * @var string
     */
    public $hash;

    /**
     * @var transaction
     */
    public $transaction;
    protected $_name = [
        'blockHash'    => 'BlockHash',
        'blockHeight'  => 'BlockHeight',
        'blockVersion' => 'BlockVersion',
        'createTime'   => 'CreateTime',
        'hash'         => 'Hash',
        'transaction'  => 'Transaction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockHash) {
            $res['BlockHash'] = $this->blockHash;
        }
        if (null !== $this->blockHeight) {
            $res['BlockHeight'] = $this->blockHeight;
        }
        if (null !== $this->blockVersion) {
            $res['BlockVersion'] = $this->blockVersion;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->hash) {
            $res['Hash'] = $this->hash;
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
        if (isset($map['BlockHash'])) {
            $model->blockHash = $map['BlockHash'];
        }
        if (isset($map['BlockHeight'])) {
            $model->blockHeight = $map['BlockHeight'];
        }
        if (isset($map['BlockVersion'])) {
            $model->blockVersion = $map['BlockVersion'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Hash'])) {
            $model->hash = $map['Hash'];
        }
        if (isset($map['Transaction'])) {
            $model->transaction = transaction::fromMap($map['Transaction']);
        }

        return $model;
    }
}
