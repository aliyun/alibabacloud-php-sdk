<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeTransactionFor2CBrowserResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeTransactionFor2CBrowserResponseBody\result\transactionV10;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $blockHash;

    /**
     * @var int
     */
    public $blockHeight;

    /**
     * @var int
     */
    public $blockVersion;

    /**
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentHash;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $hash;

    /**
     * @var string
     */
    public $keyName;

    /**
     * @var string
     */
    public $keyWrap;

    /**
     * @var string
     */
    public $nonce;

    /**
     * @var int
     */
    public $referenceCount;

    /**
     * @var string[]
     */
    public $referenceList;

    /**
     * @var string
     */
    public $transTypeV6;

    /**
     * @var transactionV10
     */
    public $transactionV10;
    protected $_name = [
        'blockHash'      => 'BlockHash',
        'blockHeight'    => 'BlockHeight',
        'blockVersion'   => 'BlockVersion',
        'category'       => 'Category',
        'content'        => 'Content',
        'contentHash'    => 'ContentHash',
        'createTime'     => 'CreateTime',
        'hash'           => 'Hash',
        'keyName'        => 'KeyName',
        'keyWrap'        => 'KeyWrap',
        'nonce'          => 'Nonce',
        'referenceCount' => 'ReferenceCount',
        'referenceList'  => 'ReferenceList',
        'transTypeV6'    => 'TransTypeV6',
        'transactionV10' => 'TransactionV10',
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
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentHash) {
            $res['ContentHash'] = $this->contentHash;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->hash) {
            $res['Hash'] = $this->hash;
        }
        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }
        if (null !== $this->keyWrap) {
            $res['KeyWrap'] = $this->keyWrap;
        }
        if (null !== $this->nonce) {
            $res['Nonce'] = $this->nonce;
        }
        if (null !== $this->referenceCount) {
            $res['ReferenceCount'] = $this->referenceCount;
        }
        if (null !== $this->referenceList) {
            $res['ReferenceList'] = $this->referenceList;
        }
        if (null !== $this->transTypeV6) {
            $res['TransTypeV6'] = $this->transTypeV6;
        }
        if (null !== $this->transactionV10) {
            $res['TransactionV10'] = null !== $this->transactionV10 ? $this->transactionV10->toMap() : null;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentHash'])) {
            $model->contentHash = $map['ContentHash'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Hash'])) {
            $model->hash = $map['Hash'];
        }
        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }
        if (isset($map['KeyWrap'])) {
            $model->keyWrap = $map['KeyWrap'];
        }
        if (isset($map['Nonce'])) {
            $model->nonce = $map['Nonce'];
        }
        if (isset($map['ReferenceCount'])) {
            $model->referenceCount = $map['ReferenceCount'];
        }
        if (isset($map['ReferenceList'])) {
            if (!empty($map['ReferenceList'])) {
                $model->referenceList = $map['ReferenceList'];
            }
        }
        if (isset($map['TransTypeV6'])) {
            $model->transTypeV6 = $map['TransTypeV6'];
        }
        if (isset($map['TransactionV10'])) {
            $model->transactionV10 = transactionV10::fromMap($map['TransactionV10']);
        }

        return $model;
    }
}
