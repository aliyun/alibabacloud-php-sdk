<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainLatestBlocksV2ResponseBody;

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
    public $bizData;

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
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $transactionSize;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'alias'           => 'Alias',
        'bizData'         => 'BizData',
        'blockHash'       => 'BlockHash',
        'createTime'      => 'CreateTime',
        'height'          => 'Height',
        'previousHash'    => 'PreviousHash',
        'rootTxHash'      => 'RootTxHash',
        'size'            => 'Size',
        'transactionSize' => 'TransactionSize',
        'version'         => 'Version',
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
        if (null !== $this->bizData) {
            $res['BizData'] = $this->bizData;
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
        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['BizData'])) {
            $model->bizData = $map['BizData'];
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
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
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
