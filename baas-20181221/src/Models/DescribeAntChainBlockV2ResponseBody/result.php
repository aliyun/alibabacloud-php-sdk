<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainBlockV2ResponseBody;

use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainBlockV2ResponseBody\result\transSummaryList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 8bd720bde18c4b37b0f4a1c7834db163
     *
     * @var string
     */
    public $antChainId;

    /**
     * @example 5abf96debc87f1b64dcbaf4fa57fd46f2a06acdb5de0ba91ef9718d81aebafc7
     *
     * @var string
     */
    public $blockHash;

    /**
     * @example 1609223363570
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 254761
     *
     * @var int
     */
    public $height;

    /**
     * @example 2444ef0617e0c6845549dead70f118c5a58f03c04575ecb79e283ab5c34b491d
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
     * @var transSummaryList[]
     */
    public $transSummaryList;

    /**
     * @example 1
     *
     * @var int
     */
    public $transactionSize;

    /**
     * @example 1
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
            $res['TransSummaryList'] = [];
            if (null !== $this->transSummaryList && \is_array($this->transSummaryList)) {
                $n = 0;
                foreach ($this->transSummaryList as $item) {
                    $res['TransSummaryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['TransSummaryList'])) {
                $model->transSummaryList = [];
                $n                       = 0;
                foreach ($map['TransSummaryList'] as $item) {
                    $model->transSummaryList[$n++] = null !== $item ? transSummaryList::fromMap($item) : $item;
                }
            }
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
