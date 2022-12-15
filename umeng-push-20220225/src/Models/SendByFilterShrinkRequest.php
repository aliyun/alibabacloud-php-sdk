<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Tea\Model;

class SendByFilterShrinkRequest extends Model
{
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
     * @example "where":{"and":[{"or":[{"app_version":">=1.0"}]}]}
     *
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $iosPayloadShrink;

    /**
     * @var string
     */
    public $policyShrink;

    /**
     * @example true
     *
     * @var bool
     */
    public $productionMode;

    /**
     * @var int
     */
    public $receiptType;

    /**
     * @example https://msg.umeng.com/upush/receipt
     *
     * @var string
     */
    public $receiptUrl;
    protected $_name = [
        'androidPayloadShrink'    => 'AndroidPayload',
        'channelPropertiesShrink' => 'ChannelProperties',
        'description'             => 'Description',
        'filter'                  => 'Filter',
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
        if (null !== $this->androidPayloadShrink) {
            $res['AndroidPayload'] = $this->androidPayloadShrink;
        }
        if (null !== $this->channelPropertiesShrink) {
            $res['ChannelProperties'] = $this->channelPropertiesShrink;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
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
     * @return SendByFilterShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidPayload'])) {
            $model->androidPayloadShrink = $map['AndroidPayload'];
        }
        if (isset($map['ChannelProperties'])) {
            $model->channelPropertiesShrink = $map['ChannelProperties'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
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
