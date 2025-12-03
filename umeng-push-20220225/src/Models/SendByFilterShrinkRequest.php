<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Dara\Model;

class SendByFilterShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $androidPayloadShrink;

    /**
     * @var AndroidShortPayload
     */
    public $androidShortPayload;

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
    public $filter;

    /**
     * @var string
     */
    public $harmonyPayloadShrink;

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

    /**
     * @var string
     */
    public $thirdPartyId;

    /**
     * @var string
     */
    public $callbackParams;
    protected $_name = [
        'androidPayloadShrink' => 'AndroidPayload',
        'androidShortPayload' => 'AndroidShortPayload',
        'channelPropertiesShrink' => 'ChannelProperties',
        'description' => 'Description',
        'filter' => 'Filter',
        'harmonyPayloadShrink' => 'HarmonyPayload',
        'iosPayloadShrink' => 'IosPayload',
        'policyShrink' => 'Policy',
        'productionMode' => 'ProductionMode',
        'receiptType' => 'ReceiptType',
        'receiptUrl' => 'ReceiptUrl',
        'thirdPartyId' => 'ThirdPartyId',
        'callbackParams' => 'callbackParams',
    ];

    public function validate()
    {
        if (null !== $this->androidShortPayload) {
            $this->androidShortPayload->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->androidPayloadShrink) {
            $res['AndroidPayload'] = $this->androidPayloadShrink;
        }

        if (null !== $this->androidShortPayload) {
            $res['AndroidShortPayload'] = null !== $this->androidShortPayload ? $this->androidShortPayload->toArray($noStream) : $this->androidShortPayload;
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

        if (null !== $this->harmonyPayloadShrink) {
            $res['HarmonyPayload'] = $this->harmonyPayloadShrink;
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

        if (null !== $this->thirdPartyId) {
            $res['ThirdPartyId'] = $this->thirdPartyId;
        }

        if (null !== $this->callbackParams) {
            $res['callbackParams'] = $this->callbackParams;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidPayload'])) {
            $model->androidPayloadShrink = $map['AndroidPayload'];
        }

        if (isset($map['AndroidShortPayload'])) {
            $model->androidShortPayload = AndroidShortPayload::fromMap($map['AndroidShortPayload']);
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

        if (isset($map['HarmonyPayload'])) {
            $model->harmonyPayloadShrink = $map['HarmonyPayload'];
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

        if (isset($map['ThirdPartyId'])) {
            $model->thirdPartyId = $map['ThirdPartyId'];
        }

        if (isset($map['callbackParams'])) {
            $model->callbackParams = $map['callbackParams'];
        }

        return $model;
    }
}
