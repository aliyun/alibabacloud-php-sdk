<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $blockHash;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $previousHash;

    /**
     * @var string
     */
    public $rootTxHash;

    /**
     * @var string
     */
    public $transSummaryList;

    /**
     * @var int
     */
    public $transactionSize;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'alias'            => 'Alias',
        'blockHash'        => 'BlockHash',
        'createTime'       => 'CreateTime',
        'height'           => 'Height',
        'previousHash'     => 'PreviousHash',
        'rootTxHash'       => 'RootTxHash',
        'transSummaryList' => 'TransSummaryList',
        'transactionSize'  => 'TransactionSize',
        'version'          => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->blockHash) {
            $res['BlockHash'] = $this->blockHash;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->previousHash) {
            $res['PreviousHash'] = $this->previousHash;
        }
        if (null !== $this->rootTxHash) {
            $res['RootTxHash'] = $this->rootTxHash;
        }
        if (null !== $this->transSummaryList) {
            $res['TransSummaryList'] = $this->transSummaryList;
        }
        if (null !== $this->transactionSize) {
            $res['TransactionSize'] = $this->transactionSize;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['BlockHash'])) {
            $model->blockHash = $map['BlockHash'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['PreviousHash'])) {
            $model->previousHash = $map['PreviousHash'];
        }
        if (isset($map['RootTxHash'])) {
            $model->rootTxHash = $map['RootTxHash'];
        }
        if (isset($map['TransSummaryList'])) {
            $model->transSummaryList = $map['TransSummaryList'];
        }
        if (isset($map['TransactionSize'])) {
            $model->transactionSize = $map['TransactionSize'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
