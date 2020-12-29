<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainBlockResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $previousHash;

    /**
     * @var int
     */
    public $version;

    /**
     * @var int
     */
    public $transactionSize;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $rootTxHash;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $blockHash;

    /**
     * @var string
     */
    public $antChainId;

    /**
     * @var string
     */
    public $transSummaryList;
    protected $_name = [
        'previousHash'     => 'PreviousHash',
        'version'          => 'Version',
        'transactionSize'  => 'TransactionSize',
        'createTime'       => 'CreateTime',
        'rootTxHash'       => 'RootTxHash',
        'height'           => 'Height',
        'blockHash'        => 'BlockHash',
        'antChainId'       => 'AntChainId',
        'transSummaryList' => 'TransSummaryList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->previousHash) {
            $res['PreviousHash'] = $this->previousHash;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->transactionSize) {
            $res['TransactionSize'] = $this->transactionSize;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->rootTxHash) {
            $res['RootTxHash'] = $this->rootTxHash;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->blockHash) {
            $res['BlockHash'] = $this->blockHash;
        }
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->transSummaryList) {
            $res['TransSummaryList'] = $this->transSummaryList;
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
        if (isset($map['PreviousHash'])) {
            $model->previousHash = $map['PreviousHash'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['TransactionSize'])) {
            $model->transactionSize = $map['TransactionSize'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RootTxHash'])) {
            $model->rootTxHash = $map['RootTxHash'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['BlockHash'])) {
            $model->blockHash = $map['BlockHash'];
        }
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['TransSummaryList'])) {
            $model->transSummaryList = $map['TransSummaryList'];
        }

        return $model;
    }
}
