<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Tea\Model;

class SendByAliasFileIdShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aliasType;

    /**
     * @var string
     */
    public $androidPayloadShrink;

    /**
     * @var string
     */
    public $channelPropertiesShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $iosPayloadShrink;

    /**
     * @var string
     */
    public $policyShrink;

    /**
     * @var bool
     */
    public $productionMode;

    /**
     * @var int
     */
    public $receiptType;

    /**
     * @var string
     */
    public $receiptUrl;
    protected $_name = [
        'aliasType'               => 'AliasType',
        'androidPayloadShrink'    => 'AndroidPayload',
        'channelPropertiesShrink' => 'ChannelProperties',
        'description'             => 'Description',
        'fileId'                  => 'FileId',
        'iosPayloadShrink'        => 'IosPayload',
        'policyShrink'            => 'Policy',
        'productionMode'          => 'ProductionMode',
        'receiptType'             => 'ReceiptType',
        'receiptUrl'              => 'ReceiptUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasType) {
            $res['AliasType'] = $this->aliasType;
        }
        if (null !== $this->androidPayloadShrink) {
            $res['AndroidPayload'] = $this->androidPayloadShrink;
        }
        if (null !== $this->channelPropertiesShrink) {
            $res['ChannelProperties'] = $this->channelPropertiesShrink;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->iosPayloadShrink) {
            $res['IosPayload'] = $this->iosPayloadShrink;
        }
        if (null !== $this->policyShrink) {
            $res['Policy'] = $this->policyShrink;
        }
        if (null !== $this->productionMode) {
            $res['ProductionMode'] = $this->productionMode;
        }
        if (null !== $this->receiptType) {
            $res['ReceiptType'] = $this->receiptType;
        }
        if (null !== $this->receiptUrl) {
            $res['ReceiptUrl'] = $this->receiptUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendByAliasFileIdShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasType'])) {
            $model->aliasType = $map['AliasType'];
        }
        if (isset($map['AndroidPayload'])) {
            $model->androidPayloadShrink = $map['AndroidPayload'];
        }
        if (isset($map['ChannelProperties'])) {
            $model->channelPropertiesShrink = $map['ChannelProperties'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['IosPayload'])) {
            $model->iosPayloadShrink = $map['IosPayload'];
        }
        if (isset($map['Policy'])) {
            $model->policyShrink = $map['Policy'];
        }
        if (isset($map['ProductionMode'])) {
            $model->productionMode = $map['ProductionMode'];
        }
        if (isset($map['ReceiptType'])) {
            $model->receiptType = $map['ReceiptType'];
        }
        if (isset($map['ReceiptUrl'])) {
            $model->receiptUrl = $map['ReceiptUrl'];
        }

        return $model;
    }
}
