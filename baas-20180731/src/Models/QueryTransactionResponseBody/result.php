<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\QueryTransactionResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\QueryTransactionResponseBody\result\referenceList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
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
     * @var referenceList
     */
    public $referenceList;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
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
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
            $res['ReferenceList'] = null !== $this->referenceList ? $this->referenceList->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
            $model->referenceList = referenceList::fromMap($map['ReferenceList']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
