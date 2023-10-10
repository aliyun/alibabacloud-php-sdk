<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainBlockResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example pYogqb9v
     *
     * @var string
     */
    public $antChainId;

    /**
     * @example aeec5963f8deeeae820aaf302f0c925db9fa8d07b9898dac782335f817554e47
     *
     * @var string
     */
    public $blockHash;

    /**
     * @example 1562851727742
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1234
     *
     * @var int
     */
    public $height;

    /**
     * @example e11767c7b9d92563663a76f10c69e8354788001e2c9e6bd9267239a81d3bb523
     *
     * @var string
     */
    public $previousHash;

    /**
     * @example 0000000000000000000000000000000000000000000000000000000000000000
     *
     * @var string
     */
    public $rootTxHash;

    /**
     * @example []
     *
     * @var string
     */
    public $transSummaryList;

    /**
     * @example 0
     *
     * @var int
     */
    public $transactionSize;

    /**
     * @example 2
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'antChainId'       => 'AntChainId',
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
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
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
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
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
